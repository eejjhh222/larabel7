<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Laravel</title>
        <title>간단한 지도 표시하기</title>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=ptby0nqyb1&callback=initMap"></script>
        <script type="text/javascript" src="{{ asset('js/store.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>


    <div id="map" style="width:100%;height:400px;"></div>
<input type="button" id="getGPS" value="get">




    store html
    @foreach ($users as $key => $user)
        <p>{{$key}} : {{$user->name}}</p>
    @endforeach
    </body>
</html>
