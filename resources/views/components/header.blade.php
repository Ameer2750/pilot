<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>

    <!-- map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <title>Your Website</title>
</head>

<style>
    .z-1000 {
        z-index: 3000;
    }
</style>

<body class="h-screen">
    <header class="bg-[#f4dca8]  w-full z-1000 fixed top-0 py-2 md:py-0">

        <!-- header image and side shop and person logo -->
        <div class="flex justify-between items-center mx-5 py-5  md:py-3">
            <div>
                <a href="#">
                    <img src="{{ URL('images/logo-1an.png')}}" alt="Logo" class="w-40 object-cover	">
                </a>
            </div>
            <div class="md:flex md:justify-around md:items-center hidden">
                <!-- bg-white w-full md:w-16 font-medium text-sm px-3 py-2 inline items-center -->
                <div class="flex">
                    <select id="dropdown" class="bg-white w-16 py-1 px-3">
                        <option value="" selected="selected">All</option>
                        <option value="shashvata-anna-nidhi">Shashvata Anna Nidhi</option>
                        <option value="shashvata-puja-nidhulu">Shashvata Puja Nidhulu</option>
                        <option class="" value="shashvata-veda-nidhi">Shashvata Veda Nidhi</option>
                        <option class="" value="sri-ganapathi-sevas">Sri Lakshmi Ganapathi Devalaya Sevas</option>
                        <option class="" value="sri-shaneshchara-swamy-sevas">Sri Shaneshchara Swamy Devalayam Sevas
                        </option>
                        <option class="" value="sri-subramanya-swamy-sevas">Sri Subramanyeshwara Swamy Devalaya Sevas
                        </option>
                        <option class="" value="sri-venkateshwara-swamy-sevas">Sri Venkateshwara Swamy Devalayam Sevas
                        </option>
                        <option class="" value="sri-vidya-saraswathi-amma-sevas">Sri Vidya Saraswathi Ammavari Sevas
                        </option>
                    </select>

                    <div class="flex">
                        <input type="text" class="py-1 px-3 flex-grow lg:w-96 w-full"
                            placeholder="I want to make puja / Homam .....">
                        <button class="py-1 px-3 bg-red-400 text-white">
                            <span class="hidden md:block"> Search</span>
                            <ion-icon class="md:hidden font-bold pt-1" name="search-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex gap-2">
                <ion-icon class="md:text-4xl text-3xl cursor-pointer" name="bag-handle-outline"></ion-icon>
                <ion-icon class="md:text-4xl text-3xl cursor-pointer" name="person-outline"></ion-icon>
                <span class="md:flex md:flex-col hidden md:block">
                    <a class=" font-semibold  text-sm  cursor-pointer ">
                        Login
                    </a>
                    <a class=" font-semibold  text-sm  cursor-pointer">
                        Register
                    </a>
                </span>
            </div>
        </div>

        <!-- searchbar and nav menu icon  for medium screens-->

        <div class="flex justify-around items-center md:hidden">
            <ion-icon id="menu-icon" class="text-4xl md:hidden cursor-pointer" name="menu-outline"></ion-icon>
            <!-- bg-white w-full md:w-16 font-medium text-sm px-3 py-2 inline items-center -->
            <div class="flex">
                <select id="dropdown" class="bg-white w-16 py-1 px-3">
                    <option value="" selected="selected">All</option>
                    <option value="shashvata-anna-nidhi">Shashvata Anna Nidhi</option>
                    <option value="shashvata-puja-nidhulu">Shashvata Puja Nidhulu</option>
                    <option class="" value="shashvata-veda-nidhi">Shashvata Veda Nidhi</option>
                    <option class="" value="sri-ganapathi-sevas">Sri Lakshmi Ganapathi Devalaya Sevas</option>
                    <option class="" value="sri-shaneshchara-swamy-sevas">Sri Shaneshchara Swamy Devalayam Sevas
                    </option>
                    <option class="" value="sri-subramanya-swamy-sevas">Sri Subramanyeshwara Swamy Devalaya Sevas
                    </option>
                    <option class="" value="sri-venkateshwara-swamy-sevas">Sri Venkateshwara Swamy Devalayam Sevas
                    </option>
                    <option class="" value="sri-vidya-saraswathi-amma-sevas">Sri Vidya Saraswathi Ammavari Sevas
                    </option>
                </select>

                <div class="flex">
                    <input type="text" class="py-1 px-3" placeholder="I want to make puja / Homam .....">
                    <button class="py-1 px-3 bg-red-400 text-white">
                        <span class="hidden md:block"> Search</span>
                        <ion-icon class="md:hidden font-bold pt-1" name="search-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
        <!-- navigation bar -->
        <div id="mobile-menu"
            class="md:static absolute bg-[#fcb800] md:min-h-fit min-h-[60vh] md:w-auto w-full top-0  left-0 z-1000 z-2000 z-50 flex md:justify-center items-center md:pt-2 md:py-2 py-8 px-5">
            <ion-icon id="close-icon" class="text-4xl absolute top-10 right-5 cursor-pointer md:hidden"
                name="close"></ion-icon>
            <ul class="flex md:flex-row flex-col justify-center md:items-center md:gap-[4vw] gap-6 font-semibold">
                <li><a href="#" class="hover:text-white">HOME</a></li>
                <li><a href="#" class="hover:text-white">SERVICES</a></li>
                <li><a href="#" class="hover:text-white">ABOUT US</a></li>
                <li><a href="#" class="hover:text-white">ANNUAL EVENTS</a></li>
                <li><a href="#" class="hover:text-white">DONATIONS</a></li>
                <li><a href="#" class="hover:text-white">PHOTOS</a></li>
                <li><a href="#" class="hover:text-white">SONGS</a></li>
                <li><a href="#" class="hover:text-white">VIDEOS</a></li>
                <li><a href="#" class="hover:text-white">CONTACT US</a></li>
            </ul>
        </div>
    </header>



    <!-- Rest of your content goes here -->
    <script>
        // Assuming you have a 'menu-icon' element
        var menuIcon = document.getElementById('menu-icon');
        var closeIcon = document.getElementById('close-icon');
        var mobileMenu = document.getElementById('mobile-menu');

        function toggleMobileMenu() {
            mobileMenu.classList.toggle("hidden");
        }

        // Add event listener to the menu icon for small screens
        menuIcon.addEventListener('click', toggleMobileMenu);
        closeIcon.addEventListener('click', toggleMobileMenu);

        // Auto-show the menu on larger screens
        if (window.innerWidth >= 768) {
            mobileMenu.classList.remove("hidden");
        }

    </script>