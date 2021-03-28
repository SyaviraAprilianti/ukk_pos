
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Loyalty Program</title>

  <!-- Bootstrap core CSS -->
     
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
body{
    background-color:white;
}
.da{
  margin-top:-32px;
}

.has-search .form-control {
    padding-left: 2.375rem;
}

.satu {
   font-size: 50px;
   font-family: HelveticaNeue,sans-serif;
    font-size: 40px;
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.25;
    letter-spacing: normal;
    text-align: left;
    color: #222;
    margin-left:100px;
   }

.dua{
  font-family: HelveticaNeue,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.57;
    text-align: left;
    color: #4a4a4a;
}
.tiga{
  font-family: HelveticaNeue,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.57;
    text-align: left;
    color: #4a4a4a;
}

._btnijo {
    font-family: ProximaNova,Arial,sans-serif;
    font-size: 18px;
    font-weight: 400;
    text-align: center;
    color: #fff;
    width: 189px;
    height: 44px;
    border-radius: 20px;
    -webkit-box-shadow: 0 0 10px #8b8b8b;
    box-shadow: 0 0 10px #8b8b8b;
    background-color: #50be00;
    margin-top: 30px;
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
        <h2 style="font-family:sans-serif; color:black;">Loyalty Program</h2>
  
            <form class="form-inline margin:center;">
              <div class="form-group mb-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iwIe4tpGK7Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
                <p class="satu">Turn Your<b> Customer </b></p>
                <p class="satu">Into<b> Loyalty Member </b></p>
                <p class="dua">Set up your Loyalty Program today and keep your customers coming back for repeat purchases!</p>
                <p class="tiga">One Program for all outlets.</p>
                <button class="btn btn-success btn-block _btnijo">TRY IT NOW<i class="fa fa-arrow-right"></i></button>
              </div>
          
            </form>
            
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

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>

</body>

</html>
