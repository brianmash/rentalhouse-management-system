<!DOCTYPE html>
<html lang="en">
  <?php
  include('./db_connect.php');

  ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenant Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="container-fluid py-3 bg-dark text-light">
    <div class="row">
      <div class="col-md-6">
        <h1>Tenant Dashboard</h1>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <p class="m-0">Welcome, [Tenant Name]</p>
      </div>
    </div>
  </header>

  <main class="container py-5">
    <div class="row">
      <div class="col-md-6 mb-3">
        <h2>Balance</h2>
        <h3 id="balance" class="display-4">Loading...</h3>
        <button type="button" class="btn btn-primary mt-3" id="make-payment-btn">Make Payment</button>
      </div>
      <div class="col-md-6 mb-3">
        <h2>Maintenance Requests</h2>
        <form id="maintenance-request-form">
          <div class="mb-3">
            <label for="request-details" class="form-label">Request Details</label>
            <textarea class="form-control" id="request-details" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-secondary">Submit Request</button>
        </form>
      </div>
    </div>
  </main>

  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="payment-form">
            <div class="mb-3">
              <label for="payment-amount" class="form-label">Payment Amount</label>
              <input type="number" min="0" step="0.01" class="form-control" id="payment-amount" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="confirm-payment-btn">Confirm Payment</button>
        
        
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-wEgFhORWEcPEt6mBwUDPFxCkxQqk3L5laaNu7T8sXjWOIvzIWJjW9fDzlPS0N5tvK" crossorigin="anonymous"></script>
  <script src="script2.js"></script>
