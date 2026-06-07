<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <a class="navbar-brand" href="#">
        {{ config('app.name') }}
    </a>

    <div class="ms-auto">
        {{ auth()->user()->name }}
    </div>

</nav>