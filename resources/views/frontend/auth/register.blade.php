<form action="" method="post">
    @csrf
    <p>Mời nhập tên</p>
    <input type="text" name="name" placeholder="Nhập tên">
    <p style="color: red">{{($errors->has('name') ? $errors->first('name') : '')}}</p>
    <p>Mời nhập email</p>
    <input type="text" name="email" placeholder="Nhập email">
    <p style="color: red">{{($errors->has('email') ? $errors->first('email') : '')}}</p>
    <p>Mời nhập mật khẩu</p>
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <p style="color: red">{{($errors->has('password') ? $errors->first('password') : '')}}</p>
    <p>Mời xác nhận lại nhập mật khẩu</p>
    <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu">
    <p style="color: red">{{($errors->has('confirm_password') ? $errors->first('confirm_password') : '')}}</p>
    <button>Đăng ký</button>

</form>
