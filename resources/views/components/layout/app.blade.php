@props(['pageTitle' => null])

<x-layout.base :page-title="$pageTitle">
    <x-header />
    {{ $slot }}
    {{-- Footer --}}
</x-layout.base>