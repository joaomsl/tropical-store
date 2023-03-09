<x-layout.app page-title="Tropical Shop - Início">
    <div class="container px-3">
        <section class="mt-8">
            <h1 class="font-light text-6xl">Tropical</h1>
            <p class="mt-2">Tudo o que você precisa para aproveitar a sua viagem:</p>

            <div class="mt-4 flex gap-8 overflow-y-auto scroll-pl-4">
                @for($i = 0; $i < 6; $i++)
                    <x-card.product
                        class="min-w-[120px]"
                        :image-src="asset('images/protetor-solar.webp')"
                        current-price="R$ 25,80" 
                        old-price="R$ 30,20" 
                        name="Protetor Solar" 
                    />
                @endfor

                <button class="min-w-[120px] flex justify-center items-center flex-col">
                    <div class="bg-primary-300 rounded-lg shadow-lg text-secondary-900 px-5 h-1/2 grid content-center">
                        <span class="font-medium">Ver tudo</span>
                        <x-gmdi-chevron-right-r class="mx-auto w-8" />
                    </div>
                </button>
            </div>
        </section>

        <section class="mt-8">
            <h1 class="text-2xl">Para você que gosta de...</h1>
            <div class="mt-4 grid grid-cols-3 gap-2">
                @for($i = 0; $i < 5; $i++)
                    <x-card.hobby :thumb-src="asset('images/beach.jpg')" title="Praia"/>
                @endfor
                <article class="bg-primary-300 rounded-lg shadow-lg flex justify-center items-center flex-col text-secondary-900">
                    <h1 class="font-medium">E muito mais</h1>
                    <x-gmdi-chevron-right-r class="w-8" />
                </article>
            </div>
            <p class="mt-4">Não perca a chance de adquirir um kit com vários produtos relacionados a sua atividade favorita:</p>
            <x-button class="mt-2" href="#">
                <span>Eu quero</span>
                <x-gmdi-favorite-o class="w-5" />
            </x-button>
        </section>

        <section class="relative mt-8 bg-gradient-to-tr p-4 rounded-lg" style="--tw-gradient-stops: #FEB45E 0%, #FACD8A 50%, #F5BCBC 100%">
            <svg class="z-0 text-white/20 absolute inset-0 left-[unset] h-full" viewBox="0 0 255 191" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M251.719 0.715027H3.28125C1.63328 0.715027 0.300003 2.05837 0.300003 3.71878V187.281C0.300003 188.942 1.63328 190.285 3.28125 190.285H251.719C253.367 190.285 254.7 188.942 254.7 187.281V3.71878C254.7 2.05837 253.367 0.715027 251.719 0.715027ZM248.737 180.448L157.627 96.3094L248.737 10.6357V180.448ZM125.463 122.726C126.614 123.819 128.386 123.819 129.529 122.726L153.255 100.415L244.05 184.278H10.9497L101.745 100.423L125.463 122.726ZM244.158 6.72253L127.5 116.426L10.842 6.72253H244.158ZM97.3728 96.3094L6.2625 180.456V10.6357L97.3728 96.3094Z" fill="currentColor"/>
            </svg>

            <h1 class="relative z-10 text-2xl">Sempre atualizado</h1>
            <p class="relative z-10 mt-2">Toda quarta-feira vamos te enviar novidades, dicas, cupons de desconto e promoções da nossa loja. Você não pode ficar de fora:</p>
            <div class="relative z-10 mt-2 grid grid-cols-8 gap-2">
                <x-form.input class="col-span-5" placeholder="Digite seu e-mail" />
                <x-button class="col-span-3">Me notifique</x-button>
            </div>
        </section>
    </div>
</x-layout.app>