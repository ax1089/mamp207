<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}}</title>
</head>
<body>

@include('layouts/header')

<h1>{{$username or 'guest'}}</h1>
<h2>{{$title}}</h2>
<p>
    {{$content}}
</p>
<p>
    {{date("Y-m-d H:i:s")}}
</p>
<p>{!!$pages!!}</p>


    <form action="/user/insert" method="post">
         <input type="text" name="username">
        {{csrf_field()}}
        <button>提交</button>
    </form>
@include('layouts/footer')
</body>
</html>