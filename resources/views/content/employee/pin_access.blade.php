<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>PIN Access</title>

  {{-- boostrap link --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{asset('lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  <!-- css daterangepicker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<style>
  body {
    background-color: white;
  }

  .da {
    margin-top: -32px;
  }

  .has-search .form-control {
    padding-left: 2.375rem;
  }
</style>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    @include('template.topbar')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('template.sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h2 style="font-family:sans-serif; color:black;">PIN Access</h2>
        <br>
        <div class="row">
          <div class="col-sm-10 col-md-5 col-lg-11">
            <p style="font-family:sans-serif; color:black; font-size:14px;">PIN Access is a feature to lock certain
              access in Moka Apps.</p>
            <br>
            <p style="font-family:sans-serif; color:black; font-size:14px;">This PIN configuration will apply to outlets
              who have staff with PIN assigned and allowed to use PIN for in-app permission as set on <a
                href="http://103.18.76.93/magang_projek/public/employeeslots">Employee Slots</a>, and have access to
              mobile apps, as set on <a href="http://103.18.76.93/magang_projek/public/employeeaccess">Employee
                Access</a>.</p>
          </div>
        </div>
        <br>
        <div class="container">
          <div class="row">
            <div class="col-5" style="margin-left: -9px">
              <h4 style="font-family:sans-serif; color:rgb(143, 142, 142);">LIST OF ADMINISTRATOR</h4>
              <hr>
              <br>
              <p style="font-family:sans-serif; color:black; font-size:14px;">All outlets are recommended to have at
                least 1 employee with administrator role and PIN assigned. To assign employee, go to <a
                  href="http://103.18.76.93/magang_projek/public/employeeslots">Employee Slots</a></p>
                  <br>
                  <div class="table-responsive">
                        <table class="table">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Outlet</th>
                                    <th>Employee Name</th>
                                    <th>PIN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Outlet 1</th>
                                    <td></td>
                                    <td></td>
                                </tr>                           
                            </tbody>
                        </table>
                    </div>
            </div>

            <div class="col-5" style="margin-top:-18px; margin-left: 6px; ">.
                <h4 style="font-family:sans-serif; color:rgb(143, 142, 142);">LIST OF FEATURES</h4>
                <hr>
                <br>
            </div>
          </div>
        </div>


      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    @include('template.footer')

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->

  {{-- link js --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript"
    src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>

  <!-- js daterangepicker -->
  <script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!-- js datepicker -->
  {{-- <script>
$(function() {
  $('#demo').daterangepicker({
    "showWeekNumbers": true,
    "showISOWeekNumbers": true,
    "timePicker": true,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    "startDate": "02/17/2021",
    "endDate": "02/23/2021"
}, function(start, end, label) {
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});
});
</script> --}}
</body>

</html>