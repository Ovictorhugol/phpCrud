<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name ? $product->name : "" }}">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty ? $product->qty : "" }}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price ? $product->price : "" }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description ? $product->description : "" }}"description>
        </div>
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>
