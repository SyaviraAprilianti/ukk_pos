<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Employee Slots</title>

    {{-- boostrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
</style>

<body>
    <section id="container">
        <!-- *********************************************************************************************************************************************************
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
                <div style="display: flex; align-items: center">
                    <h2 style="font-family:sans-serif; color:black;">Employee Slots</h2>
                    <button type="button" class="btn btn-primary "
                        style="margin-left: auto; height:35px;">Export</button>
                </div>

                <form class="form-inline">
                    <input type="text" class="form-control" placeholder="Search Employees"
                        style="border-radius:15px; width:20%;">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" style="background-color:white; border-color: grey;"
                                class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Active Employee
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Import Items</a></li>
                                <li><a class="dropdown-item" href="#">Export Items</a></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <br><br>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Employee Name </th>
                                    <th>Role</th>
                                    <th>Assigned Outlet</th>
                                    <th>Expiration Date</th>
                                    <th>Slot Status</th>
                                    <th>Employee Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>-</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17 May 2021</td>
                                    <td>Free</td>
                                    <td><button type="button" class="btn btn-info">Invite Employee</button></td>
                                </tr>
                                <tr>
                                    <th>-</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17 May 2021</td>
                                    <td>Free</td>
                                    <td><button type="button" class="btn btn-info">Invite Employee</button></td>
                                </tr>
                                <tr>
                                    <th>-</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17 May 2021</td>
                                    <td>Free</td>
                                    <td><button type="button" class="btn btn-info">Invite Employee</button></td>
                                </tr>
                                <tr>
                                    <th>-</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17 May 2021</td>
                                    <td>Free</td>
                                    <td><button type="button" class="btn btn-info">Invite Employee</button></td>
                                </tr>
                                <tr>
                                    <th>-</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>17 May 2021</td>
                                    <td>Free</td>
                                    <td><button type="button" class="btn btn-info">Invite Employee</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /row -->
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
    <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.js')}}">
    </script>
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