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
    <div>
        @if ($errors -> any())
            <ul>
                @foreach ($errors->all() as $errors )
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Name: </label>
            <input type="text" name="name" class="form-control" placeholder="Product Name..." value ={{$product->name}}>
        </div>
        <div class="form-group mb-3">
            <label for="qty">Qty: </label>
            <input type="text" name="qty" class="form-control" placeholder="Qty..." value ={{$product->qty}}>
        </div>
        <div class="form-group mb-3">
            <label for="price">Price: </label>
            <input type="text" name="price" class="form-control" placeholder="Price..." value ={{$product->price}}>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description: </label>
            <input type="text" name="description" class="form-control" placeholder="Description..." value ={{$product->description}}>
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ url()->previous() }}">Back</a>
</body>
</html>
