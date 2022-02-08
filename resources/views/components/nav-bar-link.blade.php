<li>
    <a href="{{ $link }}" class="sidebar-link {{ $link == request()->url() ? 'active' : '' }}">
        <i class="fas {{ $class }} fa-fw sidebar-link-icon"></i>
        {{ $title }}
    </a>
</li>
