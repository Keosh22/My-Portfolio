<section class="max-container flex flex-col justify-center items-center">
  <h1 class="text-champagne-200 font-poppins text-4xl font-bold leading-normal mb-5 ">Let's Connect</h1>
  <div class="flex justify-around items-center gap-5 mb-7">
     @foreach ( $linkbtn as $link => $item )
       <a href="{{ $item['url'] }}" target="_blank">
          <x-icon :image="$item['image']" :alt="$item['alt']" />
       </a>
     @endforeach
  </div>

  
   <ul class="flex justify-between gap-10">
      <li><x-link-section name="About Me" link="#about_me" class="text-champagne-200 text-md" /></li>
      <li><x-link-section name="Certificates" link="#certificates" class="text-champagne-200 text-md" /></li>
      <li><x-link-section name="Badges" link="#badges" class="text-champagne-200 text-md" /></li>
      <li><x-link-section name="Projects" link="#projects" class="text-champagne-200 text-md" /></li>
   </ul>
  
   <div class="w-full mt-10">
      <hr class="h-px bg-champagne-200 border-0 opacity-70">
   </div>

   <div class="flex justify-around items-start gap-16 mt-5 w-full">
      <p class="text-champagne-200 text-sm leading-normal font-lora">© Ken Joshua Buenavides 2024
        <span class="block">All Rights Reserved.</span>
      </p>
      <p class="text-champagne-200 text-sm leading-normal font-lora">Powered by:
        <span class="block">HTML | CSS | JavaScript | Tailwind | Laravel</span>
      </p>
   </div>
</section>
