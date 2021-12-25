<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>{{$post->title}}</h2>
<pre>Content: {{$post->content}}</pre>
<p>User: {{$post->user->name}}</p>
<hr>
<h3>Thể loại</h3>
@foreach($categories as $category)
    <input type="checkbox" {{$post->checkCategory($category->id)?'checked':""}} value="{{$category->id}}" name="category[]"> {{$category->name}} <br>
@endforeach
</body>
</html>
<a href="{{route("users.index")}}">Quay lại</a>

