@if (session()->has('success'))
    <div class="col-12 relative z-1" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    </div>
@endif

@section('title', 'Home | Ecommerce')
@include('layout.css')
@include('layout.navbar')
{{-- Slider --}}
@include('layout.slider')
{{-- Content --}}
@include('layout.content')
@include('partials.footer')
@include('layout.script')
