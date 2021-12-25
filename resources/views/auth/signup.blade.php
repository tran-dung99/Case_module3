<form action="{{route('signup')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên">
    <input type="text" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập password">
    <button type="submit">Login</button>
    <a href="{{route('login')}}">Đăng ký user mới</a>
</form>
