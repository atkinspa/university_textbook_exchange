<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<?php require_once("commonconnect.php") ?>

<?php
        //$email = $_REQUEST["email"];
        //$password = $_REQUEST["password"];

        //Should probably be a prepared statement but num_rows fuction was not working correctly for some reason.
        $query = "SELECT * FROM Users WHERE email ='" . $username . "' AND password='" . $password . "'";

?>
<?php
        /*
        $query = "select * from Card";
        if (isset($_REQUEST['type'])) {
                $type = $_REQUEST['type'];
                if($type != 'All') {
                        $query .= ",$type WHERE Card.name = $type.name";
                }
        }
        $result = mysqli_query($link, $query); */

?>
<HTML>
<HEAD>
<TITLE>Login Page</TITLE>
</HEAD>
<BODY>
<h1>Login Page</h1>
        <form action="home.php" method="post">
                Email
                <input type="text" name="email" />
                <br />
                Password
                <input type="text" name="password" />
                <br />
                <input type="submit" value="login" />
        </form>
</BODY>
</HTML>
