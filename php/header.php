<!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo">L to G Market</a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          
                            <span class="username"><?php echo $a_name ;?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           <!-- <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>-->
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li class="sb-toggle-right">
                        <i class="fa  fa-align-right"></i>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li>
                      <a class="active" href="order.php">
                          <i class="fa fa-dashboard"></i>
                          <span>View Orders</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Product </span>
                      </a>
                      <ul class="sub">
                          <li><a   href="add_product.php">Add Product</a></li>
						  <li><a   href="product_list.php">Edit Product</a></li>
						  
                         <!-- <li><a  href="header-color#">Different Color Top bar</a></li>
                          <li><a  href="mega_menu#">Mega Menu</a></li>
                          <li><a  href="language_switch_bar#">Language Switch Bar</a></li>
                          <li><a  href="email_template#" target="_blank">Email Template</a></li>-->
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Settings </span>
                      </a>
                      <ul class="sub">
                          <li><a   href="add_category.php">Add Category</a></li>
						  <li><a   href="add_brand.php">Add Brand</a></li>
                         <!-- <li><a  href="header-color#">Different Color Top bar</a></li>
                          <li><a  href="mega_menu#">Mega Menu</a></li>
                          <li><a  href="language_switch_bar#">Language Switch Bar</a></li>
                          <li><a  href="email_template#" target="_blank">Email Template</a></li>-->
                      </ul>
                  </li>

                 <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids#">Grids</a></li>
                          <li><a  href="calendar#">Calendar</a></li>
                          <li><a  href="gallery#">Gallery</a></li>
                          <li><a  href="todo_list#">Todo List</a></li>
                          <li><a  href="draggable_portlet#">Draggable Portlet</a></li>
                          <li><a  href="tree#">Tree View</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component#">Form Components</a></li>
                          <li><a  href="advanced_form_components#">Advanced Components</a></li>
                          <li><a  href="form_wizard#">Form Wizard</a></li>
                          <li><a  href="form_validation#">Form Validation</a></li>
                          <li><a  href="dropzone#">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor#">Inline Editor</a></li>
                          <li><a  href="image_cropping#">Image Cropping</a></li>
                          <li><a  href="file_upload#">Multiple File Upload</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table#">Basic Table</a></li>
                          <li><a  href="responsive_table#">Responsive Table</a></li>
                          <li><a  href="dynamic_table#">Dynamic Table</a></li>
                          <li><a  href="editable_table#">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-envelope"></i>
                          <span>Mail</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="inbox#">Inbox</a></li>
                          <li><a  href="inbox_details#">Inbox Details</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris#">Morris</a></li>
                          <li><a  href="chartjs#">Chartjs</a></li>
                          <li><a  href="flot_chart#">Flot Charts</a></li>
                          <li><a  href="xchart#">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list#">List View</a></li>
                          <li><a  href="product_details#">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="google_maps#" >
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
                          <li><a  href="lobby#">Lobby</a></li>
                          <li><a  href="chat_room#"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank#">Blank Page</a></li>
                          <li><a  href="sidebar_closed#">Sidebar Closed</a></li>
                          <li><a  href="people_directory#">People Directory</a></li>
                          <li><a  href="coming_soon#">Coming Soon</a></li>
                          <li><a  href="lock_screen#">Lock Screen</a></li>
                          <li><a  href="profile#">Profile</a></li>
                          <li><a  href="invoice#">Invoice</a></li>
                          <li><a  href="project_list#">Project List</a></li>
                          <li><a  href="project_details#">Project Details</a></li>
                          <li><a  href="search_result#">Search Result</a></li>
                          <li><a  href="pricing_table#">Pricing Table</a></li>
                          <li><a  href="faq#">FAQ</a></li>
                          <li><a  href="fb_wall#">FB Wall</a></li>
                          <li><a  href="404#">404 Error</a></li>
                          <li><a  href="500#">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login#">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>-->

                  <!--multi level menu start-->
                   <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page#">Menu Item 2</a>
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
                  </li>-->
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->