@props([
    'title',
    'subtitle',
    'buttonText',
    'image',
    'isImageRightSide' => 'false',
    'imageAlt',
    'isTitlePriorityDisplay' => 'false',
    'buttonLink' => '#',
])

<div class="block d-flex flex-column-reverse my-3 {{ $isImageRightSide ? 'flex-lg-row' : 'flex-lg-row-reverse' }}">
    <div
        class="col-12 col-lg-6 d-flex flex-column justify-content-center mt-3 mt-lg-0 text-center text-lg-start align-items-center align-items-lg-start {{ $isImageRightSide ? '' : 'ps-0 ps-xl-5' }}">
            <h1
                class="fw-bold {{ $isImageRightSide ? 'w-100' : 'w-100' }} {{ $isTitlePriorityDisplay ? 'display-3' : 'display-5' }}">
                {{ $title }}</h1>
            <h2 class="fw-light fs-4 {{ $isImageRightSide ? 'w-75' : 'w-100' }}">
                {{ $subtitle }}
            </h2>
            <div class="d-flex gap-3 mt-3">
                <a href="{{ $buttonLink }}" target="_blank" class="btn btn-primary">{{ $buttonText }}</a>
            </div>

    </div>
    <div class="col-12 col-lg-6">
        <img class="rounded-1 h-auto mw-100 block" src="{{ $image }}" alt="" />
    </div>
</div>
