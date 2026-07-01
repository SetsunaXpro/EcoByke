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
        <a href="/bikes" class="text-gray-700 font-semibold">Browse Bikes</a>
        <a href="/customer-dashboard" class="text-gray-700">My Bookings</a>
        <a href="/admin" class="text-gray-700">Admin</a>
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
<div class="border rounded-lg p-4">
    <h2 class="text-xl font-bold">
        {{ $bike->name }}
    </h2>

    <p>{{ $bike->description }}</p>

    <p>Battery: {{ $bike->battery }}</p>

    <p>Range: {{ $bike->range_km }} km</p>

    <p>
        ${{ $bike->price_per_day }}/day
    </p>
</div>
@endforeach
    </section>
  </main>
</body>
</html>