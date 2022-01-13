<?php

    $error = "";
    $successMassage = "";

?>

<?php include("header_admin_area.php"); ?>
    
  <body>
    <div class="container">
      
        <h1>Admin-Bereich</h1>
        <h2>Eingabe und Änderung von Rezepten</h2>
    
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle recipe_buttons" type="button" id="dropdown_recipe" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="dropdown_recipe">
        Rezept wählen 
        <span class="caret"></span>
      </button>
      <ol class="dropdown-menu" aria-labelledby="dropdown_recipe">
        <li class="dropdown-header"> Rezeptname (ID) </li>
        <li class="li_recipe"> <a href="#"> Pfannkuchen (0) </a> </li>
        <li class="li_recipe"> <a href="#"> Pizza (x) </a> </li>
        <?php include("recipe_dropdown_list.php"); ?>
        <li class="li_recipe"> <a href="javascript:test(42);"> Test (42) </a> </li>
      </ol>

      <button type="button" id="button_new_recipe" class="btn btn-info recipe_buttons"> <b>Neu</b></button>
    </div>

    <div>
        <button type="button" id="button_load_recipe" class="btn btn-warning recipe_buttons"> <b> Laden</b></button>
        <button type="button" id="button_del_recipe" class="btn btn-danger recipe_buttons"> <b> Löschen</b></button>
        <button type="button" id="button_save_recipe" class="btn btn-success recipe_buttons"> <b> Speichern</b></button>
    </div>
                  
        
    <!-- php-inline-Code ins div einfügen -->
    <div id="error">  <? echo $error;
                         echo $successMassage; ?>  </div>
          
          
      <form method="post" id="form_general">
          <div class="form-group">
            <label for="recipe_name">Rezept Bezeichnung:</label>
            <input name="recipe_name" type="text" class="form-control" id="recipe_name" placeholder="--Rezeptname--">
          </div>

          <div class="form-group">
            <label for="recipe_short_des">Kurzbeschreibung</label>
            <textarea name="recipe_short_des" class="form-control" id="recipe_short_des" rows="4"></textarea>
          </div>

          <div class="form-group">
            <label for="recipe_long_des">Vollständige Beschreibung</label>
            <textarea name="recipe_long_des" class="form-control" id="recipe_long_des" rows="10"></textarea>
          </div>

          <button type="submit" id="submit" class="btn btn-primary">Abschicken</button>
    </form>
      
      
    </div>  <!-- container -->
      
    <?php include("recipe_array.php"); ?>
      
    <script type="text/javascript">
        
        function test(ID) {
            alert ("inline onclick function \n Aufrufende ID: "+ID);
        }
        
        var active_recipe = "";
        var active_id = 0;
        
        // recipe dropdown list
        $(".li_recipe").click(function(){  
            active_recipe = $(this).text();
            active_id = active_recipe.match(/\d/g);    // regex search global for digits
            active_id = active_id.join("");
            alert("Aktives Rezept: " + active_recipe + "\n ID: " + active_id);
            $("#dropdown_recipe").html(active_recipe); // Text noch zu lang
        });
        
        // begin recipe_buttons
        // Neu
        $("#button_new_recipe").click(function(){
                
            alert("Button 'Neu' wurde angeklickt!");
            // finde höchste ID im recipe_array, addiere 1, Eintrag in Rezeptbez.-edit
                
        });
        // Laden
        $("#button_load_recipe").click(function(){
            
            var ajax_ans = "";
            
            if(active_recipe != ""){
                // alert("Button 'Laden' wurde angeklickt!");
                $("#recipe_name").val("Magiiiiieee!");
                
                // entspricht: load_recipe.php?a=Irgendein Text&b=[Inhalt von active_id]
                ajax_ans = $.ajax({
                    method: "POST", // "type" in alten Versionen
                    async: false,   // Warten, bis php-Skript vollständig ausgeführt
                    url: "load_recipe.php",
                    data: ({
                        a: "Irgendein Text",
                        b: active_id
                    })
                }).responseText; // get the response data as a string
                alert(ajax_ans);
                
            }else{
                alert("Kein Rezept ausgewählt");
            }    
            
                
        });
        // Speichern
        $("#button_save_recipe").click(function(){
                
            alert("Button 'Speichern' wurde angeklickt!");
                
        });
        
        
        // end recipe_buttons
        
      
        $("form").submit(function(event){
            
            
            event.preventDefault();
            
            var error = "";
            
            if($("#recipe_name").val()==""){
                error += " <p> Kein Rezeptname. Bitte trage was ein </p>";
            }
            if($("#recipe_short_des").val()==""){
                error += " <p> Die Kurzbeschreibung ist leer. Bitte trage was ein </p>";
            }
            if($("#recipe_long_des").val()==""){
                error += "<p> Die Beschreibung ist leer. Bitte trage was ein </p>";
            }
            if(error!=""){
                $("#error").html('<div class="alert alert-danger" role="alert"> <p> <b>Es gab Fehler in deinem Formular: </b> </p>' + error + '</div>');
            }else {
                // unbind('submit') verhindert preventDefault()-Funktion beim erneuten Aufruf der submit-Funktion;
                $("form").unbind('submit').submit();
            }
            
        });
      
      </script>

      
  </body>
</html>