<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <title>Browse Bikes</title>
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
    <!-- Search -->
    <section>
      <div class="flex items-center gap-2">
        <input
          type="text"
          placeholder="Search bikes"
          class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500"
        />
      </div>
    </section>

    <!-- Filters -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-sm">
      <div>
        <label class="block text-xs text-gray-600 mb-1">Price</label>
        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
          <option>Any</option>
          <option>Under $15/day</option>
          <option>$15–$25/day</option>
          <option>Above $25/day</option>
        </select>
      </div>
      <div>
        <label class="block text-xs text-gray-600 mb-1">Battery</label>
        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
          <option>Any</option>
          <option>Up to 300Wh</option>
          <option>300–500Wh</option>
          <option>500Wh+</option>
        </select>
      </div>
      <div>
        <label class="block text-xs text-gray-600 mb-1">Availability</label>
        <select class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
          <option>Any</option>
          <option>Today</option>
          <option>This week</option>
        </select>
      </div>
    </section>

    <!-- Bike Cards -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <!-- Card -->
      @foreach($bikes as $bike)

<a href="/bike/{{ $bike->id }}">

 <div class="relative border rounded-lg shadow p-4 hover:shadow-lg transition">


@php
$badgeClass = match($bike->tier) {
    'Silver' => 'bg-gray-300 text-gray-800',
    'Gold' => 'bg-yellow-400 text-yellow-900',
    'Premium+' => 'bg-gradient-to-r from-red-500 via-yellow-400 via-green-400 via-blue-500 to-purple-600 text-white',
    default => 'bg-gray-200 text-gray-800',
};
@endphp

<span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-semibold {{ $badgeClass }}">
    {{ $bike->tier }}
</span>

    <img
        src="{{ $bike->image }}"
        alt="{{ $bike->name }}"
        class="w-full h-48 object-cover rounded"
    >

    <h2 class="text-xl font-bold mt-3">
        {{ $bike->name }}
    </h2>

</div>

</a>

@endforeach
    </section>
  </main>
</body>
</html>