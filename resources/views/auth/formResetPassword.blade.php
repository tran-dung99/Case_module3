<form action="{{route('newPassword')}}" method="post">
    @csrf
    <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
    <input type="text" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
    <input type="password" name="currentPassword" placeholder="Nhập password hiện tại">
    <input type="password" name="newPassword" placeholder="Nhập password mới">
    <button type="submit">Reset</button>
    <a href="{{route('posts.list')}}">quay lại</a>
</form>
