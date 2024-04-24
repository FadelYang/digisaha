@props(['href', 'navName', 'isActive' => false])

<li class="nav-item">
    <a class="nav-link {{ $isActive ? 'active fw-bold' : '' }}" href="{{ $href }}">{{ $navName }}</a>
</li>