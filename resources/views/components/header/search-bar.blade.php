<div {{ $attributes }}>
    <div class="relative">
        <x-gmdi-search class="absolute top-1/2 left-2 -translate-y-1/2 w-6 text-dark-900" />
        <input class="pl-9 border-none bg-dark-900/10 w-full rounded-lg focus:ring-primary-300/80 focus:ring-2 placeholder-dark-900" type="text" placeholder="Pesquisar por...">
    </div>
    
    <div class="flex flex-wrap mt-2 gap-y-1 gap-x-2">
        @foreach(['Água de coco', 'Suco natural', 'Refrigerante', 'Água mineral', 'Água c/ gás', 'Protetor solar'] as $word)
            <a class="bg-primary-300 text-secondary-900 rounded-full p-1 block text-sm px-2" href="#">{{ $word }}</a>
        @endforeach
    </div>
</div>