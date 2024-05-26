@props(['message', 'alertType'])

@if ($message)
    <div class="alert alert-{{ $alertType }}">
        {{ $message }}
    </div>
@endif