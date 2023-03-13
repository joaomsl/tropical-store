<div 
    x-data="{
        productList: @entangle('bestProducts'),
        
        hasDiscount(product) {
            return product.discount > 0;
        },
        formatPrice(priceCents) {
            return `R$ ${parseFloat(priceCents / 100).toFixed(2)}`.replace('.', ',');
        },
        applyDiscount(priceCents, discountPercent) {
            return priceCents - ((priceCents * discountPercent) / 100);
        }
    }" 
    class="mt-4 flex gap-8 overflow-y-auto scroll-pl-4"
>

<template x-for="product in productList">
    <article class="min-w-[120px]" :key="product.id">
        <div class="relative">
            <div class="bg-primary-300 rounded-lg w-3/4 block aspect-square rotate-[70.94deg] absolute bottom-0 left-0 -z-10"></div>
            <img class="max-w-[150px] max-h-[150px]" :src="product.image_path" :alt="`Imagem ${product.name}`">
        </div>

        <div class="mt-4">
            <template x-if="hasDiscount(product)">
                <span class="text-sm font-medium block line-through" x-text="formatPrice(product.price_cents)"></span>
            </template>
            
            <span class="font-medium block text-xl" x-text="formatPrice(applyDiscount(product.price_cents, product.discount ?? 0))"></span>
            <h1 class="text-md" x-text="$truncate(product.name, 12)"></h1>
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
</template>

</div>