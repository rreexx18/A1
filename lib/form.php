<?php

    $dircount = scandir("pages/");
    
    $count = "1";
            

?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="exercises">
    <?php foreach($dircount as $dir){
        $test = strpos($dir,'.');
        if( !is_dir($dir) ){ ?>
            <label><input type="radio" name="nav" value="<?= $dir ?>"> Activitat <?= $count ?> </label>
        <?php 
            $count++;
        }
        
    } ?>
    </div>
    <div><br><input type="submit" name="button" value="Envia"></div>
</form>

<br>
<hr>
<br>

<div class="exercise">
    <?php
        if(isset($_POST['nav'])&&!empty($_POST['nav'])){
            include 'pages/'.$_POST['nav'];
        }
    ?>
</div>