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

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <br>--}}
{{--<form action="{{route('football.store')}}" method="POST">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--    <label for="idName">Name</label>--}}

{{--    <input id="idName" class="form-control" type="text" name="name" placeholder="Enter name">--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="form-group">--}}
{{--        <div class="col-md-4 mb-3">--}}

{{--    <label>Surname</label>--}}
{{--    <input  id="idName" class="form-control" type="text" name="surname" placeholder="Enter surname">--}}
{{--    </div>--}}
{{--    </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="col-md-4 mb-3">--}}

{{--        <label>Club</label>--}}
{{--    <input id="idName" class="form-control" type="text" name="club" placeholder="Enter club">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-md-4 mb-3">--}}

{{--            <label>Position</label>--}}
{{--    <input id="idName" class="form-control" type="text" name="position" placeholder="Enter position">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--                <div class="form-group">--}}
{{--                    <div class="col-md-4 mb-3">--}}

{{--                <label>Age</label>--}}
{{--    <input id="idName" class="form-control" type="number" name="age" placeholder="Enter age">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="col-md-4 mb-3">--}}

{{--                    <label>Price</label>--}}
{{--    <input id="idName" class="form-control" type="number" name="price" placeholder="Enter price">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--    <input  type="submit"  class="btn btn-primary">--}}

{{--</form>--}}
{{--            <br>--}}
{{--<a href="{{route('football.index')}}">Back to main page</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

</body>
</html>
