@props(['inputName', 'inputType', 'inputText', 'placeholder', 'classAttribute'])

<div class="{{ $classAttribute }} mb-3">
    <label for="{{ $inputName }}" class="form-label fw-bolder">{{ $inputText }}</label>
    <input 
        type="{{ $inputType }}"
        class="form-control @error($inputName) is-invalid @enderror"
        id="{{ $inputName }}"
        placeholder="{{ $placeholder }}"
        value="{{ old($inputName) }}"
        name="{{ $inputName }}"
        required>
    </input>

    @error($inputName)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
