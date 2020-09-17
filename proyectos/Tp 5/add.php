<?php
//require_once("Process/addBeer.php");
include('header.php');
require_once("../Config/autoload.php");
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar cervezas</h2>

               <form class="bg-light-alpha p-5" method="POST" action="Process/addBeer.php">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="name">Nombre</label>
                                   <input type="Text" name="name" value="" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="code">Código</label>
                                   <input type="number" name="code" value="" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="description">Descripcion</label>
                                   <input type="text" name="description" value="" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label for="type">Tipo</label>
                                   <input type="text" name="type" value="" class="form-control">
                              </div>
                         </div>
                         
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
