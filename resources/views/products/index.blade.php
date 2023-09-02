<!DOCTYPE HTML >
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('sucess'))
            <div>
                {{session('sucess')}}
            </div>
        @endif
        @if(session()->has('delete'))
            <div>
                {{session('delete')}}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product'=>$product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route("product.delete", ["product"  => $product] )}}">
                            @csrf
                            @method("delete")
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
