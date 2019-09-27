<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>Show fructies</H1>
<ul>
    @foreach ($fructies as $fructy)
    <li><b>Fruit: </b> <a href="fruits/{{ $fructy->id }}">{{ $fructy->fruitname }}</a></li>

    @endforeach
</ul>
</body>
</html>