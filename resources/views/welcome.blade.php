<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel React application</title>
        <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h2 style="text-align: center"> Laravel and React2 application </h2>
        <div id="root"></div>
        <div id="example" class="example"></div>
        <div id="example2" class="example2"></div>
        <script src="{{mix('js/app.js')}}" ></script>
        <!-- <script src="{{url('js/example2.js')}}" ></script> -->
    </body>
</html>