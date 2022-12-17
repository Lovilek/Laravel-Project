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

<div class="w3-w3-card-4 w3-center  " style="width:75% ;padding-left:310px;" >



    <div class="w3-card-4 w3-margin w3-white" >
        @foreach($Clubs as $Players)
        <img src="{{}}" alt="Nature" style="width:100%;" />
        <div class="w3-container">
            <h3><b> {{$Players->name}} {{$Players->surname}} </b></h3>
        </div>
        <div class="w3-container">
            <p>{{$Players->position}} {{$Players->age}} лет Стоимость {{$Players->price}}$</p>
            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin()) <a type="button" class="btn btn-primary" href="{{route('football.edit',$Players->id)}}">Edit</a>
            <br><br>
            <form action="{{route('football.destroy',$Players->id)}}" method="post">
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
            @endif
            <br>
            <br>
            <div class="w3-row">
                <div class="w3-col m8 s12">
                </div>
                <div class="w3-col m4 w3-hide-small">
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
</body>
</html>

