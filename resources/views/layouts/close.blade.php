<!-- Javascrip for Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@foreach (config('dz.public.global.js') as $item)
    <script src="{{ $item }}"></script>
@endforeach
{{-- @foreach (config('dz.public.pagelevel.js') as $item)
    <script src="{{ $item }}"></script>
@endforeach --}}
</body>

</html>
