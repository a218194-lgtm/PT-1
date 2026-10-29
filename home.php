<?php
ob_start();
?>

<div class="card border-0 shadow-sm mb-4"
     style="background: linear-gradient(135deg, #fce4ec, #f8bbd0);">
    <div class="card-body p-4 p-md-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="text-uppercase mb-2"
                   style="letter-spacing: 2px; color: #ad1457;">
                    Welcome to SilkGlow Beauty
                </p>

                <h1 class="fw-bold mb-3" style="color: #880e4f;">
                    Beauty Begins with Care
                </h1>

                <p class="mb-4" style="color: #6d354b;">
                    Manage your products, inventory, customers, staff
                    and orders efficiently in one place.
                </p>

                <a href="products.php" class="btn btn-dark me-2">
                    <i class="bi bi-box-seam me-1"></i>
                    Manage Products
                </a>

                <a href="orders.php" class="btn btn-outline-dark">
                    <i class="bi bi-receipt me-1"></i>
                    View Orders
                </a>
            </div>

            <div class="col-md-4 text-center mt-4 mt-md-0">
                <i class="bi bi-bag-heart"
                   style="font-size: 120px; color: #ad1457;"></i>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
    <h4 class="fw-bold">Dashboard Overview</h4>
    <p class="text-muted">
        Quick access to your back-office management modules.
    </p>
</div>

<div class="row g-4 mb-4">

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="rounded p-3"
                         style="background-color: #fce4ec;">
                        <i class="bi bi-box-seam fs-3"
                           style="color: #c2185b;"></i>
                    </div>
                    <i class="bi bi-arrow-up-right text-muted fs-5"></i>
                </div>

                <h5 class="fw-bold">Products</h5>
                <p class="text-muted small">
                    Manage product information, prices and brands.
                </p>

                <a href="products.php"
                   class="text-decoration-none fw-semibold"
                   style="color: #c2185b;">
                    Manage Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="rounded p-3"
                         style="background-color: #f3e5f5;">
                        <i class="bi bi-people fs-3"
                           style="color: #7b1fa2;"></i>
                    </div>
                    <i class="bi bi-arrow-up-right text-muted fs-5"></i>
                </div>

                <h5 class="fw-bold">Customers</h5>
                <p class="text-muted small">
                    View and manage customer information.
                </p>

                <a href="customers.php"
                   class="text-decoration-none fw-semibold"
                   style="color: #7b1fa2;">
                    Manage Customers <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="rounded p-3"
                         style="background-color: #e3f2fd;">
                        <i class="bi bi-person-badge fs-3"
                           style="color: #1565c0;"></i>
                    </div>
                    <i class="bi bi-arrow-up-right text-muted fs-5"></i>
                </div>

                <h5 class="fw-bold">Staffs</h5>
                <p class="text-muted small">
                    Manage staff details and contact information.
                </p>

                <a href="staffs.php"
                   class="text-decoration-none fw-semibold"
                   style="color: #1565c0;">
                    Manage Staffs <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="rounded p-3"
                         style="background-color: #e8f5e9;">
                        <i class="bi bi-receipt fs-3"
                           style="color: #2e7d32;"></i>
                    </div>
                    <i class="bi bi-arrow-up-right text-muted fs-5"></i>
                </div>

                <h5 class="fw-bold">Orders</h5>
                <p class="text-muted small">
                    View customer orders and manage order records.
                </p>

                <a href="orders.php"
                   class="text-decoration-none fw-semibold"
                   style="color: #2e7d32;">
                    Manage Orders <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

<div class="col-md-6 col-xl-3">
    <div class="card shadow-sm border-0 h-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="rounded p-3"
                     style="background-color: #fff3e0;">
                    <i class="bi bi-card-list fs-3"
                       style="color: #ef6c00;"></i>
                </div>
                <i class="bi bi-arrow-up-right text-muted fs-5"></i>
            </div>

            <h5 class="fw-bold">Order Details</h5>
            <p class="text-muted small">
                View detailed information about customer orders.
            </p>

            <a href="ordersdetails.php"
               class="text-decoration-none fw-semibold"
               style="color: #ef6c00;">
                View Order Details <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<div class="card border-0 shadow-sm mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-auto">
                <i class="bi bi-stars fs-1"
                   style="color: #c2185b;"></i>
            </div>

            <div class="col">
                <h5 class="fw-bold mb-1">Your Business, One Dashboard</h5>
                <p class="text-muted mb-0">
                    Keep your SilkGlow Beauty operations organised
                    with convenient access to every management module.
                </p>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>