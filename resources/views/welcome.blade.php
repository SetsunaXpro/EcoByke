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
    <h2 class="text-lg font-semibold mb-4 text-gray-800">
        Popular Bikes
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($bikes as $bike)

        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

            <img
                src="{{ $bike->image }}"
                alt="{{ $bike->name }}"
                class="w-full h-56 object-cover">

            <div class="p-5">

                <div class="flex justify-between items-start">

                    <h3 class="text-xl font-bold">
                        {{ $bike->name }}
                    </h3>

                    @php
                        $badge = match($bike->tier){
                            'Silver' =>
                                'bg-gray-300 text-gray-800',

                            'Gold' =>
                                'bg-yellow-400 text-yellow-900',

                            'Premium+' =>
                                'bg-gradient-to-r from-red-500 via-yellow-400 via-green-400 via-blue-500 to-purple-600 text-white',

                            default =>
                                'bg-gray-300'
                        };
                    @endphp

                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $badge }}">
                        {{ $bike->tier }}
                    </span>

                </div>

                <p class="text-gray-500 mt-2">
                    Battery: {{ $bike->battery }}
                    •
                    Range: {{ $bike->range_km }}km
                </p>

                <p class="mt-2 text-green-700 font-bold text-lg">
                    IDR {{ number_format($bike->price_per_day * 16000) }}/day
                </p>

                @auth
                    <a href="/bike/{{ $bike->id }}"
                       class="mt-4 inline-block w-full text-center bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                        Rent Now
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="mt-4 inline-block w-full text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Login to Rent
                    </a>
                @endauth

            </div>

        </div>

        @endforeach

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