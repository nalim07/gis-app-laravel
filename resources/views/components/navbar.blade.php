<nav id="nav-menu" class="sticky -top-1 z-50 bg-[#19212E]/90 py-1 backdrop-blur-sm transition-all duration-300">
    <div class="mx-8 flex flex-wrap items-center justify-between">
        <!-- Hamburger Menu (Mobile) -->
        <button id="hamburger" name="hamburger" type="button" class="block lg:hidden">
            <span class="hamburger-line transition duration-200 ease-in-out"></span>
            <span class="hamburger-line transition duration-100 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
        </button>

        <!-- Navigation menu (Desktop) -->
        <ul id="menu"
            class="hidden w-full flex-col items-center space-y-4 bg-[#19212E] py-4 lg:flex lg:w-auto lg:flex-row lg:space-x-6 lg:space-y-0 lg:bg-transparent 2xl:ml-8">
            <li>
                <a href="#" class="nav-link text-base font-medium text-white hover:text-gray-300">Home</a>
            </li>
            <li>
                <a href="./form.html"
                    class="nav-link text-base font-medium text-[#9AA4B2] hover:text-white">Registration
                    Form</a>
            </li>
            <li>
                <a href="./payment.html"
                    class="nav-link text-base font-medium text-[#9AA4B2] hover:text-white">Payment</a>
            </li>
            <li>
                <a href="./billing.html"
                    class="nav-link text-base font-medium text-[#9AA4B2] hover:text-white">Billings</a>
            </li>
            <li>
                <a href="./transactions.html"
                    class="nav-link text-base font-medium text-[#9AA4B2] hover:text-white">Transactions</a>
            </li>
        </ul>

        <!-- Search, Notification, Profile -->
        <div class="my-3 flex items-center gap-2 md:my-0">
            <!-- Search -->
            <div
                class="group flex h-10 w-10 items-center overflow-hidden bg-transparent p-2 duration-300 hover:w-40 hover:duration-300 md:hover:w-[270px]">
                <div class="flex items-center justify-center fill-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M11.5 21.5C16.7467 21.5 21 17.2467 21 12C21 6.75329 16.7467 2.5 11.5 2.5C6.25329 2.5 2 6.75329 2 12C2 17.2467 6.25329 21.5 11.5 21.5Z"
                            stroke="#F2F5F8" stroke-width="1.5" />
                        <path d="M20 20.5L22 22.5" stroke="#F2F5F8" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <input type="search" id="search"
                    class="ml-4 w-full border-b border-white bg-transparent pr-1 text-base font-normal text-white outline-none" />
            </div>

            <!-- Notification -->
            <div class="relative px-2">
                <button type="button" class="flex rounded-full text-sm focus:ring-4 focus:ring-gray-300/10"
                    aria-expanded="false" data-dropdown-toggle="dropdown-notification">
                    <span class="sr-only">View notifications</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                        fill="none">
                        <path
                            d="M9 3.17366C9.90927 2.7417 10.9264 2.5 12.0001 2.5C15.8661 2.5 19.0001 5.63401 19.0001 9.5V10.2041C19.0001 11.0491 19.2502 11.8752 19.7189 12.5783L20.8675 14.3012C21.9166 15.8749 21.1157 18.0139 19.291 18.5116C14.5175 19.8134 9.48258 19.8134 4.70913 18.5116C2.88442 18.0139 2.08349 15.8749 3.13263 14.3012L4.28123 12.5783C4.74995 11.8752 5.00006 11.0491 5.00006 10.2041V9.5C5.00006 8.42638 5.24177 7.40921 5.67373 6.49994"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M7.5 19.5C8.15503 21.2478 9.92246 22.5 12 22.5C12.2445 22.5 12.4847 22.4827 12.7192 22.4492M16.5 19.5C16.2329 20.2126 15.781 20.8428 15.1985 21.3393"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <div
                        class="absolute -top-2 right-0 flex h-4 w-4 items-center justify-center rounded-full bg-red-600 text-xs font-semibold text-white">
                        3
                    </div>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 mt-5 hidden w-96 divide-y divide-gray-600 rounded-lg bg-gray-700 shadow"
                    id="dropdown-notification">
                    <div class="p-3">
                        <p class="mb-3 text-sm text-gray-400">Notifications</p>
                        <div class="space-y-3">
                            <a href="#" class="flex rounded-lg bg-gray-600 p-2 text-white hover:bg-gray-500">
                                <img class="h-8 w-8 rounded-lg"
                                    src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese Leos" />
                                <div class="ml-3">
                                    <p class="mb-1 text-sm font-normal text-gray-400">
                                        <strong>Jese Leos</strong> posted a new blog
                                        <strong>Check it out</strong>
                                    </p>
                                    <p class="text-xs font-medium text-gray-400">
                                        1 hour ago
                                    </p>
                                </div>
                            </a>
                            <!-- More notification items can be added here -->
                        </div>
                    </div>
                    <div class="p-2">
                        <a href="#"
                            class="block rounded-lg bg-gray-600 p-2 text-center text-sm font-medium text-white hover:bg-gray-500">
                            <span class="font-semibold">See all notifications</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Profile -->
            <div class="flex items-center space-x-3 md:order-2 md:space-x-0">
                <button type="button"
                    class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <img class="h-10 w-10 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="user photo" />
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="user-dropdown">
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

                <div class="hidden px-4 py-2 md:block">
                    <span class="block text-base font-semibold text-white">Syafina Landgrab</span>
                    <span class="block truncate text-base text-[#FFF]">Prospective Students</span>
                </div>
            </div>
        </div>
    </div>
</nav>
