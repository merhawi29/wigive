<div class="sidebar">
    <div class="sidebar-content">
        <ul class="lists">
            <li class="list">
                <a href="#" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>profile</span>
                </a>
            </li>
            <li class="list">
                <a href="{{ url('home') }}" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>posts</span>
                </a>
            </li>
            <li class="list">
                <a href="{{ url('home') }}" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>home</span>
                </a>
            </li>
            <li class="list">
                <a href="{{ url('create') }}" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>create</span>
                </a>
            </li>
            <li class="list">
                <a href="{{ url('show') }}" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>show</span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>Setting</span>
                </a>
            </li>


            <li class="list">
                <a href="#" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>Report</span>
                </a>
            </li>

            <li class="list">
                <a href="#" class="nav-link">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <span>Help</span>
                </a>
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </ul>
    </div>
</div>
