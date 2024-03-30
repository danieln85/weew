@props(['width' => null])

<a href="{{ route('home') }}" class="web-logo nav-logo">
    <img src="{{ asset('images/logo/weew-logo.png') }}" class="img-fluid blur-up lazyload" alt="" @if($width) width="{{ $width }}" @endif>
</a>
