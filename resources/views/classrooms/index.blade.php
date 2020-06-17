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
                <th>Name</th>       
                <th>Age</th>
                <th>Gender</th>
                <th>Description</th>
            </thead>
            <tbody>
                {{-- @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->description }}</td>
                    </tr>
                @endforeach     --}}
            </tbody>
        </table>
  
    </main>

</body>
</html>