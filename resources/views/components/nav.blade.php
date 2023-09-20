<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">

    @php
        $name = Auth::user()?->name;
    @endphp
    <a class="navbar-brand" href="#">Navbar</a>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn btn-primary">로그아웃</button>{{ $name }}
    </form>
</nav>
