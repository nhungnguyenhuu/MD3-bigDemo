<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('backend.blog.create')}}">Create New Blog</a>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $key=>$blog)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->content}}</td>
            <td><a href=""></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
