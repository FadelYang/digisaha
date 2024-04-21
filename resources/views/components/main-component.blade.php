@props(['title', 'subtitle', 'buttonText', 'image', 'isImageRightSide' => 'false', 'imageAlt'])

<div class="block d-flex flex-column-reverse {{ $isImageRightSide ? 'flex-lg-row' : 'flex-lg-row-reverse' }}">
    <div
        class="col-12 col-lg-6 d-flex flex-column justify-content-center mt-3 mt-lg-0 text-center text-lg-start align-items-center align-items-lg-start">
        <div class="{{ $isImageRightSide ? '' : 'ms-5' }}">
            <h1 class="fw-bold {{ $isImageRightSide ? 'w-75' : 'w-100' }} display-3">{{ $title }}</h1>
            <h2 class="fw-light fs-4 w-75">
                {{ $subtitle }}
            </h2>
            <div class="d-flex gap-3 mt-3">
                <a href="#" class="btn btn-primary">{{ $buttonText }}</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <img class="rounded-1 h-auto mw-100 block" src="{{ $image }}" alt="" />
    </div>
</div>
