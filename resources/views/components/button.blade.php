@props(['href' => null])

{{-- TODO: Refatorar? --}}

@if($href)
    <a {{ $attributes->class('bg-primary-300 text-secondary-900 font-medium py-4 px-2 flex justify-center items-center gap-2 rounded-lg shadow-lg') }}>
        {{ $slot }}
    </a>
@else 
    <button {{ $attributes->class('bg-primary-300 text-secondary-900 font-medium py-4 px-2 flex justify-center items-center gap-2 rounded-lg shadow-lg') }}>
        {{ $slot }}
    </button>
@endif
