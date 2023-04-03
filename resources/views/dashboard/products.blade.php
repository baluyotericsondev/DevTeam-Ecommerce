@include('dashboard.partials.header')

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
@if (session()->has('success'))
    <div class="col-12">
        <div class="alert alert-success" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            {{ session()->get('success') }}
        </div>
    </div>
@endif
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/admin-dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseError" aria-expanded="false"
                                aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a href="/admin-charts" class="nav-link">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a href="/admin-tables" class="nav-link">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Product Details
                    </a>
                    <a href="/add-product" class="nav-link">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Add Product
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ auth()->user()->name }}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Add Products</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Products</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        PRODUCT ITEMS
                    </div>
                    <div class="card-body">
                        <form action="/add-product" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label for="" class="fw-bold ms-2">Product name</label>
                            <div class="input-group mb-3">
                                <input type="text" name="product_name" placeholder="Product name"
                                    class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>

                            <label for="" class="fw-bold ms-2">Price</label>
                            <div class="input-group mb-3">
                                <input type="number" name="product_price" placeholder="Product price"
                                    class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>

                            <label for="" class="fw-bold ms-2">Image</label>
                            <div class="input-group mb-3">
                                <input type="file" name="product_image" class="form-control"
                                    id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                    aria-label="Upload">
                            </div>

                            <label for="" class="fw-bold ms-2">Description</label>
                            <div class="input-group mb-3">
                                <input type="text" name="product_description" placeholder="Product description"
                                    class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>

                            <label for="" class="fw-bold ms-2">Category</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" id="inputGroupSelect01" name="product_category">
                                    <option selected>Category...</option>
                                    <option value="T-shirt">T-shirt</option>
                                    <option value="Gadget">Gadget</option>
                                    <option value="Electronics">Electronics</option>
                                </select>
                            </div>

                            <label for="" class="fw-bold ms-2">Quantity</label>
                            <div class="input-group mb-3">
                                <input type="number" name="product_quantity" placeholder="Product quantity"
                                    class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>

                            <div class="input-group mb-3">
                                <button class="form-control btn btn-success">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('dashboard.partials.footer')
