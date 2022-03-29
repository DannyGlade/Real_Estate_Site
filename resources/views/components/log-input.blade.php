<div class="form-floating mb-3">
    @php
        if (!is_null(old($name))) {
            $finVal = old($name);
        } else {
            $finVal = $value;
        }
    @endphp
    <input class="form-control" type="{{ $type }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" value="{{ $finVal }}" {{ $status }} required/>
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </div>
</div>
