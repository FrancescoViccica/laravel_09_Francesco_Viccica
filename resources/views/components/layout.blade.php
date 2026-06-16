<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selfwork Laravel 4</title>
 
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
  
  <x-navbar></x-navbar>
  
  {{--  Per richiamare tutto quello che abbiamo all'interno del nostro layout --}}
  {{ $slot }} 
  
  
  
</body>
</html>