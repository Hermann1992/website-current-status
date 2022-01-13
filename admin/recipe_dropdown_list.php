<?php 

    include("../../nonpublic/DB_connection.php");
    
    $query = "SELECT recipeId, recipeName FROM recipe";

    if(mysqli_query($link, $query)){
        
            $result = mysqli_query($link, $query);    

            $row = mysqli_fetch_array($result);
            if ($row){
                
                /* echo "<li> <a href='javascript:test(".$row['recipeId'].");'>".$row['recipeName']." (".$row['recipeId'].") </a> </li>"; */
                echo "<li class='li_recipe'> <a href='#'>".$row['recipeName']." (".$row['recipeId'].") </a> </li>";
                
                while($row = mysqli_fetch_array($result)){
                    echo "<li class='li_recipe'> <a href='#'>".$row['recipeName']." (".$row['recipeId'].") </a> </li>";
                };
                
            } else {
                echo "<li> <a href='#' > - leer - </a> </li>";
            }
        
        } else {
            echo "Anfrage an DB fehlgeschlagen";
        }

//       $result = mysqli_query($link, $query);        
//       $row = mysqli_fetch_array($result);
//       print_r($result);
// echo '<script type="text/JavaScript"> alert("Ausgabetext im PopUp"); </script>';
?>

