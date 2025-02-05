<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/logo.ico') }}">

    <title>GIS Portal Student</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/custom.css')
</head>

<body class="m-0 h-screen overflow-hidden">
    <div class="relative flex h-full flex-col items-center justify-center md:flex-row">
        <!-- Greeting Text -->
        <div
            class="bg-customBlue hidden items-start justify-center px-6 text-white md:flex md:h-full md:w-2/3 md:flex-col md:px-6 lg:w-3/5 lg:pl-24 lg:pr-32">
            <h1 class="from-neutral-0 mb-4 font-Poppins font-normal md:text-2xl lg:text-[40px] xl:text-5xl">
                GIS Portal Student
            </h1>
            <p class="md:text-md mb-6 text-start font-worksans font-normal leading-6 lg:text-lg xl:text-xl">
                Enjoy seamless digital learning with complete features. Join us now
                and be part of our inspiring community!
            </p>
        </div>

        <!-- welcome Login, Register -->
        <div class="h-full w-full flex-row items-center justify-center md:w-1/2 lg:w-2/5">
            <div class="flex h-full w-full flex-col items-center justify-center gap-4">
                <img class="w-4/5" src="{{ asset('images/student-studying.svg') }}" alt="Student Studying" />

                
                <a href="{{ route('Register') }}"
                    class="flex w-3/4 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[#0097ce] px-4 py-[10px] hover:bg-[#0175B2]">
                    <div class="font-inter text-base font-semibold text-white">
                        Register
                    </div>
                </a>
    
                
                <a href="{{ route('Login') }}"
                    class="flex w-3/4 cursor-pointer items-center justify-center gap-2 rounded-lg border border-[#0097ce] px-4 py-[10px] hover:bg-gray-50">
                    <div class="font-inter text-base font-semibold text-[#0097ce]">
                        Login
                    </div>
                </a>
    
            </div>
        </div>

        <!-- Element atas -->
        <div class="pointer-events-none absolute right-0 top-0 z-10 hidden overflow-hidden md:block md:h-80 md:w-80">
            <img src="{{ asset('images/element-atas.svg') }}" alt="" />
        </div>

        <!-- Element bawah -->
        <div class="pointer-events-none absolute bottom-0 left-0 z-10 hidden overflow-hidden md:block md:h-auto md:w-96">
            <img src="{{ asset('images/element-bawah.svg') }}" alt="" />
        </div>
    </div>
</body>

</html>
