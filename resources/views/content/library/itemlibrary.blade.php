<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Item Library</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
                <div style="display: flex; ">
                    <h2 style="font-family:sans-serif; color:black;">Item Library</h2>
                    <div class="row" style="margin-left:56%;">
                        <a class="btn btn-default ng-binding" style="margin-top:20px;">
                            Total : {{$itemlibrarycount}}
                        </a>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown"
                            style="margin-top:20px;">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Export <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/library/cetak_pdf">Export PDF</a></li>
                                    <li><a href="/itemlibrary/export_excel">Export Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" data-toggle="modal" data-target="#modaladd" class="btn btn-primary "
                            style=" margin-top:20px; height:35px;">Create Item</button>
                    </div>
                </div>



                <form class="form-inline">



                    <select class="form-control" name="outlet" id="outlet">
                        <button type="button" class="btn btn-default " disabled=""><i class="fa fa-home"
                                aria-hidden="true"></i>

                            <option value="0" selected disabled>Choose Outlet </option>
                            @foreach( $outlet as $o )
                            <option value="{{ $o->name }}">
                                {{ $o->name }}
                            </option>

                            @endforeach
                    </select>

                    <select name="categoryId" class="form-control" id="filterSelectCategory"
                        style="border-radius:15px; height:32px;">
                        <option value="all"> All Inventory </option>
                        <option value="low">Low stock Alert</option>
                    </select>
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
                                                <th>Category</th>
                                                <th>Pricing</th>
                                                <th>In Stock</th>
                                                <th>gambar</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $itemlibrary as $i )
                                            <tr data-stock="{{$i->instock}}">
                                                <td>{{ $i->name}}</td>
                                                <td>{{ $i->category }}</td>
                                                <td>{{ $i->pricing }}</td>
                                                <td>
                                                    @if(($i->instock) <= 5) {{$i->instock}} <br>
                                                        <small class="text-danger">*Persediaan hampir habis*</small>

                                                        @else
                                                        {{$i->instock}}
                                                        @endif

                                                <td><img class="card-img-top" src="{{ asset ('gambar/'. $i->gambar) }}"
                                                        alt=" " style="width: 120px;">
                                                </td>

                                                <td>
                                                    <a data-toggle="modal" data-target="#modaledit"
                                                        class="btn btn-warning passingId" data-id={{$i->id}}
                                                        data-name="{{$i->name}}" data-categ="{{$i->category}}"
                                                        data-pricing="{{$i->pricing}}" data-stok="{{$i->instock}}"
                                                        data-gambar="{{$i->gambar}} "><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></a>

                                                    <a href="/library/hapus/{{ $i->id }}" class="btn btn-danger"><i
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
                                                <input type="hidden" name="id" id="id">
                                                <label class="col-lg-2 col-sm-2 control-label">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="name" id="namelib"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Category</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" name="category" id="catlib">
                                                        <option value="0" selected disabled>Choose</option>
                                                        @foreach($categori as $c )
                                                        <option value="{{ $c->name }}">
                                                            {{ $c->name }}
                                                        </option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Pricing</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="pricing" id="prlib"
                                                        placeholder="Pricing">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">In Stock</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="instock" id="stocklib"
                                                        placeholder="In Stock">
                                                </div>
                                            </div>

                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Upload Pictures</label>
                                                <div class="col-lg-10">
                                                    <input type="file" name="gambar" class="form-control"
                                                        id="gambaredit">
                                                    <small class="text-danger">*Harap Upload Ulang Gambar </small>
                                                </div>
                                            </div>
                                            <br><br>
                                        </div>
                                        <br><br>
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

                                    <form action="create/library" method="post" enctype="multipart/form-data">
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
                                                <label class="col-lg-2 col-sm-2 control-label">Category</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" name="category" id="category">
                                                        <option value="0" selected disabled>Choose</option>
                                                        @foreach($categori as $c )
                                                        <option value="{{ $c->name }}">
                                                            {{ $c->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text" class="form-control" name="category"
                                                        id="category" placeholder="Category"> --}}
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Pricing</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="pricing" id="pricing"
                                                        placeholder="Pricing">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">In Stock</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="instock" id="instock"
                                                        placeholder="instock">
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="form-group">
                                                <label class="col-lg-2 col-sm-2 control-label">Upload Pictures</label>
                                                <div class="col-lg-10">
                                                    <input type="file" name="gambar" class="form-control">
                                                </div>
                                            </div>

                                            <small class="text-danger">*Harap Mengisi Semua Field* </small>
                                            <br><br>
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
            $("#filterSelectCategory").change(function(){
                // $("#dataTables-example tbody").find('tr').each(function (i, el) {
                //     console.log(el.data('stock'));
                // });
            });

            /*
             * Insert a 'details' column to the table
             */
            $(".passingId").click(function () {
                var id = $(this).attr('data-id');
                $("#id").val(id);
                var name = $(this).attr('data-name');
                $("#namelib").val(name);

                var category = $(this).attr('data-categ');
                $("#catlib").val(category);

                var pricing = $(this).attr('data-pricing');
                $("#prlib").val(pricing);

                var instock = $(this).attr('data-stok');
                $("#stocklib").val(instock);

                var gambar = $(this).attr('data-gambar');
                $("#gambaredit").val(gambar);
                console.log(name);
            });

            $("#form-edit").on("submit", function (e) {
                e.preventDefault();

                var form = $(this)[0];
                var formData = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "/edititem",
                    data: formData,
                    dataType: "text",
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        swal("Success", "Data Berhasil Diubah!", "success");
                        setTimeout(function () {
                            window.location.href = "/itemlibrary";
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
