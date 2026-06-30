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
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white flex flex-col">
        <img src="https://cdn.discordapp.com/attachments/778474448663478293/1521432934056460409/504b1a7ef98490396c917ddea1cf772e_cb867ebd-47e1-4c67-a780-f5e4c1535f19.jpg?ex=6a44d056&is=6a437ed6&hm=d7920c51ad1818a0ca05073d46f62dbf62166de6540d8b32e6194aa10d9d469e&" alt="City Commuter" class="w-full h-64 object-cover rounded mb-3" />
        <h2 class="font-semibold text-sm text-gray-800">City Commuter</h2>
        <p class="mt-1 text-xs text-gray-500">Battery: 400Wh</p>
        <p class="mt-1 text-xs text-gray-500">Range: 45km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">IDR 45k/day</p>
        <a
          href="/bike-detail"
          class="mt-3 inline-block text-xs bg-green-600 text-white px-3 py-1.5 rounded text-center"
        >
          Rent Now
        </a>
      </article>

      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white flex flex-col">
        <img src="https://cdn.discordapp.com/attachments/778474448663478293/1521432932944969738/Artboard_4_copy_7.jpg?ex=6a44d056&is=6a437ed6&hm=187c823932ae2405fb00d57fb6b2af65e51d1d00769340f011b0337fe14b5023&" alt="Mountain Explorer" class="w-full h-64 object-cover rounded mb-3" />
        <h2 class="font-semibold text-sm text-gray-800">Mountain Explorer</h2>
        <p class="mt-1 text-xs text-gray-500">Battery: 500Wh</p>
        <p class="mt-1 text-xs text-gray-500">Range: 60km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">IDR 120k/day</p>
        <a
          href="/bike-detail"
          class="mt-3 inline-block text-xs bg-green-600 text-white px-3 py-1.5 rounded text-center"
        >
          Rent Now
        </a>
      </article>

      <!-- Card -->
      <article class="border border-gray-100 rounded-lg p-4 shadow-sm bg-white flex flex-col">
        <img src="https://cdn.discordapp.com/attachments/778474448663478293/1521432933586567299/eovolt-morning-2024-folding-bike-oceanblue-a.jpg?ex=6a44d056&is=6a437ed6&hm=41578fed963f4ebe38f5d388645a4439d16499c7ba62e6fef6e08ff40ee7bc4b&" alt="Compact Foldable" class="w-full h-64 object-cover rounded mb-3" />
        <h2 class="font-semibold text-sm text-gray-800">Compact Foldable</h2>
        <p class="mt-1 text-xs text-gray-500">Battery: 300Wh</p>
        <p class="mt-1 text-xs text-gray-500">Range: 35km</p>
        <p class="mt-1 text-sm font-semibold text-green-700">IDR 95k/day</p>
        <a
          href="/bike-detail"
          class="mt-3 inline-block text-xs bg-green-600 text-white px-3 py-1.5 rounded text-center"
        >
          Rent Now
        </a>
      </article>
    </section>
  </main>
</body>
</html>