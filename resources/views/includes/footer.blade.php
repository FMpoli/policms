<footer class="p-4 bg-gray-800 sm:p-6 dark:bg-gray-800">
    <div class="max-w-screen-xl mx-auto">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo_web_white.svg') }}" class="h-8 mr-3" alt="Logo" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                {{-- @foreach($footerMenuItems as $item)
                    @if($item['type'] == 'heading')
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-200 uppercase dark:text-white">{{ $item['label'] }}</h2>
                            @if(isset($item['children']) && is_array($item['children']))
                                <ul class="text-gray-400 dark:text-gray-400">
                                    @foreach($item['children'] as $child)
                                        <li class="mb-4">
                                            <a href="{{
                                                $child['type'] == 'anchor' ? $child['data']['page'] . '#' . $child['data']['id'] :
                                                $child['data']['url']
                                            }}"
                                            {{ isset($child['data']['target']) ? 'target=' . $child['data']['target'] : '' }}
                                            class="hover:underline">
                                                {{ $child['label'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @else
                        <a href="{{
                            $item['type'] == 'anchor' ? $item['data']['page'] . '#' . $item['data']['id'] :
                            $item['data']['url']
                        }}"
                        {{ isset($item['data']['target']) ? 'target=' . $item['data']['target'] : '' }}
                        class="mx-4 transition duration-300"
                        :class="{'text-black hover:underline': isHovered || isScrolled || !isHome, 'text-white': !isHovered && !isScrolled && isHome}">
                            {{ $item['label'] }}
                        </a>
                    @endif
                @endforeach --}}
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://photonext.polito.it" class="hover:underline">Photonext</a>. All Rights Reserved.
            </span>

        </div>
    </div>
</footer>
