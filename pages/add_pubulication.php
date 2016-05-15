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
            function form_input_text($label,$name,$holder){
                echo("<div id='typein' class='row'>\n");
                echo("<div class='col-md-1 col-md-push-1'>\n");
                echo("<label>$label</label>\n");
                echo("</div>\n");
                echo("<div class='col-md-6 col-md-push-1'>\n");
                echo("<input type='text' name='$name' placeholder='$holder' class='form-control'>\n");
                echo("</div>\n");
                echo("</div>");
            }
            echo("<form method='get' action='#'>\n");
            form_input_text('titre','titre','titre');
            form_input_text('in', 'in', 'in');
            form_input_text('Volume','volume' ,'Volume' );
            form_input_text('Pages','pages','Pages' );
            form_input_text('Publisher','publisher' ,'Publisher' );
            form_input_text('url','url' ,'url' );
            form_input_text('Year','year' ,'Year' );
            printf("<div class='row demo-row'>"
                    ."<div class='col-md-2 col-md-push-1'>"
                    . "<input type='submit' class='btn btn-block btn-lg btn-inverse' id='btn' Value='submit'>"
                    . "</div>"
                    ."<div class='col-md-2 col-md-push-1'>"
                    . "<input type='reset' class='btn btn-block btn-lg btn-inverse' id='btn' Value='reset'>"
                    . "</div>"
                    . "</div>");
            echo("</form>\n");
        ?>
        <script src="../js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="../dist/js/flat-ui.min.js" type="text/javascript"></script>
        </div>
    </body>
</html>
