<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/edit.css">
    <title>Edit your Entry</title>
</head>
<body>
    <p class="greeting">Please Feel Free to Update your Cat's Details</p>
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
        <form method="POST" action="{{route('collection.update', ['cat' => $cat])}}">
            @csrf
            @method('put')
            <div>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name e.g. Lil Fuzz Ball" value="{{$cat->name}}">
                </div>
                <div>
                    <label>Breed</label>
                    <select name="breed" value="{{$cat->breed}}">
                        <option value="Ginger_Cat">Ginger Cat</option>
                        <option value="Exotic_Shorthair_Cat">Exotic Shorthair Cat</option>
                        <option value="Maine_Coon_Cat">Maine Coon Cat</option>
                        <option value="Ragdoll_Cat">Ragdoll Cat</option>
                        <option value="Tabby_Cat">Tabby Cat</option>
                    </select>
                </div>
                <div>
                    <label>Description</label>
                    <input type="text" name="description" placeholder="What defines your feline?" value="{{$cat->description}}">
                </div>
                <div>
                    <input type="submit" value="Update this Entry">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
