<!DOCTYPE html>
<html>

<head>
    <title>Suppliers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h4>Suppliers</h4>
    </center>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Address</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                              
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach( $suppliers as $s )
                                                            <tr>
                                                                <td>{{ $s->name}}</td>
                                                                <td>{{ $s->address }}</td>
                                                                <td>{{ $s->phone }}</td>
                                                                <td>{{ $s->email }}</td>
                                                               
                                                            </tr>
                                                            @endforeach
                                                        </tbody>

    </table>

</body>

</html>
