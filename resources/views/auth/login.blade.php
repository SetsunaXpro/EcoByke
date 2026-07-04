<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoByke Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">

    <h1 class="text-3xl font-bold text-center text-green-600 mb-2">
        EcoByke
    </h1>

    <p class="text-center text-gray-500 mb-6">
        Sign in to your account
    </p>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 text-sm font-medium">
                Email
            </label>

            <input
                type="email"
                name="email"
                required
                class="w-full border rounded-lg px-3 py-2"
            >
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-sm font-medium">
                Password
            </label>

            <input
                type="password"
                name="password"
                required
                class="w-full border rounded-lg px-3 py-2"
            >
        </div>

        <div class="flex items-center justify-between mb-6">
            <label class="flex items-center gap-2 text-sm">
                <input type="checkbox" name="remember">
                Remember me
            </label>

            <a href="{{ route('password.request') }}"
               class="text-green-600 text-sm">
                Forgot password?
            </a>
        </div>

        <button
            type="submit"
            class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700"
        >
            Login
        </button>
    </form>

    <p class="text-center text-sm mt-4">
        Don't have an account?
        <a href="{{ route('register') }}"
           class="text-green-600 font-medium">
            Register
        </a>
    </p>

</div>

</body>
</html>
