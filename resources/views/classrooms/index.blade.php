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
        <h1>Classrooms</h1>
    </header>
    <main>
        <h2>Class List</h2>
        <table class="table">
            <thead>
                <th>ID</th>       
                <th>NAME</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td>
                            <a href="{{ route('classrooms.show', $classroom->id ) }}">SHOW</a>
                        </td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
  
    </main>

</body>
</html>