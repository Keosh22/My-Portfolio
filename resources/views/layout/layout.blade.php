<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>My Portfolio</title>
</head>
<body>
  <main class="relative">
    {{-- Navbar --}}
    <x-nav></x-nav>

    {{ $slot }}
    



    {{-- @include("section.nav")
    <section class="sm:pl-16 pl-8 sm:pr-16 pr-8 sm:pb-24 pb-12" >
      @include("section.hero")
    </section>
    <section class="padding">
      @include("section.certificates")
    </section>
    <section class="padding  bg-khaki-400">
      @include("section.badge")
    </section>
    <section class="padding">
     @include("section.skills")
    </section>
    <section class="padding  bg-khaki-400">
      @include("section.my-projects")
    </section>
    <section class="padding bg-black">
      @include("section.footer")
    </section> --}}
  </main>
</body>
</html>