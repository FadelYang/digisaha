@props(['inputName', 'inputType', 'inputText', 'placeholder', 'classAttribute'])

<div class="{{ $classAttribute }} mb-3">
    <label for="{{ $inputName }}" class="form-label fw-bolder">{{ $inputText }}</label>
    <input type="{{ $inputType }}" class="form-control" id="{{ $inputName }}" placeholder="{{ $placeholder }}"
        name="{{ $inputName }}" required>

    @error('{{ $inputName }}')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
