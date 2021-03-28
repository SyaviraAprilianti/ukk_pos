<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Outlet</title>
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

                <div style="display: flex; ">
                    <h2 style="font-family:sans-serif; color:black;">Outlet</h2>
                    <div class="row" style="margin-left:75%;">
                        <a class="btn btn-default ng-binding" style="margin-top:20px;">
                            Total : {{$outletcount}} </a>
                        <button type="button" data-toggle="modal" data-target="#modaladd" class="btn btn-primary "
                            style=" margin-top:20px; height:35px;">Create Outlet</button>
                    </div>
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
                                                <th>Outlet Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $outlet as $o )
                                            <tr>
                                                <td>{{ $o->name}}</td>
                                                <td>{{ $o->address }}</td>
                                                <td>{{ $o->phone }}</td>

                                                <td>
                                                    <a data-toggle="modal" data-target="#modaledit"
                                                        class="btn btn-warning passingId" data-id={{$o->id}}
                                                        data-name="{{$o->name}}" data-address="{{$o->address}}"
                                                        data-phone="{{$o->phone}}" data-provinces="{{$o->id_provinces}}"
                                                        data-regencies="{{$o->id_regencies}}"
                                                        data-districts="{{$o->id_districts}}"
                                                        data-villages="{{$o->id_villages}}" data-latitude="{{$o->latitude}}" data-longitude="{{$o->longitude}}"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                    <a href="/outlet/hapus/{{$o->id}}" class="btn btn-danger"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></a>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>



                        <!-- Modal add -->
                        <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="create/outlet" method="post">
                                            {{ csrf_field() }}
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Outlet Name"
                                                    aria-label="outlet_name" id="outlet_name" name="outlet_name"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Address"
                                                    aria-label="address" id="address" name="address"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>

                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Phone"
                                                    aria-label="phone" id="phone" name="phone"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>

                                            {{-- <form class="row" action=""   method="post"> --}}
                                            <div class="form-group">
                                                <select class="form-control" name="provinces" id="provinsiSelect">
                                                    <option value="" hidden=''>--Select Province--</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control" name="regencies" id="kabupatenSelect">
                                                    <option value="" hidden=''>--Select Regencies--</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control" name="districts" id="kecamatanSelect">
                                                    <option value="" hidden=''>--Select Districts--</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control" name="villages" id="kelurahanSelect">
                                                    <option value="" hidden=''>--Select Villages--</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Latitude"
                                                    aria-label="latitude" id="latitude" name="latitude"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Longitude"
                                                    aria-label="longitude" id="longitude" name="longitude"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- modal edit  --}}
                <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <form action=""></form>
                            <form id="form-edit" method="POST">
                            <div class="modal-body">
                                    @csrf
                                    <div class="input-group col-sm-12">
                                        <input type="hidden" name="id" id="idedit">
                                        <input type="text" class="form-control" placeholder="Outlet Name"
                                            aria-label="outlet_name" id="outletedit" name="outlet_name"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <div class="input-group col-sm-12">
                                        <input type="text" class="form-control" placeholder="Address"
                                            aria-label="address" id="addressedit" name="address"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <br>

                                    <div class="input-group col-sm-12">
                                        <input type="text" class="form-control" placeholder="Phone" aria-label="phone"
                                            id="phoneedit" name="phoneedit" aria-describedby="basic-addon1">
                                    </div>
                                    <br>

                                    {{-- <form class="row" action=""   method="post"> --}}
                                    <div class="form-group">
                                        <select class="form-control" name="provinces" id="provinsiedit">
                                            <option value="" hidden=''>--Select Province--</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="regencies" id="kabupatenedit">
                                            <option value="" hidden=''>--Select Regencies--</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="districts" id="kecamatanedit">
                                            <option value="" hidden=''>--Select Districts--</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="villages" id="kelurahanedit">
                                            <option value="" hidden=''>--Select Villages--</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Latitude"
                                                    aria-label="latitude" id="latitudeedit" name="latitude"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>
                                            <div class="input-group col-sm-12">
                                                <input type="text" class="form-control" placeholder="Longitude"
                                                    aria-label="longitude" id="longitudeedit" name="longitude"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <br>
                                    <br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
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
                $("#idedit").val(id);
                var name = $(this).attr('data-name');
                $("#outletedit").val(name);

                var address = $(this).attr('data-address');
                $("#addressedit").val(address);

                var phone = $(this).attr('data-phone');
                $("#phoneedit").val(phone);

                var latitude = $(this).attr('data-latitude');
                $("#latitudeedit").val(latitude);

                var longitude = $(this).attr('data-longitude');
                $("#longitudeedit").val(longitude);

            });

            $("#form-edit").on("submit", function (e) {
                console.log('latitude');
                e.preventDefault();
                var v_token = "{{csrf_token()}}";
                var data = {
                    'outlet_name' : $("#outletedit").val(),
                    'address' : $("#addressedit").val(),
                    'phone' : $("#phoneedit").val(), 
                    'latitude' : $("#latitudeedit").val(),
                    'longitude' : $("#longitudeedit").val(),
                    'id_provinces' : $("#provinsiedit").val(),
                    'id_regencies': $("#kabupatenedit").val(),
                    'id_districts' : $("#kecamatanedit").val(),
                    'id_villages' : $("#kelurahanedit").val(),
                   
                    'id' : $("#idedit").val(),
                    '_token': v_token,
                }
                $.ajax({
                    type: "PUT",
                    url: "/editoutlet",
                    dataType : "html",
                    data : data,
                    success: function (response) {
                        swal("Success", "Data Berhasil Diubah!", "success");
                        setTimeout(function(){ window.location.href = "/outlet"; }, 2000);
                        // window.location.href = "/outlet";
                        console.log(response)
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

        //ajax wilayah add


        $.ajax({
            type: "POST",
            url: "/api/province",
            data: {},
            dataType: "JSON",
            success: function (response) {
                $.each(response, function (item, i) {
                    $('#provinsiSelect').append('<option value="' + i.id + '">' + i.name +
                        '</option>');
                });
            }
        });

        $("#provinsiSelect").change(function () {
            $('#kabupatenSelect').find(".optKabupatenSelect").remove();
            $('#kecamatanSelect').find(".optKecamatanSelect").remove();
            $('#kelurahanSelect').find(".optKelurahanSelect").remove();
            var provinsi_id = $("#provinsiSelect").val();
            $.ajax({
                type: "POST",
                url: "/api/regency",
                data: {
                    id: provinsi_id,
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (item, i) {
                        $('#kabupatenSelect').append('<option value="' + i.id +
                            '" class="optKabupatenSelect">' + i.name + '</option>');
                    });
                }
            });
        });

        $("#kabupatenSelect").change(function () {
            $('#kecamatanSelect').find(".optKecamatanSelect").remove();
            $('#kecamatanSelect').find(".optKecamatanSelect").remove();
            $('#kelurahanSelect').find(".optKelurahanSelect").remove();
            var kabupaten_id = $("#kabupatenSelect").val();
            $.ajax({
                type: "POST",
                url: "/api/district",
                data: {
                    id: kabupaten_id,
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (item, i) {
                        $('#kecamatanSelect').append('<option value="' + i.id +
                            '" class="optKecamatanSelect">' + i.name + '</option>');
                    });
                }
            });
        });

        $("#kecamatanSelect").change(function () {
            $('#kelurahanSelect').find(".optKelurahanSelect").remove();
            var kecamatan_id = $("#kecamatanSelect").val();
            $.ajax({
                type: "POST",
                url: "/api/village",
                data: {
                    id: kecamatan_id,
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (item, i) {
                        $('#kelurahanSelect').append('<option value="' + i.id +
                            '" class="optKelurahanSelect">' + i.name + '</option>');
                    });
                }
            });
        });

        //ajax wilayah edit
        $.ajax({
            type: "POST",
            url: "/api/province",
            data: {},
            dataType: "JSON",
            success: function (response) {
                $.each(response, function (item, i) {
                    $('#provinsiedit').append('<option value="' + i.id + '">' + i.name +
                        '</option>');
                });
            }
        });

        $("#provinsiedit").change(function () {
            $('#kabupatenedit').find(".optKabupatenedit").remove();
            $('#kecamatanedit').find(".optKecamatanedit").remove();
            $('#kelurahanedit').find(".optKelurahanedit").remove();
            var provinsi_id = $("#provinsiedit").val();
            $.ajax({
                type: "POST",
                url: "/api/regency",
                data: {
                    id: provinsi_id,
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (item, i) {
                        $('#kabupatenedit').append('<option value="' + i.id +
                            '" class="optKabupatenedit">' + i.name + '</option>');
                    });
                }
            });
        });

        $("#kabupatenedit").change(function () {
            $('#kecamatanedit').find(".optKecamatanedit").remove();
            $('#kecamatanedit').find(".optKecamatanedit").remove();
            $('#kelurahanedit').find(".optKelurahanedit").remove();
            var kabupaten_id = $("#kabupatenedit").val();
            $.ajax({
                type: "POST",
                url: "/api/district",
                data: {
                    id: kabupaten_id,
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (item, i) {
                        $('#kecamatanedit').append('<option value="' + i.id +
                            '" class="optKecamatanedit">' + i.name + '</option>');
                    });
                }
            });
        });

        $("#kecamatanedit").change(function () {
            $('#kelurahanedit').find(".optKelurahanedit").remove();
            var kecamatan_id = $("#kecamatanedit").val();
            $.ajax({
                type: "POST",
                url: "/api/village",
                data: {
                    id: kecamatan_id,
                },
                dataType: "JSON",
                success: function (response) {
                    $.each(response, function (item, i) {
                        $('#kelurahanedit').append('<option value="' + i.id +
                            '" class="optKelurahanedit">' + i.name + '</option>');
                    });
                }
            });
        });

    </script>
</body>

</html>
