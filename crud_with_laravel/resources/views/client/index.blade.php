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
    <div>
        <h1> Page d'acceuil</h1>

        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif

        <div>
            <table border="5" >
                <tr >
                    <th>&emsp; ID &emsp;</th>
                    <th>&emsp; Prenom &emsp;</th>
                    <th>&emsp; Nom &emsp;</th>
                    <th>&emsp; Genre &emsp;</th>
                    <th>&emsp; Age &emsp;</th>
                    <th>&emsp; Email &emsp;</th>
                </tr>

                    @foreach($clients as $client)
                    <tr>
                        <td>&emsp;{{$client->id}}&emsp;</td>
                        <td>&emsp;{{$client->first_name}}&emsp;</td>
                        <td>&emsp;{{$client->last_name}}&emsp;</td>
                        <td>&emsp; {{$client->gender}}&emsp;</td>
                        <td>&emsp;{{$client->age}}&emsp;</td>
                        <td>&emsp;{{$client->email}}&emsp;</td>
                        <td>&emsp;<button ><a href="{{route('client.update', compact('client'))}}">mettre a jour</a></button></td>
                        <td>
                            <form action="{{route('client.delete', ['client' => $client])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="supprimer">
                            </form>
                        </td>

                    </tr>
                    @endforeach

            </table>
        </div>

        <br>
        <div>
            <button><a href="{{route('client.create')}}"> Creation d'un client</a></button>
        </div>
    </div>
</body>
</html>
