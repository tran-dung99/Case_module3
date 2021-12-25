<form action="{{route('posts.create')}}" method="post">
    @csrf
    <input type="text" placeholder="Nhập tiêu đề" name="title">

    <input type="text" placeholder="Nhập nội dung" name="content">
    <select name="user_id">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <hr>
    <h3>Thể loại</h3>
    @foreach($categories as $category)
        <input type="checkbox" name="category[]" value="{{$category->id}}" > {{$category->name}} <br>
    @endforeach
    <br>
    <button type="submit">Add</button>
    <a href="{{route("users.index")}}">Quay lại</a>
</form>
