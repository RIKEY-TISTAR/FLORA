@push('meta')
<title>{{ 'Каталог цветов в Волгограде – Flora | Свежие букеты и композиции' }}</title>
<meta name="description" content="Полный каталог свежих цветов в Волгограде. Более 1000 вариантов: розы, тюльпаны, пионы, хризантемы и экзотические цветы. Авторские букеты и композиции с быстрой доставкой за 2 часа!">
<meta name="keywords" content="каталог цветов Волгоград, купить цветы недорого, заказать букет с доставкой, цветочный магазин каталог, свежие цветы цены, розы в Волгограде, тюльпаны, пионы, хризантемы, горшечные растения, свадебные букеты, цветы на юбилей, корзины цветов, цветы в коробке, экзотические цветы, монобукеты, сборные букеты, цветы оптом">
<meta name="robots" content="index, follow">
@endpush

<div class="py-[40px] px-[40px] lg:py-[50px] lg:px-[150px] bg-[#ffffff]">
    <div class="">
        <div class="flex flex-col md:flex-row gap-[10px]">
            <!-- Фильтры - боковая панель -->
            <div class="md:w-1/4 bg-[#3E3E3E] p-6 rounded-2xl  border border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-xl text-white">Фильтры</h3>
                    <button wire:click="resetFilters"
                        class="text-sm text-[#EE046C] transition-colors cursor-pointer">
                        Сбросить всё
                    </button>
                </div>

                <!-- Категории -->
                <div class="mb-8">
                    <h4 class="font-semibold text-white mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#EE046C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        Категории
                    </h4>
                    <div class="space-y-2">
                        @foreach($categories as $category)
                        <label class="flex items-center group cursor-pointer">
                            <input type="checkbox"
                                wire:model.live="selectedCategories"
                                value="{{ $category->id }}"
                                class="rounded border-gray-300 text-[#EE046C]  mr-3 h-4 w-4">
                            <span class="text-white group-hover:text-[#EE046C] transition-colors">{{ $category->name }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <!-- Цена -->
                <div class="mb-8">
                    <h4 class="font-semibold text-[#EE046C] mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-[#EE046C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Цена, ₽
                    </h4>
                    <div class="flex gap-3 mb-2">
                        <div class="relative flex-1">
                            <input type="number" wire:model.live.debounce.500ms="minPrice"
                                placeholder="От"
                                class="w-full pl-3 pr-3 py-2 border border-[#EE046C] rounded-2xl focus:ring-2 text-white">
                        </div>
                        <div class="relative flex-1">
                            <input type="number" wire:model.live.debounce.500ms="maxPrice"
                                placeholder="До"
                                class="w-full pl-3 pr-3 py-2 border border-[#EE046C] rounded-2xl focus:ring-2 text-white">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Основной контент -->
            <div class="md:w-3/4">
                <!-- Сортировка и заголовок -->
                <div class="bg-[#3E3E3E] p-4  rounded-2xl  border border-gray-200 mb-[10px] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <h2 class="text-xl font-bold text-white">Товары
                        @if($products->total())
                        <span class="text-sm font-normal text-white ml-1">({{ $products->total() }})</span>
                        @endif
                    </h2>
                    <select wire:model.live="sortBy"
                        class="border border-[#EE046C] text-[#EE046C] py-2 px-4 pr-8  leading-tight focus:outline-none focus:ring-2 ">
                        <option value="default">По умолчанию</option>
                        <option value="price_asc">Сначала дешевые</option>
                        <option value="price_desc">Сначала дорогие</option>
                        <option value="newest">Новинки</option>
                    </select>
                </div>

                <!-- Список товаров -->
                @if($products->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($products as $product)

                        <div class="bg-[#3E3E3E] rounded-2xl border border-[#EE046C] overflow-hidden  transition-all duration-300 flex flex-col h-[620px]">
 <a wire:navigate href="{{ route('single.products', $product->slug) }}">
                            <div class="h-[440px] bg-gray-50 flex items-center justify-center relative">
                                @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->name }}"
                                    class="absolute h-full w-full object-cover transition-transform duration-500 hover:scale-105">
                                @else
                                <svg class="h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                @endif

                            </div>

                    <div class="p-4 flex-grow">
                        <h3 class="font-semibold text-4xl mb-2 text-white hover:text-[#EE046C] transition-colors">{{ $product->name }}</h3>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold text-[#EE046C] text-xl">
                            HOUR = {{ number_format($product->price, 0, ',', ' ') }} ₽
                            </span>
                            @if($product->old_price)
                            <span class="text-2xl text-gray-400 line-through">
                            HOUR = {{ number_format($product->old_price, 0, ',', ' ') }} ₽
                            </span>
                            @endif
                        </div>
                    </div>
  </a>
                    <button wire:click="$dispatch('add-to-cart', {productId: {{ $product->id }} })"
                        class="m-4 mt-0 bg-[#EE046C] hover:bg-black text-white cursor-pointer hover:text-[#EE046C] px-4 py-3 rounded-full font-medium transition-colors duration-300 flex items-center justify-center"
                        type="button">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        В корзину
                    </button>
                </div>

                @endforeach
            </div>
            @else
            <div class="bg-white rounded-xl  border border-gray-200 p-8 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mt-3 text-lg font-medium text-gray-900">Товары не найдены</h3>
                <p class="mt-2 text-gray-500">Попробуйте изменить параметры фильтрации</p>
                <button wire:click="resetFilters"
                    class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md  text-white bg-[#EE046C]  focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                    Сбросить фильтры
                </button>
            </div>
            @endif

            <!-- Пагинация -->
            @if($products->hasPages())
            <div class="mt-8 bg-white px-6 py-4 rounded-xl  border border-gray-200">
                {{ $products->links() }}
            </div>
            @endif


        </div>
    </div>
</div>
</div>
