<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>search</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../dist/css/flat-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/search.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="page">
            <div class="row demo-row">
              <div class="col-xs-12">
                <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                      <span class="sr-only">Toggle navigation</span>
                    </button>
                      <a class="navbar-brand" href="search.php">ICD</a>
                  </div>
                  <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="logout.php">Logout<span class="navbar-unread">1</span></a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action <b class="caret"></b></a>
                        <span class="dropdown-arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="add_pubulication.php">add</a></li>
                          <li><a href="#">delete</a></li>
                          <li><a href="modifier.php">modifier</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                      <li><a href="#fakelink">About Us</a></li>
                     </ul>
                 <select class="form-control select select-primary" id="type-select" data-toggle="select">
                  <option value="0"  selected>All</option>
                  <option value="1">authors</option>
                  <option value="2">groupes</option>
                  <option value="3">titre</option>
                  <option value="4">program</option>
                </select>
                     <form class="navbar-form navbar-right" action="#" role="search">
                      <div class="form-group">
                        <div class="input-group">
                          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                          <span class="input-group-btn">
                            <button type="submit" class="btn"><span class="fui-search"></span></button>
                          </span>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.navbar-collapse -->
                </nav><!-- /navbar -->
              </div>
            </div> <!-- /row -->      
            <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tire par categorie <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="search.php">All</a></li>              
              <li role="separator" class="divider"></li>
              <li><a href="search.php?categorie=1">Article dans des Revues Internationales(RI)</a></li>
              <li><a href="search.php?categorie=2">Article dans des Conférences Internationales(CI)</a></li>
              <li><a href="search.php?categorie=3">Article dans des Revues Françaises(RF)</a></li>              
              <li><a href="search.php?categorie=4">Article dans des Conférences Françaises(CF)</a></li>
              <li><a href="search.php?categorie=5">Ouvrages Scientifiques</a></li>
              <li><a href="search.php?categorie=6">Thèse de Doctorat</a></li>
              <li><a href="search.php?categorie=7">Brevet</a></li>
              <li><a href="search.php?categorie=8">Autre Production</a></li>
            </ul>
          </div>
            
            <p id="demo"></p>
            <p id="test"></p>
            <!--  traiter xml en utilisant js
            
            <script>
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    affiche(xhttp);
                }
            };
            xhttp.open("POST", "pubilication.xml", true);
            xhttp.send();
            function affiche(xml) {
                var x, i, xmlDoc, div;
                xmlDoc = xml.responseXML;
                div = ""; 
                x = xmlDoc.getElementsByTagName("pubilication");
                for (i = 0 ; i <x.length; i++) {
                    var y,j,auteurs;
                    auteurs="";
                    reference="";
                    affiliation="";
                    y=x[i].getElementsByTagName("auteur");
                    for(j=0;j<y.length;j++){
                        auteurs+=y[j].childNodes[0].nodeValue+",";
                    }
                    div+="<div class='valuesbox'>"+
                            "<div class='row'><p>"+auteurs+"</p></div>"+
                                    "<div class='row'>"+
                            "<a href='#'>"+x[i].getElementsByTagName("titre")[0].childNodes[0].nodeValue+"</a></div>"+         
                            "<div class='row'><p>"+x[i].getElementsByTagName("in")[0].childNodes[0].nodeValue+" "+
                            "<span>"+x[i].getElementsByTagName("volume")[0].childNodes[0].nodeValue;
                    
                            if(x[i].getElementsByTagName("numero").length>0){
                                div+="("+x[i].getElementsByTagName("numero")[0].childNodes[0].nodeValue+")";
                            }
                            div+="</span>,"+x[i].getElementsByTagName("page")[0].childNodes[0].nodeValue+"</p></div>"+
                            "<div class='row'><p>";
                            if(x[i].getElementsByTagName("editeur").length>0){
                                div+=x[i].getElementsByTagName("editeur")[0].childNodes[0].nodeValue+",";
                            }
                            div+=x[i].getElementsByTagName("annee")[0].childNodes[0].nodeValue+".</p></div>"
                            ;
                            
                            div+="</div>";
                }
                document.getElementById("demo").innerHTML = div;
            }
            </script>
            -->
        
        <?php
        // traiter xml en utilisant simplexml
        if(isset($_GET['categorie'])){
            affiche_attrib('categorie', $_GET['categorie']);
        }else
        {
            echo("<h4 class='pageheader'>Peer-reviewed journal articles indexed in international databases</h4>");
            affiche_all();
        }
        function affiche_attrib($attrib_num,$attrib_val){
            $xml=  simplexml_load_file('pubilication.xml');
            printf("<h4 class='pageheader'>%s</h4>",$xml->pubilication->$attrib_num);
                foreach ($xml->pubilication as $pub ){
                $categorie=$pub->$attrib_num->attributes();
                if($categorie==$attrib_val)
                    {
                        
                        $list_auteur='';
                        $url=$pub->url;
                        $titre=$pub->titre;
                        $in=$pub->in;
                        $volumes=$pub->volume;
                        $numero=$pub->numero;
                        $pages=$pub->page;
                        $editeur=$pub->editeur;
                        $year=$pub->annee;
                        foreach ($pub->auteurlist->auteur as $auteur) {
                            $list_auteur=$list_auteur . $auteur.",";
                        }
                        echo("<div class='valuesbox'>\n");
                        echo("<div class='row'>");
                        echo("<p>$list_auteur</p>");
                        echo("</div>\n");

                        echo("<div class='row'>");
                        echo("<a href='$url'>$titre</a>\n");
                        echo("</div>\n");

                        echo("<div class='row'>");
                        echo("<p>$in,<span>$volumes($numero)</span>,$pages</p>\n");
                        echo("</div>\n");

                        echo("<div class='row'>");
                        echo("<p>$editeur,$year</p>");
                        echo("</div>\n");

                        echo("<div class='row'>");
                        echo("</div>\n");

                        echo("</div>\n");

                }
            }
            
            
        }
        
        function affiche_all(){
                $xml=simplexml_load_file('pubilication.xml');
                foreach ($xml->pubilication as $pub ){
                $list_auteur='';
                $url=$pub->url;
                $titre=$pub->titre;
                $in=$pub->in;
                $volumes=$pub->volume;
                $numero=$pub->numero;
                $pages=$pub->page;
                $editeur=$pub->editeur;
                $year=$pub->annee;
                foreach ($pub->auteurlist->auteur as $auteur) {
                    $list_auteur=$list_auteur . $auteur.",";
                }
                echo("<div class='valuesbox'>\n");
                echo("<div class='row'>");
                echo("<p>$list_auteur</p>");
                echo("</div>\n");
                
                echo("<div class='row'>");
                echo("<a href='$url'>$titre</a>\n");
                echo("</div>\n");
                
                echo("<div class='row'>");
                echo("<p>$in,<span>$volumes($numero)</span>,$pages</p>\n");
                echo("</div>\n");
                
                echo("<div class='row'>");
                echo("<p>$editeur,$year</p>");
                echo("</div>\n");
                
                echo("<div class='row'>");
                echo("</div>\n");
                
                echo("</div>\n");
            }
        }
        
        
        
        
       
        ?>
            
            
            
        </div>
        <script src="../js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="../dist/js/flat-ui.min.js" type="text/javascript"></script>
    </body>
</html>
