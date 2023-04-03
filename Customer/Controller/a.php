<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Order Confirmation</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container mt-5">
      <div class="card p-5">
        <h1 class="mb-5">Order Confirmation</h1>

        <div class="row">
          <div class="col-md-6">
            <h5>Order Details:</h5>
            <ul class="list-unstyled">
              <li>Product: iPhone 12 Pro</li>
              <li>Quantity: 1</li>
              <li>Total: $999</li>
            </ul>
          </div>

          <div class="col-md-6">
            <h5>Shipping Details:</h5>
            <ul class="list-unstyled">
              <li>Name: John Doe</li>
              <li>Address: 123 Main St</li>
              <li>City: Anytown</li>
              <li>State: NY</li>
              <li>Zip Code: 12345</li>
            </ul>
          </div>
        </div>

        <div class="text-center mt-5">
          <p>Your order has been confirmed. Thank you for your purchase!</p>
        </div>

        <div class="text-center mt-5">
          <button class="btn btn-primary" onclick="window.print()">Print Receipt</button>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8bc"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>