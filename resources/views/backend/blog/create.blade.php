<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="nhap tieu de bao viet">
    <input type="text" name="content" placeholder="Nhap noi dung bai viet">
    <input type="text" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" hidden>
    <button>Create</button>
</form>
