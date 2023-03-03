@props(['pageTitle' => null])

<x-layout.base :page-title="$pageTitle">
    <x-header class="container px-2 pt-3" />
    {{ $slot }}
    {{-- Footer --}}
</x-layout.base>