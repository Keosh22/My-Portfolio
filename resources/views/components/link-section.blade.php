@props(['name', 'link'])

<a href="{{ $link }}" {{ $attributes->merge(['class' => 'font-poppins leading-normal hover:text-columbia-950 transition delay-150 ease-in-out']) }}>
  {{ $name }}
</a>