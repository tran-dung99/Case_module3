<form action="{{route("users.create")}}" method="post">
    @csrf
    <input type="text" placeholder="Nhập tên người dùng" name="name">

    <input type="text" placeholder="Nhập email người dùng" name="email">
    <input type="password" placeholder="Nhập password người dùng" name="password">
    <button type="submit">Add</button>
    <a href="{{route("users.index")}}">Quay lại</a>
</form>
