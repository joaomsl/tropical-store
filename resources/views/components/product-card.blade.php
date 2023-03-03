@props(['imageSrc', 'currentPrice', 'name', 'oldPrice' => null, 'favorited' => false, 'onCart' => false])

<article class="max-w-[120px]">
    <div class="relative">
        <div class="bg-primary-300 rounded-lg w-3/4 block aspect-square rotate-[70.94deg] absolute bottom-0 left-0 -z-10"></div>
        <img class="max-w-[150px] max-h-[150px]" src="{{ $imageSrc }}" alt="{{ $name }}">
    </div>

    <div class="mt-4">
        @if($oldPrice)
            <span class="text-sm font-medium block line-through">{{ $oldPrice }}</span>
        @endif
        
        <span class="font-medium block text-xl">{{ $currentPrice }}</span>
        <h1 class="text-md">{{ $name }}</h1>
    </div>

    <div class="flex justify-end gap-1">
        <button class="bg-primary-300 rounded-md p-2 shadow-md">
            <x-gmdi-favorite-border-o class="w-6 text-secondary-900" />
        </button>

        <button class="bg-primary-300 rounded-md p-2 shadow-md">
            <x-gmdi-shopping-cart-o class="w-6 text-secondary-900" />
        </button>
    </div>
</article>