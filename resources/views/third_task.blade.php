<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>
<div class="container" style="width:600px;">
    @if (!empty($newArray))
        <table class="table table-bordered text-center">
            <thead>
            <tr class="text-center">
                <th>"Ключ" массива</th>
                <th>Название города</th>
            </tr>
            </thead>
            <tbody>
            @foreach($newArray as $key => $value)
                <tr>
                    <th>{{$key}}</th>
                    <th>{{$value}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">В массиве нет ключей кратных 3<p>
    @endif
</div>
</body>
</html>