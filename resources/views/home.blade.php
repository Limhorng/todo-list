<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="grid place-items-ceneter min-h-screen">
    <div id="app">
        <div class="w-screen bg-white h-16 flex space-x-64 m-auto p-3">
            <div>
                <img src="{{ asset("images\Vspacestudio black.png") }}" alt="" class="h-200 mt-n3">
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </div>
        <div class="w-screen h-80 position-relative">
            {{-- <div class="w-100 h-100 position-absolute bg-homepage-banner object-cover"></div> --}}
            <img src="{{ asset('images/cover.png') }}" alt="" class="object-cover h-100 position-absolute z-0">
            <img src="{{ asset('images/white overlay.png') }}" alt="" class="object-cover h-100 position-absolute z-10 right-0">
            <div class="position-absolute w-100 h-5/6  p-4 z-20 bg-opacity-75 bg-gray-300 mt-4 context-center flex flex-col  justify-center">
                <h1 class="text-4xl color-indigo font-extrabold mb-1 w-5/6">VSPACE</h1>
                <h1 class="text-3xl color-indigo mb-3 w-5/6">Studio</h1>
                <p class="w-5/6 text-md">Based in Phnom Penh, We specialize in food and product photography</p>
                <button class="btn text-white bg-dark mt-3 w-36 px-3 py-2 font-bold">Learn more</button>
            </div>
        </div>
        <div class="h-32 w-screen flex justify-center align-center">
            <div class="m-auto position-relative  flex justify-center align-center">
                <img src="{{ asset("images/title-bg.png") }}" alt="" class="h-16 position-absolute filter grayscale z-0 mt-n3">
                <h1 class="text-3xl font-bold align-center z-10">Our Works</h1>
            </div>
        </div>
        <div class="grid gap-2 flex justify-center">
            <div class="h-80 w-80 bg-blue-500">
                <img src="" alt="">
            </div>
            <div class="h-80 w-80 bg-blue-500">

            </div>
            <div class="h-80 w-80 bg-blue-500">

            </div>
            <div class="h-80 w-80 bg-blue-500">

            </div>
            <div class="h-80 w-80 bg-blue-500">

            </div>
            <div class="h-80 w-80 bg-blue-500">

            </div>
        </div>
    </div>
</body>
    <script src="{{ asset('js/app.js') }}"> </script>
</html>
