<!DOCTYPE html>
<html>

<head>
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h4>Categories</h4>
    </center>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Name</th>
                <th>Item Stocks</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach( $categories as $c )
            <tr>
                <td>{{ $c->name}}</td>
                <td>{{ $c->item_stocks }}</td>
                
            </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>
