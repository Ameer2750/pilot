<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

    <title>Your Website</title>
</head>

<body class=" h-screen">
    <header class="bg-[#f4dca8] pb-2 ">

        <!-- header image and side shop and person logo -->
        <div class="flex justify-between items-center mx-5 py-5 md:py-3">
            <div>
                <img src="{{ URL('images/logo-1an.png')}}" alt="Logo" class="w-40 object-cover	">
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
                <ion-icon class="md:text-4xl text-3xl " name="bag-handle-outline"></ion-icon>
                <ion-icon class="md:text-4xl text-3xl" name="person-outline"></ion-icon>
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
    </header>

    <div id="mobile-menu"
        class="md:static absolute bg-[#fcb800] md:min-h-fit min-h-[60vh] md:w-auto w-full top-0 hidden  left-0 z-50 flex md:justify-center items-center md:pt-2 md:py-0 py-8 px-5">
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

    <!-- Rest of your content goes here -->
    <script>
        // Function to toggle the mobile menu
        function toggleMobileMenu() {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Add event listener to the menu icon
        var menuIcon = document.getElementById('menu-icon');
        var closeIcon = document.getElementById('close-icon');
        menuIcon.addEventListener('click', toggleMobileMenu);
        closeIcon.addEventListener('click', toggleMobileMenu);
    </script>