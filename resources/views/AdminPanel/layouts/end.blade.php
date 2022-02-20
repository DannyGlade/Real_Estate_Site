@foreach (config('dz.admin.global.js') as $item)
    <script type="text/javascript" crossorigin="anonymous" src="{{ $item }}"></script>
@endforeach
@yield('scripts')

</body>

</html>
