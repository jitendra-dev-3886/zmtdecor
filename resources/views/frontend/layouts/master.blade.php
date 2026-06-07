<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.header')
</head>

<body>

    @include('frontend.layouts.navbar')
    
    <main>
        @yield('content')
    </main>

    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')

</body>
</html>