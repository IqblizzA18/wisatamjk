<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

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
