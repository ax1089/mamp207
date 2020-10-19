<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php if(\Session::has('error')){; ?>

    <div class="alert alert-danger" role="alert">
        <?php   echo  \Session::get('error'); ?>
    </div>
<?php } ?>
<form action="/user-2" method="post" >
    <input type="text" name="username" value="{{old('username')}}">
    <input type="password" name="password" value="{{old('password')}}">
    {{csrf_field()}}
    <button>提交</button>
</form>
</body>
</html>