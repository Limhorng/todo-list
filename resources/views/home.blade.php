<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body >
    <div id="app" class="grid place-items-ceneter min-h-screen">
        <div class="p-4 max-w-5xl grid gap-4 md:grid-cols-3">
            <h1 class="text-4xl font-extrabold md:col-span-3">SERSITY</h1>
            <div class="h-32 bg-blue-500 md:col-span-2 square"></div>
            <p>Online Community</p>
            <div class="h-32 bg-blue-500 square"></div>
            <div class="h-32 bg-pink-500"></div>
            <div class="h-32 bg-blue-500 square"></div>
            <div class="h-32 bg-pink-500"></div>
            <div class="h-32 bg-blue-500 square"></div>
        </div>

    </div>
</body>
    <script src="{{ asset('js/app.js') }}"> </script>
</html>
