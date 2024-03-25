<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <form action="{{url('/product')}}" method="POST">
        @csrf 
        <div class="form-group mb-3">
            <label for="name">Name: </label>
            <input type="text" name="name" class="form-control" placeholder="Product Name...">
        </div>
        <div class="form-group mb-3">
            <label for="qty">Qty: </label>
            <input type="text" name="qty" class="form-control" placeholder="Qty...">
        </div>
        <div class="form-group mb-3">
            <label for="price">Price: </label>
            <input type="text" name="price" class="form-control" placeholder="Price...">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description: </label>
            <input type="text" name="description" class="form-control" placeholder="Description...">
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ url()->previous() }}">Back</a>
</body>
</html>
