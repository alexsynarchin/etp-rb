<!DOCTYPE html>
<html lang="ru">
@include('site.__partials.head')
<body>
<div class="page-wrap">
    @include('site.__partials.header')
    {!! $navigation !!}
    @yield('content')
    @include('site.__partials.footer')
    @include('site.__partials.scripts')
    @yield('scripts')
</div>
</body>
</html>