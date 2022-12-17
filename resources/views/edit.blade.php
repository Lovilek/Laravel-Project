<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@include('links')
    @include('formStyle')
    @include('backGroundImageForm')
</head>
<body >
@include('navbar')

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <br>--}}
{{--<form action="{{route('football.update',$football->id)}}" method="POST">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--        <label for="idName">Name</label>--}}
{{--    <input id="idName" class="form-control" type="text" name="name" value="{{$football->name}}">--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--        <label>Surname</label>--}}
{{--    <input id="idName" class="form-control" type="text" name="surname" value="{{$football->surname}}">--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--        <label>Club</label>--}}
{{--    <input id="idName" class="form-control" type="text" name="club" value="{{$football->club}}">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--        <label>Position</label>--}}
{{--    <input id="idName" class="form-control" type="text" name="position" value="{{$football->position}}">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}


{{--        <label>Age</label>--}}
{{--    <input id="idName" class="form-control" type="number" name="age" value="{{$football->age}}">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--        <label>Price</label>--}}
{{--    <input id="idName" class="form-control" type="number" name="price" value="{{$football->price}}">--}}
{{--            <br>--}}
{{--    <input type="submit" class="btn btn-primary">--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</form>--}}
{{--<a href="{{route('football.index')}}">Back to main page</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<form class="transparent" action="{{route('football.update',$football->id)}}" method="POST">
    @csrf
    <div class="form-inner">
        <label for="username" >Name:</label>
        <input type="text" name="name" value="{{$football->name}}">
        <label for="username">Surname:</label>
        <input type="text" name="surname"value="{{$football->surname}}">
        <label for="username">Club:</label>

        <select name="football_clubs_id">
            @foreach($clubs as $club)
                <option value="{{$club->id}}">{{$club->club_name}}</option>
            @endforeach
        </select>
        <label for="username">Position:</label>
        <input type="text" name="position"value="{{$football->position}}">
        <label for="username">Age:</label>
        <input type="number" name="age"value="{{$football->age}}">
        <label for="username">Price:</label>
        <input type="number" name="price"value="{{$football->price}}">
        <label for="username">Image:</label>

        <select name="image_id">
            @foreach($pictures as $pic)
                <option value="{{$pic->id}}" @if($pic->id==$football->image_id) selected @endif>{{$pic->name}} </option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Edit">
    </div>
</form>
<br><br><br>
</body>
</html>
