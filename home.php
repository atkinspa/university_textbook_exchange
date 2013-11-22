<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<?php require_once("commonconnect.php") ?>
<HTML>
<HEAD>
<TITLE>Login Page</TITLE>
</HEAD>
<BODY>
<h1> WELCOME </h1>
<?php

        $Email = $_REQUEST["email"];
        $Password = $_REQUEST["password"];

        //Should probably be a prepared statement but num_rows fuction was not working correctly for some reason.
        $check = "SELECT * FROM Users WHERE Email ='" . $Email . "' AND Password='" . $Password . "'";
        //$result = $mysql_query($check);
        /*
        if(TRUE) {
                echo "<p>Hello " . $Email . "</p>;
        } else {
                echo "<p>Failed to login</p>";
        }*/
        echo $Email . "<br></br>";
        echo $Password;
?>

</BODY>
</HTML>
