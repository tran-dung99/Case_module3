<form action="{{route("users.update")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
    <input type="text" placeholder="Nhập tên người dùng" name="name" value="{{$user->name}}">
    <input type="text" placeholder="Nhập email người dùng" name="email" value="{{$user->email}}">
    <input type="password" placeholder="Nhập password người dùng" name="password" value="{{$user->email}}">
    <button type="submit">Update</button>
    <a href="{{route("users.index")}}">Quay lại</a>
</form>
