<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <h1 class="text-center mt-4">Bienvenid@ <?= htmlspecialchars($_SESSION['usuario']) ?></h1>
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>

