<h2 style="text-align: center; margin-bottom: 80px; color: brown;">
    <?php 
    //  setcookie('token', "fdsfdsf", time() + 3600);
    print_r($_COOKIE);
    // echo $_COOKIE['token']; 
    ?>
</h2>
<?php

include "autoLoad.php";

app :: startApp();