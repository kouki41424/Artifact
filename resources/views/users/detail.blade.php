<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <x-app-layout>
            <x-slot name="header">
                DETAIL
            </x-slot>
        <body class ="antialiased">
        <p class = 'name'>{{$review->name}}</p>
        <p class = 'abv'>{{$review->abv}}</p>
        <p class = 'price'>{{$review->price}}</p>
        <p class="type_id">{{ $review->type_id }} </p>
        <p>コメント</p>
        <p class ='body'>{{$review->body}}</p>
        
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
        </x-app-layout>
        
        
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
</html>
