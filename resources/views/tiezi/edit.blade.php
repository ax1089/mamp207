<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>帖子修改</title>
</head>
<body>
<h2>修改</h2>
<form action="/tiezi/30" method="post">
    <input type="text" name="username">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <button>提交</button>
</form>


<h2>删除</h2>
<form action="/tiezi/30" method="post">
    <input type="text" name="username">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button>删除</button>
</form>
</body>
</html>