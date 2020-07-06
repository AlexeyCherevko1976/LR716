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
    
    <div style="display: flex; flex-flow: row wrap;justify-content: center; align-items: center; height: 600px; background: aqua;">

        <h2 style="display: flex; justify-content: center; align-items: center; height:100px;width: 700px;  background: olive;"> Laravel and React2 application </h2>  

        <div id="example" class="example"  style="display: flex; justify-content: center; align-items: center; height:100px;width: 700px;  background: olive;">

        </div>

        <div id="example2" class="example2" style="display: flex; justify-content: center; align-items: center; height:100px;width: 700px;  background: gold; margin: 50px;">            
            <?php
            foreach($products as $product){
                echo $product->title.' - ';
                echo $product->price.'; ';
            }
            ?></div>
        <div id="root" class="root"></div>
    </div>
        <script src="http://lr716/js/app.js" ></script>
        <!-- <script src="{{url('js/app.js')}}" ></script> -->
        <!-- <script src="{{url('js/example2.js')}}" ></script> -->
    </body>
</html>