<?php 
if (!$this->session->userdata('user')) {
    header("location:".base_url('login'));
}else{
    $user_data = $this->session->userdata('user');
    // print_r($user_data);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Telecom | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Telecom Service" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>application/assets/images/fevicon-tsc-logo.ico">

        <!-- plugin css -->
        <link href="<?php echo base_url() ?>application/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Tables css -->
        <link href="<?php echo base_url() ?>application/assets/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
        <!-- Footable css -->
        <link href="<?php echo base_url() ?>application/assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert-->
        <link href="<?php echo base_url() ?>application/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url() ?>application/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url() ?>application/assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>application/assets/css/custom-style.css" rel="stylesheet" type="text/css" />
      
        <script type="text/javascript">
            var base_url = "<?php echo base_url() ?>";
        </script>
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav" style="background: #fff;">

            <!-- Topbar Start -->
            <div class="navbar-custom" style="background:url(<?php echo base_url() ?>application/assets/images/topbarbg.png);">
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
    
                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" style="background: #f1f5f7 !important;">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url() ?>application/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    <?=$user_data->name?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="<?php echo base_url('logout') ?>" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link  waves-effect"><!-- right-bar-toggle -->
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="<?php echo base_url() ?>" class="logo text-center">
                            <span class="logo-lg">
                                <img src="<?php echo base_url() ?>application/assets/images/logo_135x51.png" alt="" height="18" class="img-reponsive img-logo">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="<?php echo base_url() ?>application/assets/images/logo.png" alt="" height="24">
                            </span>
                        </a>
                    </div>
    
                    
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo base_url() ?>">
                                    <i class="fe-airplay"></i>Dashboards 
                                </a>
                            </li>
                            <?php if ($user_data->user_type_id == 1) { ?>
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-grid"></i>Agents <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('agent/add') ?>">Add Agent</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('agent/list') ?>">Added Agents</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('agent/track') ?>">Track Agent</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-grid"></i>Drivers <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('driver/add') ?>">Add Driver</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('driver/list') ?>">Added Drivers</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('driver/track') ?>">Track Driver</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-grid"></i>Repair Center <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('repaircenter/add') ?>">Add Shop</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('repaircenter/list') ?>">Added Shops</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-grid"></i>Daily Queries <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('orderlist') ?>">Job List</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('#assignorder') ?>">Assigned Job</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Total Jobs</a>
                                    </li> -->
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-grid"></i>Pricing <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('genral_setting') ?>">General Settings</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('add_pricing') ?>">Add Pricing</a>
                                    </li><li>
                                        <a href="<?php echo base_url('pricing_list') ?>">Pricing List</a>
                                    </li>
                                   <!--  <li>
                                        <a href="<?php echo base_url() ?>">Price List</a>
                                    </li> -->
                                    
                                    
                                </ul>
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