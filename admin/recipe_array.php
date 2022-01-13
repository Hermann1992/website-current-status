<?php 
    echo "<script type='text/javascript'>
            
        var recipe_array = new Array();
        recipe_array[0] = 'undefiniert';

    </script>";

    include("../../nonpublic/DB_connection.php");
    
    $query = "SELECT recipeId, recipeName FROM recipe";

    if(mysqli_query($link, $query)){
        
            $result = mysqli_query($link, $query);    

            $row = mysqli_fetch_array($result);
            if ($row){
                
                echo " <script type='text/javascript'> recipe_array[".$row['recipeId']."] = '".$row['recipeName']."';</script>";
                
                while($row = mysqli_fetch_array($result)){
                    echo " <script type='text/javascript'> recipe_array[".$row['recipeId']."] = '".$row['recipeName']."';</script>";
                };
                
            }
            /* Ausgabe in der Console */
            echo "<script type='text/javascript'>console.log(recipe_array);</script>";
        
        } else {
            echo "Anfrage an DB fehlgeschlagen";
        }

//       $result = mysqli_query($link, $query);        
//       $row = mysqli_fetch_array($result);
//       print_r($result);
// echo '<script type="text/JavaScript"> alert("Ausgabetext im PopUp"); </script>';
?>

