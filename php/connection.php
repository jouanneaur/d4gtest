<?php
	try 
	{
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_gr;charset=UTF8', 'root','');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
     echo "Connection failed: " . $e->getMessage();
    }
?>
