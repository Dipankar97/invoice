<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Invoice</title>
        

        <!-- Bootstrap Core CSS -->
       <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">

        
        <link href="assets/css/timeline.css" rel="stylesheet">

        
        <link href="assets/css/startmin.css" rel="stylesheet">

        
        <link href="assets/css/morris.css" rel="stylesheet">

        
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                

              
                

                <ul class="nav navbar-right navbar-top-links">
                 
                    <li class="dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>
                              <?php
      if(isset ($_SESSION['email']))
      {
        echo $_SESSION['email'];

      }
      else
      {
        echo 'Admin';
      }

    ?>
  <b class="caret"></b>
                        </a>


                        <ul class="dropdown-menu dropdown-user">
                            <?php
                        if($_SESSION['role']=='admin'){


                    ?>
                      
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                            <?php
                           }else if($_SESSION['role']=='user'){
                            ?>  
                            <li class="divider"></li>
                            <li><a href="../user/userlogout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                            <?php
                           }
                           ?>  
                        </ul>
                    </li>
                </ul>
                

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                               <div class="input-group custom-search-form">
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="admin.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>

                            <!-- <li>
                                <a href="invoice.php"><i class="fa fa-file"></i> Invoice</a>
                            </li>                       
         -->
                                 
                        </ul>
                    </div>
                </div>

            </nav>

                               
       