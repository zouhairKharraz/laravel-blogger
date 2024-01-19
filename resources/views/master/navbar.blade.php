<x-slot name="header">
    <nav class="navbar navbar-expand-lg bg-body-primary">

@if (auth()->check())
    <div class="nav-item">
            <a class="nav-link" href="">
                {{auth()->user()->name}}
            </a>
        </div>
    @else
    <div class="nav-item">
        <a class="nav-link" href="{{url('/register')}}">
            inscription
        </a>
    </div>
    <br>
    <div class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">
            connexion
        </a>
    </div>
    @endif
    </x-slot>
  <div class="container-fluid " style="color:yellow;border:2px solid yellow;border-radius: 12px;">
    <div class="col-md-1">
        
    <a class="navbar-brand" href="/"><h2>Blog</h2></a>
    </div>



</div>

</nav>
