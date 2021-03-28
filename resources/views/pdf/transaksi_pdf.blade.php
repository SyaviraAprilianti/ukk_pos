
<!DOCTYPE html>
<html>

<head>
    <title>Report Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h4>Report Transaksi</h4>
    </center>

    <table class="table table-striped table-bordered table-hover"
                                                id="dataTables-example">
                                                <thead>
                                            <tr>
                                                <th>Id Transaksi</th>
                                                <th>Order Id</th>
                                                 <th>Total Bayar </th> 
                                                 <th>Tanggal Order</th>

                                            </tr>
                                        </thead>
                                         <tbody>
                                            @foreach( $transaksi as $t )
                                            <tr>
                                                <td>{{ $t->id_transaksi}}</td>
                                                <td>{{ $t->order_id }}</td>
                                                <td>{{ $t->total_bayar }}</td>
                                                <td>{{ $t->tanggal_order }}</td>
                                               
                                            </tr>
                                            @endforeach
                                        </tbody>
                                            </table>

</body>

</html>
