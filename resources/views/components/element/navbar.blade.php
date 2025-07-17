@php
    $navigation = [
        ["title" => "Home", "url" => "/home"],
        ["title" => "About", "url" => "/about"],
        ["title" => "Project", "url" => "/project/123"],
        ["title" => "Blog", "url" => "/blog/html"],
        ["title" => "Personal Web", "url" => "/personal-web"],
        ["title" => "Contact", "url" => "/contact"]
    ];

    function isActiveNav($url)
    {
        return;
    }
    ;
@endphp

<header class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex w-full h-24 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <x-ui.avatar class="size-12 rounded-full" />
            </div>

            <div class="hidden md:block">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-lg">
                        @foreach ($navigation as $nav)
                            <li>
                                <a class="{{ request()->is(ltrim($nav['url'], '/')) ? 'font-bold text-teal-800' : 'text-teal-500' }} transition hover:text-gray-500/75"
                                    href="{{ $nav['url'] }}">
                                    {{ $nav['title'] }}
                                </a>
                            </li>

                        @endforeach
                    </ul>
                </nav>
            </div>

            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                    <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm" href="#">
                        Login
                    </a>

                    <div class="hidden sm:flex">
                        <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="#">
                            Register
                        </a>
                    </div>
                </div>

                <div class="block md:hidden">
                    <button class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>