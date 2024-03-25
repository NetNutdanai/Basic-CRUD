<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product CRUD</title>
</head>
<style>
    table,
    td,
    th{
        border: 1px solid black;
    }
    td{
        text-align: center;
    }
</style>
<body>
    <h1>Product</h1>
    <a href="{{route('product.create')}}" style="text-align: end">Create a Product</a>
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
                    <td style=" display : flex;justify-content:center"><a href="{{route('product.edit',$products->id)}}" style=" margin-right:10px">Edit</a>
                        <form action="{{route('product.delete',$products->id)}}" method= "POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value = "Delete">
                        </form>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
