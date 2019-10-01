<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM</title>
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bulma.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="box">
            <a class="link" href="lang/en"> English</a>
            <a class="link" href="lang/ru"> Russian</a>
        </div>
        <div id="app">
            <data-component></data-component>
        </div>
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}" ></script>
</body>
</html>
