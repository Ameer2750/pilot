<x-header />

<section class="mt-[9.57%]">
    <!-- image carousel -->
    <div id="default-carousel" class="relative" data-carousel="static">
        <div class="overflow-hidden relative h-56 md:h-96 lg:h-96 2xl:h-96">
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



    <section class="md:flex mb-4 mx-4">

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
                <div class="flex flex-col md:flex-row  gap-4  ">
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

        <section class="flex flex-col md:flex-col  md:mt-12 ">
            <div class="flex ">
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
            </div>
            <h3 class="py-1  text-[#0066cc] text-3xl text-center rounded-full font-semibold	mt-8">
                Hindu Calender
            </h3>
            <div class="text-center">
                <div class="bg-amber-500 flex justify-center align-center">
                    <div class="relative max-w-sm ">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-white font-bold dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text"
                            class="bg-amber-500  font-bold text-white text-sm rounded-lg  block w-full pl-10 p-2.5    "
                            placeholder="Select date" id="myDatePicker">
                    </div>
                </div>
            </div>

            </div>

            <div class="">
                <h3 class="py-1  text-[#0066cc] text-3xl text-center rounded-full font-semibold	mt-8">
                    Mahaprasadham
                </h3>
                <div class="md:ml-8 ml-6 text-left">
                    <p class="font-bold text-gray-800">Nitiya annadhanam timinings :</p>
                    <p class="font-bold text-[#701a75]">Monday, Tuesday, Wednesday & Thursday</p>
                    <p class="font-bold text-green-400">Starts 10:30 AM till 1.00 pm</p>
                    <p class="font-bold text-red-500">Friday, Saturday & Sunday</p>
                    <p class="font-bold text-green-400">Starts 10:30 AM till 2.00 pm</p>
                    <p class="font-bold text-green-700">Bramhana Bhojanashala</p>
                    <p class="font-bold text-[#701a75]">Monday, Tuesday, Wednesday & Thursday</p>
                    <p class="font-bold text-green-400">Starts 11:00 AM till 1.00 pm</p>
                    <p class="font-bold text-red-500">Friday, Saturday & Sunday</p>
                    <p class="font-bold text-green-700">Starts 11:00 AM till 2.00 pm</p>

                </div>

            </div>

        </section>
    </section>

    <!-- Temple History section -->
    <section class="mb-4 mx-4">
        <h3 class="py-1  text-[#0066cc] text-3xl text-center rounded-full font-semibold text-center mt-8">
            Temple History
        </h3>
        <p class="mx-2">
            This temple is run under the guidance of
            <strong>Sri Kanchi Kamakoti Peetam</strong>
            . It is around 48 kilometers from Hyderabad in the Vargal village. It is situated on the pictorial
            background in which has a unique rock formation and a valley around this hill. The hillock of Vargal has
            multiple temples on the same hill.
        </p>
        <ul class="list-disc mx-2 ml-6 my-4">
            <li><span style="color: #008000;"><strong>Sri Lakshmi Ganapathi Swamy Temple</strong></span></li>
            <li><span style="color: #008000;"><strong>Sri Vidya Saraswati Ammavari Temple</strong></span></li>
            <li><span style="color: #008000;"><strong>Lord Shaneshchara Temple</strong></span></li>
            <li><span style="color: #008000;"><strong>Lord Samba Shiva Temple</strong></span></li>
            <li><span style="color: #ff6600;"><strong>Lord Venkateshwara Swamy Temple (NEW)</strong></span></li>
            <li><span style="color: #ff6600;"><strong>Lord Subramanyeshawara Swamy Temple (NEW)</strong></span></li>
        </ul>

        <p class="mx-2">
            This temple complex was the brain child of Sri Yayavaram Chandra Shekar Sharma scholared follower of
            goddesses Saraswathi astrologer and a vastu expert. In 1998 the building process for the above temple was
            initiated under the group who called themselves as Satya patam seva samithi. This committee researched and
            selected the hillock of Vargal, which is home to a 400 years old Shambu Deva Temple. This temple is 2 feet
            below the ground level and one has to pass crawling of the ground for few feets to reach the main Shiva
            lingam.
        </p>
    </section>

    <section class="mb-4 mx-4">
        <h3 class="py-1 text-[#e9770d] text-3xl text-center rounded-full font-semibold	mb-2">
            Temple Dieties
        </h3>
        <div class="w-full h-3.5 border-b mb-4 border-black"></div>
        <div class="flex md:flex-row flex-col flex-wrap  md:justify-between gap-4 md:gap-6">
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/td/td1-1.jpeg')}}" alt="..." class="md:w-40 w-72 object-fit ">
                <p class="text-center font-semibold text-sm ">Sri Lakshmi Ganapathi Deva</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/td/td-2.jpeg')}}" alt="..." class="md:w-40 w-72 object-fit">
                <p class="text-center font-semibold text-sm">Sri Saraswathi Ammavaru</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/td/td-3.jpeg')}}" alt="..." class="md:w-40 w-72 object-fit">
                <p class="text-center font-semibold text-sm">Sri Shaneshchara Swamy</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/td/td-4.jpeg')}}" alt="..." class="md:w-40 w-72 object-fit">
                <p class="text-center font-semibold text-sm">Sri Subramanyeshwara Swamy</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/td/td-5.jpeg')}}" alt="..." class="md:w-40 w-72 object-fit">
                <p class="text-center font-semibold text-sm">Sri Venkateshwara Swamy</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="{{URL('images/td/td-6.jpeg')}}" alt="..." class="md:w-40 w-72 object-fit">
                <p class="text-center font-semibold text-sm">Sri Lingeswara Swamy</p>
            </div>
        </div>
    </section>


    <div class="flex md:flex-row flex-col justify-around gap-4 items-center md:items-start w-full my-6">
        <div class="md:w-[50%] w-full h-[400px]" id="map"></div>

        <img src="{{URL('images/gmap-side-img.jpeg')}}" alt="..." class="md:w-96 w-full">

    </div>



    <!-- map implementation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let map, markers = [];
            console.log('init marker', @json($initialMarkers));
            const initialMarkers = @json($initialMarkers);

            function initMap() {
                map = L.map('map', {
                    center: {
                        lat: 28.626137,
                        lng: 79.821603,
                    },
                    zoom: 15
                });

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap'
                }).addTo(map);

                map.on('click', mapClicked);
                initMarkers();
            }
            initMap();

            function initMarkers() {
                for (let index = 0; index < initialMarkers.length; index++) {
                    const data = initialMarkers[index];
                    const marker = generateMarker(data, index);
                    marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
                    map.panTo(data.position);
                    markers.push(marker);
                }
            }

            function generateMarker(data, index) {
                return L.marker(data.position, {
                    draggable: data.draggable
                })
                    .on('click', (event) => markerClicked(event, index))
                    .on('dragend', (event) => markerDragEnd(event, index));
            }

            function mapClicked($event) {
                console.log(map);
                console.log($event.latlng.lat, $event.latlng.lng);
            }

            function markerClicked($event, index) {
                console.log(map);
                console.log($event.latlng.lat, $event.latlng.lng);
            }

            function markerDragEnd($event, index) {
                console.log(map);
                console.log($event.target.getLatLng());
            }

            const data = {
                position: { lat: 28.625043, lng: 79.810135 },
                draggable: true
            };

            const marker = generateMarker(data, markers.length - 1);
            marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
            markers.push(marker);
        });
    </script>

    <script>
        // Get today's date
        const today = new Date();

        // Format the date using the user's locale
        const formattedDate = today.toLocaleDateString();
        console.log('formattedDate: ', formattedDate);

        // Get the datepicker element
        const datePicker = document.getElementById('myDatePicker');

        // Set the default date to the formatted date
        datePicker.value = formattedDate;

    </script>


</section>

<x-footer />