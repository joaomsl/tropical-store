<x-layout.app page-title="Tropical Shop - Início">
    <div class="container px-3">
        <section class="mt-8">
            <h1 class="font-light text-6xl">Tropical</h1>
            <p class="mt-2">Tudo o que você precisa para aproveitar a sua viagem:</p>

            <div class="mt-4">
                <x-card.product
                    image-src="{{ asset('images/protetor-solar.webp') }}"
                    current-price="R$ 25,80" 
                    old-price="R$ 30,20" 
                    name="Protetor Solar" 
                />
            </div>
        </section>
        <section class="mt-4">
            <h1>Para você que gosta de...</h1>
        </section>
    </div>
</x-layout.app>