@foreach (config('dz.public.global.js') as $item)
    <script crossorigin="anonymous" src="{{ $item }}"></script>
@endforeach
@yield('scripts')

</body>

</html>
