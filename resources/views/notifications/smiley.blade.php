@if ($notify && $notify['model'] === 'smiley')
    <div
        x-data="{ show: @if($notify['model'] === 'smiley') true @else false @endif }"
        x-init="setTimeout(() => { show = true }, 500)"
        x-show="show"
        x-description="Notification panel, show/hide based on alert state."
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="max-w-sm w-full @if(config('notify.theme') === 'light') bg-white @else bg-gray-800 @endif shadow-lg rounded-lg pointer-events-auto"
    >
        <div class="relative rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
                <div class="flex items-start">
                    @if($notify['type'] === 'success')
                        <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                            <span>👍</span>
                        </div>
                    @endif
                    @if($notify['type'] === 'error')
                        <div class="inline-flex items-center text-white text-2xl rounded-full flex-shrink-0">
                            <span>🙅🏽‍♂️</span>
                        </div>
                    @endif
                    <div class="ml-6 w-0 flex-1">
                        <p class="text-base leading-5 font-medium capitalize @if($notify['type'] === 'error') text-red-600 @else text-green-600 @endif">
                            {{ $notify['type'] }} !
                        </p>
                        <p class="mt-1 text-sm leading-5 @if(config('notify.theme') === 'light') text-gray-500 @else text-white @endif">
                            {{ $notify['message'] }}
                        </p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false;" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
