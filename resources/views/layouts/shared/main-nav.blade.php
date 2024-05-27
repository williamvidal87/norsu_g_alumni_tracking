<aside class="sidebar ">
    <div class="scrollbar">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                    <img style="min-width: 40px; height: 40px; object-fit: cover;" class="user__img" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                <div>
                    <div class="user__name">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</div>
                    <div class="user__email">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="dropdown-menu dropdown-menu--invert">
                @if (Auth::user()->role_id!=1)
                    <a class="dropdown-item" href="edit-profile">Update Information</a>
                @endif
                <a class="dropdown-item" href="edit-password">Update Password</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </form>
            </div>
        </div>

        <!-- for admin nav -->
        @if(Auth::user()->role_id==1)
            @include('layouts.shared.main-navs.admin-nav')
        @endif
        
        <!-- for alumni nav -->
        @if(Auth::user()->role_id==2)
            @include('layouts.shared.main-navs.alumni-nav')
        @endif

    </div>
</aside>


<script>
    // Get the current URL path
    var currentPath = window.location.pathname;

    // Normalize the path by removing leading slashes if present
    currentPath = currentPath.replace(/^\/+/, '');

    // Get the list item with the id that matches the current path
    var listItem = document.getElementById(currentPath);

    // Check if the list item exists
    if (listItem) {
        // Add the 'navigation__active' class to the list item
        listItem.classList.add('navigation__active');
    }
</script>