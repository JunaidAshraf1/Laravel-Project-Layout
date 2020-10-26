<!doctype html>
<html>
<head>
    @include('../layout.includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('../layout.includes.header')
    </header>

    <div id="main" class="row">
            @yield('content')
    </div>

    <footer class="row">
        @include('../layout.includes.footer')
    </footer>

</div>
</body>
</html>