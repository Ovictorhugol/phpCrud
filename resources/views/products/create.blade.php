<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>s
</head>
<body>
    <h1>Create a product</h1>
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
    <form method="post" action="{{route("product.store")}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="save new product">
        </div>
    </form>
</body>
</html>
