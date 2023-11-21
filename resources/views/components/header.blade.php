<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <img src="{{ URL('images/logo-1an.png')}}">
        <select name="product_cat" id="header-search-product-cat" class="product-cat-dd">
            <option value="0" selected="selected">All</option>
            <option class="level-0" value="shashvata-anna-nidhi">Shashvata Anna Nidhi</option>
            <option class="level-0" value="shashvata-puja-nidhulu">Shashvata Puja Nidhulu</option>
            <option class="level-0" value="shashvata-veda-nidhi">Shashvata Veda Nidhi</option>
            <option class="level-0" value="sri-ganapathi-sevas">Sri Lakshmi Ganapathi Devalaya Sevas</option>
            <option class="level-0" value="sri-shaneshchara-swamy-sevas">Sri Shaneshchara Swamy Devalayam Sevas</option>
            <option class="level-0" value="sri-subramanya-swamy-sevas">Sri Subramanyeshwara Swamy Devalaya Sevas
            </option>
            <option class="level-0" value="sri-venkateshwara-swamy-sevas">Sri Venkateshwara Swamy Devalayam Sevas
            </option>
            <option class="level-0" value="sri-vidya-saraswathi-amma-sevas">Sri Vidya Saraswathi Ammavari Sevas</option>
        </select>

        <input type="text">
        <button>Search</button>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag"
            viewBox="0 0 16 16">
            <path
                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
            viewBox="0 0 16 16">
            <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
        </svg>

        <button>Log in</button>
        <button>Register</button>

    </header>