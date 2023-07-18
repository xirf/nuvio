<!doctype html>
<html class="light" data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <x-header>
      {{ $slot }}
    </x-header>
    <x-footer></x-footer>
</body>
</html>