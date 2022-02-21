<!DOCTYPE html>
<html>
<head>
    <title>Gửi mã xác nhận</title>
</head>
<body>
    <h2>Đặt lại mật khẩu cho tài khoản có email: {{$email}}</h2>
    <h4>Mã xác thực: {{$code}}</h4>
    <h4>Hoặc nhấn vào link sau để thay đổi mật khẩu http://localhost:8000/get-code-forgot-password/{{$email}}/{{$code}} </h4>
    <h4>Không chia sẻ mã này cho người lạ! Bạn có thể bị mất tài khoản.</h4>
</body>
</html>