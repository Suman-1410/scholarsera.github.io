<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


<style type="text/css">#table {
  text-align: center;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}
 
#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #214761;
  color: white;
}

label.logo{
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 70px;
  font-weight: bold;
}

</style>
</head>
<body>
     
            
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <label class="logo"> <i class="fas fa-graduation-cap"></i>SCHOLARSERA</label>
                </div>
              
                 <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li >
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li >
                        <a href="add_ss.php" ><i class="fa fa-desktop "></i>Add scholarships</a>
                    </li>
                    <li >
                        <a href="" ><i class="fa fa-desktop "></i>Submitted scholarships</a>
                    </li>
                   </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


<h1 style="text-align: center;">Scholarships</h1>

<table id="table">
  <tr>
    <th>ID</th>
    <th>Scholarships Name</th>
    <th>Amount</th>
    <th>Provider</th>
    <th>Eligibility:</th>
    <th>Requirements</th>
    <th>Link</th>
    <th>Submitted_at</th>
    <th colspan="2">Operation</th>
  </tr>
  <tbody>
    <?php 

  $conn=mysqli_connect("localhost","root","","project");  
          /* server name, username, passwor, database name */

$selecrquery = "select * from org_ss_submit ";
$query = mysqli_query($conn,$selecrquery);

$num = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query)) {
    //echo $res['username'] . "<br>";
?>
    <tr>                <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['scholar_name']; ?></td>
                        <td><?php echo $res['scholar_amount']; ?></td>
                        <td><?php echo $res['scholar_provider']; ?></td>
                        <td><?php echo $res['scholar_eligibility']; ?></td>
                        <td><?php echo $res['scholar_requirment']; ?></td>
                        <td><?php echo $res['submited_at']; ?></td>
                        <td><?php echo '<a href="' . $res['scholar_link'] . '">link'; ?></td>
                        <td><a href="scholarships_approved.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="scholarships_delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>

<?php
}




 ?>
                    
    </tbody>
</table>













                       








                    </div>
                </div>                        
            </div>
        </div>
    </div><br><br><br><br><br>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12 text-center" >
                    &copy;  Group-D
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
