<?php
        /* This defines all of data needed to connect to the server and database */
        define("SERVER", "mysql.cs.orst.edu");
        define("USER", "cs275_atkinspa"); //change these, these are mine
        define("PASSWORD", "3519");
        define("NAME", "cs275_atkinspa");

        /* connecting to the database */
        $link = mysqli_connect(SERVER, USER, PASSWORD)
          or die ("Unable to connect to server please try later <br> \n");

        mysqli_select_db($link, NAME)
        or die ("Unable to select database " . NAME . "<br>\n");

        /* to connect to the database add: <?php require_once("commonconnect.php") ?> to the top of your code. */

?>
