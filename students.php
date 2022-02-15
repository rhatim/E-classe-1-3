<?php
include 'all.php';
?>
<div>
  <div class="row mt-4">
    <div class="col-md d-flex justify-content-between ms-2">
      <div class="">
        <h3>Students List</h3>
      </div>
      <div class="me-3">
        <img class="" src="images/scroll.svg" alt="">
        <a href="formstudents.php"><button class="btn btn-info text-white ">ADD NEW STUDENT</button></a> 
      </div>
    </div>
  </div>
  <hr>
  <div class="conatiner-fluid mx-auto" style="">
    <div class="row mx-2" style="overflow-x: auto;">
      <table>
        <thead style="color: rgba(78, 73, 73, 0.211); " class="bg-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone </th>
            <th scope="col">Enroll Number</th>
            <th class="text-nowrap" scope="col">Date of admission</th>
            <th scope="col"> </th>
          </tr>
        
          

        </thead>
        <tbody>
        <?php
            $conn = new mysqli('localhost', 'root','', 'e_classe_db');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id, name, email, phone, enroll_number, date_of_admission from students order by id DESC;";
            $result = $conn->query($sql);
            if ($result-> num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                      <td> <img src="images/table.svg" alt=></td>
                      <td>' . $row["name"] . '</td>
                      <td>' . $row["email"] . '</td>
                      <td>' . $row["phone"] . '</td>
                      <td class="text-nowrap">' . $row["enroll_number"] . '</td>
                      <td class="text-nowrap">' . $row["date_of_admission"] . '</td>
                      
                      <td class="text-nowrap"><a href="edit.php?edit='.$row["id"].'" class="bi bi-pencil text-info mx-4"></a></td>

                      <td class="text-nowrap"><a href="deletestudent.php?delete='.$row["id"].'" class="bi bi-trash text-info"></a></td>
                  </tr>';
                }
            }else {
                echo "0 results";
            }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>