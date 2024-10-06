<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    @vite('resources/css/app.css')

</head>

<body>
    @include('components.nav')
    @yield("content")
</body>

</html>