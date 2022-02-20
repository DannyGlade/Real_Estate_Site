@yield('scripts')
@foreach (config('dz.public.global.js') as $item)
    <script crossorigin="anonymous" src="{{ $item }}"></script>
@endforeach

</body>

</html>
