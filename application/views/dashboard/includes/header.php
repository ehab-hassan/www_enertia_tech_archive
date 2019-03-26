<!-- Top Bar Start -->        
            <div class="topbar">            
                <div class="topbar-main">                
                    <div class="container-fluid">                    
                        <!-- LOGO -->                    
                        <div class="topbar-left">                        
                            <a href="index.html" class="logo">                            
                                <span>                                
                                    <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="logo-small" class="top-logo" width="120">                             
                                </span>                            
                                <!-- 
                                <span>                                
                                    <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo-large" class="logo-lg">                            
                                </span> -->                        
                            </a>                    
                        </div>  

                        <!-- Navbar -->                    
                        <nav class="navbar-custom">                            
                            <!-- Search input -->                        
                            <div class="search-wrap" id="search-wrap">                            
                                <div class="search-bar">                                
                                    <input class="search-input" type="search" placeholder="Search here.." />                                
                                    <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap">                                    
                                        <i class="mdi mdi-close-circle"></i>                                
                                    </a>                            
                                </div>                        
                            </div>      

                            <ul class="list-unstyled topbar-nav float-right mb-0">                               
                                <li>                                
                                    <a class="nav-link waves-effect waves-light search-btn" href="javascript:void(0);" data-target="#search-wrap">                                    
                                        <i class="mdi mdi-magnify nav-icon"></i>                                
                                    </a>                            
                                </li>  
                                <li class="hidden-sm">                          

                                    <a class="nav-link dropdown-toggle waves-effect waves-light lang_append" data-toggle="dropdown" href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false"> 
                                        English 
                                        <img src="<?php echo base_url(); ?>assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> 
                                        <i class="mdi mdi-chevron-down"></i>                                 
                                    </a> 

                                    <div class="dropdown-menu dropdown-menu-right">                                    
                                        
                                        <a class="dropdown-item lang-select" href="#googtrans(en|en)" data-lang="en">
                                            English 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/us_flag.jpg" alt="" class="ml-2 float-right" height="14"/>
                                        </a>   
                                        <a class="dropdown-item lang-select" href="#googtrans(en|hi)" data-lang="hi">
                                            Hindi 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Hindi_flag.svg" alt="" class="ml-2 float-right" height="14"/>
                                            
                                        </a>   
                                        <a class="dropdown-item lang-select" href="#googtrans(en|ur)" data-lang="ur">
                                            Urdu 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Urdu_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                            
                                        </a>   
                                        <a class="dropdown-item lang-select" href="#googtrans(en|de)" data-lang="de">
                                            German 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/>
                                            
                                        </a>   
                                        <a class="dropdown-item lang-select" href="#googtrans(en|fr)" data-lang="fr">
                                             French 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/>
                                        </a>      
                                        <a class="dropdown-item lang-select" href="#googtrans(en|es)" data-lang="es">
                                             Spanish 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                    
                                        <a class="dropdown-item lang-select" href="#googtrans(en|vi)" data-lang="vi">
                                             Vietnamese 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Vietnamese_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                        <a class="dropdown-item lang-select" href="#googtrans(en|pt)" data-lang="pt">
                                             Portuguese 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Portuguese_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                        <a class="dropdown-item lang-select" href="#googtrans(en|ar)" data-lang="ar">
                                             Arabic 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Arabic_Flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                        <a class="dropdown-item lang-select" href="#googtrans(en|zh-CN)" data-lang="zh-CN">
                                             Chinese 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Chinese_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                        <a class="dropdown-item lang-select" href="#googtrans(en|ms)" data-lang="ms">
                                             Malay 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Malay_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                        <a class="dropdown-item lang-select" href="#googtrans(en|ru)" data-lang="ru">
                                             Russian 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Russian_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                        <a class="dropdown-item lang-select" href="#googtrans(en|nl)" data-lang="nl">
                                             Dutch 
                                            <img src="<?php echo base_url(); ?>assets/images/flags/Dutch_flag.png" alt="" class="ml-2 float-right" height="14"/>
                                        </a>                                
                                    </div>                            
                                </li>   

                                <li class="dropdown">                                
                                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"                                    aria-haspopup="false" aria-expanded="false">                                    
                                        <i class="mdi mdi-bell-outline nav-icon"></i>                                    
                                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>                                
                                    </a>    

                                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">                                    
                                        <!-- item-->                                    
                                        <h6 class="dropdown-item-text"> Notifications (258)</h6>                                    
                                        <div class="slimscroll notification-list">                                        
                                            <!-- item-->                                        
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">                                            
                                                <div class="notify-icon bg-success">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </div>                                            
                                                <p class="notify-details">Your order is placed
                                                    <small class="text-muted">Dummy text of the printing and typesetting industry.</small>
                                                </p>                                        
                                            </a>                                        
                                            <!-- item-->                                        
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">                                            
                                                <div class="notify-icon bg-warning">
                                                    <i class="mdi mdi-message"></i>
                                                </div>                                            
                                                <p class="notify-details">New Message received
                                                    <small class="text-muted">You have 87 unread messages</small>
                                                </p>                                        
                                            </a>                                        
                                            <!-- item-->                                        
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">                                            
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-martini"></i>
                                                </div>                                            
                                                <p class="notify-details">Your item is shipped
                                                    <small class="text-muted">It is a long established fact that a reader will</small>
                                                </p>                                        
                                            </a>                                        
                                            <!-- item-->                                        
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">                                            
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </div>                                            
                                                <p class="notify-details">Your order is placed
                                                <small class="text-muted">Dummy text of the printing and typesetting industry.</small>
                                                </p>                                        
                                            </a>                                        
                                            <!-- item-->                                        
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">                                            
                                                <div class="notify-icon bg-danger">
                                                    <i class="mdi mdi-message"></i>
                                                </div>                                            
                                                <p class="notify-details">New Message received
                                                    <small class="text-muted">You have 87 unread messages</small>
                                                </p>                                        
                                            </a>                                    
                                        </div>                                    
                                        <!-- All-->                                    
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">                                        View all 
                                            <i class="fi-arrow-right"></i>                                    
                                        </a>                                
                                    </div>                            
                                </li>                                
                                <li class="hidden-sm">                                
                                    <a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen">                                    
                                        <i class="mdi mdi-fullscreen nav-icon"></i>                                
                                    </a>                            
                                </li>                                
                                <li class="dropdown">                                
                                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"                                    aria-haspopup="false" aria-expanded="false">                                    
                                        <img src="<?php echo base_url(); ?>assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />                                     
                                        <span class="ml-1 nav-user-name hidden-sm">Amelia
                                            <i class="mdi mdi-chevron-down"></i> 
                                        </span>                                
                                    </a> 

                                    <div class="dropdown-menu dropdown-menu-right">                                    
                                        <a class="dropdown-item" href="#">
                                            <i class="dripicons-user text-muted mr-2"></i> Profile
                                        </a>                                    
                                        <a class="dropdown-item" href="#">
                                            <i class="dripicons-wallet text-muted mr-2"></i> My Wallet
                                        </a>                                    
                                        <a class="dropdown-item" href="#">
                                            <i class="dripicons-gear text-muted mr-2"></i> Settings
                                        </a>                                    
                                        <a class="dropdown-item" href="#">
                                            <i class="dripicons-lock text-muted mr-2"></i> Lock screen
                                        </a>                                    
                                        <div class="dropdown-divider"></div>                                    
                                        <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                            <i class="dripicons-exit text-muted mr-2"></i> Logout
                                        </a>                                
                                    </div>                            
                                </li>                            
                                <li class="menu-item">                                
                                    <!-- Mobile menu toggle-->                                
                                    <a class="navbar-toggle nav-link" id="mobileToggle">                                    
                                        <div class="lines">                                        
                                            <span></span>                                        
                                            <span></span>                                        
                                            <span></span>                                    
                                        </div>                                
                                    </a>                                
                                    <!-- End mobile menu toggle-->                            
                                </li>                            
                            </ul>                                    
                        </nav>                    
                        <!-- end navbar-->                
                    </div>            
                </div>       

                <!-- MENU Start -->            
                <div class="navbar-custom-menu">                
                    <div class="container-fluid">                    
                        <div id="navigation">                        
                            <!-- Navigation Menu-->                        
                            <ul class="navigation-menu">                            
                                <li class="has-submenu">                                
                                    <a href="#">                                    
                                        <i class="mdi mdi-view-dashboard"></i>Dashboard                                
                                    </a>                                
                                </li>                            
                                <li class="has-submenu">                                
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>EV LIVE Map
                                    </a>                                
                                    <ul class="submenu">                                    
                                        <li>
                                            <a href="email-inbox.html">NearBy EV Users and Stations</a>
                                        </li>                                    
                                        <li>
                                            <a href="email-read.html">Enable Presence</a>
                                        </li>                                    
                                    </ul>                            
                                </li>                            
                                <li class="has-submenu">                                
                                    <a href="#">
                                        <i class="fa fa-wifi"></i>EV Networks
                                    </a> 

                                    <ul class="submenu">                                    
                                        <li>
                                            <a href="#">EV Stations</a>
                                        </li>                                    
                                        <li class="has-submenu">                                
                                            <a href="#">EV Circle</a>                                
                                            <ul class="submenu megamenu">                                    
                                                <li>                                        
                                                    <ul>                                            
                                                        <li>
                                                            <a href="page-tour.html">Community Wall</a>
                                                        </li>                                            
                                                        <li>
                                                            <a href="page-timeline.html">Review a Station</a>
                                                        </li>                                            
                                                        <li>
                                                            <a href="page-invoice.html">Video Feedback</a>
                                                        </li>                                            
                                                    </ul>                                    
                                                </li>                                    
                                            </ul>                            
                                        </li>                                    
                                    </ul>                           
                                </li>                            
                                <!-- <li class="has-submenu">                                
                                    <a href="#">
                                        <i class="mdi mdi-buffer"></i>EV Stations
                                    </a>                                
                                </li> -->                            
                                <li class="has-submenu">                                
                                    <a href="#"><i class="fa fa-money"></i>EV Payments</a>                                
                                    <ul class="submenu">                                    
                                        <li>                                        
                                            <a href="calendar.html">Add Funds</a>                                    
                                        </li>                                    
                                        <li>                                        
                                            <a href="calendar.html">Share Funds</a>                                    
                                        </li>                                    
                                        <li>                                        
                                            <a href="calendar.html">Convert to TFT</a>                                    
                                        </li>                                    
                                    </ul>                            
                                </li>                            
                                <li class="has-submenu">                                
                                    <a href="#"><i class="fa fa-database"></i>My Data</a>                                
                                    <ul class="submenu">                                    
                                        <li>
                                            <a href="charts-morris.html">Power Consumption</a>
                                        </li>                                    
                                        <li>
                                            <a href="charts-chartist.html">Mileage</a>
                                        </li>                                    
                                    </ul>                            
                                </li>                            
                                                            
                                <li> 
                                    <a href="calendar.html">
                                        <i class="fa fa-id-badge"></i>My Identity
                                    </a>                            
                                </li>                                                   
                            </ul>                        
                            <!-- End navigation menu -->                    
                        </div> 
                        <!-- end navigation -->                
                    </div> 
                    <!-- end container-fluid -->            
                </div> 
                <!-- end navbar-custom -->        
            </div>        
            <!-- Top Bar End -->