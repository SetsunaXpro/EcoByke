<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <title>My Bookings</title>
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

  <main class="max-w-6xl mx-auto px-4 py-6 space-y-6 text-sm">
    <!-- Current Booking -->
    <section>
      <h2 class="text-base font-semibold text-gray-800 mb-3">Current Booking</h2>
      <div class="border border-gray-100 rounded-lg p-4 bg-gray-50 flex flex-col gap-1">
        <p class="font-medium text-gray-800">City Commuter</p>
        <p class="text-xs text-gray-600">From: 2024-07-01 · To: 2024-07-03</p>
        <p class="text-xs text-gray-600">Status: <span class="text-green-700 font-medium">Active</span></p>
        <p class="text-xs text-gray-600">Total: <span class="font-medium">Rp 45000</span></p>
      </div>
    </section>

    <!-- Past Bookings -->
    <section>
      <h2 class="text-base font-semibold text-gray-800 mb-3">Past Bookings</h2>
      <div class="space-y-2">
        <div class="border border-gray-100 rounded-lg p-3 flex justify-between items-center">
          <div>
            <p class="text-xs font-medium text-gray-800">Mountain Explorer</p>
            <p class="text-xs text-gray-500">2024-06-10 · 2024-06-12</p>
          </div>
          <p class="text-xs text-gray-600">Rp 120000</p>
        </div>
        <div class="border border-gray-100 rounded-lg p-3 flex justify-between items-center">
          <div>
            <p class="text-xs font-medium text-gray-800">Compact Foldable</p>
            <p class="text-xs text-gray-500">2024-05-02 · 2024-05-03</p>
          </div>
          <p class="text-xs text-gray-600">Rp 95000</p>
        </div>
      </div>
    </section>

    <!-- Payment History -->
    <section>
      <h2 class="text-base font-semibold text-gray-800 mb-3">Payment History</h2>
      <div class="space-y-2">
        <div class="border border-gray-100 rounded-lg p-3 flex justify-between items-center">
          <div>
            <p class="text-xs text-gray-600">Invoice #1024</p>
            <p class="text-xs text-gray-500">Paid on 2024-06-12</p>
          </div>
          <p class="text-xs text-gray-700 font-medium">Rp 45000</p>
        </div>
        <div class="border border-gray-100 rounded-lg p-3 flex justify-between items-center">
          <div>
            <p class="text-xs text-gray-600">Invoice #1018</p>
            <p class="text-xs text-gray-500">Paid on 2024-05-03</p>
          </div>
          <p class="text-xs text-gray-700 font-medium">Rp 95000</p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>