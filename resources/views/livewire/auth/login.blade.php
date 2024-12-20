<div>
    <div class="flex h-screen flex-col items-center justify-center md:flex-row">
        @csrf
        <!-- Greeting Text -->
        <div
            class="bg-customBlue hidden items-start justify-center px-6 text-white md:flex md:h-full md:w-1/2 md:flex-col md:px-6 lg:w-3/5 lg:pl-24 lg:pr-32">
            <h1 class="from-neutral-0 mb-4 font-Poppins font-normal md:text-2xl lg:text-[40px] xl:text-5xl">
                GIS Login Student
            </h1>
            <p class="md:text-md mb-6 text-start font-worksans font-normal leading-6 lg:text-lg xl:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>

        <!-- Login -->
        <div class="flex w-full flex-row items-center justify-center md:w-1/2 lg:w-2/5">
            <div
                class="flex w-full flex-col items-center justify-center md:mx-8 md:rounded-lg md:py-4 md:shadow-md lg:mx-12 xl:mx-16">
                <!-- input field -->
                <form action="#" method="" class="flex w-full flex-col items-center px-6">
                    <h1 class="font-Poppins text-2xl font-semibold text-[#19212E]">
                        Hello Again!
                    </h1>
                    <h2 class="font-worksans text-lg font-normal text-[#3A475F]">
                        Welcome Back
                    </h2>
                    <div class="mt-6 flex w-full flex-col gap-1">
                        <!-- Incorrect username and password -->
                        <div id="login-error"
                            class="mb-2 flex items-center rounded-lg bg-[#FFEEEE] p-2 text-sm text-[#FA5252]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 flex h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="#FA5252">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01M12 5a7 7 0 110 14 7 7 0 010-14z" />
                            </svg>
                            <span>Incorrect username or password</span>
                        </div>
                        
                        <!-- Username -->
                        <label for="username-login"
                            class="font-inter text-sm font-normal leading-tight text-slate-700">Username</label>
                        <div
                            class="inline-flex items-center justify-start gap-1 self-stretch rounded-lg border border-gray-300 px-4 py-3">
                            <div class="relative mr-2 h-6 w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="6" r="4" stroke="#626F84" stroke-width="1.5" />
                                    <path
                                        d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634"
                                        stroke="#626F84" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <input type="text" id="username-login" name="username-login" placeholder="Input Username"
                                class="w-full bg-transparent font-inter text-base font-medium leading-normal text-slate-500 outline-none placeholder:font-inter placeholder:text-base placeholder:text-slate-500"
                                required />
                        </div>

                        <!-- Password -->
                        <label for="password-login"
                            class="mt-4 font-inter text-sm font-normal leading-tight text-slate-700">Password</label>
                        <div
                            class="inline-flex items-center justify-start gap-1 self-stretch rounded-lg border border-gray-300 px-4 py-3">
                            <div class="relative mr-2 h-6 w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M6 10V8C6 7.65929 6.0284 7.32521 6.08296 7M18 10V8C18 4.68629 15.3137 2 12 2C10.208 2 8.59942 2.78563 7.5 4.03126"
                                        stroke="#626F84" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M11 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15"
                                        stroke="#626F84" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <input type="password" id="password-login" name="password-login"
                                placeholder="Input Password"
                                class="w-full bg-transparent font-inter text-base font-medium leading-normal text-slate-500 outline-none placeholder:font-inter placeholder:text-base placeholder:text-slate-500" />

                            <!-- Eye Icons -->
                            <div class="h-6 w-6 cursor-pointer"
                                onclick="togglePassword('password', 'eye-open', 'eye-closed')">
                                <svg id="eye-open" xmlns="http://www.w3.org/2000/svg"
                                    class="hidden h-6 w-6 text-slate-500" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                        stroke="#626F84" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                        stroke="#626F84" stroke-width="1.5" />
                                </svg>
                                <svg id="eye-closed" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-500"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M2 2L22 22" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14 14.2362C13.4692 14.7112 12.7684 15.0001 12 15.0001C10.3431 15.0001 9 13.657 9 12.0001C9 11.1764 9.33193 10.4303 9.86932 9.88818"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="mt-6 inline-flex w-full cursor-pointer items-center justify-center gap-1 self-stretch rounded-lg bg-sky-600 p-4 hover:bg-sky-700">
                        <div class="font-inter text-sm font-semibold leading-tight text-white">
                            Login
                        </div>
                    </button>
                </form>
                <div class="mt-4 flex flex-col items-center justify-center opacity-70">
                    <p class="font-worksans text-sm font-normal leading-tight text-slate-500">
                        Want to enroll in school?
                        <a href="{{ route('Register') }}"
                            class="font-worksans text-sm font-normal leading-tight text-sky-600 hover:text-sky-700">Register
                            Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Element bawah -->
    <div class="pointer-events-none absolute bottom-0 left-0 z-10 hidden overflow-hidden md:block md:h-auto md:w-96">
        <img src="{{ asset('images/element-bawah.svg') }}" alt="" />
    </div>
</div>
