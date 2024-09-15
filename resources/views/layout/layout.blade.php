<!DOCTYPE html>
<html lang="en">
<head>
  <x-partials.head />
</head>
<body>
  <main class="relative">
    {{-- Navbar --}}
    <x-nav></x-nav>

    {{ $slot }}

  </main>
</body>
</html> 