@props(['name'])

<a {{ $attributes->merge([
  'class' => 'bg-black text-champagne-200 px-6 py-3 rounded-full font-poppins leading-normal text-md shadow-md hover:bg-columbia-950 transition ease-in-out delay-150 cursor-pointer', 
  'href' => '/'
  ])}}>
    {{ ($name ) }}
</a>