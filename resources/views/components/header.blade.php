<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Your Website</title>
</head>

<body class="font-sans">
    <header class="bg-[#f4dca8] py-4 px-6 md:flex md:items-center md:justify-between w-full">
        <img src="{{ URL('images/logo-1an.png')}}" alt="Logo" class="w-52 h-auto cursor-pointer">

        <div class="flex flex-col md:flex-row  md:w-2/3 lg:w-1/2">
            <!-- Dropdown menu -->
            <div class="md:w-25 flex items-center justify-center">
                <select id="dropdown" class="bg-white w-full md:w-16 font-medium text-sm px-3 py-2 inline items-center">
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

                <div class="md:w-72 flex mt-4 md:mt-0 ">
                    <input type="text"
                        class="border border-gray-300  md:px-16  focus:outline-none focus:border-blue-500 w-96"
                        placeholder="I want to make puja / Homam .....">
                    <button class="px-4 py-1.5 bg-amber-500  md:mt-0 w-full md:w-auto">Search</button>
                </div>
            </div>



        </div>


        <div class="flex justify-even md:items-center gap-4">
            <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-bag" viewBox="0 0 16 16">
                <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>


            <span class="flex justify-center items-center gap-2">
                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
                <span class="flex flex-col">
                    <a class=" font-medium  text-sm block cursor-pointer ">
                        Login
                    </a>
                    <a class=" font-medium  text-sm block cursor-pointer">
                        Register
                    </a>
                </span>
            </span>

        </div>

    </header>
   

    <!-- Rest of your content goes here -->
