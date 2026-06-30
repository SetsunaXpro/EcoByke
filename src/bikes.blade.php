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
      <a href="/" class="font-semibold text-lg text-green-700">E-Bike Rent</a>
      <nav class="flex items-center gap-4 text-sm">
        <a href="/" class="text-gray-700">Home</a>
        <a href="/bikes.html" class="text-gray-700 font-semibold">Browse Bikes</a>
        <a href="/customer-dashboard.html" class="text-gray-700">My Bookings</a>
        <a href="/admin.html" class="text-gray-700">Admin</a>
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
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white flex flex-col">
        <img src="https://via.placeholder.com/400x240?text=City+Commuter" alt="City Commuter" class="w-full h-24 object-cover rounded mb-3" />
        <h2 class="font-semibold text-sm text-gray-800">City Commuter</h2>
        <p class="mt-1 text-xs text-gray-500">Battery: 400Wh</p>
        <p class="mt-1 text-xs text-gray-500">Range: 45km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">$15/day</p>
        <a
          href="/bike-detail.html"
          class="mt-3 inline-block text-xs bg-green-600 text-white px-3 py-1.5 rounded text-center"
        >
          Rent Now
        </a>
      </article>

      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white flex flex-col">
        <img src="https://via.placeholder.com/400x240?text=Mountain+Explorer" alt="Mountain Explorer" class="w-full h-24 object-cover rounded mb-3" />
        <h2 class="font-semibold text-sm text-gray-800">Mountain Explorer</h2>
        <p class="mt-1 text-xs text-gray-500">Battery: 500Wh</p>
        <p class="mt-1 text-xs text-gray-500">Range: 60km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">$20/day</p>
        <a
          href="/bike-detail.html"
          class="mt-3 inline-block text-xs bg-green-600 text-white px-3 py-1.5 rounded text-center"
        >
          Rent Now
        </a>
      </article>

      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white flex flex-col">
        <img src="https://via.placeholder.com/400x240?text=Compact+Foldable" alt="Compact Foldable" class="w-full h-24 object-cover rounded mb-3" />
        <h2 class="font-semibold text-sm text-gray-800">Compact Foldable</h2>
        <p class="mt-1 text-xs text-gray-500">Battery: 300Wh</p>
        <p class="mt-1 text-xs text-gray-500">Range: 35km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">$12/day</p>
        <a
          href="/bike-detail.html"
          class="mt-3 inline-block text-xs bg-green-600 text-white px-3 py-1.5 rounded text-center"
        >
          Rent Now
        </a>
      </article>
    </section>
  </main>
</body>
</html>