@props(['title','description'])
<div class="border flex-column border-3 custom-border-primary px-4 py-5 rounded-5 d-flex align-items-stretch" style="box-shadow: inset 0 0 10px rgba(128, 128, 128, 0.7);">
    <h1 class="custom-primary fw-bold text-center">{{ $title }}</h1>
    <p class="fs-5 fw-bold pt-5">{{ $description }}</p>
    {{$slot}}
</div>
