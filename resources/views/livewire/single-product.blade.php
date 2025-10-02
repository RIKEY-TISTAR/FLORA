  @push('meta')
<title>{{ $meta_title }} ESKORT</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
@endpush
  <div class="py-[40px] px-[40px] lg:py-[50px] lg:px-[250px] bg-[#f0efed]">


        <!-- Основной контент -->
        <div class="overflow-hidden">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12">
                <!-- Изображение товара -->
                <div class="col-span-1">
                    @if($product->image)
                        <img class="h-[800px] w-full object-cover rounded-2xl" src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}"
                             class="max-h-96 w-auto object-cover">
                    @else
                        <div class="h-64 w-full flex items-center justify-center bg-gray-100 rounded-lg">
                            <svg class="h-24 w-24 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif
                </div>

                <!-- Информация о товаре -->
                <div class="col-span-1 bg-[#3E3E3E] rounded-2xl p-6">
                    <h1 class="product-title text-5xl font-semibold text-white mb-8">{{ $product->name }}</h1>
                                             
                    <div class="mb-8">
                        <h3 class="text-4xl font-medium text-white-900 mb-2 text-[#EE046C]">Описание:</h3>
                        <div class="prose text-2xl max-w-none text-white">
                            {{ $product->description ?? 'Описание отсутствует' }} <h2 class="text-2xl max-w-none text-white mb-4"><span class="text-[#EE046C]">Уникальный номер девушки:</span> #{{ $product->id }}</h2>  
                        </div>

                    </div>

                    <div class="flex items-center mb-4">
                        <div class="price text-4xl font-semibold text-[#EE046C]">
                        HOUR = {{ number_format($product->price, 0, '', ' ') }} ₽ 
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center space-x-4">
                             <button wire:click="$dispatch('add-to-cart', {productId: {{ $product->id }} })"
                        class="mt-0 bg-[#EE046C] hover:bg-black text-black cursor-pointer hover:text-[#EE046C] px-4 py-3 rounded-full font-medium transition-colors duration-300 flex items-center justify-center"
                        type="button">
                        <svg class="w-8 h-8 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="text-white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <p class="text-white text-2xl">Выбрать! </p>
                    </button>
                        </div>
                    </div>

                    {{-- <div class="border-t border-gray-200 pt-4">
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Бесплатная доставка при заказе от 5 000 ₽
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
   <div class="pt-[40px]">

        {{-- <livewire:products.products-last :currentSlug="$product->slug" /> --}}
    </div>

    </div>
