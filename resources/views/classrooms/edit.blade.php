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
        <h1>Edit a new Classroom</h1>
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
    <form action="{{ route('classrooms.update', $classroom->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" value="{{ old('name', $classroom->name) }}"
            name="name" id='name' placeholder="Class name">
            <label for="description">Description *</label>
            <input type="text" class="form-control" value="{{ old('description', $classroom->description) }}"
            name="description" id='description' placeholder="Description">
        </div>
        <input type="submit" value="Edit">
    </form>
</body>
</html>