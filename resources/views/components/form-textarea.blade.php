@props(['inputName', 'inputType', 'inputText', 'placeholder', 'classAttribute'])

<div class="{{ $classAttribute }} mb-3">
    <label for="{{ $inputName }}" class="form-label fw-bolder">{{ $inputText }}</label>
    <textarea rows="4" type="{{ $inputType }}" class="form-control" id="{{ $inputName }}" placeholder="{{ $placeholder }}" name="{{ $inputName }}" required></textarea>
</div>