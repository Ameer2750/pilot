<x-header />

<section class="mt-[12rem] mx-8">
    <x-pattern-design />
    <div class="flex md:flex-row flex-col md:gap-0 gap-6 items-start md:justify-between mx-14">
        <div class="flex flex-col gap-4 items-start">
            <h2 class="text-3xl font-bold text-[#E36908]">Address</h2>
            <h3 class="text-xl font-semibold">Sri Vidya Saraswathi Shaneshchara Temples,</h3>
            <p class="text-lg  font-semibold">(Under Kanchi KamaKoti Peetham) <br>
                1-6-15, Gaddi Annaram, <br>
                Vill & Mandal: Wargal – 502279, <br>
                Dist:Medak, <br>
                Telangana
            </p>
        </div>
        <div class="flex flex-col gap-4 md:items-center items-start">
            <h2 class="text-[#6EC1E4] text-3xl font-bold">Contact US</h2>
            <h3 class="text-xl font-semibold">Mobile :</h3>
            <ul class="text-lg font-semibold">
                <li>9247851122 </li>
                <li>9291277118</li>
                <li>9248151122</li>
            </ul>
            <div class="flex flex-col gap-2 md:items-center items-start">
                <p class="text-base font-semibold underline">Email Id</p>
                <a href="mailto:svsstemples.wargal@gmail.com "
                    class="text-blue-500 underline">svsstemples.wargal@gmail.com</a>
            </div>
        </div>
    </div>
    <div class="mx-14 mt-14 md:mt-4">
        <h2 class="text-3xl  text-[#6EC1E4] ">Your Feedback/ Suggestions</h2>
        <form class="flex flex-col gap-6 md:w-[50%] w-full mt-6" action="">
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
    <div class="flex md:flex-row flex-col justify-between items-center md:gap-0 gap-10 md:items-start mx-14 my-10">
        <x-map />

        <div class="flex flex-col gap-6">
            <h2 class="text-3xl font-bold  text-[#6EC1E4] ">Temple Timings</h2>
            <div class="flex flex-col gap-6">
                <ul class="font-bold text-lg text-center">
                    <li class="text-black">Monday to Thusday</li>
                    <li class="text-red-500">Morning Session</li>
                    <li class="text-red-500">06.00 am to 01.00 pm</li>
                    <li>Friday to Sunday</li>
                    <li class="text-red-500">Morning Session</li>
                    <li class="text-red-500">06.00 am to 02.00 pm</li>
                </ul>
                <ul class="font-bold text-lg text-center">
                    <li>All days </li>
                    <li class="text-red-500">Evening Session</li>
                    <li class="text-red-500">04.00pm to 08.00pm</li>
                </ul>
            </div>
        </div>

    </div>

</section>




<x-footer />