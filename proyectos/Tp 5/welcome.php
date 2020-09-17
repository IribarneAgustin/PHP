<?php

use Modles\User as User;

require_once("Config/autoload.php");
include('header.php');


session_start();

if(isset($_SESSION['usrLoged'])){
    $usrLoged = $_SESSION['usrLoged'];

?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4">WELCOME</h2>
            <table class="table bg-light-alpha">
                <thead>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $usrLoged->getUserName(); ?></td>
                        <td><?php echo $usrLoged->getPass(); ?></td>
                        <td><?php echo $usrLoged->getFirstName(); ?></td>
                        <td><?php echo $usrLoged->getLastName(); ?></td>
                        <td><?php echo $usrLoged->getEmail(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
     </section>
     
</main>
<?php include("add.php");?>
<?php }else{ header("location:index.php");}

?>

<?php include('footer.php'); ?>
