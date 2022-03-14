<<<<<<< HEAD
<?php
    include "config.php";
    include "userHandler.php";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $userHandler = new UserAdd();
            $userHandler->deleteusers($conn, $id); //:1:id:2:1-2
            header('Location: index.php');   
    }
=======
<?php
    include "config.php";
    include "userHandler.php";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $userHandler = new UserAdd();
            $userHandler->deleteusers($conn, $id); //:1:id:2:1-2
            header('Location: index.php');   
    }
>>>>>>> 785230eeb077d78d1044191710973bbad471a863
?>