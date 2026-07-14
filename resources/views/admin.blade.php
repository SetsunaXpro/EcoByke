<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-white text-gray-900">
  <div class="h-full flex">
    <!-- Sidebar -->
    <aside class="w-40 sm:w-52 border-r border-gray-100 bg-gray-50 flex flex-col">
      <div class="px-4 py-3 border-b border-gray-100">
        <span class="font-semibold text-sm text-green-700">Admin</span>
      </div>
      <nav class="flex-1 px-4 py-4 space-y-2 text-sm">
        <a href="/admin" class="block py-1.5 text-gray-800 font-medium">Dashboard</a>
        <a href="#" class="block py-1.5 text-gray-600">Bikes</a>
        <a href="#" class="block py-1.5 text-gray-600">Bookings</a>
        <a href="#" class="block py-1.5 text-gray-600">Users</a>
        <a href="#" class="block py-1.5 text-gray-600">Payments</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 max-w-full">
      <header class="border-b border-gray-100 bg-white">
        <div class="px-4 py-3">
          <h1 class="text-base font-semibold text-gray-800">Dashboard</h1>
        </div>
      </header>

      <section class="px-4 py-4 grid grid-cols-1 sm:grid-cols-3 gap-3 text-sm">
        <!-- Card: Revenue -->
        <div class="border border-gray-100 rounded-lg p-4 bg-white">
          <p class="text-xs text-gray-500 mb-1">Revenue (Today)</p>
          <p class="text-xl font-semibold text-green-700">$320</p>
        </div>
        <!-- Card: Active Rentals -->
        <div class="border border-gray-100 rounded-lg p-4 bg-white">
          <p class="text-xs text-gray-500 mb-1">Active Rentals</p>
          <p class="text-xl font-semibold text-gray-800">12</p>
        </div>
        <!-- Card: Available Bikes -->
        <div class="border border-gray-100 rounded-lg p-4 bg-white">
          <p class="text-xs text-gray-500 mb-1">Available Bikes</p>
          <p class="text-xl font-semibold text-gray-800">34</p>
        </div>

        <div class="grid grid-cols-3 gap-4">

    <div class="p-4 border rounded">
        <h3>Total Users</h3>
        <p>{{ $totalUsers }}</p>
    </div>

    <div class="p-4 border rounded">
        <h3>Total Bikes</h3>
        <p>{{ $totalBikes }}</p>
    </div>

    <div class="p-4 border rounded">
        <h3>Total Bookings</h3>
        <p>{{ $totalBookings }}</p>
    </div>

</div>

      </section>
    </main>
  </div>
</body>
</html>