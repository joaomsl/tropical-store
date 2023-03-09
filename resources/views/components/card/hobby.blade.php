@props(['thumbSrc', 'title'])

<article class="bg-primary-300 rounded-lg overflow-hidden shadow-lg">
    <span class="h-32 w-full block bg-no-repeat bg-cover bg-center" style="background-image: url('{{ $thumbSrc }}')"></span>
    <h1 class="text-secondary-900 font-medium text-center py-1">{{ $title }}</h1>
</article>