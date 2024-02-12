<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/new-entry.css">
    <title>Create New Entry</title>
</head>
<body>
    <p class="greeting">Please Feel Free to Add a New Entry</p>
    <div class="form-box">
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('collection.store')}}">
            @csrf
            @method('post')
            <div>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name e.g. Lil Fuzz Ball">
                </div>
                <div>
                    <label>Breed</label>
                    <select name="breed">
                        <option value="Ginger_Cat">Ginger Cat</option>
                        <option value="Exotic_Shorthair_Cat">Exotic Shorthair Cat</option>
                        <option value="Maine_Coon_Cat">Maine Coon Cat</option>
                        <option value="Ragdoll_Cat">Ragdoll Cat</option>
                        <option value="Tabby_Cat">Tabby Cat</option>
                    </select>
                </div>
                <div>
                    <label>Description</label>
                    <input type="text" name="description" placeholder="What defines your feline?">
                </div>
                <div>
                    <input type="submit" value="Create a New Entry">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
