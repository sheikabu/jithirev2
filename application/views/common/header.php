<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/img/favico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favico/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/img/favico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>jithire</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/agency.min.css" rel="stylesheet">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icons/toicons/css/styles.css">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Dropdown -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    

     <script src="<?php echo base_url(); ?>assets/js/es5.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/selectize.js"></script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url() ?>user">jithire</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto" id="menu">
          <?php if(!$this->session->userdata('role')){ ?>
            <li class="nav-item">
              <!-- Button trigger modal -->
               <!--<button type="button" class="btn btn-fill text-uppercase" data-toggle="modal" id="myModel" data-target="#myModal">Sign Up</button>-->
               <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" id="myModel" data-target="#myModal">Sign Up</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/about">About Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/contact">Contact Us</a>
            </li>
           <?php if($this->session->userdata('role')=='company'){ ?>
         <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
           -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/new_job">Post a Job</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/posted_jobs">Posted Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/logout"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </li>
          <!-- </ul>
        </div> -->
        <?php } ?>
        <?php if($this->session->userdata('role')=='candidate'){ ?>

         <!-- <li class="nav-item">
              <ul class="notification-user text-uppercase"> -->
             <!-- <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/user_details"> View Profile</a>
                </li> -->
              <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/browse_jobs"> Matching Jobs</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/history">History</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link js-scroll-trigger" href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
          			    <button class=" user-dropdown dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> 
          			    <span class="caret"></span></button>
          			    <ul class="dropdown-menu">
          			      <li><a class="nav-link" id="profile" href="<?php echo site_url() ?>user/user_details">View Profile</a></li>
          			      <li><a class="nav-link" id="profile" href="<?php echo site_url() ?>user/update_profile">Edit Profile</a></li>
          			      
          			      <li><a class="nav-link js-scroll-trigger" id="profile" href="<?php echo site_url() ?>user/logout">Logout</a></li>
          			    </ul>
			         </div>
                    
                </li>
                
             <!--  </ul>
            </li> -->
        <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
<script type="text/javascript">
$('ul li a').click(function() {
  $('li a').removeClass("active");
  $(this).addClass("active");
  localStorage.setItem('active', $(this).parent().index());
});
 
$('ul li #profile').click(function() {
  $('li a').removeClass("active");
  });

var ele = localStorage.getItem('active');
$('ul li:eq(' + ele + ')').find('a').addClass('active');
</script>
