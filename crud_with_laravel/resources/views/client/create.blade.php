<!doctype html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{route('client.store')}}" method="post">
    @csrf
    @method('post')

    <div>
        <label for="">Prenom</label>
        <input type="text" name="first_name" value="">
    </div>
    <br>
    <div>
        <label for="">Nom</label>
        <input type="text" name="last_name" value="">
    </div>
    <br>
    <div>
        <label for="">Genre</label>
        <input type="radio" id="male" name="gender" value="M">
        <label for="male">Male</label>
        <input type="radio" id="femelle" name="gender" value="F">
        <label for="femelle">Femelle</label><br>
    </div>
    <br>
    <div>
        <label for="">Age</label>
        <input type="text" name="age" value="">
    </div>
    <br>
    <div>
        <label for="">Email</label>
        <input type="text" name="email" value="">
    </div>

    <br>
    <input type="submit" value="Enregistrer">
</form>

</body>
</html>
