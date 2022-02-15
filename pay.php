<?php
include 'all.php';
?>
<div class="mx-3">
  <div class="row mt-4">
    <div class="col-md d-flex justify-content-between">
      <div class="">
        <h3>Payment Details</h3>
      </div>
      <div class="">
        <img class="" src="images/scroll.svg" alt="">
        <a href="paymentsform.php"><button class="btn btn-info text-white ">ADD NEW PAYMENT</button></a> 
      </div>
    </div>
  </div>
  <hr>
  <div style="overflow: auto;" class="row">
    <table class="table table-hover table-borderless table-striped px-2">
      <thead style="color: rgba(78, 73, 73, 0.211); " class="bg-light mx-1">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Payment Schedule</th>
          <th scope="col">Bill Number</th>
          <th scope="col">Amount Paid</th>
          <th scope="col">Balance amountr</th>
          <th scope="col">Date</th>
          <th scope="col"> </th>
        </tr>
      </thead>
      <tbody>
      <?php
            $conn = new mysqli('localhost', 'root','', 'e_classe_db');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * from payments order by id DESC;";
            $result = $conn->query($sql);
            if ($result-> num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['payment_schedule'] . "</td>
                    <td>" . $row['bill_number'] . "</td>
                    <td>" . $row['amount_paid'] . "</td>
                    <td>" . $row['balance_amount'] . "</td>
                    <td class='text-nowrap'>" . $row['date'] . "</td>
                    <td><i class='bi bi-eye text-info'></i></td>
                  </tr>";
                }
            }else {
                echo "0 results";
            }
        ?>
      </tbody>
    </table>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>