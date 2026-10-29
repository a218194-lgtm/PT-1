<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print()"><i class="bi bi-printer me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>SilkGlow Beauty</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Balqis<br>
                0123456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Nur Aina<br>
                nuraina@gmail.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hydrating Silk Mask</td>
                        <td>RM15.00</td>
                        <td>2</td>
                        <td class="text-end">RM30.00</td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">RM30.00</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>
 

<style>
@media print {
    .sidebar {
        display: none !important;
    }

    .navbar,
    header,
    footer,
    #myBurger {
        display: none !important;
    }

    .btn-primary,
    .btn-secondary {
        display: none !important;
    }

    .card {
        box-shadow: none !important;
        border: none !important;
        border-radius: 0 !important;
    }

    .card:first-of-type {
        margin-bottom: 10px !important;
    }

    body {
        background: #ffffff !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    .container,
    .container-fluid,
    .col,
    .p-4 {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .card-body {
        padding: 15px !important;
    }

    .table-dark th {
        background-color: #212529 !important;
        color: white !important;
    }

}
</style>

 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>