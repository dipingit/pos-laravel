<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts of sb admin head tag -->
        <link href="{{ asset('public/admin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!--scripts-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body class="sb-nav-fixed">
                        <!-- Authentication Links -->
                        @guest
                           
                        @else
                                <!-- Top Bar Start -->
            <!-- Navbar-->
              
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" id="topbar">
            <a class="navbar-brand" href="index.html">Dip's Inventory</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                </li>
            </ul>
        </nav>
    
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav"  id="leftbar">
                <nav class="sb-sidenav accordion sb-sidenav-dark"  id="sidenavAccordion">
                    <div class="sb-sidenav-menu" >
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            {{-- <a class="nav-link" href="{{ route('home') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a> --}}
                            <a class="nav-link bg-info" href="{{ route('pos') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-white"></i></div>
                                 <span class ="text-white"> POS </span>
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Employee
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{ \Request::is('add-employee') ? 'show' : '' || \Request::is('all-employee') ? 'show' : ''   }}" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link "  href="{{ route('add.employee') }}">Add Employee</a>
                                    <a class="nav-link" href="{{ route('all.employee') }}">All Employee</a>
                                </nav>
                        </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Customer
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                                <div class="collapse {{ \Request::is('add-customer') ? 'show' : '' || \Request::is('all-customer') ? 'show' : ''   }}" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('add.customer') }}">Add Customers</a>
                                    <a class="nav-link" href="{{ route('all.customer') }}">All Customer</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Suppliers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                                <div class="collapse {{ \Request::is('add-supplier') ? 'show' : '' || \Request::is('all-supplier') ? 'show' : ''   }}" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('add.supplier') }}">Add Supplier</a>
                                    <a class="nav-link" href="{{ route('all.supplier') }}">All Supplier</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Salary(EMP)
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{ \Request::is('add-advenced-salary') ? 'show' : '' || \Request::is('all-advenced-salary') ? 'show' : '' || \Request::is('pay-salary') ? 'show' : '' || \Request::is('last-month-salary') ? 'show' : ''  }}" id="collapsePages3" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                     <li><a class="nav-link" href="{{ route('add.advancedsalary') }}">Add Advanced Salary</a></li>
                                    <li><a class="nav-link" href="{{ route('all.advancedsalary') }}">All Advanced Salary</a></li>
                                    <li><a class="nav-link" href="{{ route('pay.salary') }}">Pay Salary</a></li>
                                    <li><a class="nav-link" href="">Last Month Salary</a></li> 
                                </nav>
                            </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                        Categories
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse {{ \Request::is('add-category') ? 'show' : '' || \Request::is('all-catgory') ? 'show' : ''   }}" id="collapsePages4" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="{{ route('add.category') }}">
                                                Add Category
                                            </a>
                                            <a class="nav-link collapsed" href="{{ route('all.category') }}">
                                                All Categories
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                        Products
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse {{ \Request::is('add-product') ? 'show' : '' || \Request::is('all-product') ? 'show' : '' || \Request::is('import-product') ? 'show' : ''}}" id="collapsePages5" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                             <a class="nav-link collapsed" href="{{ route('add.product') }}">Add Product</a>
                                            <a class="nav-link collapsed" href="{{ route('all.product') }}">All Products</a>
                                            <a class="nav-link collapsed" href="{{ route('import.product') }}">Import Product</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages6" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                        Expense
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse {{ \Request::is('add-expense') ? 'show' : '' || \Request::is('today-expense') ? 'show' : '' || \Request::is('monthly-expense') ? 'show' : '' || \Request::is('yearly-expense') ? 'show' : ''}}" id="collapsePages6" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="{{ route('add.expense') }}">Add New</a>    
                                            <a class="nav-link collapsed" href="{{ route('today.expense') }}">Today Expense</a>    
                                            <a class="nav-link collapsed" href="{{ route('monthly.expense') }}">Monthly Expense</a>    
                                            <a class="nav-link collapsed" href="{{ route('yearly.expense') }}">Yearly Expense</a>  
                                        </nav>
                                    </div>
                          
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages7" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                        Orders
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse {{ \Request::is('pending/order') ? 'show' : '' || \Request::is('success/order') ? 'show' : ''   }}" id="collapsePages7" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                           <a class="nav-link collapsed" href="{{ route('pending.orders') }}">Pending Orders</a>
                                           <a class="nav-link collapsed" href="{{ route('success.orders') }}">Success Orders</a>    
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages8" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                        Sales Report
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse {{ \Request::is('add.customer') ? 'show' : '' || \Request::is('all.customer') ? 'show' : ''   }}" id="collapsePages8" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                First
                                            </a>
                                            <a class="nav-link collapsed" to="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                Second
                                            </a>
                                        </nav>
                                    </div>

                            {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages9" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                        Attendance
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse {{ \Request::is('take-attendence') ? 'show' : '' || \Request::is('all-attendence') ? 'show' : ''   }}" id="collapsePages9" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="{{ route('take.attendence') }}">Take Attendance</a>
                                             <a class="nav-link collapsed" href="{{ route('all.attendence') }}">All Attendances</a>
                                        </nav>
                                    </div> --}}
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            @endguest
        </div>

        @yield('content')
        
     {{-- <main class="py-4">
        </main>
    </div> --}}


            <!-- Left Sidebar End -->


            <script>
            var resizefunc = [];
        </script>

        <!-- script of sb admin body tag-->
        
         <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('public/admin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        


        <!--script end-->
       

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
         <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>


        <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
    </script>
     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
</body>
</html>
