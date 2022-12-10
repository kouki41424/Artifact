<!DOCTYPE HTML>
<html lang="{{str_replace('_','-',app()->getLocale() )}}">
    <head>
        <meta charset ="utf-8">
        <x-app-layout>
            <x-slot name="header">
                POST
            </x-slot>
            <body>
                <h1>Blog Name</h1>
                
                <form action="/users" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class ="image_path">
                        <input type="file" name ="image">
                    
                    </div>
                 
                    <div class ="name">
                        <textarea name ="review[name]" placeholder "お酒の名前" value="{{old('review.name')}}"></textarea>
                        <p class="name_error" style ="color.red">{{$errors->first('review.name')}}</p>
                    </div>
                    <div class ="abv">
                        <select name ="review[abv]" >
                            
                            <option value="0~1%">0~1%</option>
                            <option value="2~4%">2~4%</option>
                            <option value="5~7%">5~7%</option>
                            <option value="8~9%">8~9%</option>
                            <option value="10~12%">10~12%</option>
                            <option value="13~15%">13~15%</option>
                            <option value="その他">15%以上</option>
                            
                        </select>
                    </div>
                    <div class = "price">
                            <textarea name ="review[price]" placeholder = "値段" value = "{{old('review.price')}}"/></textarea>
                        
                    </div>
                    
                    <div class ="body">
                        <textarea name ="review[body]" placeholder="コメント" value="{{old('review.body')}}"/></textarea>
                        <p class="body_error" style ="color.red">{{$errors->first('review.body') }}</p>
                    </div>
                [<input type="submit" value="投稿"/>]
                </form>
                <div class ="back">
                    [<a href="/">完了</a>]
                </div>
            </body>
        </x-app-layout>
    </head>
</html>