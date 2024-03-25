<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product CRUD</title>
</head>

<body>
    <h1>Product</h1>
    <table style="width: 100%;text-aligh:center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
        </thead>
        <tbody>
            @foreach ($products as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->name }}</td>
                    <td>{{ $products->qty }}</td>
                    <td>{{ $products->price }}</td>
                    <td>{{ $products->description }}</td>
                    <td><a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
