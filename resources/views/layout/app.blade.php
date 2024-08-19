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
    @include("section.nav")
    <section class="sm:pl-16 pl-8 sm:pr-16 pr-8 sm:pb-24 pb-12" >
      Hero
    </section>
    <section class="padding">
      About Me
    </section>
    <section class="padding">
      Achievements
    </section>
    <section class="padding">
      Skills/Certificates
    </section>
    <section class="padding">
      Sign up
    </section>
    <section class="padding">
      footer
    </section>
  </main>
</body>
</html>