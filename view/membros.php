<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link href="css/table-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
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
                <a href="index.html#">
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
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
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
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Basic Table</a></li>
              <li class="active"><a href="responsive_table.html">Responsive Table</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Company</th>
                      <th class="numeric">Price</th>
                      <th class="numeric">Change</th>
                      <th class="numeric">Change %</th>
                      <th class="numeric">Open</th>
                      <th class="numeric">High</th>
                      <th class="numeric">Low</th>
                      <th class="numeric">Volume</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AAC</td>
                      <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                      <td class="numeric">$1.38</td>
                      <td class="numeric">-0.01</td>
                      <td class="numeric">-0.36%</td>
                      <td class="numeric">$1.39</td>
                      <td class="numeric">$1.39</td>
                      <td class="numeric">$1.38</td>
                      <td class="numeric">9,395</td>
                    </tr>
                    <tr>
                      <td>AAD</td>
                      <td>ARDENT LEISURE GROUP</td>
                      <td class="numeric">$1.15</td>
                      <td class="numeric"> +0.02</td>
                      <td class="numeric">1.32%</td>
                      <td class="numeric">$1.14</td>
                      <td class="numeric">$1.15</td>
                      <td class="numeric">$1.13</td>
                      <td class="numeric">56,431</td>
                    </tr>
                    <tr>
                      <td>AAX</td>
                      <td>AUSENCO LIMITED</td>
                      <td class="numeric">$4.00</td>
                      <td class="numeric">-0.04</td>
                      <td class="numeric">-0.99%</td>
                      <td class="numeric">$4.01</td>
                      <td class="numeric">$4.05</td>
                      <td class="numeric">$4.00</td>
                      <td class="numeric">90,641</td>
                    </tr>
                    <tr>
                      <td>ABC</td>
                      <td>ADELAIDE BRIGHTON LIMITED</td>
                      <td class="numeric">$3.00</td>
                      <td class="numeric"> +0.06</td>
                      <td class="numeric">2.04%</td>
                      <td class="numeric">$2.98</td>
                      <td class="numeric">$3.00</td>
                      <td class="numeric">$2.96</td>
                      <td class="numeric">862,518</td>
                    </tr>
                    <tr>
                      <td>ABP</td>
                      <td>ABACUS PROPERTY GROUP</td>
                      <td class="numeric">$1.91</td>
                      <td class="numeric">0.00</td>
                      <td class="numeric">0.00%</td>
                      <td class="numeric">$1.92</td>
                      <td class="numeric">$1.93</td>
                      <td class="numeric">$1.90</td>
                      <td class="numeric">595,701</td>
                    </tr>
                    <tr>
                      <td>ABY</td>
                      <td>ADITYA BIRLA MINERALS LIMITED</td>
                      <td class="numeric">$0.77</td>
                      <td class="numeric"> +0.02</td>
                      <td class="numeric">2.00%</td>
                      <td class="numeric">$0.76</td>
                      <td class="numeric">$0.77</td>
                      <td class="numeric">$0.76</td>
                      <td class="numeric">54,567</td>
                    </tr>
                    <tr>
                      <td>ACR</td>
                      <td>ACRUX LIMITED</td>
                      <td class="numeric">$3.71</td>
                      <td class="numeric"> +0.01</td>
                      <td class="numeric">0.14%</td>
                      <td class="numeric">$3.70</td>
                      <td class="numeric">$3.72</td>
                      <td class="numeric">$3.68</td>
                      <td class="numeric">191,373</td>
                    </tr>
                    <tr>
                      <td>ADU</td>
                      <td>ADAMUS RESOURCES LIMITED</td>
                      <td class="numeric">$0.72</td>
                      <td class="numeric">0.00</td>
                      <td class="numeric">0.00%</td>
                      <td class="numeric">$0.73</td>
                      <td class="numeric">$0.74</td>
                      <td class="numeric">$0.72</td>
                      <td class="numeric">8,602,291</td>
                    </tr>
                    <tr>
                      <td>AGG</td>
                      <td>ANGLOGOLD ASHANTI LIMITED</td>
                      <td class="numeric">$7.81</td>
                      <td class="numeric">-0.22</td>
                      <td class="numeric">-2.74%</td>
                      <td class="numeric">$7.82</td>
                      <td class="numeric">$7.82</td>
                      <td class="numeric">$7.81</td>
                      <td class="numeric">148</td>
                    </tr>
                    <tr>
                      <td>AGK</td>
                      <td>AGL ENERGY LIMITED</td>
                      <td class="numeric">$13.82</td>
                      <td class="numeric"> +0.02</td>
                      <td class="numeric">0.14%</td>
                      <td class="numeric">$13.83</td>
                      <td class="numeric">$13.83</td>
                      <td class="numeric">$13.67</td>
                      <td class="numeric">846,403</td>
                    </tr>
                    <tr>
                      <td>AGO</td>
                      <td>ATLAS IRON LIMITED</td>
                      <td class="numeric">$3.17</td>
                      <td class="numeric">-0.02</td>
                      <td class="numeric">-0.47%</td>
                      <td class="numeric">$3.11</td>
                      <td class="numeric">$3.22</td>
                      <td class="numeric">$3.10</td>
                      <td class="numeric">5,416,303</td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> No More Table</h4>
              <section id="no-more-tables">
                <table class="table table-bordered table-striped table-condensed cf">
                  <thead class="cf">
                    <tr>
                      <th>Code</th>
                      <th>Company</th>
                      <th class="numeric">Price</th>
                      <th class="numeric">Change</th>
                      <th class="numeric">Change %</th>
                      <th class="numeric">Open</th>
                      <th class="numeric">High</th>
                      <th class="numeric">Low</th>
                      <th class="numeric">Volume</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Code">AAC</td>
                      <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                      <td class="numeric" data-title="Price">$1.38</td>
                      <td class="numeric" data-title="Change">-0.01</td>
                      <td class="numeric" data-title="Change %">-0.36%</td>
                      <td class="numeric" data-title="Open">$1.39</td>
                      <td class="numeric" data-title="High">$1.39</td>
                      <td class="numeric" data-title="Low">$1.38</td>
                      <td class="numeric" data-title="Volume">9,395</td>
                    </tr>
                    <tr>
                      <td data-title="Code">AAD</td>
                      <td data-title="Company">ARDENT LEISURE GROUP</td>
                      <td class="numeric" data-title="Price">$1.15</td>
                      <td class="numeric" data-title="Change"> +0.02</td>
                      <td class="numeric" data-title="Change %">1.32%</td>
                      <td class="numeric" data-title="Open">$1.14</td>
                      <td class="numeric" data-title="High">$1.15</td>
                      <td class="numeric" data-title="Low">$1.13</td>
                      <td class="numeric" data-title="Volume">56,431</td>
                    </tr>
                    <tr>
                      <td data-title="Code">AAX</td>
                      <td data-title="Company">AUSENCO LIMITED</td>
                      <td class="numeric" data-title="Price">$4.00</td>
                      <td class="numeric" data-title="Change">-0.04</td>
                      <td class="numeric" data-title="Change %">-0.99%</td>
                      <td class="numeric" data-title="Open">$4.01</td>
                      <td class="numeric" data-title="High">$4.05</td>
                      <td class="numeric" data-title="Low">$4.00</td>
                      <td class="numeric" data-title="Volume">90,641</td>
                    </tr>
                    <tr>
                      <td data-title="Code">ABC</td>
                      <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
                      <td class="numeric" data-title="Price">$3.00</td>
                      <td class="numeric" data-title="Change"> +0.06</td>
                      <td class="numeric" data-title="Change %">2.04%</td>
                      <td class="numeric" data-title="Open">$2.98</td>
                      <td class="numeric" data-title="High">$3.00</td>
                      <td class="numeric" data-title="Low">$2.96</td>
                      <td class="numeric" data-title="Volume">862,518</td>
                    </tr>
                    <tr>
                      <td data-title="Code">ABP</td>
                      <td data-title="Company">ABACUS PROPERTY GROUP</td>
                      <td class="numeric" data-title="Price">$1.91</td>
                      <td class="numeric" data-title="Change">0.00</td>
                      <td class="numeric" data-title="Change %">0.00%</td>
                      <td class="numeric" data-title="Open">$1.92</td>
                      <td class="numeric" data-title="High">$1.93</td>
                      <td class="numeric" data-title="Low">$1.90</td>
                      <td class="numeric" data-title="Volume">595,701</td>
                    </tr>
                    <tr>
                      <td data-title="Code">ABY</td>
                      <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
                      <td class="numeric" data-title="Price">$0.77</td>
                      <td class="numeric" data-title="Change"> +0.02</td>
                      <td class="numeric" data-title="Change %">2.00%</td>
                      <td class="numeric" data-title="Open">$0.76</td>
                      <td class="numeric" data-title="High">$0.77</td>
                      <td class="numeric" data-title="Low">$0.76</td>
                      <td class="numeric" data-title="Volume">54,567</td>
                    </tr>
                    <tr>
                      <td data-title="Code">ACR</td>
                      <td data-title="Company">ACRUX LIMITED</td>
                      <td class="numeric" data-title="Price">$3.71</td>
                      <td class="numeric" data-title="Change"> +0.01</td>
                      <td class="numeric" data-title="Change %">0.14%</td>
                      <td class="numeric" data-title="Open">$3.70</td>
                      <td class="numeric" data-title="High">$3.72</td>
                      <td class="numeric" data-title="Low">$3.68</td>
                      <td class="numeric" data-title="Volume">191,373</td>
                    </tr>
                    <tr>
                      <td data-title="Code">ADU</td>
                      <td data-title="Company">ADAMUS RESOURCES LIMITED</td>
                      <td class="numeric" data-title="Price">$0.72</td>
                      <td class="numeric" data-title="Change">0.00</td>
                      <td class="numeric" data-title="Change %">0.00%</td>
                      <td class="numeric" data-title="Open">$0.73</td>
                      <td class="numeric" data-title="High">$0.74</td>
                      <td class="numeric" data-title="Low">$0.72</td>
                      <td class="numeric" data-title="Volume">8,602,291</td>
                    </tr>
                    <tr>
                      <td data-title="Code">AGG</td>
                      <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
                      <td class="numeric" data-title="Price">$7.81</td>
                      <td class="numeric" data-title="Change">-0.22</td>
                      <td class="numeric" data-title="Change %">-2.74%</td>
                      <td class="numeric" data-title="Open">$7.82</td>
                      <td class="numeric" data-title="High">$7.82</td>
                      <td class="numeric" data-title="Low">$7.81</td>
                      <td class="numeric" data-title="Volume">148</td>
                    </tr>
                    <tr>
                      <td data-title="Code">AGK</td>
                      <td data-title="Company">AGL ENERGY LIMITED</td>
                      <td class="numeric" data-title="Price">$13.82</td>
                      <td class="numeric" data-title="Change"> +0.02</td>
                      <td class="numeric" data-title="Change %">0.14%</td>
                      <td class="numeric" data-title="Open">$13.83</td>
                      <td class="numeric" data-title="High">$13.83</td>
                      <td class="numeric" data-title="Low">$13.67</td>
                      <td class="numeric" data-title="Volume">846,403</td>
                    </tr>
                    <tr>
                      <td data-title="Code">AGO</td>
                      <td data-title="Company">ATLAS IRON LIMITED</td>
                      <td class="numeric" data-title="Price">$3.17</td>
                      <td class="numeric" data-title="Change">-0.02</td>
                      <td class="numeric" data-title="Change %">-0.47%</td>
                      <td class="numeric" data-title="Open">$3.11</td>
                      <td class="numeric" data-title="High">$3.22</td>
                      <td class="numeric" data-title="Low">$3.10</td>
                      <td class="numeric" data-title="Volume">5,416,303</td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="responsive_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
</body>

</html>
