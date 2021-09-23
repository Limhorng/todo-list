<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>

    </head>
    <body >
        <div id="app">
            {{-- <layout-component></layout-component> --}}
            <div class="row">
                <div>
                    <sidebar-component></sidebar-component>
                    {{-- {{$path}} --}}
                </div>
                <div class="container-fluid" style="margin-left: 200px">
                    <header-component></header-component>
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}"> </script>
</html>
