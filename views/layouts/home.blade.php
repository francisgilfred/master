<!doctype html>
<html>
<head>
   
    @include('includes.head')

</head>
<body>

<div class="container">

    <header class="navbar">
        
        @include('includes.headed')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footed')
    </footer>

</div>
</body>
</html>