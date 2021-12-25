<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập password">
    <button type="submit">Login</button>
    <a href="{{route('showFormSignup')}}">Đăng ký user mới</a>
</form>
