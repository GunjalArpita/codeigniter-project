<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="<?= base_url('admin') ?>" class="brand-link">
            <span class="brand-text fw-light">Admin</span>
        </a>
    </div>


    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Artists <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artist') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>All Artists</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('artist/create') ?>" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add Artist</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!-- art type -->
      
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Art Type <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('arttype') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>All Art Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('arttype/create') ?>" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add Art Type</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    
<!-- art product -->
     
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Art Product <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artproduct') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>All Art Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('artproduct/create') ?>" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add Art Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!-- art medium -->
      
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Art Medium <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artmedium') ?>" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>All Art Medium</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('artmedium/create') ?>" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add Art Medium</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
