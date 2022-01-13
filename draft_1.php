<?php include("header_draft_1.php"); ?>

  <body>
        
        <div class="container-fluid">
            <div class="row">
                <div id="top" class="col-sm-12" >
                    <p> Ben's Rezeptbuch</p>
                    <p id="veganLogo"> <img src="images/draft_1/Vegan_logo.png"> </p>
                </div>
            </div>
        </div>
      
          <nav class="navbar navbar-default navbar-inverse">
          <div class="container-fluid">
            <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Navigation ein-/ausblenden</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Titel</a>
            </div>

            <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(aktuell)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menü <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Aktion</a></li>
                    <li><a href="#">Andere Aktion</a></li>
                    <li><a href="#">Irgendwas anderes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Abgetrennter Link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Noch ein abgetrennter Link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Suchen">
                </div>
                <button type="submit" class="btn btn-default">Los</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li style="font-size:150%"><a href="https://www.voll-eule.de/admin/admin_area.php" target="_blank" >Admin-Bereich</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menü <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Aktion</a></li>
                    <li><a href="#">Andere Aktion</a></li>
                    <li><a href="#">Irgendwas anderes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Abgetrennter Link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
      
      
      <div class="blackback container-fluid">   <!-- oder nur: class="container"-->
            <div class="row">
                <div class="rezept picContainer col-xs-12 col-sm-6" >
                    <img src="images/draft_1/Lasagne_2.jpg" class="img-responsive">
                </div>
                <div id="rezept_text_lasagne" class="rezept col-xs-12 col-sm-6" >
                    <h1> Lasagne </h1>
                    <h5> von <a href="https://www.youtube.com/watch?v=-ZEgrOERWxY&t=1s" target="_blank"> Krosses Tofutier </a> </h5>
                    <p> Vegane Lasagne mit Bechamel- und Bolognesefüllung <br>
                        Das absolute Lieblingsgericht von Garfield <br>
                        Dieses Rezept reicht für 4 mittelmäßig-gefräßige Menschen. </p>
                </div>
            </div>
          
            <div class="row">
                <div id="rezept_zutaten_lasagne" class="rezept rezeptListe col-xs-12" >
                    <h1> Zutaten
                        <button type="button" id="zutatenAufklappenButtonLasagne" class="btn btn-default" aria-label="aufklappen">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                        </button>
                        
                    </h1>
                            <table id="rezeptTableLasagne" class="table table-responsive rezeptTable">
                                <!-- <thead> erzeugt Table-Head -->
                                <thead>
                                    <tr>
                                        <!-- <th> erzeugt Table-Header, dickgedruckt -->
                                        <th>Menge</th>
                                        <th>Zutat</th>
                                    </tr>
                                </thead>

                                <!-- <tbody> erzeugt Table-Body -->
                                <tbody>

                                    <!-- <tr> erzeugt Table-Row -->
                                    <tr>
                                        <td>18</td>
                                        <!-- <td> erzeugt Table-Data innerhalb der <tr> -->
                                        <td>Nudelplatten</td>
                                    <tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>
                                    <tr>
                                        <td>300ml</td>
                                        <td>kochendes Wasser</td>            
                                    </tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>
                                    <tr>
                                        <td>125g</td>
                                        <td>Sojageschnetzeltes (trocken)</td>            
                                    </tr>

                                </tbody>
            
                            </table>
                </div>
            </div>
        </div>
      
      <div class="blackback container-fluid">
            <div class="row">
                <div class="rezept picContainer col-xs-12 col-sm-6" >
                    <img src="images/draft_1/VollkornWraps.jpg" class="img-responsive">
                </div>
                <div id="rezept_text_wrap" class="rezept col-xs-12 col-sm-6" >
                    <h1> Vollkorn Wraps </h1>
                    <h5> von <a href="https://vollwert-blog.de/vollkorn-wraps/" target="_blank"> Vollwert-Blog </a> </h5>
                    <p> Vollwertige pflanzenbasierte Wraps <br>
                        Anleitung nur für den Fladen <br>
                        Dieses Rezept reicht für 3 Wrap-Fladen. </p>
                </div>
            </div>
          
            <div class="row">
                <div class="rezept rezeptListe col-xs-12" >
                    <h1> Zutaten
                        <button type="button" id="zutatenAufklappenButtonWrap" class="btn btn-default" aria-label="aufklappen">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                        </button>
                        
                    </h1>
                            <table id="rezeptTableWrap" class="table table-responsive rezeptTable">
                                <!-- <thead> erzeugt Table-Head -->
                                <thead>
                                    <tr>
                                        <!-- <th> erzeugt Table-Header, dickgedruckt -->
                                        <th>Menge</th>
                                        <th>Zutat</th>
                                    </tr>
                                </thead>

                                <!-- <tbody> erzeugt Table-Body -->
                                <tbody>

                                    <!-- <tr> erzeugt Table-Row -->
                                    <tr>
                                        <td>300g</td>
                                        <!-- <td> erzeugt Table-Data innerhalb der <tr> -->
                                        <td>Vollkorn-Dinkelmehl</td>
                                    <tr>
                                    <tr>
                                        <td>100ml</td>
                                        <td>Wasser</td>            
                                    </tr>
                                    <tr>
                                        <td>1 Prise</td>
                                        <td>Salz</td>            
                                    </tr>
                                    <tr>
                                        <td>10g</td>
                                        <td>Olivenöl(nativ extra)</td>            
                                    </tr>
                                    <tr>
                                        <td>1 Stk.</td>
                                        <td>rote Paprika</td>            
                                    </tr>
                                    <tr>
                                        <td>1/2 </td>
                                        <td>Gurke</td>            
                                    </tr>
                                    <tr>
                                        <td>einige</td>
                                        <td>Salatblätter</td>            
                                    </tr>
                                    <tr>
                                        <td>200g</td>
                                        <td>Schwarzaugenbohnen</td>            
                                    </tr>
                                    <tr>
                                        <td>3 Stk.</td>
                                        <td>Tomaten</td>            
                                    </tr>

                                </tbody>
            
                            </table>
                </div>
            </div>
        </div>
      
      
