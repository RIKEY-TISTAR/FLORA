@props(['data'])

<div class="rounded-2xl ">
    <a wire:navigate href="{{ route('single.blog', $data->slug) }}">

                        {{-- <span class="z-10 text-[14px] ">Подробней</span> --}}

        <div href="#" class="relative block overflow-hidden group h-[600px] rounded-2xl ">
            <img
                src="{{ asset('storage/' . $data->image) }}"
                alt="img"
                class="shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5] pt-[20px] object-cover absolute">

                <div class="flex justify-center h-[600px]">
                    <div class="bg-white w-[90%] absolute bottom-6 p-4 rounded-2xl">
                        <p class="text-[22px] text-xl font-semibold">{{ $data->name }}</p>
                        <p class="text-[16px]">{{ $data->title }}</p>
                        {{-- <p class="text-[16px] text-xl font-semibold">{{ $data->meta_description }}</p> --}}
                    </div>           
                </div>   

        </div>

    </a>
    <a wire:navigate href="{{ route('single.blog', $data->slug) }}" class="pt-[10px] group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
        <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-black
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
    </a>
</div>
