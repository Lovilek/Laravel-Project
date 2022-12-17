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


<form class="transparent" action="{{route('clubs.store')}}" method="POST">
    @csrf
    <div class="form-inner">
        <label for="username" >Name:</label>
        <input type="text" name="club_name">
        <label for="username">Image URL:</label>
        <input type="text" name="image">


        <br>
        <input type="submit" value="Create">
    </div>
</form>
<br><br><br>



</body>
</html>
