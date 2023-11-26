<x-header />
<style>
    .header-design-pattern {
        background-image: url("{{URL('images/bg-about.png')}}");
        height: 50px;
        background-repeat: repeat-x;
        background-position: left center;
        position: absolute;
        left: 0;
        /* Corrected the left position */
        right: 0;
        top: 140px;
        /* Corrected the top position */

    }
</style>
<section class="mt-[12rem] mx-8">
    <div class="header-design-pattern "></div>
    <div class="flex md:flex-row flex-col md:justify-between mx-14">
        <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-bold text-[#E36908]">Address</h2>
            <h3 class="text-xl font-semibold">Sri Vidya Saraswathi Shaneshchara Temples,</h3>
            <p class="text-base font-medium">(Under Kanchi KamaKoti Peetham) <br>
                1-6-15, Gaddi Annaram, <br>
                Vill & Mandal: Wargal – 502279, <br>
                Dist:Medak, <br>
                Telangana
            </p>
        </div>
        <div class="flex flex-col gap-4 items-center">
            <h2 class="text-[#6EC1E4] text-3xl font-bold">Contact US</h2>
            <h3 class="text-xl font-semibold">Mobile :</h3>
            <ul class="text-lg font-semibold">
                <li>9247851122 </li>
                <li>9291277118</li>
                <li>9248151122</li>
            </ul>
            <div class="flex flex-col gap-2 items-center">
                <p class="text-base font-semibold underline">Email Id</p>
                <a href="mailto:svsstemples.wargal@gmail.com "
                    class="text-blue-500 underline">svsstemples.wargal@gmail.com</a>
            </div>
        </div>
    </div>
    <div class="mx-14">
        <h2 class="text-3xl  text-[#6EC1E4] ">Your Feedback/ Suggestions</h2>
        <form class="flex flex-col gap-6 w-[50%] mt-6" action="">
            <div class="flex flex-col gap-2">
                <label for="name">Name</label>
                <input class="border border-gray-400 p-2" placeholder="Your Name ...." type="text" name="name">
            </div>
            <div class="flex flex-col gap-2">
                <label for="email">Email</label>
                <input class="border border-gray-400 p-2" placeholder="Your Email ...." type="email" name="email">
            </div>
            <div class="flex flex-col gap-2">
                <label for="message">Message</label>
                <textarea class="border border-gray-400 p-2 " id="message" name="message"
                    placeholder="type your message..." rows="4" cols="50"></textarea>

            </div>
            <button class="text-white text-base font-bold bg-green-400 p-3" type="submit">Send</button>
        </form>
    </div>
    <div class="flex md:flex-row flex-col justify-around gap-4 items-center md:items-start w-full my-6">
        <x-map />

        <img src="{{URL('images/gmap-side-img.jpeg')}}" alt="..." class="md:w-96 w-full">

    </div>

</section>




<x-footer />
