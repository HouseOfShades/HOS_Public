<?php
session_start();
ob_start();
//include $_SERVER['DOCUMENT_ROOT'].'/navbar.php';
//include $ROOT_DIR.'../config.php';
//include $ROOT_DIR.'/navbar.php';
ob_end_flush();
?>


<html>
    
    
    <head>
        
    </head>
    
    <body style="background-color: white;">
        <?php
session_start();
ob_start();
include $_SERVER['DOCUMENT_ROOT'].'/navbar.php';
//include $ROOT_DIR.'../config.php';
//include $ROOT_DIR.'/navbar.php';
ob_end_flush();
?>
        
   <!--<body style="background-color: white;">-->
    <nav class="navbar" style="background-color: white; color: black; width: 80%;  margin: auto; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
        <div id="masthead">  
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <cHead>Latest in Sports
                        </chead>
                    </div>
                    <div class="col-md-5">
                        <div class="well well-lg"> 
                            <div class="row">
                                <div class="col-sm-12">
                                    Ad Space			
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div><!-- /cont -->


        </div>


        <div class="container">
            <div class="row">

                <div class="col-md-10"> 

                    <div class="panel">
                        <div class="panel-body">
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br><br><br><br><br>

                        </div><!--/col-12-->
                    </div>
                </div>

                </nav>

                <br><br> 

                </body>
                
                <script>
                    $(".activ").removeClass("activ");
                    document.getElementById("sports").classList.add("activ");
                    </script>
    
</html>