
<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Orders</h2>
        <p class="text-muted mb-0">Manage and track all customer orders</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Order Form
                </h5>
                <small class="text-muted">Fill in the details of an order</small>
            </div>

            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">

                <div class="col-md-4">
                    <label for="order_date" class="form-label">
                        Order Date
                        <span class="text-danger" aria-hidden="true">*</span>
                    </label>
                    <input type="date"
                           name="order_date"
                           id="order_date"
                           class="form-control"
                           placeholder="Enter Order Date"
                           required>
                </div>

                <div class="col-md-4">
                    <label for="staff_num" class="form-label">
                        Staff
                        <span class="text-danger" aria-hidden="true">*</span>
                    </label>
                    <select name="staff_num"
                            id="staff_num"
                            class="form-control"
                            required>
                        <option value="">Select Staff</option>
                        <option value="S001">S001 - Nur Aina</option>
                        <option value="S002">S002 - Muhammad Amir</option>
                        <option value="S003">S003 - Siti Sarah</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="customer_num" class="form-label">
                        Customer
                        <span class="text-danger" aria-hidden="true">*</span>
                    </label>
                    <select name="customer_num"
                            id="customer_num"
                            class="form-control"
                            required>
                        <option value="">Select Customer</option>
                        <option value="C001">C001 - Balqis</option>
                        <option value="C002">C002 - Kyra</option>
                        <option value="C003">C003 - Zarra</option>
                    </select>
                </div>

            </div>

            <hr class="mt-4 mb-3">

            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>

                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>

    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Order List
                </h5>
                <small class="text-muted">View and manage all customer orders</small>
            </div>

            <div class="col-auto">
                <span class="badge bg-success">Total: 1 item</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Order Date</th>
                        <th>Staff</th>
                        <th>Customer</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>2026-10-28</td>
                        <td>Nur Aina</td>
                        <td>Balqis</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
