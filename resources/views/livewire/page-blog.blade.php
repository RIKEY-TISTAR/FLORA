@push('meta')
<title>{{ 'ESKORT' }}</title>
<meta name="description" content="ESKORT">
<meta name="keywords" content="ESKORT">
<meta name="robots" content="index, follow">
@endpush

<section class="py-[15px] px-[15px] lg:py-[25px] xl:px-[150px] mx-auto">
        
        <!-- Blog Hero Section -->

            <div class="latest-post">
                <div class="">
                    <div class="latest-post-item bg-white overflow-hidden flex justify-between">
                        <!-- Content Section -->
                        <div class="latest-post-content flex-1 p-8 lg:p-12 flex flex-col justify-center">
                            <div class="latest-post-tag mb-4">
                                <a href="#" class="inline-block bg-purple-100 text-[#EE046C] px-4 py-2 rounded-full text-sm font-semibold hover:bg-purple-200 transition duration-300">
                                    Блог
                                </a>
                            </div>
                            
                            <div class="latest-post-title text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                                Эскорт услуги в Дубае с ТОП моделями и VIP девушками: отдых, который ты заслуживаешь
                            </div>
                            
                            <div class="latest-post-excerpt text-lg text-gray-700 mb-8 leading-relaxed">
                                Дубай — это город, где солнце всегда ярче, небоскрёбы выше, а вечеринки громче. Если ты здесь, чтобы зажечь, отпраздновать успех ...
                            </div>
                            
                            <a href="#" class="read-more inline-flex items-center text-[#EE046C] font-semibold text-lg hover:text-[#EE046C] transition duration-300 group">
                                Читать далее
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Thumbnail Section -->
                        <div class="latest-post-thumbnail flex-1 relative h-[600px] text-[#EE046C] rounded-2xl">
                            <div class="wrapper h-full">
                                <!-- SVG Background Container -->
                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 text-[#EE046C] w-[60%] rounded-2xl">
                                    <!-- First SVG -->
                                    <div class="absolute left-4 top-4 w-24 h-24 opacity-20">
                                        <div class="w-full h-full bg-blue-200 rounded-lg"></div>
                                    </div>
                                    
                                    <!-- Second SVG -->
                                    <div class="absolute right-6 bottom-6 w-32 h-32 opacity-30">
                                        <div class="w-full h-full bg-red-200 rounded-full"></div>
                                    </div>
                                    
                                    <!-- Main Image Container -->
                                    <div class="img flex justify-center">
                                        <img src="{{asset('/assets/img/Main/Woman-4/girl-1.jpg')}}" alt="" class="object-cover w-full h-full">
                                    </div>
                                    
                                    <!-- Floating Elements -->
                                    <div class="absolute top-1/4 left-8 w-4 h-4 bg-[#EE046C] rounded-full opacity-60 animate-pulse"></div>
                                    <div class="absolute bottom-1/3 right-12 w-3 h-3 bg-[#EE046C] rounded-full opacity-70 animate-bounce"></div>
                                    <div class="absolute top-1/2 left-16 w-5 h-5 bg-[#EE046C] rounded-full opacity-50 animate-ping"></div>
                                </div>
                                
                                <!-- Link Overlay -->
                                <a href="#" class="absolute inset-0 z-20 cursor-pointer">
                                    <span class="sr-only">Читать статью: Эскорт услуги в Дубае</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Additional Blog Posts Section -->
            <div class="px-4">
                <h2 class="text-3xl lg:text-4xl font-bold text-strat text-gray-900 mt-20">Посты блога</h2>                           
            </div>

          <div class="py-[15px] px-[15px] lg:py-[25px] xl:px-[0px]">
            <div class="">
              <livewire:blog.blog-list />
            </div>
          </div>

</section>
