<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 [&_[x-cloak]]:hidden" x-data="{ modalOpen: false }">
        <h1 class="text-3xl font-bold mb-6">Ultime News</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Inizio di una news -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://picsum.photos/200/300" alt="Immagine della news" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Titolo della News 1</h2>
                    <p class="text-gray-500 text-sm">1 Giugno 2024</p>
                    <p class="text-gray-700 mt-2">Questo è un breve testo di esempio per la news 1...</p>
                </div>
            </div>
            <!-- Fine di una news -->

            <!-- Ripetere per altre news -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://picsum.photos/200/300" alt="Immagine della news" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Titolo della News 2</h2>
                    <p class="text-gray-500 text-sm">2 Giugno 2024</p>
                    <p class="text-gray-700 mt-2">Questo è un breve testo di esempio per la news 2...</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://picsum.photos/200/300" alt="Immagine della news" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Titolo della News 3</h2>
                    <p class="text-gray-500 text-sm">3 Giugno 2024</p>
                    <p class="text-gray-700 mt-2">Questo è un breve testo di esempio per la news 3...</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://picsum.photos/200/300" alt="Immagine della news" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Titolo della News 4</h2>
                    <p class="text-gray-500 text-sm">4 Giugno 2024</p>
                    <p class="text-gray-700 mt-2">Questo è un breve testo di esempio per la news 4...</p>
                </div>
            </div>
        </div>
        <div class="mt-6 text-center">
            <a href="/tutte-le-news" class="text-blue-500 hover:text-blue-700 font-semibold">Tutte le News</a>
        </div>
    </div>
</section>