<!-- Burger: -------------------------------------------------------------->
      <div class="blackback container-fluid">
            <div class="row">
                <div class="rezept picContainer col-xs-12 col-sm-6" >
                    <img src="images/draft_1/Burger1.jpg" class="img-responsive">
                </div>
                <div id="rezept_text_burger" class="rezept col-xs-12 col-sm-6" >
                    <h1> Vollwertige Burger </h1>
                    <h5> von <a href="http://www.voll-eule.de" target="_blank"> Ben Ader </a> </h5>
                    <p> Vollwertige pflanzenbasierte Burger <br>
                        Anleitung nur für den Patties und Buns <br>
                        Dieses Rezept reicht für 6 Burger. </p>
                </div>
            </div>
          
            <div class="row">
                <div class="rezept rezeptListe col-xs-12" >
                    <h1> Zutaten
                        <button type="button" id="zutatenAufklappenButtonBurger" class="btn btn-default" aria-label="aufklappen">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                        </button>
                        
                    </h1>
                            <table id="rezeptTableBurger" class="table table-responsive rezeptTable">
                                <!-- <thead> erzeugt Table-Head -->
                                <thead>
                                    <tr>
                                        <!-- <th> erzeugt Table-Header, dickgedruckt -->
                                        <th>Menge</th>
                                        <th>Zutat</th>
                                    </tr>
                                </thead>

                                <!-- <tbody> erzeugt Table-Body -->
                                <tbody>

                                    <!-- <tr> erzeugt Table-Row -->
                                    <tr>
                                        <td>150g</td>
                                        <!-- <td> erzeugt Table-Data innerhalb der <tr> -->
                                        <td>Vollkorn-Dinkelmehl</td>
                                    <tr>
                                    <tr>
                                        <td>150g</td>
                                        <!-- <td> erzeugt Table-Data innerhalb der <tr> -->
                                        <td>Dinkelmehl Typ630</td>
                                    <tr>
                                    <tr>
                                        <td>166ml</td>
                                        <td>warmes Wasser</td>            
                                    </tr>
                                    <tr>
                                        <td>1/2 Würfel</td>
                                        <td>frische Hefe</td>            
                                    </tr>
                                    <tr>
                                        <td>15g</td>
                                        <td>Olivenöl(nativ extra)</td>            
                                    </tr>
                                    <tr>
                                        <td>1 Prise.</td>
                                        <td>Jodsalz</td>            
                                    </tr>
                                    <tr>
                                        <td>1 TL </td>
                                        <td>Kurkuma</td>            
                                    </tr>
                                    <tr>
                                        <td>400g</td>
                                        <td>Kidneybohnen</td>            
                                    </tr>
                                    <tr>
                                        <td>3 Stk.</td>
                                        <td>Zwiebeln</td>            
                                    </tr>

                                </tbody>
            
                            </table>
                </div>
            </div>
        </div>
      
<?php include("Lorem_ipsum.php"); ?>

      <script type="text/javascript">
          
        document.getElementById("zutatenAufklappenButtonLasagne").onclick = function(){
              
            var dispStatus = document.getElementById("rezeptTableLasagne").style.display;
            if ( dispStatus =="" || dispStatus =="none"){ 
                document.getElementById("rezeptTableLasagne").style.display = "table";
            }else if ( dispStatus == "table"){
                document.getElementById("rezeptTableLasagne").style.display = "none";        
            }             
        };
          
        document.getElementById("zutatenAufklappenButtonWrap").onclick = function(){
              
            dispStatus = document.getElementById("rezeptTableWrap").style.display;
            if ( dispStatus =="" || dispStatus =="none"){ 
                document.getElementById("rezeptTableWrap").style.display = "table";
            }else if ( dispStatus == "table"){
                document.getElementById("rezeptTableWrap").style.display = "none";        
            }            
        };
          
        document.getElementById("zutatenAufklappenButtonBurger").onclick = function(){
              
            dispStatus = document.getElementById("rezeptTableBurger").style.display;
            if ( dispStatus =="" || dispStatus =="none"){ 
                document.getElementById("rezeptTableBurger").style.display = "table";
            }else if ( dispStatus == "table"){
                document.getElementById("rezeptTableBurger").style.display = "none";        
            }            
        };
          
        // statt einzeln aufrufen -> Aufruf durch Klasse und übergabe an function          
          
      </script>   
      
      
  </body>
    
    
</html>