<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <span class="brand-text font-weight-light">E-commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                <a href="<?= base_url('backend/admins')?>" class="nav-link">
          <i style='font-size:20px' class='far'>&#xf044;</i>
                        <p>
                            Admins
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/users')?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/blogs')?>" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                        Blog
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/brands')?>" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Brands
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/categories')?>" class="nav-link">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/delivery_methods')?>" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Delivery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/images')?>" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Images
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/order_products')?>" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Order products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/orders')?>" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Order
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/pages')?>" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Page
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/products')?>" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?= base_url('backend/settings')?>" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>