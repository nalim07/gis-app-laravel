<x-layouts.app>

    <div class="relative">
        <!-- Background di belakang navbar -->
        <div class="absolute -top-20 left-0 h-[150px] w-full bg-[#19212E]"></div>
    </div>

    <main class="relative z-10 md:p-8">
        <section class="mx-auto max-w-full rounded-lg bg-white p-8 shadow-lg z-50 md:max-w-6xl 2xl:max-w-7xl">
            <!-- Welcome -->
            <div class="mb-20 flex w-full flex-col lg:flex-row-reverse">
                <!-- Image Section -->
                <div class="relative h-56 w-full md:h-72 lg:h-auto lg:w-1/3">
                    <!-- Circular Shape -->
                    <div
                        class="absolute inset-0 flex items-center justify-center overflow-hidden rounded bg-[#0097CE] shadow-inner lg:h-full lg:rounded-t-full">
                    </div>

                    <!-- Image -->
                        <img src="{{ asset('images/home/student_holding_books.png') }}"
                        class="absolute inset-0 z-20 h-full translate-x-48 md:translate-x-96 md:translate-y-7 lg:h-[20rem] lg:w-full lg:translate-x-0"
                        alt="Student holding books" />

                    <!-- Info Box Graduate -->
                    <div
                        class="absolute left-4 w-fit translate-y-2/3 rounded-lg bg-white px-4 py-2 shadow-lg md:translate-y-24 lg:bottom-0 lg:left-auto lg:z-50 lg:translate-x-12 lg:translate-y-2/3">
                        <div class="mb-1 flex items-center justify-between">
                            <div class="flex -space-x-3">
                                <img src="{{ asset('images/home/avatar3.png') }}" class="h-6 w-6 rounded-full border"
                                    alt="Avatar 1" />
                                <img src="{{ asset('images/home/avatar2.png') }}" class="z-30 h-6 w-6 rounded-full border"
                                    alt="Avatar 2" />
                                <img src="{{ asset('images/home/avatar3.png') }}" class="z-40 h-6 w-6 rounded-full border"
                                    alt="Avatar 3" />
                                <img src="{{ asset('images/home/avatar1.png') }}" class="z-50 h-6 w-6 rounded-full border"
                                    alt="Avatar 4" />
                            </div>
                            <span class="ml-2 font-worksans text-lg font-medium text-[#19212E] md:text-xl">240+</span>
                        </div>
                        <p
                            class="font-worksans text-sm font-normal leading-5 text-[#19212E] md:text-lg md:leading-6 lg:text-sm">
                            Graduate Students
                        </p>
                        <!-- Stars -->
                        <div class="flex items-center text-yellow-500">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                            </svg>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                            </svg>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                            </svg>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                            </svg>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                            </svg>
                            <span class="whitespace-nowrap px-2 font-worksans text-sm font-semibold text-[#19212E]">5
                                Stars</span>
                        </div>
                    </div>
                </div>

                <!-- Greeting Text -->
                <div class="w-full pt-6 lg:w-full">
                    <h1 class="mb-4 text-3xl font-medium leading-[36px] text-[#19212E] md:text-5xl md:leading-[56px]">
                        Selamat datang di <br />Sistem Penerimaan <br />Siswa Baru
                    </h1>
                    <p class="mb-6 text-base leading-6 text-[#19212E] md:text-xl md:leading-7 lg:pr-40">
                        Kami menyediakan platform yang mudah dan efisien untuk mendaftar
                        siswa baru. Bergabunglah dengan kami dan wujudkan masa depan
                        pendidikan yang lebih baik.
                    </p>
                    <!-- Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a
                            class="flex cursor-pointer items-center justify-center rounded-lg bg-[#0097CE] px-4 py-3 font-inter text-sm font-semibold leading-5 text-white shadow hover:bg-[#0175B2] md:text-base md:leading-6">
                            Daftar Sekarang
                        </a>
                        <a
                            class="flex cursor-pointer items-center justify-center rounded-lg border border-[#0097CE] bg-transparent px-8 py-3 font-inter text-sm font-semibold leading-5 text-[#0097CE] hover:bg-slate-100 md:text-base md:leading-6">
                            Pelajari
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fitur Unggulan -->
            <div class="relative mb-12 h-fit w-full bg-cover bg-center"
                style="background-image: url('{{ asset('images/home/content-bg.webp') }}')">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-30"></div>

                <!-- Content -->
                <div
                    class="relative z-10 flex h-full flex-col items-center justify-center px-6 text-white md:px-8 lg:px-12">
                    <div class="flex size-full max-w-6xl flex-col items-center">
                        <!-- Title -->
                        <h1
                            class="px-2 py-4 text-center font-Poppins text-xl font-normal leading-8 sm:text-2xl md:px-8 md:py-6 md:text-3xl lg:text-4xl">
                            Fitur unggulan Sekolah untuk Meningkatkan Pengalaman Belajar
                            Siswa
                        </h1>
                        <!-- Swiper Container -->
                        <div class="swiper-container my-6 size-full overflow-hidden md:px-12">
                            <div class="swiper-wrapper">
                                <!-- Card 1 -->
                                <div
                                    class="swiper-slide flex h-full items-center justify-center rounded-xl bg-[#3A475F]/95 p-6 text-center text-white shadow-lg">
                                    <div class="flex h-full flex-col items-center justify-center">
                                        <img src="{{ asset('images/home/lightbulb.svg') }}" alt="" class="mb-4 h-12 w-12" />
                                        <h2 class="font-Poppins text-lg font-medium leading-6">
                                            Inovasi Pembelajaran yang Membantu Siswa Mencapai
                                            Potensi Terbaiknya
                                        </h2>
                                        <p class="mt-2 text-sm">
                                            Sekolah kami menawarkan berbagai fitur untuk mendukung
                                            pembelajaran yang efektif dan menyenangkan.
                                        </p>
                                        <a href="src/form.html"
                                            class="mt-4 flex items-center gap-2 rounded-lg px-2 py-1 text-sm font-semibold text-[#CAFCFB]">
                                            Pelajari
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M2.66663 8.44507H4.33329M13.3333 8.44507L9.33329 4.44507M13.3333 8.44507L9.33329 12.4451M13.3333 8.44507H6.33329"
                                                    stroke="#CAFCFB" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div
                                    class="swiper-slide flex h-full items-center justify-center rounded-xl bg-[#3A475F]/95 p-6 text-center text-white shadow-lg">
                                    <div class="flex h-full flex-col items-center justify-center">
                                        <img src="{{ asset('images/home/lightbulb.svg') }}" alt="" class="mb-4 h-12 w-12" />
                                        <h2 class="font-Poppins text-lg font-medium leading-6">
                                            Program Ekstrakurikuler yang Mendorong Kreativitas dan
                                            Kemandirian Siswa
                                        </h2>
                                        <p class="mt-2 text-sm">
                                            Kami menyediakan berbagai program ekstrakurikuler untuk
                                            mengembangkan minat dan bakat siswa.
                                        </p>
                                        <a href="src/form.html"
                                            class="mt-4 flex items-center gap-2 rounded-lg px-2 py-1 text-sm font-semibold text-[#CAFCFB]">
                                            Pelajari
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M2.66663 8.44507H4.33329M13.3333 8.44507L9.33329 4.44507M13.3333 8.44507L9.33329 12.4451M13.3333 8.44507H6.33329"
                                                    stroke="#CAFCFB" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div
                                    class="swiper-slide flex h-full items-center justify-center rounded-xl bg-[#3A475F]/95 p-6 text-center text-white shadow-lg">
                                    <div class="flex h-full flex-col items-center justify-center">
                                        <img src="{{ asset('images/home/lightbulb.svg') }}" alt="" class="mb-4 h-12 w-12" />
                                        <h2 class="font-Poppins text-lg font-medium leading-6">
                                            Lingkungan Belajar yang Aman dan Nyaman untuk Semua
                                            Siswa
                                        </h2>
                                        <p class="mt-2 text-sm">
                                            Sekolah kami menciptakan suasana yang mendukung
                                            perkembangan sosial dan emosional siswa.
                                        </p>
                                        <a href="src/form.html"
                                            class="mt-4 flex items-center gap-2 rounded-lg px-2 py-1 text-sm font-semibold text-[#CAFCFB]">
                                            Pelajari
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                viewBox="0 0 16 17" fill="none">
                                                <path
                                                    d="M2.66663 8.44507H4.33329M13.3333 8.44507L9.33329 4.44507M13.3333 8.44507L9.33329 12.4451M13.3333 8.44507H6.33329"
                                                    stroke="#CAFCFB" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination my-4"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Registration Process -->
            <div class="mb-12 w-full">
                <div class="mb-9 flex flex-col items-center gap-3 md:items-start lg:flex-row">
                    <!-- Registration Process Title -->
                    <div class="w-full py-2 text-center md:py-9 md:text-left lg:w-full lg:pr-12">
                        <h3 class="font-Poppins text-2xl font-medium text-[#19212E] md:text-4xl">
                            Proses Pendaftaran dan Penerimaan Siswa Baru yang Mudah dan
                            Efisien
                        </h3>
                    </div>
                    <!-- Registration Process Description -->
                    <div class="w-full text-center md:w-full md:text-left">
                        <p class="font-worksans text-base font-normal text-[#19212E] md:text-xl">
                            Kami memahami bahwa pendaftaran siswa baru bisa menjadi proses
                            yang membingungkan. Oleh karena itu, kami telah merancang sistem
                            yang sederhana dan intuitif. Dengan langkah-langkah yang jelas,
                            orang tua dan siswa dapat dengan mudah menyelesaikan
                            pendaftaran.
                        </p>
                    </div>
                </div>

                <!-- Registration Process Cards -->
                <div
                    class="grid-cols grid h-fit items-center gap-6 text-center text-[#19212E] lg:grid-cols-3 lg:gap-12">
                    <!-- Card 1 -->
                    <div class="flex h-full flex-col justify-center rounded-xl border border-[#D7DDE5] p-6">
                        <h2 class="mb-4 font-Poppins text-lg font-medium">
                            Langkah 1: <br />Bayar Biaya Pendaftaran
                        </h2>
                        <p class="font-worksans text-sm font-normal">
                            Sebelum melakukan registrasi calon siswa diwajibkan melakukan
                            pembayaran registrasi terlebih dahulu
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex h-full flex-col justify-center rounded-xl border border-[#D7DDE5] p-6">
                        <h2 class="mb-4 font-Poppins text-lg font-medium">
                            Langkah 2: <br />Isi Formulir Pendaftaran
                        </h2>
                        <p class="font-worksans text-sm font-normal">
                            Pastikan untuk mengunggah semua dokumen yang diperlukan untuk
                            mempercepat proses
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex h-full flex-col justify-center rounded-xl border border-[#D7DDE5] p-6">
                        <h2 class="mb-4 font-Poppins text-lg font-medium">
                            Langkah 3: <br />Menyelesaikan Biaya Bangunan
                        </h2>
                        <p class="font-worksans text-sm font-normal">
                            Setelah mengisi formulir pendaftaran, langkah selanjutnya adalah
                            melanjutkan proses dengan melakukan pembayaran biaya uang
                            bangunan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimoni -->
            <div class="mb-12 flex w-full flex-col gap-6">
                <!-- Testimoni Title -->
                <div class="flex flex-col gap-2">
                    <h1 class="font-Poppins text-4xl font-medium leading-10 text-[#19212E]">
                        Testimoni Alumni
                    </h1>
                    <p class="font-Poppins text-base font-normal leading-normal text-[#19212E]">
                        Testimoni para lulusan Global Indonesia School
                    </p>
                </div>
                <!-- Testimoni Content -->
                <div class="swiper-container2 flex gap-6 overflow-hidden">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div
                            class="swiper-slide flex h-48 w-96 flex-col items-start justify-center gap-3 rounded border border-gray-300 px-8 py-3 shadow-md">
                            <!-- Rating -->
                            <div class="flex items-center gap-2 text-[#FEBC04]">
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                            </div>

                            <!-- Testimonial Text -->
                            <span class="self-stretch font-Poppins text-base font-normal leading-normal text-black">
                                “Sekolah ini memberikan pengalaman belajar yang luar biasa!”
                            </span>

                            <!-- User Information -->
                            <div class="flex items-center justify-start gap-2">
                                <img class="h-7 w-7 rounded-full" src="{{ asset('images/home/avatar1.png') }}" alt="User Avatar" />
                                <div class="flex flex-col items-start justify-start gap-1">
                                    <div class="font-worksans text-xs font-semibold leading-none text-neutral-800">
                                        Ayu Pratiwi
                                    </div>
                                    <div class="font-worksans text-xs font-normal leading-none text-neutral-700">
                                        Lulusan Tahun 2019
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="swiper-slide flex h-48 w-96 flex-col items-start justify-center gap-3 rounded border border-gray-300 px-8 py-3 shadow-md">
                            <!-- Rating -->
                            <div class="flex items-center gap-2 text-[#FEBC04]">
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                            </div>

                            <!-- Testimonial Text -->
                            <span class="self-stretch font-Poppins text-base font-normal leading-normal text-black">
                                “Sekolah ini memberikan pengalaman belajar yang luar biasa!”
                            </span>

                            <!-- User Information -->
                            <div class="flex items-center justify-start gap-2">
                                <img class="h-7 w-7 rounded-full" src="{{ asset('images/home/avatar1.png') }}" alt="User Avatar" />
                                <div class="flex flex-col items-start justify-start gap-1">
                                    <div class="font-worksans text-xs font-semibold leading-none text-neutral-800">
                                        Ayu Pratiwi
                                    </div>
                                    <div class="font-worksans text-xs font-normal leading-none text-neutral-700">
                                        Lulusan Tahun 2019
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="swiper-slide flex h-48 w-96 flex-col items-start justify-center gap-3 rounded border border-gray-300 px-8 py-3 shadow-md">
                            <!-- Rating -->
                            <div class="flex items-center gap-2 text-[#FEBC04]">
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.59-.958L10 0l2.922 5.952 6.59.958-4.756 4.636 1.122 6.545z" />
                                </svg>
                            </div>

                            <!-- Testimonial Text -->
                            <span class="self-stretch font-Poppins text-base font-normal leading-normal text-black">
                                “Sekolah ini memberikan pengalaman belajar yang luar biasa!”
                            </span>

                            <!-- User Information -->
                            <div class="flex items-center justify-start gap-2">
                                <img class="h-7 w-7 rounded-full" src="{{ asset('images/home/avatar1.png') }}" alt="User Avatar" />
                                <div class="flex flex-col items-start justify-start gap-1">
                                    <div class="font-worksans text-xs font-semibold leading-none text-neutral-800">
                                        Ayu Pratiwi
                                    </div>
                                    <div class="font-worksans text-xs font-normal leading-none text-neutral-700">
                                        Lulusan Tahun 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimoni Footer  -->
                <div class="flex items-center justify-between gap-2">
                    <img src="/public/home/pagination-dots-container.svg" alt="" />

                    <!-- Buttons prev & next Container -->
                    <div class="flex items-center">
                        <!-- Buttons prev -->
                        <button id="prevButton" type="button"
                            class="swiper-button-next-custom group me-2 flex h-full cursor-pointer items-center justify-center focus:outline-none"
                            data-carousel-prev>
                            <span class="rounded-full bg-white p-2 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M20 12H17.5M4 12L10 18M4 12L10 6M4 12L14.5 12" stroke="#19212E"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <!-- Buttons next -->
                        <button id="nextButton" type="button"
                            class="swiper-button-prev-custom group flex h-full cursor-pointer items-center justify-center focus:outline-none"
                            data-carousel-next>
                            <span class="rounded-full bg-white p-2 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M4 12H6.5M20 12L14 6M20 12L14 18M20 12H9.5" stroke="#19212E"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Daftar Sekarang -->
            <div class="mb-20 flex w-full flex-col gap-4">
                <div class="flex flex-col items-start justify-start gap-4">
                    <h1 class="font-Poppins text-4xl font-medium leading-10 text-[#19212E]">
                        Daftar Sekarang untuk Masa Depan
                    </h1>
                    <p class="font-Poppins text-base font-normal leading-normal text-[#19212E]">
                        Bergabunglah dengan kami dan mulailah perjalanan pendidikan Anda
                        dengan mudah dan cepat.
                    </p>
                </div>
                <!-- Button -->
                <div class="flex gap-4">
                    <a
                        class="flex cursor-pointer items-center justify-center rounded-lg bg-[#0097CE] px-3 py-2 font-inter text-base font-semibold leading-6 text-white shadow hover:bg-[#0175B2]">
                        Daftar Sekarang
                    </a>
                    <a
                        class="flex cursor-pointer items-center justify-center rounded-lg border border-[#0097CE] bg-transparent px-11 py-2 font-inter text-base font-semibold leading-6 text-[#0097CE] hover:bg-slate-100">
                        Pelajari
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex w-full flex-col py-3">
                <div class="flex flex-col items-center justify-center gap-6">
                    <img src="/public/logo.png" class="inline-flex h-16 flex-col items-start justify-start gap-2 p-2"
                        alt="" />
                    <ul class="flex space-x-6">
                        <li>
                            <a href=""
                                class="font-worksans text-base font-medium leading-normal text-[#19212E] md:text-lg">Tentang
                                Kami</a>
                        </li>
                        <li>
                            <a href=""
                                class="font-worksans text-base font-medium leading-normal text-[#19212E] md:text-lg">EduHybrid</a>
                        </li>
                        <li>
                            <a href=""
                                class="font-worksans text-base font-medium leading-normal text-[#19212E] md:text-lg">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Divider Horizontal -->
                <hr class="mt-12 border-t border-gray-300" />

                <!-- Copyright -->
                <p class="mt-14 font-worksans text-base font-medium leading-normal text-[#19212E] md:text-lg">
                    © 2025 IT Division Hak Cipta Dilindungi.
                </p>
            </div>
        </section>
    </main>

    </x-layouts>
