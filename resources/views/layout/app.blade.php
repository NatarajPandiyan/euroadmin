<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Euro ERP | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/datepicker3.css')}}" rel="stylesheet" >
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    @stack('css-plugin')
    @stack('css-script')
  </head>
  <body data-layout="horizontal">
    <!-- Begin page -->
    <div id="wrapper">
      <!-- Navigation Bar-->
      <header id="topnav">
        <!-- Topbar Start -->
        <div class="navbar-custom">
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
              
              <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <img src="images/img07.png" alt="user-image" class="rounded-circle"> <span class="user_name">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                  <!-- item-->
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                  </div>
                  <!-- item-->
                  <a href="#" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-outline"></i>
                    <span>Profile</span>
                  </a>
                  <a href="#" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline"></i>
                    <span>Change Password</span>
                  </a>
                  <!-- item-->
                  <a href="login.html" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout-variant"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
            <!-- LOGO -->
            <div class="logo-box">
              <a href="#" class="logo text-center">
                <span class="logo-lg">
                  <p><span><img src="https://euromolten.in/img/logo/Logo_New.png" alt="purchase_icon" width="154"></span>Euro Erp</p>
                </span>
                <span class="logo-sm">
                  <p>Euro ERP</p>
                </span>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- end Topbar -->
        <div class="topbar-menu">
          <div class="container-fluid">
            <div id="navigation">
              <!-- Navigation Menu-->
              <ul class="navigation-menu">
                <li class="has-submenu active">
                  <a href="#">
                    <i class="mdi mdi-home-map-marker"></i>Masters </a>
                  <ul class="submenu">
                    <li class="active">
                      <a href="item_master.html">Item Master</a>
                    </li>
                    <li>
                      <a href="supply_master.html">Supplier Master</a>
                    </li>
                    <li class="has-submenu">
                      <a href="#">User Role Master<div class="arrow-down"></div>
                      </a>
                      <ul class="submenu">
                        <li>
                          <a href="use_roll_master.html">User Role</a>
                        </li>
                        <li>
                          <a href="use_roll_to_map.html">User Map to Role</a>
                        </li>
                        <li>
                          <a href="user_map_role_to_menu.html">User Map Role to Menu</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="category_master.html">Category Master</a>
                    </li>
                    <li>
                      <a href="unit_master.html">Unit Master</a>
                    </li>
                    <li>
                      <a href="section_master.html">Section Master</a>
                    </li>
                    <li>
                      <a href="dept_req_appr_master.html">Department Request Approve Master</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">
                    <i class="mdi mdi-transfer"></i>Transactions </a>
                  <ul class="submenu">
                    <li>
                      <a href="requistion_details.html">Purchase Request</a>
                    </li>
                    <li>
                      <a href="quotation_details.html">Quotation Entry</a>
                    </li>
                    <li>
                      <a href="purchase_indent.html">Purchase Indent</a>
                    </li>
                    <li>
                      <a href="purchase_order.html">Purchase Order</a>
                    </li>
                    <li>
                      <a href="receipt_details.html">Goods Receipt</a>
                    </li>
                    <li>
                      <a href="issue_details.html">Goods Issue</a>
                    </li>
                    <li>
                      <a href="issue_return_details.html">Goods Issue Return</a>
                    </li>
                    <li>
                      <a href="delivery_challan.html">Delivery Challan</a>
                    </li>
                    <li>
                      <a href="delivery_challan_return.html">Delivery Challan Return</a>
                    </li>
                    <li>
                      <a href="work_order.html">Work Order</a>
                    </li>
                    <li class="has-submenu">
                      <a href="#">Work Permit <div class="arrow-down"></div>
                      </a>
                      <ul class="submenu">
                        <li>
                          <a href="hot_work_permit.html">Hot Work Permit</a>
                        </li>
                        <li>
                          <a href="height_work_permit.html">Height Work Permit</a>
                        </li>
                        <li>
                          <a href="cold_work_permit.html">Cold Work Permit</a>
                        </li>
                        <li>
                          <a href="confined_space_work_permit.html">Confined Space Work Permit</a>
                        </li>
                        <li>
                          <a href="lifting_operation_permit.html">Lifting Operation Work Permit</a>
                        </li>
                      </ul>
                    </li>
                   
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="report_page.html">
                    <i class="mdi mdi-file-multiple"></i>Reports </a>
                  <ul class="submenu">
                    <li>
                      <a href="report_page.html">Stock Ledger</a>
                    </li>
                    <li>
                      <a href="report_page.html">Closing Stock</a>
                    </li>
                    <li>
                      <a href="report_page.html">Section Wise Consumption</a>
                    </li>
                    <li>
                      <a href="report_page.html">Goods Receipt</a>
                    </li>
                    <li>
                      <a href="report_page.html">Goods Receipt</a>
                    </li>
                    <li>
                      <a href="report_page.html">Consolidated Bill</a>
                    </li>
                    <li>
                      <a href="report_page.html">Purchase Indent</a>
                    </li>
                    <li>
                      <a href="report_page.html">Purchase Order</a>
                    </li>
                    <li>
                      <a href="report_page.html">Delivery Challan</a>
                    </li>
                    <li>
                      <a href="report_page.html">Consolidated DC Return</a>
                    </li>
                    <li>
                      <a href="report_page.html">DC Consumption</a>
                    </li>
                    <li>
                      <a href="report_page.html">Employeewise Issue Details</a>
                    </li>
                    <li>
                      <a href="report_page.html">Bills Received List</a>
                    </li>
                  </ul>
                </li>
                
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
      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->
      <div class="content-page">
        <div class="content">
        @yield('content') 
        </div>
        <!-- end content -->
        <!-- Footer Start -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">2023 &copy; Euro ERP System
              </div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>
   <!--  <script src="js/morris.min.js"></script>
    <script src="jsraphael.min.js"></script>
    <script src="js/dashboard.init.js"></script> -->
    <!-- App js -->
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/select2.full.min.js')}}"></script>
    @stack('js-plugin')
     
    <script src="{{asset('js/app.min.js')}}"></script>
    
    <script>
    $(document).ready(function(){
       $(".select2").select2();
    });
  </script>
    <script type="text/javascript">
     //Date picker

    var date = new Date();
    date.setDate(date.getDate());
    $('.from_datepicker').datepicker({
      todayHighlight: true,
      autoclose: true,
      format: "dd-mm-yyyy",
      startDate: date

    });

    </script>
    @stack('js-script')
  </body>
</html>