<footer class="py-[15px] px-[15px] lg:py-[25px] xl:px-[150px] sticky top-0 bg-[#3E3E3E] text-white">
    <div class="mx-auto">
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-12">

            <div class="col-span-2">

                    <a href="/" wire:navigate>
                        <img src="{{ asset('images/logo.svg') }}" alt="logo" class="h-[60px] lg:h-[80px]">
                    </a>

                    <p class="title lg:text-2xl md:text-xl sm:text-lg font-medium mt-6 md:text-md:text-center mx-4 sm:mx-0 w-full text-white">
                    Сайт Eskort Moskwa предлагает рекламные услуги в сфере знакомств и сопровождения, не предоставляя интимных услуг. Все размещенные
                    на веб-ресурсе фотографии предназначены исключительно для иллюстрации разнообразия внешних данных моделей. Взаимодействие, встречи и
                    знакомства происходят исключительно по взаимному согласию сторон. Ответственность за все действия несут сами рекламодатели и пользователи сервиса.
                    Оставляя заявку на сайте, вы подтверждаете свое согласие с политикой конфиденциальности и условиями использования платформы.
                    </p>
            </div>

            <div id="section-id" class="col-span-2">
                <livewire:feedback-form />
            </div>
        </div>

        <div class="mt-16 pt-6">
            <div class="w-full h-[1px] bg-[#EE046C]"></div>
            <div class="flex justify-center mt-6">
                <div class="text-gray-100">
                    <p class="text-center">© 2009 - 2025 Эскорт в Москве | Все права защищены. Техподдержка ant-models.ru@yandex.ru</p>
                </div>

          </div>
        </div>

    </div>
</footer>
