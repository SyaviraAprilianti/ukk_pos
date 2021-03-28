<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Receipt</title>

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->

  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{asset('lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">


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
  .row{
    overflow: scroll;
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
      <section class="wrapper">

        <div style="display: flex; ">
          <h2 style="font-family:sans-serif; color:black;">Receipt</h2>
        </div>

        <form class="form-inline">
          <div class="form-group mb-2">
            <button type="button" class="btn btn-default " disabled="">
              <div class="_29kDUM0kmoIZ6wbxqO7EUH"><img alt="Outlet icon" class="_3wmuxgpWrwlUgW4PBKHQ48"
                  src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTdweCIgdmlld0JveD0iMCAwIDE2IDE3IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+Q29tYmluZWQgU2hhcGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iU2NyZWVuIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iT3V0bGV0LURyb3Bkb3duIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIuMDAwMDAwLCAtOS4wMDAwMDApIiBmaWxsPSIjOTJBNEIxIj4KICAgICAgICAgICAgPGcgaWQ9IkNvbnRlbnQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyLjAwMDAwMCwgOS4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0yLjIwMDUzMzMzLDguNzczNjQxMzggTDIuMjAwNTMzMzMsMTYuNTQ3OTE3MiBMNS43OTkzNDgxNSwxNi41NDc5MTcyIEw1Ljc5OTM0ODE1LDExLjA4NTY0MTQgTDkuOTU2Mzg1MTksMTEuMDg1NjQxNCBMOS45NTYzODUxOSwxNi41NDc5MTcyIEwxMy40OTI5Nzc4LDE2LjU0NzkxNzIgTDEzLjQ5Mjk3NzgsOC43NzM2NDEzOCBMMi4yMDA1MzMzMyw4Ljc3MzY0MTM4IFogTTEzLjQ5MzAzNywzLjQwOTYxMzc5IEwxMy40OTMwMzcsMC41ODY0NDEzNzkgTDIuMjAwNTkyNTksMC41ODY0NDEzNzkgTDIuMjAwNTkyNTksMy40MDk2MTM3OSBDMi4yMDA1OTI1OSwzLjQwOTYxMzc5IC0xLjU4NDI5NjMsNy43MDU5MjQxNCAwLjc3MzYyOTYzLDcuNzA1OTI0MTQgTDE1LjA0NDQ0NDQsNy43MDU5MjQxNCBDMTcuMDkxODUxOSw3LjcwNTkyNDE0IDEzLjQ5MzAzNywzLjQwOTYxMzc5IDEzLjQ5MzAzNywzLjQwOTYxMzc5IFoiIGlkPSJDb21iaW5lZC1TaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=">
                <!-- react-text: 383 --> Outlet 1
                <!-- /react-text -->
              </div>
            </button>
          </div>
        </form>

        <br><br>
        <div class="container">
          <div class="row">
            <div class="col-6">
              <h3>RECEIPT INFO</h3>
              <hr>
              <br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line
              as one contiguous unit.</div>
            <div class="col-6">
             <h3>RECEIPT PREVIEW</h3>
              <hr>
              <br>Subsequent columns continue along the new line.</div>
          </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
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
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->

</body>

</html>