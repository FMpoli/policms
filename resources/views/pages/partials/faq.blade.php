<section style="background-color: {{ $block['data']['background_color'] }}">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
        <h2 class="mb-8 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ $block['data']['title'] }}</h2>
        <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
            <div>
                @php
                    $faqCount = count($block['data']['faq']);
                    $halfCount = ceil($faqCount / 2); // Divide il conteggio delle faq per due e arrotonda verso l'alto
                    $firstColumn = array_slice($block['data']['faq'], 0, $halfCount); // Prima metà delle faq
                    $secondColumn = array_slice($block['data']['faq'], $halfCount); // Seconda metà delle faq
                @endphp

                <div>
                    @foreach($firstColumn as $f)
                        <div class="mb-10">
                            <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                                <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                                {{ $f['question'] }}
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">{{ $f['answer'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div>
                    @foreach($secondColumn as $f)
                        <div class="mb-10">
                            <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                                <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                                {{ $f['question'] }}
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">{{ $f['answer'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
