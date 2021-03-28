<!DOCTYPE html>
<html>

<head>
    <title>Item Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h4>Item Library</h4>
    </center>

    <table class="table table-striped table-bordered table-hover"
                                                id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Pricing</th>
                                                        <th>In Stock</th>    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $itemlibrary as $i )
                                                    <tr>
                                                        <td>{{ $i->name}}</td>
                                                        <td>{{ $i->category }}</td>
                                                        <td>{{ $i->pricing }}</td>
                                                        <td>{{ $i->instock }}</td> 
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

</body>

</html>
