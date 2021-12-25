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
<h2>{{$user->name}}</h2>
<p>email: {{$user->email}}</p>
<p>password: {{$user->password}}</p>
<hr>
<h3>Danh sách bài viết</h3>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    </thead>

    <tbody>
     @foreach($user->posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
    </tr>
     @endforeach
    </tbody>
</table>
</body>
</html>
<a href="{{route("users.index")}}">Quay lại</a>

