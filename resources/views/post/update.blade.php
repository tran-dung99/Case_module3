<form action="{{route('posts.update')}}" method="post">
    @csrf
    <input type="hidden" placeholder="Nhập tiêu đề" name="id" value="{{$post->id}}">
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
        <input type="checkbox" {{$post->checkCategory($category->id)?'checked':""}} value="{{$category->id}}" name="category[]"> {{$category->name}} <br>
    @endforeach
    <br>
    <button type="submit">Add</button>
    <a href="{{route("users.index")}}">Quay lại</a>
</form>

