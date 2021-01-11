<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>
<div class="container d-flex justify-content-center text-center" style="width:600px;">
    @if(isset($products))
        <table class="text-center">
            <tbody class="text-center">
                <tr>
                    @foreach($products as $product)
                        <td>{{$product['name']}}</td>
                    @endforeach
                </tr>
                <tr>
                    @foreach($products as $product)
                        <td>{{$product['price2']}}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    @else
        <p class="text-center">Ни один товар не подходит к данной выборке</p>
    @endif
</div>
</body>
</html>
