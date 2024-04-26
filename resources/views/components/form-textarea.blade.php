@props(['inputName', 'inputType', 'inputText', 'placeholder', 'classAttribute'])

<div class="{{ $classAttribute }} mb-3">
    <label for="{{ $inputName }}" class="form-label fw-bolder">{{ $inputText }}</label>
    <textarea rows="4" type="{{ $inputType }}" class="form-control @error($inputName) is-invalid @enderror"
        id="{{ $inputName }}" placeholder="{{ $placeholder }}" name="{{ $inputName }}" required>{{ old($inputName)}}</textarea>


    @error($inputName)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
