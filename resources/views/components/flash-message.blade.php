@if (session()->has('message'))
    <small x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="fixed top-0 transform -translate-x-1/2 bg-primary text-white px-48 py-3 left-1/2">
        {{ session('message') }}
    </small>
@endif
