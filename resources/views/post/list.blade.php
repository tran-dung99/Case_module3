<a href="{{route("posts.showFormCreate")}}">Add new post</a>
<a href="{{route("logout")}}">Logout</a>
<a href="{{route("resetPassword")}}">đổi mật khẩu</a>
<table border="1px">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>User</th>
        <th>Category</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>
            @foreach($post->categories as $category)
            {{ $category->name }} |
            @endforeach
            </td>
            <td><a href="{{route("posts.delete",$post->id)}}">Delete</a></td>
            <td><a href="{{route("posts.detail",$post->id)}}">Detail</a></td>
            <td><a href="{{route('posts.showFormUpdate',$post->id)}}">Update</a></td>
        </tr>

    @endforeach
    </tbody>
</table>
