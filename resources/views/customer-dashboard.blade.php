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

<main class="max-w-6xl mx-auto px-4 py-8">

<h1 class="text-3xl font-bold mb-6">
    My Bookings
</h1>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-3 rounded mb-5">
    {{ session('success') }}
</div>
@endif

@if($bookings->isEmpty())

<div class="text-center py-20">

    <h2 class="text-2xl font-semibold mb-2">
        No bookings yet
    </h2>

    <p class="text-gray-500 mb-6">
        Rent your first bike!
    </p>

    <a href="/bikes"
       class="bg-green-600 text-white px-5 py-2 rounded">
        Browse Bikes
    </a>

</div>

@else

<div class="space-y-6">

@foreach($bookings as $booking)

<div class="border rounded-xl shadow bg-white p-5">

<div class="flex justify-between">

<div>

<h2 class="text-xl font-bold">
{{ $booking->bike->name }}
</h2>

<p class="text-gray-600">
{{ $booking->start_date }}
—
{{ $booking->end_date }}
</p>

<p class="mt-2">
Total:
<strong>
Rp {{ number_format($booking->total_price,0,',','.') }}
</strong>
</p>

</div>

<div>

@if($booking->status == 'pending')

<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
Pending
</span>

@elseif($booking->status == 'approved')

<span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
Approved
</span>

@elseif($booking->status == 'active')

<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
Active
</span>

@elseif($booking->status == 'completed')

<span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full">
Completed
</span>

@endif

</div>

</div>

</div>

@endforeach

</div>

@endif

</main>
</body>
</html>