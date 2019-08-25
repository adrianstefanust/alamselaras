<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hi5Dash - HTML5 Admin Template By Jewel Theme</title>
  <meta name="description" content="Hi5Dash - HTML5 Admin Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/linea-basic.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/perfect-scrollbar.css">   

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/presets.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/widget/blog.css"> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">


</head>


  <header class="top-header media">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="<?php echo base_url();?>index.html"><img src="<?php echo base_url();?>assets/img/longwayslogowhite.png" alt="Site Logo"></a><!-- /.navbar-brand -->
    </div><!-- /.top-left -->
    
    <div class="top-right media-body">
      <div class="left-content float-left">
        <button class="sidenav-toggle mr-2"><i class="fa fa-bars"></i></button><!-- /.sidenav-toggle -->

        <form class="search-form" action="#">
          <input type="text" class="form-control" id="search1" placeholder="Search ...">
          <input type="submit" class="form-control" id="submit1">
        </form><!-- /.search-form -->
      </div><!-- /.left-content -->

      <div class="right-content float-right">
        <div class="country dropdown">
          <div id="country_selector"></div>
        </div><!-- /.country -->

        <div class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-envelope-o"></i>
            <span class="count">5</span>
          </a>
          
          <ul class="dropdown-menu">
            <li class="header">You have 5 messages</li>
            <li>
              <div class="slimScrollDiv">
                <ul class="dropdown-content">
                  <li>
                    <a href="#" class="media">
                      <img src="<?php echo base_url();?>assets/img/avatar/1.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Jacob Stewart</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 mins</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#" class="media">
                      <img src="<?php echo base_url();?>assets/img/avatar/2.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Lawrence Wright</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 4 hours</span>
                        <p>Curabitur facilisis erat quis metus congue viverra.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="<?php echo base_url();?>assets/img/avatar/3.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Alan Perez</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> Today</span>
                        <p>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="<?php echo base_url();?>assets/img/avatar/4.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">Jason Johnson</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> Yesterday</span>
                        <p>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="media">
                      <img src="<?php echo base_url();?>assets/img/avatar/5.jpg" class="rounded-circle mr-3" alt="User Image">
                      <div class="message-contnet media-body">
                        <h4 class="name">David Morrison</h4>
                        <span class="time"><i class="fa fa-clock-o"></i> 2 days</span>
                        <p>Praesent vitae tellus eget nibh lacinia pretium.</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="footer"><a href="#">See all Messages</a></li>
          </ul><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

        <div class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="count">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 notifications</li>
            <li>
              <ul class="dropdown-content">
                <li>
                  <a href="#">
                    <i class="fa fa-users alert-primary"></i> Curabitur id eros quis nunc suscipit blandit.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning alert-secondary"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart alert-success"></i> In gravida mauris et nisi
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user alert-danger"></i> Praesent eu lacus in libero dictum fermentum.
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->

        <div class="dropdown user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url();?>assets/img/avatar/1.jpg" class="rounded-circle float-left mr-2" alt="User Image">
            <span class="status"></span>
            <h4 class="name">Jonathon Doe</h4>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-gears"></i> Account Setting</a></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>

      </div><!-- /.right-content -->
    </div><!-- /.top-right -->
  </header><!-- /.top-header -->