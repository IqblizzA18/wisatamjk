<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.backgrounds.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-image"></i>
                    <p>Background</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.jenis.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Jenis Wisata</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.wisata.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-map-marked-alt"></i>
                    <p>Wisata</p>
                </a>
            </li>

        </ul>
    </nav>
</div>
