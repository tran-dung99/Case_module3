<a href="{{route("users.showFormCreate")}}">Add new user</a>
<a href="{{route("posts.list")}}">Post list</a>
<table border="1px">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route("users.delete",$user->id)}}">Delete</a></td>
            <td><a href="{{route("users.detail",$user->id)}}">Detail</a></td>
            <td><a href="{{route('users.showFromUpdate',$user->id)}}">Update</a></td>
        </tr>

    @endforeach
    </tbody>
</table>
