<!DOCTYPE html>
<html lang="en">
<head>
     <title>File Browser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    <!-- bootstarp -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <!--bootstrap-->
    <!-- data tables-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- end table-->
    <script type="text/javascript" charset="utf-8">
	<?php include('header.php'); ?>
	
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style></head>
<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
	    <a class="btn btn-primary pull-right" href="../oes/real1.php" title="Click to login"><i class="icon-user icon-red"></i>Logout</a>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>  
    <div id="mainsection">
        <div class="main">
          
           <hr>
   
           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">File Name</th>
                                    <th style="text-align:center;">File Size </th>
                                    <th style="text-align:center;">Uploader</th>
                                    <th style="text-align:center;">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            include "db.php";
                                $q="select * from upload_data";
								 $result=mysqli_query($conn,$q);
                            while($rs=mysqli_fetch_array($result)){
                                echo "
                                    <tr>
                                        <td width='60%'>".$rs['FILE_NAME']."</td>
                                        <td align='right'>".$rs['FILE_SIZE']." KB</td>
                                        <td align='right'>".$rs['UPLOADED_BY']."</td>
                                        <td align='right'><a href='".$rs['PATH']."'><button class='btn btn-primary'><i class='icon-download-alt icon-white'></button></a></td>
                                    </tr>
                                ";
								}
								
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>
