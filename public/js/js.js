$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let currentOrder = []
    let totalprice = 0

    $(".item-cashier").on('click', function () {
        // console.log("aa");
        // console.log($(this).context);
        let id = $(this).context.dataset.id;
        let name = $(this).context.dataset.name;
        let pricing = $(this).context.dataset.price;
        let gambar = $(this).context.dataset.image;
        for (let i = 0; i < currentOrder.length; i++) {
            if (currentOrder[i]["id"] == id) {
                currentOrder[i]["qty"] += 1
                totalprice += pricing
                loopOrder();
                return
            }
        }
        addToCurrentOrder(name, id, pricing, gambar);
    })


    function loopOrder() {
        $('#current-order').html('')
        let harga = 0
        for (let i = 0; i < currentOrder.length; i++) {
            let component = `
            <div class="row px-2 current-order mb-2">
            <img style="border-radius: 15px !important; width: 60px !important;" class="rounded col-2 p-0" src="gambar/${currentOrder[i].gambar}" alt="...">
            <p class="col-3 mb-0 text-wrap font-weight-bold text-dark">${currentOrder[i].name}</p>
            <div class="input-group col-4 ">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                        <i class="fa fa-minus"></i>
                    </button>
                </span>
                <input type="text" id="quanty" name="quant[2]" class="form-control input-number" value="${currentOrder[i].qty}" min="1" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn  btn-number" data-type="plus" data-field="quant[2]">
                        <i class="fa fa-plus"></i>
                    </button>
                </span>
            </div>
            <p class="col-3">Rp ${currentOrder[i].pricing}</p>
            </div>
            `
            $('#current-order').append(component)

            harga += currentOrder[i]['pricing'] * currentOrder[i]['qty']
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

    function addToCurrentOrder(name, id, pricing, gambar) {
        totalprice += pricing
        currentOrder.push({
            'id': id,
            'qty': 1,
            'name': name,
            'gambar': gambar,
            'pricing': pricing
        })
        loopOrder();
    }

    $('#current-order').append(component)

    $("#pay").on('click', function () {
        $.ajax({
            type: "POST",
            data: {
                order: currentOrder,
                totalprice: totalprice
            },
            url: "carshier",
            success: function (msg) {
                console.log(msg)
                alert('berhasil')
                window.location.reload();
            },
            error: function (msg) {
                console.log(msg)
                alert("There was an error. Try again please!");
            }
        });
    })

    $("#salestype").on("click", function () {

    });
});

$(window).load(function () {
    $(".cekbox").on("click", function () {
        var checkNumber = 0;
        if($(this).prop('checked') == true){
            var extra = parseInt($(this).attr("data-harga")) + parseInt($("#jumlah").text());
            $("#jumlah").text(extra);
            var totalnya = parseInt($("#jumlah").text()) + parseInt($("#tax").text());
            $("#total").text(totalnya);
        }else{
            var extra = parseInt($("#jumlah").text()) - parseInt($(this).attr("data-harga"));
            $("#jumlah").text(extra);
            var totalnya = parseInt($("#jumlah").text()) + parseInt($("#tax").text());
            $("#total").text(totalnya);
        }
        
    });
});
