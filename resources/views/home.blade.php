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
                {{-- <side-menu-component></side-menu-component> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </div>
        <div class="w-full h-80 position-relative">
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
            <div class="h-80 w-80 bg-blue-500 overflow-hidden">
                <img src="{{ asset("images/photography/bread.jpg") }}" alt="" class="object-cover w-100 position">
            </div>
            <div class="h-80 w-80 bg-blue-500 overflow-hidden">
                <img src="{{ asset("images/photography/bread.jpg") }}" alt="" class="object-cover w-100 position">
            </div>
            <div class="h-80 w-80 bg-blue-500 overflow-hidden">
                <img src="{{ asset("images/photography/bread.jpg") }}" alt="" class="object-cover w-100 position">
            </div>
            <div class="h-80 w-80 bg-blue-500 overflow-hidden">
                <img src="{{ asset("images/photography/bread.jpg") }}" alt="" class="object-cover w-100 position">
            </div>
            <div class="h-80 w-80 bg-blue-500 overflow-hidden">
                <img src="{{ asset("images/photography/bread.jpg") }}" alt="" class="object-cover w-100 position">
            </div>
            <div class="h-80 w-80 bg-blue-500 overflow-hidden">
                <img src="{{ asset("images/photography/bread.jpg") }}" alt="" class="object-cover w-100 position">
            </div>
        </div>
        <div class="h-32 w-screen flex justify-center align-center">
            <div class="m-auto position-relative  flex justify-center align-center">
                <img src="{{ asset("images/title-bg.png") }}" alt="" class="h-16 position-absolute filter grayscale z-0 mt-n3">
                <h1 class="text-3xl font-bold align-center z-10">About Us</h1>
            </div>
        </div>
        <div class="w-full text-center px-5 text-md mb-3">
            <p>Since 2008, I’ve been providing my clients with quality photography and retouching services.</p>

            <p>Some of my works were awarded on a national level. Below are some facts about me.</p>
        </div>
        <div class="grid grid-rows-2 grid-cols-2 gap-4">
            <div class="text-center flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 w-full mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                <h1 class="text-4xl font-bold">
                    50
                </h1>
                <p class="font-bold">
                    Photograpy Award
                </p>
            </div>
            <div class="text-center flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 w-full mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                <h1 class="text-4xl font-bold">
                    50
                </h1>
                <p class="font-bold">
                    Photograpy Award
                </p>
            </div>
            <div class="text-center flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 w-full mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                <h1 class="text-4xl font-bold">
                    50
                </h1>
                <p class="font-bold">
                    Photograpy Award
                </p>
            </div>
            <div class="text-center flex flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 w-full mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                <h1 class="text-4xl font-bold">
                    50
                </h1>
                <p class="font-bold">
                    Photograpy Award
                </p>
            </div>
        </div>
        <div class="w-full flex flex-col text-center justify-center align-center bg-dark mt-5 py-3 text-white">
            <h2 class="text-xl mb-3">Looking for <i>Quality Photo</i>?</h2>
            <button class="btn outline border-white w-36 rounder p-2 text-white font-bold m-auto">Learn more</button>
        </div>
        <div class="h-32 w-screen flex justify-center align-center px-3 text-center">
            <div class="m-auto position-relative  flex justify-center align-center">
                <img src="{{ asset("images/title-bg.png") }}" alt="" class="h-16 position-absolute filter grayscale z-0 mt-n3">
                <h1 class="text-3xl font-bold align-center z-10">What Services We Provide</h1>
            </div>
        </div>
        <div class="w-full text-center px-5 text-md mb-3">
            <p>Since 2008, I’ve been providing my clients with quality photography and retouching services.</p>

            <p>Some of my works were awarded on a national level. Below are some facts about me.</p>
        </div>
        <div class="grid grid-cols-1 gap-4 p-3">
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-3xl font-extrabold mb-3">Photoshoot</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempora tempore, ut, saepe nostrum provident qui, illo quae eius facilis architecto aspernatur. Natus ratione nobis voluptatibus amet tenetur repellendus quae?</p>
            </div>
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-3xl font-extrabold mb-3">Photoshoot</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempora tempore, ut, saepe nostrum provident qui, illo quae eius facilis architecto aspernatur. Natus ratione nobis voluptatibus amet tenetur repellendus quae?</p>
            </div>
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-3xl font-extrabold mb-3">Photoshoot</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempora tempore, ut, saepe nostrum provident qui, illo quae eius facilis architecto aspernatur. Natus ratione nobis voluptatibus amet tenetur repellendus quae?</p>
            </div>
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-3xl font-extrabold mb-3">Photoshoot</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempora tempore, ut, saepe nostrum provident qui, illo quae eius facilis architecto aspernatur. Natus ratione nobis voluptatibus amet tenetur repellendus quae?</p>
            </div>
        </div>
        <div class="h-32 w-screen flex justify-center align-center px-3 text-center">
            <div class="m-auto position-relative  flex justify-center align-center">
                <img src="{{ asset("images/title-bg.png") }}" alt="" class="h-16 position-absolute filter grayscale z-0 mt-n3">
                <h1 class="text-3xl font-bold align-center z-10">Pricing Plan</h1>
            </div>
        </div>
        <div class="w-full text-center px-5 text-md mb-3">
            <p>Since 2008, I’ve been providing my clients with quality photography and retouching services.</p>

            <p>Some of my works were awarded on a national level. Below are some facts about me.</p>
        </div>
        <div class="grid grid-cols-1 gap-4 p-3">
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-extrabold mb-5">Starter</h3>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        20
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Photoshoots
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Video
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Hour
                    </div>
                </div>
                <h1 class="text-4xl my-4">$ 250.00</h1>
                <button class="btn bg-dark text-white py-2 px-4">ORDER NOW</button>
            </div>
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-extrabold mb-5">Starter</h3>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        20
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Photoshoots
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Video
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Hour
                    </div>
                </div>
                <h1 class="text-4xl my-4">$ 250.00</h1>
                <button class="btn bg-dark text-white py-2 px-4">ORDER NOW</button>
            </div>
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-extrabold mb-5">Starter</h3>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        20
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Photoshoots
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Video
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Hour
                    </div>
                </div>
                <h1 class="text-4xl my-4">$ 250.00</h1>
                <button class="btn bg-dark text-white py-2 px-4">ORDER NOW</button>
            </div>
            <div class="p-3 flex flex-col justify-center align-center text-center rounded border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-center align-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-extrabold mb-5">Starter</h3>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        20
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Photoshoots
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Video
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="w-2/6 text-right font-bold p-2">
                        1
                    </div>
                    <div class="w-4/6 text-left p-2">
                        Hour
                    </div>
                </div>
                <h1 class="text-4xl my-4">$ 250.00</h1>
                <button class="btn bg-dark text-white py-2 px-4">ORDER NOW</button>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 p-3 bg-dark text-white">
            <div class="p-3">
                <h1 class="text-xl mb-2 font-extrabold">About Us</h1>
                <p>
                    My name is Jonathan Davis and I’m professional photographer and retoucher. I’m offering my services to individual and corporate clients throughout the USA. Make your favorite life moment or event last and remain in your memory!
                </p>
            </div>
            <div class="p-3">
                <h1 class="text-xl mb-2 font-extrabold">Information</h1>
                <div class="flex w-full">
                    <div class="w-1/6 text-left">
                        <p>A</p>
                    </div>
                    <div class="w-5/6 text-left">
                        <p>vspace@studio.com</p>
                    </div>
                </div>
                <div class="flex w-full">
                    <div class="w-1/6 text-left">
                        <p>B</p>
                    </div>
                    <div class="w-5/6 text-left">
                        <p>+123123123123</p>
                    </div>
                </div>
                <div class="flex w-full">
                    <div class="w-1/6 text-left">
                        <p>C</p>
                    </div>
                    <div class="w-5/6 text-left">
                        <p>vspacestudio.com</p>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <h1 class="text-xl mb-2 font-extrabold">Contact Us</h1>
                <p>
                    Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.
                </p>
                <input type="text" class="p-2 border border-white rounded w-full mt-3">
            </div>
        </div>
        <div class="flex flex-col justify-center text-center align-center items-center w-full p-3">
            <div class="">
                <img src="{{ asset("images\Vspacestudio black.png") }}" alt="" class="h-24">
            </div>
            <p class="text-xs">© 2021 All Rights Reserved. Terms of Use and Privacy Policy</p>
        </div>
    </div>
    
</body>
    <script src="{{ asset('js/app.js') }}"> </script>
</html>
