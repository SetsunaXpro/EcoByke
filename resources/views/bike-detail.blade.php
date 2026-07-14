<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <title>Bike Detail</title>
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

  <main class="max-w-6xl mx-auto px-4 py-6 space-y-6">
    <!-- Image Gallery -->
    <section>
      <div class="grid grid-cols-3 gap-2">
        <img src= {{ $bike->image }} />
        <div class="flex flex-col gap-2">
          <img src="https://via.placeholder.com/200x100?text=Side+1" alt="Side 1" class="h-14 object-cover rounded" />
        </div>
      </div>
    </section>

    <!-- Bike Information -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div class="space-y-2 text-sm">
        <h1 class="text-lg font-semibold text-gray-800">{{ $bike->name }}</h1>
        <p class="text-xs text-gray-500">
         {{ $bike->description }}
        </p>
        <div class="mt-2 space-y-1">
          <p class="text-xs text-gray-600">Battery: <span class="font-medium">{{ $bike->battery }}</span></p>
          <p class="text-xs text-gray-600">Range: <span class="font-medium">{{ $bike->range_km }} km</span></p>
          <p class="text-xs text-gray-600">Price: <span class="font-medium text-green-700">IDR {{ number_format($bike->price_per_day * 16000) }}/day</span></p>
        </div>
      </div>

      <!-- Rental Form -->
      <form
            method="POST"
            action="{{ route('booking.store', $bike) }}"
            class="space-y-3 text-sm border border-gray-100 rounded-lg p-4 bg-gray-50">

            @csrf
        <h2 class="font-semibold text-gray-800 mb-1">Book this bike</h2>
        <div>
          <label class="block text-xs text-gray-600 mb-1">Start Date</label>
          <input
            type="date"
            name="start_date"
            required>
        </div>
        <div>
          <label class="block text-xs text-gray-600 mb-1">End Date</label>
         <input
            type="date"
            name="end_date"
            required>
        <button
          type="submit"
          class="w-full bg-green-600 text-white text-sm font-medium py-2 rounded-lg"
        >
          Book Now
        </button>
      </form>
    </section>
  </main>
</body>
</html>