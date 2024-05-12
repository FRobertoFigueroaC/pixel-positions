<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/js/app.js'])
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
  <title>Pixel Positions</title>
</head>
<body class="bg-black text-white font-kanken-grotesk pb-10">
  <div class="px-10">
    {{-- Beginning of the nav --}}
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div>
        <a href="/">
          <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Pixel Positions Logo">
        </a>
      </div>
      <div class="space-x-6 font-bold">
        <a href="/">Jobs</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
      </div>
      <div class="space-x-4">
        @auth
          <a href="/jobs/create">Post a Job</a>
          <a href="/logout">Log Out</a>
          @endauth
          @guest
            <a href="/login">Log In</a>
            <a href="/register">Register</a>
          @endguest
      </div>
    </nav>
    {{-- End of Nav --}}
    <main class="mt-10 max-w-[986px] mx-auto">
      {{$slot}}
    </main>
  </div>
</body>
</html>