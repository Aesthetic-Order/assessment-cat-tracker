<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/collection.css">
    <title>Cat Collection</title>
</head>
<body>
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="collection">Cat Collection</a>
        <a href="map">Map</a>
    </nav>
    <div>
        @if(session()->has('success'))

        <script class="alarm">
            alert('Congratulations! Your Entry was Successfuly Updated')
        </script>

        @endif
    </div>
    <div class="collection-table">
        <p class="greeting">Welcome to Your Collection of Cats</p>
        <div class="create-box">
            <a class="create" href="/collection/create">Create New Entry</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($cats as $cat )
              <tr>
                 <td>{{$cat->id}}</td>
                 <td>{{$cat->name}}</td>
                 <td>{{$cat->breed}}</td>
                 <td>{{$cat->description}}</td>
                 <td>
                    <a href="{{route('collection.edit', ['cat' => $cat])}}">Edit</a>
                 </td>
                 <td>
                    <form method="post" action="{{route('collection.destroy', ['cat' => $cat] )}}" >
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                 </td>
              </tr>
            @endforeach
        </table>
    </div>
    <footer class="footer">
        <p>Copyright &copy; of S.J.C. 2024. All images generated by Bing AI Image Creator.</p>
    </footer>
</body>
</html>