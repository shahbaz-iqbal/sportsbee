
<html>
    <head> 
        <meta charset="utf-8" />
        <title>Sports Bee</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex" /> 
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('application/assets/images/favicon.ico'); ?> ">
        <!-- App css -->
        <link href="<?php echo base_url('application/assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- Date picker -->
        <link href="<?php echo base_url('application/assets/libs/flatpickr/flatpickr.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/libs/clockpicker/bootstrap-clockpicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Plugins css --> 
        <link href="<?php echo base_url('application/assets/libs/flatpickr/flatpickr.min.css'); ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('application/assets/libs/dropzone/dropzone.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/libs/dropify/dropify.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?php echo base_url('application/assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('application/assets/libs/footable/footable.core.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!--Edited by Ayesha -->
                 <!-- Sweet Alert-->
        <link href="<?php echo base_url('') ?>application/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!-- -->
        <style>
            /*
            .swal2-popup.swal2-modal.swal2-show{
               
            }*/



            ::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px #FFAC1B;
                background: #fca91a;
            }
            .navigation-menu>li>a{
                font-family: 'Poppins-bold', sans-serif !important;
                font-weight: bold;
                font-size: 19px;
                color: #000 !important;
                text-transform: capitalize !important;
            }
            .points_col{
                color: white;
            }
            ::placeholder {
                color: black;
            }
            .submenu{
                color: black;
                background-color: black;
            }
            #topnav {
                background:#fff;
                position: fixed;
                left: 0;
                right: 0;
                z-index: 1001;
                padding: 0 12px;
            }
            .navbar-custom .topnav-menu .nav-link {
    padding: 0 15px;
    color: #6c757d;
    min-width: 32px;
    display: block;
    line-height: 30px;
    text-align: center;
    max-height: 70px;
    font-size: 16px;
}   
   .nav-link:hover{
    background-color: transparent;
    color: black !important;
}

