<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="">
        <div>

        </div>
        <div>
            <form action="">

            </form>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="container md:flex h-screen  items-center justify-center bg-gray-100">
    <div class="flex items-center justify-center">
        <img src="{{ asset('/icons/login.png') }}" alt="login" class="w-auto mb-8" />
    </div>

    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('login') }}" class="rounded px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <div class="relative">
                    <input id="email" type="email" name="email" placeholder="Email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition-colors duration-300 ease-in-out" value="{{ old('email') }}" required />
                    @error('email')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror

                </div>
            </div>

            <div class=" mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required />
                @error('password')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
                <p class="mt-2">
                    <a href="#" class="hover:underline">Don't have an account? Register</a>
                </p>
            </div>
            @if ($errors->any())
            <div class="text-red-500">
                {{ $errors->first() }}
            </div>
            @endif
            <div class="flex items-center justify-center">
                <button type="submit" class="transition-all bg-black hover:bg-gray-800 text-white hover:text-yellow-200 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline border border-white">
                    Login
                </button>


            </div>
        </form>
    </div>

</body>


</html>