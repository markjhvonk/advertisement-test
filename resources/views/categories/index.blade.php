<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <ul>
    @foreach ($categories as $category) 
        <li><a href="categories/{{$category->id}}">{{ $category->name }}</a></li>
    @endforeach
    </ul>
    
</body>
</html>