    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>

    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth

                            <li class="nav-item dropdown me-5 ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div>{{ Auth::user()->name }}</div>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Log Out</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-dark ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-dark ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>
        </div>
    </div>
