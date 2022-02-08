<div class="sidebar min-vh-100" >
    <ul>
        <li class="my-3">
            <div class="d-flex justify-content-between">
                <a href="index.html" >
                    <img src="{{ asset('images/logos/logo.PNG') }}" class="brand-logo" height="50" alt="">
                </a>
                <button class="btn btn-light d-block d-lg-none" id="hideSidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <x-nav-bar-link link="{{ route('home') }}" title="Home" class="fa-home" />
        </li>
        <li>
            <x-nav-bar-link link="{{ route('frame') }}" title="Frame" class="fa-file-archive"></x-nav-bar-link>
        </li>

        <li class="sidebar-spacer"></li>
        <li>
            <x-nav-bar-title title="Manage Article"></x-nav-bar-title>
        </li>
        <li>
            <a href="article-create.html" class="sidebar-link">
                <i class="fas fa-plus-circle fa-fw sidebar-link-icon"></i>
                Create Article
            </a>
        </li>
        <li>
            <a href="article-list.html" class="sidebar-link">
                <i class="fas fa-list fa-fw sidebar-link-icon"></i>
                Article Lists
            </a>
        </li>
        <li class="sidebar-spacer"></li>

        <li>
            <a href="{{ route('logout') }}" class="btn btn-outline-primary w-100"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-unlock"></i> Log Out
            </a>
        </li>

    </ul>
</div>
