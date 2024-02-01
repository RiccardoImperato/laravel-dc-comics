<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $comic->title }}</title>
</head>

<body>
    <h1>{{ $comic->title }}</h1>
    <a href="{{ route('comics.index') }}">Back</a>
</body>

</html>
