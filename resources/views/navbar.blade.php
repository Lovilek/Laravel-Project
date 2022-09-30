<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:black">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{route('football.index')}}">Footballer List {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('football.index')}}">Main Page</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('football.create')}}">Create </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('image.index')}}">Images </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('image.create')}}"> Create Images </a>

                </li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
