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
      <a href="/" class="font-semibold text-lg text-green-700">E-Bike Rent</a>
      <nav class="flex items-center gap-4 text-sm">
        <a href="/" class="text-gray-700">Home</a>
        <a href="/bikes.html" class="text-gray-700">Browse Bikes</a>
        <a href="/customer-dashboard.html" class="text-gray-700">My Bookings</a>
        <a href="/admin.html" class="text-gray-700">Admin</a>
      </nav>
    </div>
  </header>

  <main class="max-w-6xl mx-auto px-4 py-6 space-y-6">
    <!-- Image Gallery -->
    <section>
      <div class="grid grid-cols-3 gap-2">
        <img src="https://via.placeholder.com/800x480?text=City+Commuter+Main" alt="City Commuter Main" class="col-span-2 h-32 object-cover rounded" />
        <div class="flex flex-col gap-2">
          <img src="https://via.placeholder.com/200x100?text=Side+1" alt="Side 1" class="h-14 object-cover rounded" />
          <img src="https://via.placeholder.com/200x100?text=Side+2" alt="Side 2" class="h-14 object-cover rounded" />
        </div>
      </div>
    </section>

    <!-- Bike Information -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div class="space-y-2 text-sm">
        <h1 class="text-lg font-semibold text-gray-800">City Commuter</h1>
        <p class="text-xs text-gray-500">
          Comfortable electric bike ideal for daily city rides.
        </p>
        <div class="mt-2 space-y-1">
          <p class="text-xs text-gray-600">Battery: <span class="font-medium">400Wh</span></p>
          <p class="text-xs text-gray-600">Range: <span class="font-medium">45km</span></p>
          <p class="text-xs text-gray-600">Price: <span class="font-medium text-green-700">$15/day</span></p>
        </div>
      </div>

      <!-- Rental Form -->
      <form class="space-y-3 text-sm border border-gray-100 rounded-lg p-4 bg-gray-50">
        <h2 class="font-semibold text-gray-800 mb-1">Book this bike</h2>
        <div>
          <label class="block text-xs text-gray-600 mb-1">Start Date</label>
          <input
            type="date"
            class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500"
          />
        </div>
        <div>
          <label class="block text-xs text-gray-600 mb-1">End Date</label>
          <input
            type="date"
            class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500"
          />
        </div>
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