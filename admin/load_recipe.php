<?php
    echo "Ausgabe aus load_recipe.php. calling ID:".$_POST['b'];

    include("../../nonpublic/DB_connection.php");

    $query = "SELECT shortDescription FROM recipe WHERE recipeId = ".mysqli_real_escape_string($link, $_POST['b']);

    if(mysqli_query($link, $query)){
        
            $result = mysqli_query($link, $query);    
            $row = mysqli_fetch_array($result);
        
        echo "\n Short Description: \n".$row['shortDescription'];
        
        } else {
            echo "Anfrage an DB fehlgeschlagen";
        }
?>