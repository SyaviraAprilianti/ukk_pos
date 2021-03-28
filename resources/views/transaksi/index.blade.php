<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Order</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    {{-- <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> --}}

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-lNpKtLKinWSKBELd"></script>
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
                <div class="container-fluid">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800" style="font-size:33px;">Orders</h1>
                            <div class="pull-right">
                                <button type="button" class="btn btn-info" style="height:30px;" id="semua">
                                    <h4>All Items</h4>
                                </button>
                                <button type="button" class="btn btn-info" style="height:30px;" id="makanan">
                                    <h4>Makanan</h4>
                                </button>
                                <button type="button" class="btn btn-info" style="height: 30px;" id="minuman">
                                    <h4>Minuman</h4>
                                </button>
                                <button type="button" class="btn btn-info" style="height: 30px;" id="dessert">
                                    <h4>Dessert</h4>
                                </button>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <!-- Area Chart -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 ">
                                        <h4 class=" font-weight-bold text-primary">Cashier</h4>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body" id="itemnya"
                                        style="overflow-y: scroll;overflow-x:hidden;height:530px;">
                                        <div class="row card-group">
                                            @foreach($itemlibrary as $il)
                                            <div class="col-3 mb-4 item-cashier item-{{ $il->category }}"
                                                data-id="{{ $il->id }}" data-name="{{ $il->name}}"
                                                data-price="{{ $il->pricing }}" data-image="{{ $il->gambar }}"
                                                data-kategori="{{ $il->category }}">
                                                <div style="border: none;" class="text-center">
                                                    <img style="border-radius: 15px !important;width: 100% !important;height: 100px;object-fit: cover;"
                                                        class="rounded mx-auto d-block" src="gambar/{{ $il->gambar}}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body p-2">
                                                        <h5 class="card-title font-weight-bold text-dark"
                                                            style="height: 25px;">
                                                            {{ $il['name'] }}</h5>
                                                        <p style="font-size: 14px;" class="card-text text-dark">Rp.
                                                            {{ $il['pricing'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Pie Chart -->
                            <div class="col-xl-6 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h4 class="m-0 font-weight-bold text-primary">Curent Order</h4>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div style="height: 300px;" id="current-order" class="overflow-auto">

                                        </div>
                                        <hr>
                                        {{-- <button type="button" id="bayar" style="font-size:13px;"
                                            class="btn btn-success btn-md btn-block mt-3" data-toggle="modal"
                                            data-target="#modalmodifiers">Pay Virtual Account</button> --}}
                                    <hr>
                                    <div class="row">
                                        <p class="col-8" style="font-size:13px;">Subtotal : </p>
                                        <p class="col-4 text-right" style="font-size:13px;" id="jumlah">- </p>
                                    </div>
                                    <div class="row">
                                        <vep class="col-8" style="font-size:13px;">Tax : </vep>
                                        <p class="col-4 text-right" style="font-size:13px;" id="tax"> - </p>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <p class="col-8 h4" style="font-size:13px;">Total : </p>
                                        <p class="col-4 text-right" style="font-size:13px;" id="total"> - </p>
                                    </div>
                                    <div class="row" style="visibility: hidden">
                                        @foreach($discount as $d )
                                        <p class="col-8 h4" style="font-size:13px;">Discount :</p>
                                        <p class="col-4 text-right" style="font-size:13px;" id="discount">
                                            {{ $d->name }} {{ $d->amount }}%</p>
                                        @endforeach
                                    </div>
                                    <div class="row" style="visibility: hidden">
                                        @foreach($gratuity as $g )
                                        <p class="col-8 h4" style="font-size:13px;">Gratuity :</p>
                                        <p class="col-4 text-right" style="font-size:12px;" id="gratuity">
                                            {{ $g->name }} {{ $g->amount }}%</p>
                                        @endforeach
                                    </div>

                                    {{-- <div class="buttonnya" style="font-size:13px;">
                                        @foreach($salestype as $s )
                                        <button type="button" style="font-size:13px;"
                                            class="btn btn-outline-info  btn-block mt-3" id="salestype"
                                            value="{{ $s->salestype_name }}">{{ $s->salestype_name }}</button>
                                        @endforeach
                                    </div> --}}
                                    {{-- <button type="button" style="font-size:13px;"
                                            class="btn btn-outline-info  btn-block mt-3">Dine In</button>
                                        <button type="button" style="font-size:13px;"
                                            class="btn btn-outline-info  btn-block mt-3">Take Away</button> --}}
                                    <button type="button" id="bayarvirtual" style="font-size:13px;"
                                        class="btn btn-success btn-md btn-block mt-3">Bayar</button>
                                    
                                    <br><br>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModalToping" role="dialog" style="opacity:1;">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambahkan Tooping</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="idTampung">
                            <input type="hidden" id="pricingTampung">
                            <input type="hidden" id="nameTampung">
                            <input type="hidden" id="gambarTampung">
                            <input type="hidden" id="kategoriTampung">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="appendMenuToping"></div> 
                                    </div> 
                                </div>
                            <div class="row">
                                <p class="col-12" style="font-size:13px;">Toping :</p>
                                <div class="checkbox" style="font-size:13px;">
                                    @foreach($modifiersmakan as $mm )
                                    <label class="modalToping modalTopingMakanan">
                                    <input type="checkbox" data-harga="{{ $mm->price }}" data-name="{{ $mm->name }}"
                                            class="cekbox modalToping checkedToping modalTopingMakanan" name="modifiers" id="modifiers" value="{{ $mm->price }}, {{ $mm->name }}">
                                        {{ $mm->name }}
                                    </label>
                                    @endforeach
                                    @foreach($modifiersminum as $mn )
                                    <label class="modalToping modalTopingMinuman">
                                    <input type="checkbox" data-harga="{{ $mn->price }}" data-name="{{ $mn->name }}"
                                            class="cekbox checkedToping modalToping  modalTopingMinuman" name="modifiers" id="modifiers" value="{{ $mn->price }}, {{ $mn->name }}">
                                        {{ $mn->name }}
                                    </label>
                                    @endforeach
                                    @foreach($modifiersdessert as $md )
                                    <label class="modalToping modalTopingDessert">
                                    <input type="checkbox" data-harga="{{ $md->price }}" data-name="{{ $md->name }}"
                                            class="cekbox modalToping checkedToping modalTopingDessert" name="modifiers" id="modifiers" value="{{ $md->price }}, {{ $md->name }}">
                                        {{ $md->name }}
                                    </label>
                                    @endforeach
                                    </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="saveToping">Save</button>
                       
                        </div>
                    </div>
                    
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>


                <!-- Modal -->
                {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div> --}}


            </section>
            <!-- /wrapper -->
        </section>
        <!-- Content Row -->

        <!-- End of Main Content -->
        <!--footer start-->
        @include('template.footer')

        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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
    {{-- <script type="text/javascript" src="{{asset('js/js.js')}}"></script> --}}

    <!-- js daterangepicker -->
    <script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}

    <!--common script for all pages-->
    <script src="{{asset('lib/common-scripts.js')}}"></script>

    <script>
        let currentOrder = []
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let totalprice = 0
            // itemkasir
            $(".item-cashier").on('click', function () {
                $(".checkedToping").prop('checked', false); 
                $('#myModalToping').modal('show');
                $(".modalToping").hide();
                $(".modalToping" + $(this).context.dataset.kategori).show();

                let id = $(this).context.dataset.id;
                let name = $(this).context.dataset.name;
                let pricing = $(this).context.dataset.price;
                let gambar = $(this).context.dataset.image;
                let kategori = $(this).context.dataset.kategori;

                $("#appendMenuToping").html(`<div class="col-3 mb-4 " style="margin:0px auto" data-id="${ id }" data-name="${ name }"data-price="${ pricing }" data-image="${ gambar }"data-kategori="${ kategori }"><div style="border: none;" class="text-center"><img style="border-radius: 15px !important;width: 100% !important;height: 100px;object-fit: cover;"class="rounded mx-auto d-block" src="gambar/${ gambar}" class="card-img-top" alt="..."><div class="card-body p-2"><h5 class="card-title font-weight-bold text-dark"style="height: 25px;">${ name }</h5><p style="font-size: 14px;" class="card-text text-dark">Rp.${ pricing }</p></div></div></div>`);

                $("#idTampung").val(id);
                $("#nameTampung").val(name);
                $("#pricingTampung").val(pricing);
                $("#gambarTampung").val(gambar);
                $("#kategoriTampung").val(kategori);

                // for (let i = 0; i < currentOrder.length; i++) {
                //     if (currentOrder[i]["id"] == id) {
                //         currentOrder[i]["qty"] += 1
                //         totalprice += pricing
                //         loopOrder();
                //         return
                //     }
                // }
                // addToCurrentOrder(name, id, pricing, gambar);
            })

            $("#saveToping").click(function(){
                var id = $("#idTampung").val();
                var name = $("#nameTampung").val();
                var pricing = $("#pricingTampung").val();
                var gambar = $("#gambarTampung").val();
                var kategori = $("#kategoriTampung").val();
                $('#myModalToping').modal('hide');
                var checkbox = "<ul>";
                var hargacheckbox = 0;
               $('.cekbox:checked').each(function(index, val){
                    checkbox += `<li>${$(val)[0].dataset.name} - ${$(val)[0].dataset.harga}</li>`;
                    hargacheckbox += parseInt($(val)[0].dataset.harga);
                });
                checkbox += "</ul>";
                addToCurrentOrder(name, id, pricing, gambar, checkbox, hargacheckbox);
                console.log(hargacheckbox)
            });


            function loopOrder() {
                $('#current-order').html('')
                let harga = 0
                for (let i = 0; i < currentOrder.length; i++) {
                    let component = `
            <div class="row px-2 current-order mb-2">
            <img style="border-radius: 15px !important; width: 60px !important;" class="rounded col-2 p-0" src="gambar/${currentOrder[i].gambar}" alt="...">
            <p class="col-3 mb-0 text-wrap font-weight-bold text-dark">${currentOrder[i].name}</p>
            <div class="input-group col-4 ">
                <!--<span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                        <i class="fa fa-minus"></i>
                    </button>
                </span>-->
                <input type="text" id="quanty" name="quant[2]" class="form-control input-number" value="${currentOrder[i].qty}" min="1" max="100" readonly="">
                <!--<span class="input-group-btn">
                    <button type="button" class="btn  btn-number" data-type="plus" data-field="quant[2]">
                        <i class="fa fa-plus"></i>
                    </button>
                </span>-->
            </div>
            <p class="col-3">Rp ${parseInt(currentOrder[i].pricing)  + parseInt(currentOrder[i]['hargacheckbox'])}</p>
            <p class="col-3"> ${currentOrder[i].checkbox} </p>
            </div>
            `
                    $('#current-order').append(component);

                    harga += (currentOrder[i]['pricing'] * currentOrder[i]['qty']) + currentOrder[i]['hargacheckbox']
                    let pajak = harga * 10 / 100
                    pajakk = pajak

                    totall = harga + pajak

                }
                // harga asli
                $('#jumlah').text(harga)

                // harga tax
                $('#tax').text(pajakk)

                // total beserta tax 
                $('#total').text(totall)

                // $('#totall').text('Rp.' + totall)
            }
            $('#uang').keypress(function () {
                if (event.keyCode == 13) {
                    let kembalian = $('#uang').val() - totall
                    $("#kembalian").text('Rp.' + kembalian)
                    // $('#uang').val(0)
                    // $('#jumlah').val(0)
                    // $('#tax').val(0)
                    // $('#total').val(0)
                }
            })

            function addToCurrentOrder(name, id, pricing, gambar, checkbox, hargacheckbox) {
                totalprice += pricing
                currentOrder.push({
                    'id': id,
                    'qty': 1,
                    'name': name,
                    'gambar': gambar,
                    'pricing': pricing,
                    'checkbox': checkbox,
                    'hargacheckbox': hargacheckbox
                })
                loopOrder();
            }

            $('#current-order').append(component)

            // $("#pay").on('click', function () {
            //     $.ajax({
            //         type: "POST",
            //         data: {
            //             order: currentOrder,
            //             totalprice: totalprice
            //         },
            //         url: "carshier",
            //         success: function (msg) {
            //             console.log(msg)
            //             alert('berhasil')
            //             window.location.reload();
            //         },
            //         error: function (msg) {
            //             console.log(msg)
            //             alert("There was an error. Try again please!");
            //         }
            //     });
            // })

            $("#salestype").on("click", function () {

            });
        });

        $(window).load(function () {
            $(".cekbox").on("click", function () {
                var checkNumber = 0;
                if ($(this).prop('checked') == true) {
                    var extra = parseInt($(this).attr("data-harga")) + parseInt($("#jumlah").text());
                    $("#jumlah").text(extra);
                    var totalnya = parseInt($("#jumlah").text()) + parseInt($("#tax").text());
                    $("#total").text(totalnya);
                } else {
                    var extra = parseInt($("#jumlah").text()) - parseInt($(this).attr("data-harga"));
                    $("#jumlah").text(extra);
                    var totalnya = parseInt($("#jumlah").text()) + parseInt($("#tax").text());
                    $("#total").text(totalnya);
                }

            });
        });

        $("#semua").on('click', function () {
            $.each($(".item-cashier"), function (index, val) {
                $(".item-" + $(this).context.dataset.kategori).fadeIn();
            });
        });

        $("#makanan").on('click', function () {
            $.each($(".item-cashier"), function (index, val) {
                if ($(this).context.dataset.kategori == "Makanan") {
                    $(".item-Makanan").fadeIn();
                } else {
                    $(".item-" + $(this).context.dataset.kategori).hide();
                }
            });

        });

        $("#minuman").on('click', function () {
            $.each($(".item-cashier"), function (index, val) {
                if ($(this).context.dataset.kategori == "Minuman") {
                    $(".item-Minuman").fadeIn();
                } else {
                    $(".item-" + $(this).context.dataset.kategori).hide();
                }
            });

        });

        $("#dessert").on('click', function () {
            $.each($(".item-cashier"), function (index, val) {
                if ($(this).context.dataset.kategori == "Dessert") {
                    $(".item-Dessert").fadeIn();
                } else {
                    $(".item-" + $(this).context.dataset.kategori).hide();
                }
            });
        });


        document.querySelector('#bayarvirtual').addEventListener('click', async () => {
            const response = await fetch("{{ route('payment') }}",{
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                body:JSON.stringify({
                    total: totall
                })
            })
            const token = await response.text()
            snap.pay(token,{
                onSuccess: async result =>{
                    console.log(result)
                    const transaction = await fetch('{{ route("transaction") }}',{
                        method: 'post',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{csrf_token()}}'
                        },
                        body: JSON.stringify({
                            total_bayar: totall,
                            order_id: result.order_id
                        })
                    })
                    const idTransaksi = await transaction.text()
                    console.log(idTransaksi);
                    currentOrder.forEach(item => {
                        console.log(item);
                         fetch('{{ route("transaction_item") }}',{
                            method: 'post',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            },
                            body: JSON.stringify({
                                instock: item.qty,
                                id_itemlibrary: item.id
                
                            })
                        }).catch(err=>console.log(err))
                    })
                    
                }
            })
            
        })

        

    </script>




</body>

</html>
