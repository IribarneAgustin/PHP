<?php

require_once("Config/Autoload.php");

use Models\Item as Item;


$array = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
pintura fluor 1L, pintura warner fluo, 400.00, 3,
plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
pincel común 1/2, pincel fabber cerda común para tempera, 120.00, 5,
rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2,
kit de acuarelas, combo de acuarelas color pastel, 770.00, 2 ";


$compra = array();
$compra = explode(',', $array);

$itemList = array();
/*
echo "<pre>";

print_r($compra);
echo "</pre>";
*/
while (!empty($compra)) {


     $item = new Item();
     $item->setName(array_shift($compra));
     $item->setDescription(array_shift($compra));
     $item->setPrice(array_shift($compra));
     $item->setQuantity(array_shift($compra));

     array_push($itemList, $item);
}
/*
echo "<pre>";

var_dump($itemList);
echo "</pre>";
*/
?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                         <?php $totalParcial=0; 
                         foreach($itemList as $key => $value) { ?>
                         <tr>

                              <td> <?php echo $value->getName(); ?> </td>
                              <td> <?php echo $value->getDescription(); ?> </td>
                              <td> <?php echo $value->getPrice(); ?> </td>
                              <td> <?php echo $value->getQuantity(); ?> </td>
                              <?php $subTotal = $value->total(); ?> 
                              <td> <?php echo $subTotal;?></td>
                              <?php $totalParcial = $totalParcial + $subTotal;}?>

                         </tr>


                    </tbody>
               </table>
          </div>
     </section>
     <?php
          if(isset($_POST['button'])){
          
               $total = $totalParcial;

          }


     ?>

     <section id="eliminar">
          <div class="container">

               <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="total">TOTAL</label>
                         <input type="text" value="<?php if(isset($total)){echo $total;} ?>" name='total' class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
                 
                    
               </form>
          </div>
     </section>

</main>