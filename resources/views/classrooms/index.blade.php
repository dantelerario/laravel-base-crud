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
                        <td>{{ $classrooms->id }}</td>
                        <td>{{ $classrooms->name }}</td>
                        <td>Show</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
  
    </main>

</body>
</html>