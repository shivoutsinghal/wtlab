<?php 
 $username = $_SESSION['username'];
  ?> 
 <div id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <div class="navbar-header">
                        <!-- Show navigation toggle on phones -->
                        <button id="showNav" class="navbar-toggle" type="button">
                            <span class="sr-only">navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        
                    </div>
                    <nav id="top-nav" class="navbar-no-collapse" role="navigation">
                      
                      <ul class="nav navbar-nav pull-left visible-lg visible-md"><li><a href="dashboard.php"><img src="assets/img/white-leaf-nav.png"/></a></li></ul>
                        <!-- Navbar nav -->
                       <ul class="nav navbar-nav pull-right">
                        <li class="dropdown visible-lg visible-md">
                                <a href="#" data-toggle="dropdown">
                                Subscribers<span class="caret ml5"></span>
                                   
                                </a>
                                <ul class="dropdown-menu right dropdown-notification" role="menu">
                                    <li><a href="#" class="dropdown-menu-header">Subscribers</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="subscriber_list.php"><i class="im-list"></i>List Subscribers</a>
                                    </li>
                                    
                                   
                                </ul>
                            </li>
                           
                            <li class="dropdown visible-lg visible-md">
                                <a href="#" data-toggle="dropdown">
                                Tours<span class="caret ml5"></span>
                                   
                                </a>
                                <ul class="dropdown-menu right dropdown-notification" role="menu">
                                    <li><a href="#" class="dropdown-menu-header">Tours</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="tour_list.php"><i class="im-list"></i>List Tours</a>
                                    </li>
                                    <li><a href="tour_add.php"><i class="im-plus"></i>Add Tours</a>
                                   
                                </ul>
                            </li>
                             <li class="dropdown visible-lg visible-md">
                                <a href="#" data-toggle="dropdown">
                                    Newsletters<span class="caret ml5"></span>
                                   
                                </a>
                                <ul class="dropdown-menu right dropdown-notification" role="menu">
                                    <li><a href="#" class="dropdown-menu-header">NewsLetters</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="sent_nl_list.php"><i class="im-mail-send"></i>List Sent Newsletters</a>
                                    </li>
                                    <li><a href="pending_nl_list.php"><i class="im-stack"></i>List Pending Newsletters</a>
                                    </li>
                                    <li><a href="nl_create.php"><i class="im-pencil5"></i>Create Newsletter</a>
                                    </li>
                                    
                                </ul>
                            </li>

                          
                             

                            <li class="dropdown">
                                 <a href="#" data-toggle="dropdown">
                                    <!-- <img class="avatar" src="../assets/img/avatars/1.jpg" width="36" height="36" alt="Jonh Doe"> -->
                                    <span class="avatar-name"><strong><?php echo $username; ?></strong></span>
                                    <span class="caret ml5"></span>
                                </a>
                                <ul class="dropdown-menu right" role="menu">
                                    
    
                                    <li><a href="logout.php"><i class="im-switch"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>