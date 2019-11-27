
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
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?> ">

        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- Date picker -->
        <link href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/libs/clockpicker/bootstrap-clockpicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Plugins css --> 
        <link href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css'); ?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/libs/dropzone/dropzone.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/libs/dropify/dropify.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!--        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url('assets/libs/footable/footable.core.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Data table -->
        <link href="<?php echo base_url(); ?>assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">-->
        <link href="<?php echo base_url('') ?>application/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <style>
            .thumbnail-image{
                height: 28px; 
                width: 55px;
             
            }
            /*  Print page css  */


            @media print {
                .printable{ 
                    page-break-after: always;
                    display: none;
                }
                .no_print{
                    display: none;
                }



                h1{
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: large;
                    font-weight: bold;
                }
                .pageBreak {
                    page-break-after: none;
                }
                .hide{
                    display:none;
                }
                #printMe {
                    background-color: white;
                    height: 100%;
                    width: 100%;
                    position: fixed;
                    top: 0;
                    left: 0;
                    margin: 0;
                    padding: 15px;
                    font-size: 14px;
                    line-height: 18px;
                }
            }

            /*  Players All Details page css  */
            .emp-profile{
                padding: 3%;
                margin-top: 3%;
                margin-bottom: 3%;
                border-radius: 0.5rem;
                background: #fff;
            }
            .profile-img{
                text-align: center;
            }
            .profile-img img{
                width: 70%;
                height: 100%;
            }
            .profile-img .file {
                position: relative;
                overflow: hidden;
                margin-top: -20%;
                width: 70%;
                border: none;
                border-radius: 0;
                font-size: 15px;
                background: #212529b8;
            }
            .profile-img .file input {
                position: absolute;
                opacity: 0;
                right: 0;
                top: 0;
            }
            .profile-head h5{
                color: #333;
            }
            .profile-head h6{
                color: #0062cc;
            }
            .profile-edit-btn{
                border: none;
                border-radius: 1.5rem;
                width: 70%;
                padding: 2%;
                font-weight: 600;
                color: #6c757d;
                cursor: pointer;
            }
            .proile-rating{
                font-size: 12px;
                color: #818182;
                margin-top: 5%;
            }
            .proile-rating span{
                color: #495057;
                font-size: 15px;
                font-weight: 600;
            }
            .profile-head .nav-tabs{
                margin-bottom:5%;
            }
            .profile-head .nav-tabs .nav-link{
                font-weight:600;
                border: none;
            }
            .profile-head .nav-tabs .nav-link.active{
                border: none;
                border-bottom:2px solid #0062cc;
            }
            .profile-work{
                padding: 14%;
                margin-top: -15%;
            }
            .profile-work p{
                font-size: 12px;
                color: #818182;
                font-weight: 600;
                margin-top: 10%;
            }
            .profile-work a{
                text-decoration: none;
                color: #495057;
                font-weight: 600;
                font-size: 14px;
            }
            .profile-work ul{
                list-style: none;
            }
            .profile-tab label{
                font-weight: 600;
            }
            .profile-tab p{
                font-weight: 600;
                color: #0062cc;
            }
            /*            .dropdown-item:hover, .dropdown-item:focus {
                            color: white;
                            text-decoration: none;
                            background-color: #b32f06;
                        }*/
            /* select table rows  */
            .dataTables_length{
                margin-bottom: -50px;
                margin-top: 15px;
            }
            table.dataTable tbody>tr.selected td, table.dataTable tbody>tr>.selected td {
                background-color: #f6a922;
                border-color: #f6a922;
            }
            div#examples_length {
                margin-bottom: -50px;
                margin-top: 10px;
            }
            /* data table colour  */

            .dropdown-item.active, .dropdown-item:active {
                color: white;
                text-decoration: none;
                background-color: #f6a922;
            }
            .dropdown-item {
                color: black;
                background-color: transparent;
            }
            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: f6a922;
                border-color: f6a922;
            }
            .page-link {
                border: 1px solid #f6a922;
            }
            .page-link:hover {
                background-color: #b22f06;
                color: white;
                border-color: #b22f06;
            }
            div.dataTables_wrapper div.dataTables_filter{
                margin-top: 7px;
            }
            /* data table colour  */

            .btn-secondary:hover {

                background-color: #b22e06;
                border-color: #b22e06;
            }
            .btn-secondary {
                background-color: #fca91a;
                border-color: #fca91a;
            }
            #topnav .has-submenu.active .submenu li.active>a {
                color: black;
            }
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


            /*  print btn in view_player_info  */
            .btn-primary {
                color: #fff;
                background-color: #f6a922;
                border-color: #f6a922;
            }
            .btn-primary-a{
                color: #fff;
                margin-bottom: 25px;
                margin-left: 25px;
                background-color: #f6a922;
                border-color: #f6a922;
            }
            .btn-primary:hover {
                color: #fff;
                background-color: #b22e06;
                border-color: #b22e06;
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
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" href="<?php echo base_url('web/logout'); ?>" aria-haspopup="false" aria-expanded="false">
                                    <span style="color: white !important;" class="pro-user-name ml-1">
                                        <i class="mdi mdi-logout" style="color: #fff;"></i>
                                        Logout
                                    </span>
                                </a>
                            </li>
                            <?php //if ($this->session->userdata('user_type') == "user") {
                            ?>
                            <!-- <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" href="<?php //echo base_url('user/profile');                      ?>" aria-haspopup="false" aria-expanded="false">
                                    <span style="color: white !important;" class="pro-user-name ml-1">
                                        <i class="mdi mdi-home" style="color: #fff;"></i>
                                        Dashboard
                                    </span>
                                </a>
                            </li> -->
                            <?php //} ?>

                            <?php
                        } else {
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
                            <a class="nav-link mr-0 " href="#">
                                <span  style="color: white !important;" class="pro-user-name ml-1"><i class="mdi mdi-email" style="color: #fff;"></i>
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
                                <img src="<?php echo base_url('assets/images/portal-logo.png') ?>" alt="" height="90" style="margin-top: -20px  !important;margin-left: -85px;">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="<?php echo base_url('assets/images/logo-dark3.png') ?>" alt="" height="80">
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
                                    <li class="has-submenu <?php
                                    if (empty($this->session->userdata('user_type'))) {
                                        echo "active";
                                    }
                                    ?>">
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
                                } else if ($this->session->userdata('user_type') == "admin") {
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
                                                    <!--<li>-->
                                                    <!--    <a href="<?php echo base_url('admin/Dashboard/player_req'); ?>">Team Request</a>-->
                                                    <!--</li>-->
                                                    <li>
                                                        <a href="<?php echo base_url('admin/Dashboard/team_req'); ?>">Team Request</a>
                                                    </li>
                                                </ul>
                                            </li>
<!--                                            <li class="has-submenu" >
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

                                            <li class="has-submenu" >
                                                <a href="#">Reports</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="<?php echo base_url('admin/Dashboard/players'); ?>">Player Report</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url('admin/Dashboard/teams'); ?>">Team Report</a>
                                                    </li>
                                                </ul>
                                            </li>-->
                                            <li>
                                                <a href="<?php echo base_url('admin/Dashboard/players'); ?>">Players</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('admin/Dashboard/teams'); ?>">Teams</a>
                                            </li>
                                            <li>
                                                <a href="#">Tournament</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('admin/ground/index'); ?>">Ground</a>
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
                                                <a href="<?php echo base_url('admin/sponser/index'); ?>">Sponsors</a>
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
                                    <?php
                                }
                            } else {
                                ?>
                                <li class="has-submenu <?php
                                if (empty($this->session->userdata('user_type'))) {
                                    echo "active";
                                }
                                ?>">
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

