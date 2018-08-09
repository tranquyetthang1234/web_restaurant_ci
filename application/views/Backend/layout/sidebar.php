<body>
<?php $login = $this->session->userdata('user_id_login');
        
    ?>
  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >Trang <span>Quản trị</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="fa fa-tasks"></i>
                      <span class="badge bg-success">6</span>
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                      <div class="notify-arrow notify-arrow-green"></div>
                      <li>
                          <p class="green">You have 6 pending tasks</p>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">40%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      <span class="sr-only">40% Complete (success)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Database Update</div>
                                  <div class="percent">60%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only">60% Complete (warning)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="sub-menu dcjq-parent-li">
                          <a href="#" class="active" >
                              <div class="task-info">
                                  <div class="desc">Iphone Development</div>
                                  <div class="percent">87%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                      <span class="sr-only">87% Complete</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Mobile App</div>
                                  <div class="percent">33%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                      <span class="sr-only">33% Complete (danger)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">45%</div>
                              </div>
                              <div class="progress progress-striped active">
                                  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                      <span class="sr-only">45% Complete</span>
                                  </div>
                              </div>

                          </a>
                      </li>
                      <li class="external">
                          <a href="#">See All Tasks</a>
                      </li>
                  </ul>
              </li>
              <!-- settings end -->
              <!-- inbox dropdown start-->
              <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-important">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                      <div class="notify-arrow notify-arrow-red"></div>
                      <li>
                          <p class="red">You have 5 new messages</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo">
                                <img alt="avatar" src="<?php echo admin_url()?>/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo admin_url()?>/img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo admin_url()?>/img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo admin_url()?>/img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all messages</a>
                      </li>
                  </ul>
              </li>
              <!-- inbox dropdown end -->
              <!-- notification dropdown start-->
              <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="fa fa-bell-o"></i>
                      <span class="badge bg-warning">7</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">You have 7 new notifications</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                              Server #3 overloaded.
                              <span class="small italic">34 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-warning"><i class="fa fa-bell"></i></span>
                              Server #10 not respoding.
                              <span class="small italic">1 Hours</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                              Database overloaded 24%.
                              <span class="small italic">4 hrs</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-success"><i class="fa fa-plus"></i></span>
                              New user registered.
                              <span class="small italic">Just now</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                              Application error.
                              <span class="small italic">10 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all notifications</a>
                      </li>
                  </ul>
              </li>
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username"><?= $login->name?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="<?php echo base_url()?>Backend/LoginController/logout/<?=$login->id?>"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
                  <li class="sb-toggle-right">
                      <i class="fa  fa-align-right"></i>
                  </li>
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;"  <?php if($this->uri->segment(2)=="BookTableController"){echo 'class="active dcjq-parent"';}?>>
                          <i class="fa fa-laptop"></i>
                          <span>Đặt Bàn</span>
                      </a>
                      <ul class="sub">
                          <li <?php if(($this->uri->segment(2)=="BookTableController")&&($this->uri->segment(3)!="add")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/BookTableController/">Danh sách đặt bàn</a></li>
                          <li <?php if(($this->uri->segment(3)=="add")&&($this->uri->segment(2)=="BookTableController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/BookTableController/add">Thêm mới</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu active">
                      <a href="javascript:;" <?php if(($this->uri->segment(2)=="ChefController")||($this->uri->segment(2)=="ServiceController")){echo 'class="active dcjq-parent"';}?>>
                          <i class="fa fa-book"></i>
                          <span>Dịch Vụ Và Chef</span>
                      </a>
                      <ul class="sub active">
                          <li <?php if(($this->uri->segment(2)=="ServiceController") &&($this->uri->segment(3)!="add")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/ServiceController/" class="active">Danh sách dịch vụ</a></li>
                          <li <?php if(($this->uri->segment(3)=="add")&&($this->uri->segment(2)=="ServiceController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/ServiceController/add">Thêm mới Dich vụ</a></li>
                         <li <?php if(($this->uri->segment(2)=="ChefController")&&($this->uri->segment(3)!="add")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/ChefController/" class="active">Danh sách chef</a></li>
                          <li <?php if(($this->uri->segment(3)=="add")&&($this->uri->segment(2)=="ChefController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/ChefController/add">Thêm mới Chef</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" <?php if(($this->uri->segment(2)=="TypeEatController")||($this->uri->segment(2)=="EatController")){echo 'class="active dcjq-parent"';}?>>
                          <i class="fa fa-cogs"></i>
                          <span>Thực đơn món ăn</span>
                      </a>
                      <ul class="sub">
                          <li <?php if(($this->uri->segment(2)=="TypeEatController")&&($this->uri->segment(3)!="add")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/TypeEatController/">Loại món</a></li>
                          <li <?php if(($this->uri->segment(2)=="EatController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/EatController/">Món ăn</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu ">
                      <a href="javascript:;" <?php if($this->uri->segment(2)=="ContactController"){echo 'class="active dcjq-parent"';}?> >
                          <i class="fa fa-tasks"></i>
                          <span>Liên Hệ</span>
                      </a>
                      <ul class="sub">
                          <li <?php if(($this->uri->segment(2)=="ContactController")&&($this->uri->segment(3)!="add")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/ContactController/">Liên hệ khách hàng</a></li>
                          <li <?php if($this->uri->segment(3)=="add"){echo 'class="active "';}?>><a  href="<?php echo base_url()?>Backend/ContactController/add">Thêm mới</a></li> </a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-th"></i>
                          <span>Nhận tin</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url()?>Backend/ContactController/">Danh sách nhận tin</a></li>
                          <li><a  href="<?php echo base_url()?>Backend/ContactController/">Thêm  mới</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"<?php if(($this->uri->segment(2)=="CustumerController")||($this->uri->segment(2)=="LiController")){echo 'class="active dcjq-parent"';}?> >
                          <i class=" fa fa-envelope"></i>
                          <span>Img và Custumer</span>
                      </a>
                      <ul class="sub">
                          <li <?php if(($this->uri->segment(2)=="LiController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/LiController/">Quản lý thư viện hình ảnh </a></li> 
                          <li <?php if(($this->uri->segment(2)=="CustumerController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/CustumerController/"> Đánh giá của khách hàng </a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" <?php if(($this->uri->segment(2)=="ConfigController")||($this->uri->segment(2)=="MailController")){echo 'class="active dcjq-parent"';}?>>
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Cấu Hình</span>
                      </a>
                      <ul class="sub">
                          <li  <?php if(($this->uri->segment(2)=="ConfigController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/ConfigController">Cấu hình chung</a></li>
                          <li <?php if(($this->uri->segment(2)=="MailController")){echo 'class="active dcjq-parent"';}?>><a  href="<?php echo base_url()?>Backend/MailController/">Cấu hình giửi mail</a></li>
                          <li><a  href="flot_chart.html">Config css</a></li>
                          <li><a  href="xchart.html">Cấu hình khác</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list.html">List View</a></li>
                          <li><a  href="product_details.html">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="google_maps.html" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="lobby.html">Lobby</a></li>
                          <li><a  href="chat_room.html"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="fa fa-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="sidebar_closed.html">Sidebar Closed</a></li>
                          <li><a  href="people_directory.html">People Directory</a></li>
                          <li><a  href="coming_soon.html">Coming Soon</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                          <li class="active"><a  href="profile.html">Profile</a></li>
                          <li><a  href="invoice.html">Invoice</a></li>
                          <li><a  href="project_list.html">Project List</a></li>
                          <li><a  href="project_details.html">Project Details</a></li>
                          <li><a  href="search_result.html">Search Result</a></li>
                          <li><a  href="pricing_table.html">Pricing Table</a></li>
                          <li><a  href="faq.html">FAQ</a></li>
                          <li><a  href="fb_wall.html">FB Wall</a></li>
                          <li><a  href="404.html">404 Error</a></li>
                          <li><a  href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login.html">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>

                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
             <div class="row">