<!DOCTYPE html>
<html lang="id">

<head>
    @include('layouts.partials.head')
</head>

<body>
    @include('layouts.partials.navbar')
    <main id="main-content">
        @yield('content')
    </main>
    @include('layouts.partials.footer')
    @include('layouts.partials.script')
</body>

</html>