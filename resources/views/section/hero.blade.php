    {{-- Left section --}}
    <div class="relative flex flex-col justify-center items-start pt-10 xl:w-2/5  ">
        <p class="font-lora text-2xl max-sm:text-xl font-bold leading-normal">Hi I, Am</p>
        <h3 class="font-lora text-4xl max-sm:text-2xl font-bold leading-normal mt-2">Ken Joshua R. Buenavides</h3>
        <h1
            class="relative font-poppins text-8xl font-bold leading-normal max-md:text-[72px] max-lg:leading-[110px] max-md:leading-[80px] max-sm:text-[52px] max-sm:leading-[65px] ">
            Laravel
            <span
                class="text-cambridge-950 xl:pl-[180px] xl:pr-10 xl:py-3 rounded-full xl:whitespace-nowrap bg-champagne-200 relative z-10">Developer</span>
        </h1>
        <p class="font-lora text-xl max-sm:text-lg font-semibold leading-normal mt-3 text-khaki-950">Lorem ipsum dolor
            sit amet consectetur, adipisicing
            elit. Nostrum, in mollitia voluptatum reiciendis doloribus expedita fugiat explicabo nisi voluptate dolorem.
        </p>
        <div class="flex justify-center items-start mt-10">
            <x-button name="Download Cv" />
        </div>
    </div>

    {{-- Right section --}}
    <div class="relative flex flex-1 justify-center items-center max-xl:py-40 xl:min-h-screen">
        <div class="bg-hero bg-cover rounded-s-[70px] rounded-e-xl">
            <img class="relative object-contain z-10 w-[610px] h-[500px] pl-10"
                src="{{ asset('images/hero-image.png') }}" alt="hero-image">
        </div>
    </div>

