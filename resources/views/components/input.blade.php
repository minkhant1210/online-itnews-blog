<div class="mb-3">
    <label class="form-label">
        <i class="fas {{ $class }}"></i>
        {{ $inputTitle }}
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"

        @isset($value)
        value="{{ old($name,$value) }}"
        @else
        value="{{ old($name) }}"
        @endisset

        @isset($form)
        form = "{{ $form }}"
        @endisset

        class="form-control @error($name) is-invalid @enderror"
        autofocus>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <p>{{ $message }}</p>
    </span>
    @enderror
</div>
