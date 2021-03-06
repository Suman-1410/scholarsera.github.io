<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style type="text/css">
    label.logo{
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 70px;
  font-weight: bold;
}</style>
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
                        <a href="orgs.php" ><i class="fa fa-desktop "></i>Dashboard <!--<span class="badge">Included</span>--></a>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">



                        <div class = "jumbotron big-banner">
<section class="my-5"><!--mergin-->
    <div class="py-5"><!--padding-->
        <h2 class="text-center">Submit A Scholarship</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="org_add_userinfo.php" method="post">
            <div class="form-group">
                <label>Scholarship Name</label>
                <input type="text" name="scholar_name" autocomplete="off" class="form-control" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label>Amount</label>
                <textarea class="form-control" name="scholar_amount" placeholder="" required></textarea></div>
            <div class="form-group">
                <label>Provider</label>
                <input type="text" name="scholar_provider" autocomplete="off" class="form-control" placeholder="Enter provider name" required>
            </div>
            
            <div class="form-group">
                <label>Eligibility</label>
                <textarea class="form-control" name="scholar_eligibility" placeholder="" required></textarea></div>
            <div class="form-group">
                <label>Requirements</label>
                <textarea class="form-control" name="scholar_requirment" placeholder="" required></textarea></div>
                <div class="form-group">
                <label>Link</label>
                <input type="text" name="scholar_link" autocomplete="off" class="form-control" placeholder="Enter the link" required>
            </div>
                <div class="py-3">
                <button type="submit" class="btn btn-success ">Submit</button>
              </div>
            </div>
        </form>
    </div></div>
                     





                    </div>
                </div>              
                 <!-- /. ROW  -->
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
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
