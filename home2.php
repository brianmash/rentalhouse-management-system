<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental House Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="home style.css"> </head>
<body>

  <header class="container-fluid py-3 bg-dark text-light">
    <div class="row">
      <div class="col-md-6">
        <h1>Rental House Management System</h1>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <select class="form-select" id="user-type">
        
    

          <option  value="admin">Admin Login</option>
          <option value="tenant">Tenant Login</option>
        </select>
        <button type="button" class="btn btn-primary ms-2" id="login-btn">Login</button>
      </div>
    </div>
  </header>

  <main class="container py-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Welcome to the Rental House Management System!</h2>
        <p>This system allows property owners and managers to efficiently manage their rental properties and tenants. Tenants can also access their account information and submit requests.</p>
      </div>
    </div>
  </main>
  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-wEgFhORWEcPEt6mBwUDPFxCkxQqk3L5laaNu7T8sXjWOIvzIWJjW9fDzlPS0N5tvK" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-kenU1KFOnpDHE3eWJvqBsCTsyT4h4LlpjfiCegw1YMdJrYRFkGPrBvgyQp6aMh9s" crossorigin="anonymous"></script>
  <script src="home script.js"></script> </body>
</html>
