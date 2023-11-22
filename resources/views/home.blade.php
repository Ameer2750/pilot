<x-header />

<div class="max-w-full mx-auto">

    <div id="default-carousel" class="relative" data-carousel="static">
        <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span
                    class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer
                    Slide</span>
                <img src="{{URL('images/temple1.jpg')}}"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-fill"
                    alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{URL('images/temple2.jpg')}}"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{URL('images/temple3.jpg')}}"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{URL('images/temple4.jpg')}}"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{URL('images/temple5.webp')}}"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

        </div>


        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>

        <button type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Anterior</span>
            </span>
        </button>
        <button type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="hidden">Siguiente</span>
            </span>
        </button>
    </div>


    <!-- <section class="w-[75%] my-4 mx-2 rounded">
        <div class="mb-2">
            <h2 class="py-1 bg-[#ffefa4] text-[#e9770d] text-3xl text-center font-medium">Upcoming Events</h2>
        </div>
        <div class="flex justify-around items-center">
            <div class="flex flex-col justify-center items-center text-center">
                <img src="{{URL('images/event image 1.jpeg')}}" class="">
                <h3 class="p-4 w-96 bg-amber-500 text-white rounded-lg text-lg font-bold">
                    <a href="">
                        Sri Subramanya Swamy Shashti - <br>
                        18 Dec 2023
                    </a>
                </h3>
            </div>

            <div class="flex flex-col justify-center items-center text-center">
                <img src="{{URL('images/event image 1.jpeg')}}" class="">
                <h3 class="p-4 w-96 bg-amber-500 text-white rounded-lg text-lg font-bold">
                    <a href="">
                        Vaikunta (Mukkoti) Ekadashi - <br>
                        22 Dec 2023
                    </a>
                </h3>
            </div>



        </div>

        <div class="h-0.5 mt-3 bg-black w-full"></div>
    </section> -->

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

<x-footer />