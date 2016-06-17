<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Pubilication</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../dist/css/flat-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/add_pubilication.css" rel="stylesheet" type="text/css"/>
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
                      <li><a href="#fakelink">Logout<span class="navbar-unread">1</span></a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action <b class="caret"></b></a>
                        <span class="dropdown-arrow"></span>
                        <ul class="dropdown-menu">
                          <li><a href="#">add</a></li>
                          <li><a href="#">delete</a></li>
                          <li><a href="#">Something else here</a></li>
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
            
            
        <?php
            session_start();  
            if(isset($_GET['titre'])){
                action();
            }  else {
                form();
            }
            function action(){
                $xml=  simplexml_load_file('pubilication.xml');
                $add=$xml->addChild("pubilication");
                $add_auteur=$add->addChild('auteurlist');
                add_to_xml($add_auteur, 'auteur1','auteur');
                add_to_xml($add_auteur, 'auteur2','auteur');
                add_to_xml($add_auteur, 'auteur3','auteur');
                add_to_xml($add_auteur, 'auteur4','auteur');
                add_to_xml($add_auteur, 'auteur5','auteur');
                add_to_xml($add,'titre','titre');
                add_to_xml($add,'in','in');
                add_to_xml($add,'volume','volume');
                add_to_xml($add,'page','page');
                add_to_xml($add,'editeur','editeur');
                add_to_xml($add,'url','url');
                add_to_xml($add,'annee','annee');
                if(isset($_GET['categorie'])){
                    switch ($_GET['categorie']){
                        case 1:$attrib=$add->addChild('categorie', 'Article dans des Revues Internationales(RI)');
                                $attrib->addAttribute('nocategorie', '1');
                                                        break;
                        case 2:$attrib=$add->addChild('categorie', 'Article dans des Conférences Internationales(CI)');
                                $attrib->addAttribute('nocategorie', '2');
                                                        break;
                        case 3:$attrib=$add->addChild('categorie', 'Article dans des Revues Françaises(RF)');
                                $attrib->addAttribute('nocategorie', '3');
                                                        break;
                        case 4:$attrib=$add->addChild('categorie', 'Article dans des Conférences Françaises(CF)');
                               $attrib->addAttribute('nocategorie', '4');
                                                        break;
                        case 5:$attrib=$add->addChild('categorie', 'Ouvrages Scientifiques');
                                $attrib->addAttribute('nocategorie', '5');
                                                        break;
                        case 6:$attrib=$attrib=$add->addChild('categorie', 'Thèse de Doctorat');
                                $attrib->addAttribute('nocategorie', '6');
                                                        break;
                        case 7:$attrib=$add->addChild('categorie', 'Brevet');
                                $attrib->addAttribute('nocategorie', '7');
                                                        break;
                        case 8:$attrib=$add->addChild('categorie', 'Autre Production');
                                $attrib->addAttribute('nocategorie', '8');
                                                        break;
                                      
                        
                    }
                }
                if(isset($_SESSION['email'])){
                    $add->addChild('upload',$_SESSION['email']);
                }
                $xml->asXML('pubilication.xml');
                header("location:search.php");
            }
        
            function add_to_xml($add,$name,$tag){
                if(isset($_GET[$name])){
                    if($_GET[$name]!=''){
                        $add->addChild($tag,$_GET[$name]);
                    }                
                }
            }
            function form(){
                function form_input_text($label,$name,$holder){
                    echo("<div id='typein' class='row'>\n");
                    echo("<div class='col-md-2 col-md-push-1'>\n");
                    echo("<label>$label</label>\n");
                    echo("</div>\n");
                    echo("<div class='col-md-6 col-md-push-1'>\n");
                    echo("<input type='text' name='$name' placeholder='$holder' class='form-control'>\n");
                    echo("</div>\n");
                    echo("</div>");
                }
                echo("<form method='get' action='add_pubulication.php'>\n");
                echo("<div class='row row-input'>");
                    echo("<div class='col-md-6'>");
                    /*echo("<div id='typein' class='row'>\n");
                    echo("<div class='col-md-6 col-md-push-1'>\n");

                     echo("</div>\n");
                     echo("</div>\n");*/
                    form_input_text('titre','titre','titre');
                    form_input_text('in', 'in', 'in');
                    form_input_text('Volume','volume' ,'Volume' );
                    form_input_text('Pages','page','Pages' );
                    form_input_text('editeur','editeur' ,'editeur' );
                    form_input_text('url','url' ,'url' );
                    form_input_text('Year','annee' ,'Year' );
                    
                    //catagorie
                    echo("<div id='typein' class='row'>\n");
                    echo("<div class='col-md-2 col-md-push-1'>\n");
                    echo("<label for='categorie'>categorie</label>");
                    echo("</div>\n");                    
                    echo("<div class='col-md-6 col-md-push-1'>\n");
                    echo("<select name='categorie'>");
                    echo("<option value='1'>Article dans des Revues Internationales(RI)</option>");
                    echo("<option value='2'>Article dans des Conférences Internationales(CI)</option>");
                    echo("<option value='3'>Article dans des Revues Françaises(RF)</option>");
                    echo("<option value='4'>Article dans des Conférences Françaises(CF)</option>");                    
                    echo("<option value='5'>Ouvrages Scientifiques</option>");
                    echo("<option value='6'>Thèse de Doctorat</option>");
                    echo("<option value='7'>Brevet</option>");
                    echo("<option value='8'>Autre Production</option>");
                    echo("</select>");
                    echo("</div>\n");
                    echo("</div>");
                    
                    echo("</div>");
                    echo("<div class='col-md-6'>");
                    echo("<label>nombre d'auteur</label>\n");
                    echo("<select id='select-auteur'>");
                    echo("<option id='auteur0' value='0'  selected>0</option>");
                    echo("<option id='auteur1' value='1' >1</option>");            
                    echo("<option id='auteur2' value='2' >2</option>");
                    echo("<option id='auteur3' value='3'>3</option>");
                    echo("<option id='auteur4' value='4'>4</option>");
                    echo("<option id='auteur5' value='5'>5</option>");
                    echo("</select><br>");
                        echo("<div id='input-auteur'>");

                        echo("</div>");
                    echo("</div>");
                echo("</div>");
                printf("<div class='row demo-row'>"
                        ."<div class='col-md-2 col-md-push-4'>"
                        . "<input type='submit' class='btn btn-block btn-lg btn-inverse' id='btn' Value='submit'>"
                        . "</div>"
                        ."<div class='col-md-2 col-md-push-4'>"
                        . "<input type='reset' class='btn btn-block btn-lg btn-inverse' id='btn' Value='reset'>"
                        . "</div>"
                        . "</div>");
                echo("</form>\n");
            }
        ?>
        <script src="../js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="../dist/js/flat-ui.min.js" type="text/javascript"></script>
        <script src="../js/add_pubulication.js" type="text/javascript"></script>
        </div>
    </body>
</html>
