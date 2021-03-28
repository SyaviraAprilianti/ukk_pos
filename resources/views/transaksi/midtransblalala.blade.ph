// document.querySelector('#bayarvirtual').addEventListener('click', async () => {
        //     const response = await fetch("{{ route('payment') }}",{
        //         method: 'post',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'X-CSRF-TOKEN': '{{csrf_token()}}'
        //         },
        //         body:JSON.stringify({
        //             total: totall
        //         })
        //     })
        //     const token = await response.text()
        //     snap.pay(token,{
        //         onSuccess: result =>{
        //             console.log(result)
        //             const transaction = await fetch('{{ route("transaction") }}',{
        //                 method: 'post',
        //                 headers: {
        //                     'Content-Type': 'application/json',
        //                     'X-CSRF-TOKEN': '{{csrf_token()}}'
        //                 },
        //                 body: JSON.stringify({
        //                     total_bayar: parseInt(result.gross_amount),
        //                     order_id: result.order_id
        //                 })
        //             })
        //             const idTransaksi = await transaction.text()
        //             currentOrder.forEach(item => {
        //                 const transactionItem = await fetch('{{ route("transaction_item") }}',{
        //                     method: 'post',
        //                     headers: {
        //                         'Content-Type': 'application/json',
        //                         'X-CSRF-TOKEN': '{{csrf_token()}}'
        //                     },
        //                     body: JSON.stringify({
        //                         id_transaksi: idTransaksi,
        //                         id_itemlibrary: item.id
        //                     })
        //                 })
        //             })
                    
        //         }
        //     })
            
        // })