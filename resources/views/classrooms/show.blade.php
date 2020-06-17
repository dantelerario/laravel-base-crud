<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Show Classroom</h1>
        <h1>{{ $classroom->name }}</h1>

        <ul>
            <li>id: {{ $classroom->id }}</li>
            <li>description: {{ $classroom->description }}</li>
            <li>created at: {{ $classroom->created_at }}</li>
            <li>updated at: {{ $classroom->updated_at }}</li>
        </ul>
    </header>
</body>
</html>