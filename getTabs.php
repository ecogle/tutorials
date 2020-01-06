<?php

$servername = "localhost";
$username= "tutorials";
$password = "rikerman";


try{
    $conn = new PDO("mysql:host=$servername;dbname=tutorials;port=3307", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id,code,name FROM languages;";
    $result = $conn->query($sql);
    $ul = "";
    //$di = "";
        // output data of each row
        while($row = $result->fetch()) {
            $ul .= "\t\t\t<li><a href=\"#". strtolower($row["code"]) ."\">". $row["name"] ."</a></li>\n";
            //$di .= "<div id=\"".strtolower($row["code"])."\">". file_get_contents("java.php")."</div>";
        }
        echo "<ul>";
        echo $ul;
        echo "</ul>";

        //echo $di;

    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }


