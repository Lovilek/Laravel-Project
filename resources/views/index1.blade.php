<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Footballers list</title>
    @include('links')
   @include('backGroundImage')
</head>
<body >


@include('navbar')
<div class="w3-w3-card-4 w3-center  " style="width:75% ;padding-left:310px;" >


        @foreach($allFootballers as $footballers)

    <div class="w3-card-4 w3-margin w3-white" >
        <img src="@foreach($pictures as $pic) @if($pic->id==$footballers->image_id)  storage/{{$pic->imgSrc}}    @endif @endforeach" alt="Nature" style="width:100%;">

        <div class="w3-container">
            <h3><b> {{$footballers->name}} {{$footballers->surname}} </b></h3>
        </div>
        <div class="w3-container">
            <p>{{$footballers->position}} {{$footballers->age}} лет Стоимость {{$footballers->price}}$</p>
           @if(\Illuminate\Support\Facades\Auth::user()->isAdmin()) <a type="button" class="btn btn-primary" href="{{route('football.edit',$footballers->id)}}">Edit</a>@endif  <a type="button" class="btn btn-primary" href="{{route('football.show',$footballers->id)}}">Show</a>
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
    @endforeach
</div>

</body>
</html>
