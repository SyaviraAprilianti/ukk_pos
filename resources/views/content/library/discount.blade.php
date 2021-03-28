<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Discount</title>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

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
                    <h2 style="font-family:sans-serif; color:black;">Discount</h2>
                    <button type="button" class="btn btn-primary " style="height:35px; margin-left: auto;"
                        data-toggle="modal" data-target="#modaladd">Create Discount</button>
                </div>



                <form class="form-inline">
                    <input type="text" class="form-control" placeholder="Search" style="border-radius:15px; width:20%;">
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
                                                <th>Amount</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $discount as $d )
                                            <tr>
                                                <td>{{ $d->name}}</td>
                                                <td>{{ $d->amount }} %</td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#modaledit"
                                                        class="btn btn-warning passingId" data-id={{$d->id}}
                                                        data-name="{{$d->name}}" data-amount="{{$d->amount}}"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                    <a href="/discount/hapus/{{ $d->id }}" class="btn btn-danger"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        {{-- modal edit --}}


                        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    </div>
                                    <!-- <form class="form-horizontal" action="/tambahmkn" method="post" enctype="multipart/form-data" role="form"> -->

                                    <form id="form-edit">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="iddis">
                                                <label class="col-lg-2 col-sm-2 control-label">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="name" id="namedis"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Amount</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="number" min="1" max="100" class="form-control"
                                                            name="amount" id="amountdis" placeholder="Amount">
                                                        <span class="input-group-addon">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit"> Save&nbsp;</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- modaladd --}}
                        <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    </div>
                                    <!-- <form class="form-horizontal" action="/tambahmkn" method="post" enctype="multipart/form-data" role="form"> -->

                                    <form action="create/discount" method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="id">
                                                <label class="col-lg-2 col-sm-2 control-label">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <br><br>


                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Amount</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="number" min="1" max="100" class="form-control"
                                                            name="amount" id="amount" placeholder="Amount">
                                                        <span class="input-group-addon">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                              <br><br>
                                              <small class="text-danger">*Harap Mengisi Semua Field* </small>
                                            <br><br>
                                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
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
                $("#iddis").val(id);
                var name = $(this).attr('data-name');
                $("#namedis").val(name);

                var amount = $(this).attr('data-amount');
                $("#amountdis").val(amount);
            });

            $("#form-edit").on("submit", function (e) {
                e.preventDefault();

                var form = $(this)[0];
                var formData = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "/editdisc",
                    data: formData,
                    dataType: "text",
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        swal("Success", "Data Berhasil Diubah!", "success");
                        setTimeout(function () {
                            window.location.href = "/discount";
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
    @include('sweetalert::alert')
</body>

</html>
