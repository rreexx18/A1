<?php 
    // pilla el nombre del formulario para insentarlo despues en un string
?>
<h1>Please input your name</h1>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="button" value="Submit name">
</form>

<?php
    echo "Hello ".$_POST['name'];
    // en realidad funciona bien es facil verlo pero al estar en un include dentro de una pagina
    // que tambien usa metodo post hay conflicto si lo abriera en una ventana separada si va
?>
