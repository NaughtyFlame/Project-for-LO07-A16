<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>modifier</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../dist/css/flat-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/search.css" rel="stylesheet" type="text/css"/>
        <link href="../jqueryConfirm/dist/jquery-confirm.min.css" rel="stylesheet" type="text/css"/>
    
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
        <?php
        session_start();  
        affiche_tag('upload', $_SESSION['email']);
        function affiche_tag($tag_nom,$tag_val){
            $xml=  simplexml_load_file('pubilication.xml');
                foreach ($xml->pubilication as $pub ){
                $forsearch=$pub->$tag_nom;
                if($forsearch==$tag_val)
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
                        $id=$pub->attributes();
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
                        echo("<form method='get' action='delete.php'>");
                        echo("<input name='no_pub' type='hidden' value='$id'>");
                        echo("<button id='delete' class='btn btn-danger btn-md btn-del'>delete</button>");
                        echo("</form>");
                        echo("<button class='btn btn-danger btn-md'>modifier</button>");
                        echo("</div>\n");

                        echo("</div>\n");

                }
            }           
            
        }
        ?>
    </body>
    
    <script src="../jqueryConfirm/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="../jqueryConfirm/dist/jquery-confirm.min.js" type="text/javascript"></script>
    <script>
        /*
        var main= function(){
            $('.btn-del').confirm({
            title: 'Delete!',
            content: 'Are your sure to delete this pubilication?',
            confirm: function(){
                $.alert('This pubikication has been deleted.');
            },
            cancel: function(){
                
            }
            });
        }
        $(document).ready(main);*/
    </script>
</html>
