<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Show</title>

@include('links')
    @include('backGroundImage')

</head>
<body >
@include('navbar')
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <br>--}}
{{--<table class="table table-striped table-dark">--}}

{{--    <tr>--}}
{{--        <td scope="row">--}}
{{--        {{$football->name}}--}}
{{--    </td>--}}
{{--    <td>--}}
{{--        {{$football->surname}}--}}
{{--    </td>--}}
{{--    <td>--}}
{{--        {{$football->club}}--}}
{{--    </td>--}}
{{--        <td>--}}
{{--            {{$football->position}}--}}
{{--        </td>--}}
{{--        <td>--}}
{{--            {{$football->age}}--}}
{{--        </td>--}}
{{--        <td>--}}
{{--            {{$football->price}}--}}
{{--        </td>--}}
{{--    <td>--}}
{{--        <a href="{{route('football.edit',$football->id)}}">Edit</a>--}}

{{--    </td>--}}
{{--    <td>--}}
{{--        <form action="{{route('football.destroy',$football->id)}}" method="post">--}}
{{--            @csrf--}}
{{--            <button class="btn btn-primary">Delete</button>--}}
{{--        </form>--}}

{{--    </td>--}}
{{--    </tr>--}}
{{--</table>--}}

{{--<a href="{{route('football.index')}}">Back to main page</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="w3-w3-card-4 w3-center  " style="width:75% ;padding-left:310px;" >



        <div class="w3-card-4 w3-margin w3-white" >
            <img src="@foreach($pictures as $pic) @if($pic->id==$football->image_id)  {{$pic->imgSrc}}    @endif @endforeach" alt="Nature" style="width:100%;">
            <div class="w3-container">
                <h3><b> {{$football->name}} {{$football->surname}} </b></h3>
            </div>
            <div class="w3-container">
                <p>{{$football->position}} {{$football->age}} лет Стоимость {{$football->price}}$</p>
                <a type="button" class="btn btn-primary" href="{{route('football.edit',$football->id)}}">Edit</a>
                <br><br>
                <form action="{{route('football.destroy',$football->id)}}" method="post">
@csrf
           <button class="btn btn-danger">Delete</button>
        </form>
                <br>
                <br>
                <div class="w3-row">
                    <div class="w3-col m8 s12">
                    </div>
                    <div class="w3-col m4 w3-hide-small">
                    </div>
                </div>
            </div>
        </div>

</div>
</body>
</html>