#topnav .has-submenu.active>a {
    background-color: transparent;
    color: #fda81a !important;
}
#topnav .has-submenu>a:hover {
    background-color: transparent;
    color: #fda81a !important;
}
@media (min-width: 992px){
    .navigation-menu>li .submenu li a {
        font-weight: 700;
            font-size: 15px;
    }
    .navigation-menu>li .submenu li a:hover {
        color: #fff;
        background: #ffac1b;
        font-weight: 700;
    }
    .navigation-menu>li>ul>li.has-submenu:active>a, .navigation-menu>li>ul>li.has-submenu:hover>a {
        color: #000 !important;
    }
}
.recentpost_grid_heading {
    background: #fda81a;
    color: #fff;
    margin-top: 30px;
    border-left: 20px solid #B22E06;
    padding: 20px 20px 20px 20px;
}
.points_row:hover {
    background: #fda81a;
    cursor: pointer;
}
.btn-info {
    color: #fff !important;
    background-color: #312c29 !important;
    border-color: #332a2b !important;
}
.switch-field {
                display: flex;
                margin-bottom: 36px;
                overflow: hidden;
            }

            .switch-field input {
                position: absolute !important;
                clip: rect(0, 0, 0, 0);
                height: 1px;
                width: 1px;
                border: 0;
                overflow: hidden;
            }

            .switch-field label {
                background-color: #e4e4e4;
                color: rgba(0, 0, 0, 0.6);
                font-size: 14px;
                line-height: 1;
                text-align: center;
                padding: 8px 16px;
                margin-right: -1px;
                border: 1px solid rgba(0, 0, 0, 0.2);
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
                transition: all 0.1s ease-in-out;
            }

            .switch-field label:hover {
                cursor: pointer;
            }

            .switch-field input:checked + label {
                background-color: #ffac1b;
                box-shadow: none;
            }

            .switch-field label:first-of-type {
                border-radius: 4px 0 0 4px;
            }

            .switch-field label:last-of-type {
                border-radius: 0 4px 4px 0;
            }

            /* This is just for CodePen. */


            h2 {
                font-size: 18px;
                margin-bottom: 8px;
            }

            /* This is for table that will shown by click save button in player registeration form */
            fieldset.savepop-border {
                border: 1px groove #ddd !important;
                border-color: #fda81a;
                padding: 0 1.4em 1.4em 1.4em !important;
                margin: 0 0 1.5em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                        box-shadow:  0px 0px 0px 0px #000;
            }

            legend.savepop-border {
                font-size: 1.2em !important;
                font-weight: lighter !important;
                text-align: left !important;
                width:inherit; /* Or auto */
                padding:0 10px; /* To give a bit of padding on the left and right */
                border-bottom:none;
                color:#fda81a;
                border-color: #fda81a;
            }
        </style>
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom" style="background: linear-gradient(to right, #B22E06, #FFAC1B);">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <?php 
                        // print_r($this->session->userdata());
                        if (!empty($this->session->userdata('user_type'))) {
                            ?>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" href="<?php echo base_url('Web/logout'); ?>" aria-haspopup="false" aria-expanded="false">
                                    <span style="color: white !important;" class="pro-user-name ml-1">
                                        <i class="mdi mdi-logout" style="color: #fff;"></i>
                                        Logout
                                    </span>
                                </a>
                            </li>
                            <?php //if ($this->session->userdata('user_type') == "user") {
                            ?>
                                <!-- <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" href="<?php //echo base_url('user/profile'); ?>" aria-haspopup="false" aria-expanded="false">
                                        <span style="color: white !important;" class="pro-user-name ml-1">
                                            <i class="mdi mdi-home" style="color: #fff;"></i>
                                            Dashboard
                                        </span>
                                    </a>
                                </li> -->
                            <?php
                            //} ?>
                            
                            <?php
                        }else{
                            ?>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" href="<?php echo base_url('web/user_login'); ?>" aria-haspopup="false" aria-expanded="false">
                                    <span style="color: white !important;" class="pro-user-name ml-1">
                                        <i class="mdi mdi-login" style="color: #fff;"></i>
                                        
                                        Login
                                    </span>
                                </a>
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link nav-user mr-0 waves-effect" href="<?php echo base_url('web/player_registration'); ?>" aria-haspopup="false" aria-expanded="false">
                                    <span style="color: white !important;" class="pro-user-name ml-1">
                                        <i class="mdi mdi-account-edit" style="color: #fff;"></i>
                                        Register  
                                    </span>
                                </a>

                            </li>
                            <?php
                        }
                        ?>
                        

                    </ul>
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                        <li>
                            <a class="nav-link mr-0" href="#">
                                <span  style="color: white !important;" class="pro-user-name ml-1 h"><i class="mdi mdi-email" style="color: #fff;"></i>
                                    Info@sportsbee.com
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link mr-0" href="#">
                                <span style="color: white !important;" class="pro-user-name ml-1"><i class="mdi mdi-clock" style="color: #fff;"></i>
                                    Mon-Fri 10:00-19:00
                                </span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar --> 
            <div class="topbar-menu">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="<?php echo base_url('/'); ?>" class="logo text-center">
                            <span class="logo-lg">
                                <img src="<?php echo base_url('application/assets/images/portal-logo.png') ?>" alt="" height="90" style="margin-top: -20px  !important;margin-left: -85px;">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="<?php echo base_url('application/assets/images/logo-dark3.png') ?>" alt="" height="80">
                            </span>
                        </a>
                    </div>
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu"> 
                            <?php 
                            if (!empty($this->session->userdata('user_type'))) {
                                if ($this->session->userdata('user_type') == "user") {
                                ?>
                                <li class="has-submenu active">
                                    <a style="padding-left: 20px !important;" href="<?php echo base_url('user/Dashboard'); ?>">Dashboard</a>
                                </li>
                                <li class="has-submenu <?php if (empty($this->session->userdata('user_type'))) { echo "active"; } ?>">
                                <a style="padding-left: 20px !important;" href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"> Fixtures </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Cricket Calendar</a>
                                    </li>
                                    <li>
                                        <a href="#">Football Calendar <small>(comming soon)</small></a>
                                    </li>
                                    <li>
                                        <a href="#">Hockey Calendar <small>(comming soon)</small> </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#">Ranking</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Team Ranking</a>
                                    </li>
                                    <li>
                                        <a href="#">Player Ranking</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#" style="text-transform: none !important;">Hall of Fame</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Sponsors</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Events</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Shop </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Cricket</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="#">Cricket Kit</a>
                                            </li>
                                            <li>
                                                <a href="#">Bats</a>
                                            </li>
                                            <li>
                                                <a href="#">Batting Pads</a>
                                            </li>
                                            <li>
                                                <a href="#">Batting Gloves</a>
                                            </li>
                                            <li>
                                                <a href="#">Keeping Gloves</a>
                                            </li>
                                            <li>
                                                <a href="#">Helmets</a>
                                            </li>
                                            <li>
                                                <a href="#">Balls</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Football <small>(comming soon)</small></a>
                                    </li>
                                    <li>
                                        <a href="#">Hockey <small>(comming soon)</small></a>
                                    </li>
                                    
                                </ul>
                            </li>

                           <!--  <li class="has-submenu">
                                <a href="#"> Contact Us </a>
                            </li> -->
                            <li class="has-submenu">
                                <a href="#"> About Us</a>
                            </li>
                                <?php
                                }else if($this->session->userdata('user_type') == "admin"){
                                ?>
                                <li class="has-submenu active">
                                    <a style="padding-left: 20px !important;" href="<?php echo base_url('admin/Dashboard'); ?>">Dashboard</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Operation </a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Pending Requests</a>
                                             <ul class="submenu">
                                                <li>
                                                    <a href="<?php echo base_url('admin/Dashboard/player_req'); ?>">Player Request</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('admin/Dashboard/team_req'); ?>">Team Request</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu" >
                                            <a href="#">Players</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="<?php echo base_url('admin/Dashboard/active_player'); ?>">Active Player</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('admin/Dashboard/block_player'); ?>">Blocked Player</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu" >
                                            <a href="#">Teams</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="<?php echo base_url('admin/Dashboard/active_team'); ?>">Active Teams</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url('admin/Dashboard/block_team'); ?>">Blocked Teams</a>
                                                </li> 
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">Tournament</a>
                                        </li>
                                        <li>
                                            <a href="#">Ground</a>
                                        </li>
                                        <li>
                                            <a href="#">Matches</a>
                                        </li>
                                        <li>
                                            <a href="#">Events</a>
                                        </li>          
                                        <li>
                                            <a href="#">Instant Challenge</a>
                                        </li>          
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Team </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="<?php echo base_url('admin/Dashboard/general_data'); ?>">Indoor Team</a>
                                        </li>
                                        <li>
                                            <a href="#">Outdoor Team</a>
                                        </li>
                                        <li>
                                            <a href="#">Sponsors</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Store </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="#">Cricket</a>
                                        </li>
                                        <li>
                                            <a href="#">Football <small>(comming soon)</small></a>
                                        </li>
                                        <li>
                                            <a href="#">Hockey <small>(comming soon)</small></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Reports </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Scoreboard </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Settings </a>
                                </li>
                                <?php }
                            }else{ ?>
                            <li class="has-submenu <?php if (empty($this->session->userdata('user_type'))) { echo "active"; } ?>">
                                <a style="padding-left: 20px !important;" href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"> Fixtures </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Cricket Calendar</a>
                                    </li>
                                    <li>
                                        <a href="#">Football Calendar <small>(comming soon)</small></a>
                                    </li>
                                    <li>
                                        <a href="#">Hockey Calendar <small>(comming soon)</small> </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#">Ranking</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Team Ranking</a>
                                    </li>
                                    <li>
                                        <a href="#">Player Ranking</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#" style="text-transform: none !important;">Hall of Fame</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Sponsors</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Events</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Shop </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Cricket</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="#">Cricket Kit</a>
                                            </li>
                                            <li>
                                                <a href="#">Bats</a>
                                            </li>
                                            <li>
                                                <a href="#">Batting Pads</a>
                                            </li>
                                            <li>
                                                <a href="#">Batting Gloves</a>
                                            </li>
                                            <li>
                                                <a href="#">Keeping Gloves</a>
                                            </li>
                                            <li>
                                                <a href="#">Helmets</a>
                                            </li>
                                            <li>
                                                <a href="#">Balls</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Football <small>(comming soon)</small></a>
                                    </li>
                                    <li>
                                        <a href="#">Hockey <small>(comming soon)</small></a>
                                    </li>
                                    
                                </ul>
                            </li>

                           <!--  <li class="has-submenu">
                                <a href="#"> Contact Us </a>
                            </li> -->
                            <li class="has-submenu">
                                <a href="#"> About Us</a>
                            </li>
                        <?php } ?>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

