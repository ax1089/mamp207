<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发帖页面</title>
</head>
<body>
    <form action="/tiezi" method="post">
        <input type="text" name="abc">
        {{csrf_field()}}
        <button>提交</button>
    </form>
</body>
</html>