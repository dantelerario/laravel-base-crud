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
        <h1>Create a new Classroom</h1>
    </header>
    @if ($errors->any())
        <div class="alert">
            <h4>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </h4>
        </div>
    @endif
    <form action="{{ route('classrooms.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <input type="text" class="form-control"
            name="name" placeholder="Class name">
            <input type="text" class="form-control"
            name="description" placeholder="Description">
        </div>
        <input type="submit" value="Create">
    </form>
</body>
</html>