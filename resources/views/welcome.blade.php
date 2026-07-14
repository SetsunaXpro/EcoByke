<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <title>Electric Bike Rentals</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-white text-gray-900">
  <!-- Navbar -->
  <header class="border-b border-gray-100 bg-white">
    <div class="max-w-6xl mx-auto px-4 flex items-center justify-between h-14">
      <a href="/" class="font-semibold text-lg text-green-700">EcoByke</a>
<nav class="flex items-center gap-4 text-sm">
    <a href="/" class="text-gray-700">Home</a>
    <a href="/bikes" class="text-gray-700">Browse Bikes</a>

    @auth

        <a href="/customer-dashboard" class="text-gray-700">
            My Bookings
        </a>

        @if(auth()->user()->role === 'admin')
            <a href="/admin" class="text-gray-700">
                Admin
            </a>
        @endif

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-red-600">
                Logout
            </button>
        </form>

    @else

        <a href="{{ route('login') }}"
           class="text-green-600 font-medium">
            Login
        </a>

        <a href="{{ route('register') }}"
           class="bg-green-600 text-white px-3 py-1 rounded">
            Register
        </a>

    @endauth
</nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="bg-green-50">
    <div class="max-w-6xl mx-auto px-4 py-10 text-center">
      <h1 class="text-3xl sm:text-4xl font-bold text-green-800">
        Rent Electric Bikes Easily
      </h1>
      <p class="mt-3 text-sm sm:text-base text-gray-600">
        Affordable and eco-friendly transportation.
      </p>
      <a
        href="/bikes"
        class="mt-5 inline-block bg-green-600 text-white text-sm px-6 py-2.5 rounded-lg"
      >
        Find a Bike
      </a>
    </div>
  </section>

  <!-- Popular Bikes -->
  <section class="max-w-6xl mx-auto px-4 py-8">
    <h2 class="text-lg font-semibold mb-4 text-gray-800">Popular Bikes</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white">
        <img src="https://cdn.discordapp.com/attachments/778474448663478293/1521432934056460409/504b1a7ef98490396c917ddea1cf772e_cb867ebd-47e1-4c67-a780-f5e4c1535f19.jpg?ex=6a44d056&is=6a437ed6&hm=d7920c51ad1818a0ca05073d46f62dbf62166de6540d8b32e6194aa10d9d469e&" alt="City Commuter" class="w-full h-64 object-cover rounded mb-3" />
        <h3 class="font-semibold text-sm text-gray-800">City Commuter</h3>
        <p class="mt-1 text-xs text-gray-500">Battery: 400Wh · Range: 45km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">IDR 45k/day</p>
@auth
    <a href="/bike/{{ $bike->id }}">
        Rent Now
    </a>
@else
    <a href="{{ route('login') }}">
        Login to Rent
    </a>
@endauth
      </article>
      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white">
        <img src="https://cdn.discordapp.com/attachments/778474448663478293/1521432932944969738/Artboard_4_copy_7.jpg?ex=6a44d056&is=6a437ed6&hm=187c823932ae2405fb00d57fb6b2af65e51d1d00769340f011b0337fe14b5023&" alt="Mountain Explorer" class="w-full h-64 object-cover rounded mb-3" />
        <h3 class="font-semibold text-sm text-gray-800">Mountain Explorer</h3>
        <p class="mt-1 text-xs text-gray-500">Battery: 500Wh · Range: 60km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">IDR 120k/day</p>
@auth
    <a href="/bike/{{ $bike->id }}">
        Rent Now
    </a>
@else
    <a href="{{ route('login') }}">
        Login to Rent
    </a>
@endauth
      </article>
      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white">
        <img src="https://cdn.discordapp.com/attachments/778474448663478293/1521432933586567299/eovolt-morning-2024-folding-bike-oceanblue-a.jpg?ex=6a44d056&is=6a437ed6&hm=41578fed963f4ebe38f5d388645a4439d16499c7ba62e6fef6e08ff40ee7bc4b&" alt="Compact Foldable" class="w-full h-64 object-cover rounded mb-3" />
        <h3 class="font-semibold text-sm text-gray-800">Compact Foldable</h3>
        <p class="mt-1 text-xs text-gray-500">Battery: 300Wh · Range: 35km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">IDR 95k/day</p>
@auth
    <a href="/bike/{{ $bike->id }}">
        Rent Now
    </a>
@else
    <a href="{{ route('login') }}">
        Login to Rent
    </a>
@endauth
      </article>
    </div>
  </section>

  <!-- How It Works -->
  <section class="bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 py-8">
      <h2 class="text-lg font-semibold mb-4 text-gray-800">How It Works</h2>
      <ol class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm">
        <li class="flex flex-col items-center text-center">
          <span class="w-7 h-7 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-xs font-semibold mb-2">1</span>
          <p>Choose Bike</p>
        </li>
        <li class="flex flex-col items-center text-center">
          <span class="w-7 h-7 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-xs font-semibold mb-2">2</span>
          <p>Book</p>
        </li>
        <li class="flex flex-col items-center text-center">
          <span class="w-7 h-7 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-xs font-semibold mb-2">3</span>
          <p>Ride</p>
        </li>
        <li class="flex flex-col items-center text-center">
          <span class="w-7 h-7 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-xs font-semibold mb-2">4</span>
          <p>Return</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- Footer -->
  <footer class="border-t border-gray-100 bg-white">
    <div class="max-w-6xl mx-auto px-4 py-4 text-xs text-gray-500 flex justify-between items-center">
      <span>© 2024 EcoByke</span>
      <span>Eco-friendly rides.</span>
    </div>
  </footer>
</body>
</html>