<?php
include 'all.php'
?>
<div>
  <div class="row mt-4">
    <div class="col-md d-flex justify-content-between ms-2">
      <div class="">
        <h3>Payment Form</h3>
      </div>
      <div class="me-3">
        <img class="" src="images/scroll.svg" alt="">
        <a href="paymentsform.php"><button class="btn btn-info text-white ">ADD NEW PAYMENT</button></a>
      </div>
    </div>
  </div>
  <hr>
  <form action="addpayments.php" method="POST" class="container bg-white " style="max-width: 475px">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <div class="opacity-50">
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the name">
      </div>
      <label for="payment_schedule" class="form-label">Payment Schedule</label>
      <div class="opacity-50">
        <input type="text" name="payment_schedule" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the payment schedule">
      </div>
      <label for="bill_number" class="form-label">Bill Number</label>
      <div class="opacity-50">
        <input type="number_format" name="bill_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the bill number">
      </div>
      <label for="amount_paid" class="form-label">Amount Paid</label>
      <div class="opacity-50">
        <input type="number_format" name="amount_paid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the amount paid">
      </div>
      <label for="balance_amount" class="form-label">Balance Amount</label>
      <div class="opacity-50">
        <input type="number_format" name="balance_amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the balance amount">
      </div>
      <label for="date" class="form-label">Date</label>
      <div class="opacity-50">
        <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the date">
      </div>
    </div>
    <div class="d-grid pt-5">
      <button type="submit" name="submit" class="btn btn-info text-white shadow-lg mb-3  rounded">SUBMIT</button>
    </div>

  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>