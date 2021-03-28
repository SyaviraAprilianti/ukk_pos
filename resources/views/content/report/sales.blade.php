<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Sales</title>

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
                    <h2 style="font-family:sans-serif; color:black;"> Sales</h2>

                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown"
                        style="margin-left: auto; margin-top:20px;">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Export <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Detail Shift</a></li>
                                <li><a class="dropdown-item" href="#">Detail -Expense</a></li>
                                <li><a class="dropdown-item" href="#">Detail -Income</a></li>
                            </ul>
                        </div>
                    </div>
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
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="daterange" id="demo" class="form-control"
                            value="01/01/2018 - 01/15/2018" />
                    </div>
                </form>

                <!-- page start-->
                <div class="row mt" style="margin-top: 10px; margin-left:-29px;">
                    <div class="col-sm-3">
                        <section class="panel">
                            <div class="panel-body">
                                
                                <a href="mail_compose.html" class="btn btn-compose">
                                    Sales Summary
                                </a>
                                <ul class="nav nav-pills nav-stacked mail-nav">
                                    <li><a href="#"> Gross Profit</a></li>
                                    <li><a href="#"> Payment Methods</a></li>
                                    <li><a href="#"> Sales Type</a></li>
                                    <li><a href="#"> Item Sales </a></li>
                                    <li><a href="#"> Category Sales</a></li>
                                    <li><a href="#"> Modifer sales</a></li>
                                    <li><a href="#"> Discount</a></li>
                                    <li><a href="#"> Taxes</a></li>
                                    <li><a href="#"> Gratuity</a></li>
                                    <li><a href="#"> Collected By</a></li>
                                    <li><a href="#"> Served By</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>


                    <div class="col-sm-9">
                        <section class="panel">
                            <header class="panel-heading wht-bg">
                                <h5 class="gen-case">
                                     <a href="#" class="btn btn-compose" style="height: 35px">
                              
                                    </a>
                                    <table class="table table-responsive mk-table-summary">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-testid="row-gross-sales">
                                                <td>Gross Sales</td>
                                                <td class="text-right text-unimportant">Rp. 0</td>
                                            </tr>
                                            <tr data-testid="row-discounts">
                                                <td>Discounts</td>
                                                <td class="text-right text-unimportant">Rp. 0</td>
                                            </tr>
                                            <tr data-testid="row-refunds">
                                                <td>Refunds</td>
                                                <td class="text-right text-unimportant">Rp. 0</td>
                                            </tr>
                                            <tr class="divider" data-testid="row-net-sales">
                                                <td><strong>Net Sales</strong></td>
                                                <td class="text-right"><strong>Rp. 0</strong></td>
                                            </tr>
                                            <tr data-testid="row-gratuity">
                                                <td>Gratuity</td>
                                                <td class="text-right text-unimportant">Rp. 0</td>
                                            </tr>
                                            <tr data-testid="row-tax">
                                                <td>Tax</td>
                                                <td class="text-right text-unimportant">Rp. 0</td>
                                            </tr>
                                            <tr data-testid="row-rounding">
                                                <td>Rounding</td>
                                                <td class="text-right text-unimportant">Rp. 0</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="text-total" data-testid="row-total-collected">
                                                <td><strong>Total Collected</strong></td>
                                                <td class="text-right"><strong>Rp. 0</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </h5>
                            </header>
                            {{-- <div class="panel-body ">
                                <div class="mail-header row">
                                    <div class="col-md-8">
                                        <h4 class="pull-left"> Dashio, New Admin Dashboard & Front-end </h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="compose-btn pull-right">
                                            <a href="mail_compose.html" class="btn btn-sm btn-theme"><i
                                                    class="fa fa-reply"></i> Reply</a>
                                            <button class="btn  btn-sm tooltips" data-original-title="Print"
                                                type="button" data-toggle="tooltip" data-placement="top" title=""><i
                                                    class="fa fa-print"></i> </button>
                                            <button class="btn btn-sm tooltips" data-original-title="Trash"
                                                data-toggle="tooltip" data-placement="top" title=""><i
                                                    class="fa fa-trash-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-sender">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img src="img/ui-zac.jpg" alt="">
                                            <strong>Zac Doe</strong>
                                            <span>[zac@youremail.com]</span> to
                                            <strong>me</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="date"> 10:15AM 02 FEB 2014</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-mail">
                                    <p>As he bent his head in his most courtly manner, there was a secrecy in his
                                        smiling face, and he conveyed an air of mystery to those words, which struck the
                                        eyes and ears of his nephew forcibly. At the same time, the thin straight lines
                                        of the setting of the eyes, and the thin straight lips, and the markings in the
                                        nose, curved with a sarcasm that looked handsomely diabolic. </p>
                                    <p>"Yes," repeated the Marquis. "A Doctor with a daughter. Yes. So commences the new
                                        philosophy! You are fatigued. Good night!"</p>
                                    <p>It would have been of as much avail to interrogate any stone face outside the
                                        chateau as to interrogate that face of his. The nephew looked at him, in vain,
                                        in passing on to the door. </p>
                                    <p>"Good night!" said the uncle. "I look to the pleasure of seeing you again in the
                                        morning. Good repose! Light Monsieur my nephew to his chamber there!--And burn
                                        Monsieur my nephew in his bed, if you will," he added to himself, before
                                        he rang his little bell again, and summoned his valet to his own bedroom.</p>
                                </div>
                                <div class="attachment-mail">
                                    <p>
                                        <span><i class="fa fa-paperclip"></i> 2 attachments — </span>
                                        <a href="#">Download all attachments</a> |
                                        <a href="#">View all images</a>
                                    </p>
                                    <ul>
                                        <li>
                                            <a class="atch-thumb" href="#">
                                                <img src="img/instagram.jpg">
                                            </a>
                                            <a class="name" href="#">
                                                IMG_001.jpg
                                                <span>20KB</span>
                                            </a>
                                            <div class="links">
                                                <a href="#">View</a> -
                                                <a href="#">Download</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="atch-thumb" href="#">
                                                <img src="img/weather.jpg">
                                            </a>
                                            <a class="name" href="#">
                                                IMG_001.jpg
                                                <span>20KB</span>
                                            </a>
                                            <div class="links">
                                                <a href="#">View</a> -
                                                <a href="#">Download</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="compose-btn pull-left">
                                    <a href="mail_compose.html" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i>
                                        Reply</a>
                                    <button class="btn btn-sm "><i class="fa fa-arrow-right"></i> Forward</button>
                                    <button class="btn  btn-sm tooltips" data-original-title="Print" type="button"
                                        data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i>
                                    </button>
                                    <button class="btn btn-sm tooltips" data-original-title="Trash"
                                        data-toggle="tooltip" data-placement="top" title=""><i
                                            class="fa fa-trash-o"></i></button>
                                </div>
                            </div> --}}
                        </section>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.js')}}">
    </script>
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
    <!--script for this page-->
    <!-- js datepicker -->
    <script>
        $(function () {
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
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                "startDate": "02/17/2021",
                "endDate": "02/23/2021"
            }, function (start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            });
        });
    </script>

    <script type="text/javascript">
        /* Formating function for row details */
        function fnFormatDetails(oTable, nTr) {
            var aData = oTable.fnGetData(nTr);
            var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
            sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
            sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
            sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
            sOut += '</table>';

            return sOut;
        }

        $(document).ready(function () {
            /*
             * Insert a 'details' column to the table
             */
            var nCloneTh = document.createElement('th');
            var nCloneTd = document.createElement('td');
            nCloneTd.innerHTML = '<img src="{{asset('
            lib / advanced - datatable / images / details_open.png ')}}">';
            nCloneTd.className = "center";

            $('#hidden-table-info thead tr').each(function () {
                this.insertBefore(nCloneTh, this.childNodes[0]);
            });

            $('#hidden-table-info tbody tr').each(function () {
                this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
            });

            /*
             * Initialse DataTables, with no sorting on the 'details' column
             */
            var oTable = $('#hidden-table-info').dataTable({
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [0]
                }],
                "aaSorting": [
                    [1, 'asc']
                ]
            });

            /* Add event listener for opening and closing details
             * Note that the indicator for showing which row is open is not controlled by DataTables,
             * rather it is done here
             */
            $('#hidden-table-info tbody td img').live('click', function () {
                var nTr = $(this).parents('tr')[0];
                if (oTable.fnIsOpen(nTr)) {
                    /* This row is already open - close it */
                    this.src = "{{asset('lib/advanced-datatable/media/images/details_open.png')}}";
                    oTable.fnClose(nTr);
                } else {
                    /* Open this row */
                    this.src = "{{asset('lib/advanced-datatable/images/details_close.png')}}";
                    oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
                }
            });
        });
    </script>
</body>

</html>