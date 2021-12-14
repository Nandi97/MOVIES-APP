@extends('layouts.main') @section('title', 'Dashboard') @section('content')
<div class="movie-info border-b border-r-gray-800 px-3">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img
            src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg"
            alt="parasite movie"
            class="w-64 md:w-96"
        />
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex flex-wrap item-center text-gray-400 text-sm">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 fill-current text-orange-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                    />
                </svg>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb, 20,2020</span>
                <span class="mx-2">|</span>
                <span class="mx-2">Action, Thriller, Comedy</span>
            </div>
            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa
                ipsam ipsa explicabo eos quia impedit cumque! Accusantium quod
                corporis sint inventore esse libero rerum mollitia officiis
                numquam a nulla expedita, neque velit earum, ab quae magni? Non
                officiis excepturi rem cum dolorum, fugit numquam amet
                perspiciatis ipsa saepe ab sed.
            </p>
            <div class="mt-12">
                <h4 class="text-gray-50 font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Bong Joon-ho</div>
                        <div class="text-sm text-gray-400">
                            Screenplay, Director, Story
                        </div>
                    </div>
                    <div class="ml-8">
                        <div>Han Jin-won</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button
                    class="
                        flex
                        items-center
                        bg-orange-500
                        text-gray-900
                        rounded
                        font-semibold
                        px-5
                        py-4
                        hover:bg-orange-600
                        transition
                        ease-in-out
                        duration-150
                    "
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        class="bi bi-play-circle w-6"
                        viewBox="0 0 16 16"
                    >
                        <path
                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                        />
                        <path
                            d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"
                        />
                    </svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- end movie-info-->

<div class="movie-cast border-b border-gray-800 px-3">
    <div class="conatiner mx-auto md:px-10 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid md:grid-cols-4 sm:grid-cols-1 lg:grid-cols-5 gap-8">
            <div class="mt-8 col-span-1">
                <a href="#">
                    <img
                        src="https://picsum.photos/id/237/200/300"
                        alt="parasite"
                        class="
                            hover:opacity-75
                            transition
                            ease-in-out
                            duration-150
                        "
                    />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300"
                        >Real Name</a
                    >
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8 col-span-1">
                <a href="#">
                    <img
                        src="https://picsum.photos/id/237/200/300"
                        alt="parasite"
                        class="
                            hover:opacity-75
                            transition
                            ease-in-out
                            duration-150
                        "
                    />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300"
                        >Real Name</a
                    >
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8 col-span-1">
                <a href="#">
                    <img
                        src="https://picsum.photos/id/237/200/300"
                        alt="parasite"
                        class="
                            hover:opacity-75
                            transition
                            ease-in-out
                            duration-150
                        "
                    />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300"
                        >Real Name</a
                    >
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8 col-span-1">
                <a href="#">
                    <img
                        src="https://picsum.photos/id/237/200/300"
                        alt="parasite"
                        class="
                            hover:opacity-75
                            transition
                            ease-in-out
                            duration-150
                        "
                    />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300"
                        >Real Name</a
                    >
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8 col-span-1">
                <a href="#">
                    <img
                        src="https://picsum.photos/id/237/200/300"
                        alt="parasite"
                        class="
                            hover:opacity-75
                            transition
                            ease-in-out
                            duration-150
                        "
                    />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300"
                        >Real Name</a
                    >
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        John Smith
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cast -->
<div class="movie-cast border-b border-gray-800 px-3">
    <div class="conatiner mx-auto md:px-10 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="mt-8 col-span-1">
                <img
                    src="https://picsum.photos/id/247/1920/1080"
                    alt="parasite"
                    class="hover:opacity-75 transition ease-in-out duration-150"
                />
            </div>
            <div class="mt-8 col-span-1">
                <img
                    src="https://picsum.photos/id/247/1920/1080"
                    alt="parasite"
                    class="hover:opacity-75 transition ease-in-out duration-150"
                />
            </div>
            <div class="mt-8 col-span-1">
                <img
                    src="https://picsum.photos/id/247/1920/1080"
                    alt="parasite"
                    class="hover:opacity-75 transition ease-in-out duration-150"
                />
            </div>
            <div class="mt-8 col-span-1">
                <img
                    src="https://picsum.photos/id/247/1920/1080"
                    alt="parasite"
                    class="hover:opacity-75 transition ease-in-out duration-150"
                />
            </div>
            <div class="mt-8 col-span-1">
                <img
                    src="https://picsum.photos/id/247/1920/1080"
                    alt="parasite"
                    class="hover:opacity-75 transition ease-in-out duration-150"
                />
            </div>
        </div>
    </div>
</div>
@endsection
