<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <x-app-layout>
            <x-slot name="header">
                HOMEPAGE
            </x-slot>
    <body>
     <h1>Blog Name</h1>
     <a href = '/users/post'>投稿</a>
        <div class = 'reviews'>
            @foreach($reviews as $review)
            <div class ='review'>
                <p class = 'user_id'>{{$review->user_id}}</p>
                
                <p class = 'image_path'>
                    <img src="{{ $review->image_path }}">
                </p>
                <p class='type_id'>{{$review->type_id}}</p>
                <p class = 'name'>お酒の名前   {{$review->name}}</p>
                <p class = 'abv'>アルコール度数　{{$review->abv}}</p>
                <p class = 'price'>値段　{{$review->price}}</p>
                <p class='body'>コメント　{{$review->body}}</p>
                <a href ="/users/{{$review->id}}">詳細</a>
            </div>
            
            @endforeach
        </div>
    
        <div class ='paginate'>
            {{$reviews->links()}}
        </div>

    </body>
        </x-app-layout>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
   
</html>