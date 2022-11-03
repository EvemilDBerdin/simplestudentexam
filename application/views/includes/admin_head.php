<?php
$session = $_SESSION['userdata'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Student Exam System</title>
    <link rel="shortcut icon" type="image/png" href="https://firebasestorage.googleapis.com/v0/b/evemil-berdin-web2.appspot.com/o/berdin-rose.ico?alt=media&token=cafba696-4a30-4662-a0f4-f83b6357a842">
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
    <link href="<?= base_url('assets/'); ?>node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Student Exam System</p>
        </div>
    </div>

    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- <div id="main-wrapper"> -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img width="30" src="https://media.glassdoor.com/sqll/2590732/proweaver-squarelogo-1637652466534.png" alt="Logo1" class="dark-logo" />
                    <img src="<?= base_url('assets/'); ?>images/logo-light-icon.png" alt="Logo2" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                        <img class="bg-dark" width="180" src="https://www.proweaver.com/wp-content/uploads/2019/06/logo.png" alt="StudentExamSystem-logo" class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="<?= base_url('assets/'); ?>images/logo-light-text.png" class="light-logo" alt="Logo4" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Bell"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-Mail"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?= base_url('assets/'); ?>images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?= base_url('assets/'); ?>images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?= base_url('assets/'); ?>images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?= base_url('assets/'); ?>images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->


                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/'); ?>images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down"><?= $session->username; ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="<?= base_url('assets/'); ?>images/users/1.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4><?= $session->firstname . ' ' . $session->lastname; ?></h4>
                                            <p class="text-muted"><?= $session->email; ?></p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <!-- base_url('login/logout'); -->
                                    <a href="javascript:void(0)" id="admin_logout">
                                        <i class="fa fa-power-off"></i> Logout
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">--- Admin</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="<?= base_url('admin'); ?>" aria-expanded="false"><i class="icon-Car-Wheel"></i><span class="hide-menu">Dashboard
                                <!-- <span class="label label-rounded label-danger">4</span></span> -->
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url('admin'); ?>">View Dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="<?= base_url('manage'); ?>" aria-expanded="false"><i class="fa-solid fa-user"></i><span class="hide-menu">Manage Student</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url('manage'); ?>">View Registered Student</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="<?= base_url('exam'); ?>" aria-expanded="false"><i class="icon-Box-Full"></i><span class="hide-menu">Exam results</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url('exam'); ?>">View Results</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div id="main-content" class="page-wrapper">