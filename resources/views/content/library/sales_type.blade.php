<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Sales Type</title>

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
    {{-- <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> --}}
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

                <!-- Button trigger modal -->

                <div style="display: flex; align-items: center">
                    <h2 style="font-family:sans-serif; color:black;">Sales Type</h2>
                    <button type="button" class="btn btn-primary "
                        style="margin-left: auto; height:35px; margin-right:5px;" data-toggle="modal"
                        data-target="#modaladd">Create Sales Type</button>
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

                <div class="row" style="margin-top:-10px;">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $salestype as $st )
                                            <tr>
                                                <td>{{$st->salestype_name}}</td>
                                                <td>
                                                   <a data-toggle="modal" data-target="#modaledit"
                                                        class="btn btn-warning passingId" data-id={{$st->id}}
                                                        data-sales="{{$st->salestype_name}}"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>

                                                    <a href="/salestype/hapus/{{ $st->id }}" class="btn btn-danger"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        {{-- add --}}
                        <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ADD SALES TYPE</h5>
                                    </div>
                                    <form action="create/salestype" method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="id">
                                                <label class="col-lg-2 col-sm-2 control-label">Sales Type Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="sales_name" id="salestype"
                                                        placeholder="Sales Type Name">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit"> Save&nbsp;</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- edit --}}
                        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">EDIT SALES TYPE</h5>
                                    </div>

                                    <form id="form-edit">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="id-edit">
                                                <label class="col-lg-2 col-sm-2 control-label">Sales Type Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="sales_name" id="sales-name"
                                                        placeholder="Sales Type Name">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit"> Save&nbsp;</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel</button>
                                        </div>
                                    </form>
                                </div>
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
    <script src="{{asset('lib/jquery/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" language="javascript" src="{{('lib/advanced-datatable/js/jquery.js')}}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script type="text/javascript" language="javascript"
        src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{asset('lib/common-scripts.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            $(".passingId").click(function () {
                var id = $(this).attr('data-id');
                $("#id-edit").val(id);
                var promo = $(this).attr('data-sales');
                $("#sales-name").val(promo);

            });

            $("#form-edit").on("submit", function (e) {
                e.preventDefault();

                var form = $(this)[0];
                var formData = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "/editSal",
                    data: formData,
                    dataType: "text",
                    contentType: false,
                    processData: false,
                   success: function (response) {
                        swal("Success", "Data Berhasil Diubah!", "success");
                        setTimeout(function () {
                            window.location.href = "/salestype";
                        }, 2000);
                    },

                });
            })
            var nCloneTh = document.createElement('th');
            var nCloneTd = document.createElement('td');
            nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
            nCloneTd.className = "center";

            $('#dataTables-example thead tr').each(function () {
                this.insertBefore(nCloneTh, this.childNodes[0]);
            });

            $('#dataTables-example tbody tr').each(function () {
                this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
            });

            /*
             * Initialse DataTables, with no sorting on the 'details' column
             */
            var oTable = $('#dataTables-example').dataTable({
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
            $('#dataTables-example tbody td img').live('click', function () {
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
