<?php

require("inc/essentials.php");

// logoute a la pagge login(index.php) de ladmin 
session_start();
session_destroy();
redirect('index.php');

?>