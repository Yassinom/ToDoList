<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body style="display: flex; align-items: center; justify-content: center; flex-direction: column; background-color: #d3d3d3;">
    </br></br></br></br>

        <form method="post" action="{{ route('saveItem') }}">
        {{ csrf_field() }}

            <h1>Add your task :</h1> </br>
            <input style="border: solid 1px black;" type="text" name="ListItem" placeholder="Enter your task"> </br></br>
            <button style="background-color: gray; padding: 2px 10px; margin: 0px 45px;" type="submit"> Click Me </button>
            <h3>Here's your tasks :</h3> </br>
        </form>

        @foreach ($listItems as $listItem)
            <form method="post" action="{{ route('deleteItem',$listItem->id)  }}">
            {{ csrf_field() }}
            <span>=> Task : "<p style="font-weight: bold; display: inline;">{{$listItem->name}}</p>" is @if ($listItem->completed) {{'completed'}} @else {{'not completed'}} @endif </span>
            <button style="background-color: gray; padding: 2px 10px; margin: 0px 45px;" type="submit"> Completed </button></br></br>
            </form>
        @endforeach
    </body>
</html>
