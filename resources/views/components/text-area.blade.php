<div class="mb-3">
    <label class="form-label">
        <i class="fas {{ $class }}"></i>
        {{ $title }}
    </label>
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        class="form-control @error($name) is-invalid @enderror">{{ old($name,$value ? $value : null) }}</textarea>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
