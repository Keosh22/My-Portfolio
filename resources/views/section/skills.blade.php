  <div class="relative flex justify-center items-center">
    <img class="h-28 absolute bottom-0 left-0 opacity-60 -z-10" src="{{asset("images/dots.png")}}" alt="dots">
    <img class="h-28 absolute top-0 right-0 opacity-60 -z-10" src="{{asset("images/dots.png")}}" alt="dots">
    <div class="h-full rounded-full overflow-hidden shadow-xl">
      <img class="" src="{{asset("images/skills-img.png")}}" alt="">
    </div>
  </div>
  <div class="flex flex-col justify-start items-start">
    <h1 class="font-poppins text-4xl font-bold leading-normal mb-2">About <span class="text-cambridge-950">Me</span></h1>
    <h3 class="font-poppins font-bold text-2xl leading-normal mb-1">Hello, I'm Ken</h3>
    <p class="font-lora text-khaki-950 text-lg leading-normal lg:max-w-2xl">I'm a BSIT student at University of Rizal System Cainta - Campus, with a passion for technology and innovation. My journey into web development began with a curiosity about how things work behind the scenes in the digital world, and over the years, that curiosity has grown into a deep commitment to mastering my craft.</p>
    <h3 class="font-poppins text-2xl font-bold mt-5 leading-normal">My Skills</h3>
    <div class="flex flex-wrap justify-start gap-5 mt-3">
      @foreach ($icons as $icon => $item )
       <x-icon :image="$item['image']" :alt="$item['alt']" />
      @endforeach
    </div>
  </div>