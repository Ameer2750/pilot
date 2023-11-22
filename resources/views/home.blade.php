<x-header />

<div class="">

    <!-- image carousel -->
    <div id="default-carousel" class="relative" data-carousel="static">
        <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span
                    class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer
                    Slide</span>
                <img src="{{URL('images/temple1.jpg')}}"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-contain"
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
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 " alt="...">
            </div>

        </div>


        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 1"
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



    <div class="md:flex">

        <!-- upcoming event section -->
        <section class="m-2 md:w-[75%]">
            <h3 class="py-1 bg-[#ffefa4] text-[#e9770d] text-3xl text-center rounded-full font-semibold	">Upcoming
                Events
            </h3>
            <div class="md:flex md:justify-between md:items-center ">
                <div class="flex flex-col justify-center items-center ">
                    <img src="{{URL('images/event image 1.jpeg')}}" class="" alt="swami image">
                    <h3 class=" bg-amber-500 text-white rounded-full text-lg py-4 font-bold w-full text-center">
                        <a class="p-4 " href="">
                            Sri Subramanya Swamy Shashti - 18 Dec 2023
                        </a>
                    </h3>
                </div>
                <div class="flex flex-col justify-center items-center ">
                    <img src="{{URL('images/event image 2.jpeg')}}" class="" alt="swami image">
                    <h3 class="bg-amber-500 text-white rounded-full text-lg py-4 font-bold w-full text-center">
                        <a class="p-4 " href="">
                            Vaikunta (Mukkoti) Ekadashi -
                            22 Dec 2023
                        </a>
                    </h3>
                </div>
            </div>
            <div class="relative mb-4">
                <div class="w-full h-3.5 border-b-2 border-black"></div>
                <img class="rounded-full w-6 absolute left-[50%] top-0 border-2 border-white "
                    src="{{URL('images/png-clipart-shiva-om-symbol-hinduism-om-text-logo-thumbnail.png')}}" alt="">
            </div>
            <!-- please note section -->
            <p class="text-[#0066cc] font-semibold mb-4">
                Please note :
                Login to website first before selecting the date and time by clicking here before you book the Seva
                below. Please dont use the login from the calendar after selecing the date and time. Then go to home
                page and book your seva. Sorry for this inconvenience.
            </p>


            <!-- subscription links section -->
            <div class="">
                <h3 class="py-1 bg-[#ffefa4] text-[#e9770d] text-3xl text-center rounded-full font-semibold	">
                    Sri Saraswathi Ammavari Seva Subscription Links
                </h3>
                <div class="flex gap-4 ">
                    <h5
                        class="bg-amber-500 text-white rounded-2xl md:rounded-3xl text-lg p-8 font-bold w-full text-center">
                        <a class="" href="">
                            Aksharabyasam / Annaprasana / Vidyarambham
                        </a>
                    </h5>
                    <h5
                        class="bg-amber-500 text-white rounded-2xl md:rounded-3xl text-lg p-8 font-bold w-full text-center">
                        <a class="" href="">
                            Moola Nakshatra Vishesha Panchamrutha Abhisekam
                        </a>
                    </h5>
                    <h5
                        class="bg-amber-500 text-white rounded-2xl md:rounded-3xl text-lg p-8 font-bold w-full text-center">
                        <a class="" href="">
                            Pradhoshakala Pooja Sahitha Sri Chakra Archana Pooja
                        </a>
                    </h5>
                </div>
            </div>

            <!-- shahswata veda nidhi section -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-4">
                <div class="flex flex-col justify-center items-center ">
                    <h3 class="py-1 text-[#e9770d] text-3xl text-center rounded-full font-semibold	">
                        Sri Saraswathi Ammavari Seva Subscription Links
                    </h3>
                    <img class="w-96" src="{{URL('images/svsst_shaswatha_veda_nidhulu_2023.jpg')}}" alt="">
                </div>

                <div class="flex flex-col justify-center items-center   mt-14 ">
                    <h3 class="py-1  text-[#e9770d] text-3xl text-center rounded-full font-semibold	">
                        Pay for seva services
                    </h3>
                    <div class="flex flex-col  gap-2 ">
                        <h5
                            class="bg-amber-500 text-white rounded-2xl md:rounded-full text-lg p-4 font-bold w-full text-center">
                            <a class="" href="">
                                Maharaja Poshakulu
                            </a>
                        </h5>
                        <h5
                            class="bg-amber-500 text-white rounded-2xl md:rounded-full text-lg p-4 font-bold w-full text-center">
                            <a class="" href="">
                                Raja Poshakulu
                            </a>
                        </h5>
                        <h5
                            class="bg-amber-500 text-white rounded-2xl md:rounded-full text-lg p-4 font-bold w-full text-center">
                            <a class="" href="">
                                Poshakulu
                            </a>
                        </h5>
                        <h5
                            class="bg-amber-500 text-white rounded-2xl md:rounded-full text-lg p-4 font-bold w-full text-center">
                            <a class="" href="">
                                one day - annadhanam
                            </a>
                        </h5>
                        <h5
                            class="bg-amber-500 text-white rounded-2xl md:rounded-full text-lg p-4 font-bold w-full text-center">
                            <a class="" href="">
                                Bhojanam for one Veda student for one year
                            </a>
                        </h5>
                        <h5
                            class="bg-amber-500 text-white rounded-2xl md:rounded-full text-lg p-4 font-bold w-full text-center">
                            <a class="" href="">
                                Bhojanam for one Veda student for five years
                            </a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="relative mb-4">
                <div class="w-full h-3.5 border-b-2 border-black"></div>
                <img class="rounded-full w-6 absolute left-[50%] top-0 border-2 border-white "
                    src="{{URL('images/png-clipart-shiva-om-symbol-hinduism-om-text-logo-thumbnail.png')}}" alt="">
            </div>


            <!-- vishesha seva subscription links -->
            <section>
                <h3 class="py-1 bg-[#ffefa4] text-[#e9770d] text-3xl text-center rounded-full font-semibold	">
                    Vishesha Seva Subscription links
                </h3>
                <div class="flex gap-4 ">
                    <h5
                        class="bg-amber-500 text-white rounded-2xl md:rounded-3xl text-lg  p-8 font-bold w-full text-center">
                        <a class="" href="">
                            Sri Subramanyeshwara Swamy Devalaya Sevas – Kruthika Nakshatra Vishesha Abhisekam
                        </a>
                    </h5>
                    <h5
                        class="bg-amber-500 text-white rounded-2xl md:rounded-3xl text-lg  p-8 font-bold w-full text-center">
                        <a class="" href="">
                            Sri Venkateshwara Swamy Devalayam Sevas – Shravana Nakshatra Vishesha Abhishekam
                        </a>
                    </h5>
                    <h5
                        class="bg-amber-500 text-white rounded-2xl md:rounded-3xl text-lg p-8 font-bold w-full text-center">
                        <a class="" href="">
                            Sri Vidya Saraswathi Ammavari Sevas – Visesha Moola Nakshatra Puja with Chandi Homam
                        </a>
                    </h5>
                </div>
            </section>

        </section>

        <section class=" flex justify-around">
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/right-side-img-1.png')}}" class="rounded-full w-36" alt="swami image">
                <p class="text-lg font-semibold text-[#DB5D14]  text-center">Sri Kanchi Kamakoti Peetam
                </p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/right-side-img-2.png')}}" class="rounded-full w-36" alt="swami image">
                <p class="text-lg font-semibold text-[#DB5D14] text-center">Sri Kanchi Kamakoti Peetam
                </p>
            </div>
        </section>


    </div>






</div>

<x-footer />
