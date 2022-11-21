<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @include('backGroundImageForm')
@include('links')
    @include('formStyle')
</head>
<body >
@include('navbar')


<br>


<form class="transparent" action="{{route('football.store')}}" method="POST">
    @csrf
    <div class="form-inner">
        <label for="username" >Name:</label>
        <input type="text" name="name">
        <label for="username">Surname:</label>
        <input type="text" name="surname">
        <label for="username">Club:</label>
        <input type="text" name="club">
        <label for="username">Position:</label>
        <input type="text" name="position">
        <label for="username">Age:</label>
        <input type="number" name="age">
        <label for="username">Price:</label>
        <input type="number" name="price">
        <label for="username">Image:</label>
         <select name="image_id">
             @foreach($pictures as $pic)
                 <option value="{{$pic->id}}">{{$pic->name}}</option>
             @endforeach
         </select>
        <br>
        <input type="submit" value="Create">
    </div>
</form>
<br><br><br>



</body>
</html>
