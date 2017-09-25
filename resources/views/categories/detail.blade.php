<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <h1>Category: <b>{{ $category->name }}</b></h1>
    <h3>Adverts:</h3>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($category->adverts as $adverts) 
            <tr>
                <td>{{ $adverts->name }}</td>
                <td>{{ $adverts->description }}</td>
                <td>{{ $adverts->price }}</td>
                <td>{{ $adverts->user->first_name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>