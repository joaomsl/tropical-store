@props(['pageTitle' => null])

<x-layout.base :page-title="$pageTitle">
    <x-header class="container px-2 pt-3" />
    {{ $slot }}
    <x-footer class="mt-8" />
</x-layout.base>