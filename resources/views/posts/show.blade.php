<x-app-layout>

    <div class="bg-white py-10 sm:py-10">
        <div class="mx-auto mt-8 mb-5 flex items-center gap-x-4 max-w-7xl px-6 lg:px-8">
            <!-- <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50"> -->
            <svg class="h-5 w-5 text-violet-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>

            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    <a href="#">
                        <span>{{ $post->user->name}}</span>

                    </a>
                </p>

            </div>
            <svg class="h-5 w-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <rect x="4" y="5" width="16" height="16" rx="2" />
                <line x1="16" y1="3" x2="16" y2="7" />
                <line x1="8" y1="3" x2="8" y2="7" />
                <line x1="4" y1="11" x2="20" y2="11" />
                <line x1="11" y1="15" x2="12" y2="15" />
                <line x1="12" y1="15" x2="12" y2="18" />
            </svg>
            <time datetime="2020-03-16" class="text-sm text-gray-500">{{ $post->created_at->format('d-m-Y') }}</time>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">


            <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
            <div>{{ $post->extract }}</div>
        </div>
    </div>

</x-app-layout>