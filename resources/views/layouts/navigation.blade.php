<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            {{-- @can('user_management_access')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs nav-icon"></i>
                        <p>
                            {{ __('User Management') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}"
                                href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                                {{ __('Permissions') }}</a>
                            <a class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}"
                                href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i>
                                {{ __('Roles') }}</a>
                            <a class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}"
                                href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i>
                                {{ __('Users') }}</a>
                        </li>
                    </ul>
                </li>
            @endcan --}}

            <li class="nav-item">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.backgrounds.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-image"></i>
                    <p>{{ __('Background') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.testimonials.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comment-alt"></i>
                    <p>{{ __('Testimoni') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.jenis.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>{{ __('Jenis Wisata') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.wisata.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-map-marked-alt"></i>
                    <p>{{ __('Wisata') }}</p>
                </a>
            </li>

        </ul>
    </nav>
</div>
