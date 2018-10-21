<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try {
			$db = new PDO("mysql:host=localhost;dbname=training", "root","andrei");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			var_dump($e);
		}
        //echo "Hello"
        try{
            $query=$db->prepare("select nume,prenume from angajati");
            $query->execute();
            $result= $query->fetchAll(PDO::FETCH_ASSOC);

            //echo $result
            echo '<pre>';
            var_dump($result[0]); //afiseaza si tipul variabilei
            echo '</pre>';

            echo($result[0]["nume"]); //afiseaza variabila fara tipul ei
        }catch(PDOException $e){


        }
        ?>
    </body>
</html>
