<?php
include 'all.php';
?>

<div class="row mt-4">
    <div class="col-md d-flex justify-content-between ms-2">
        <div class="">
            <h3>Course List</h3>
        </div>
        <div class="me-3">
            <img class="" src="images/scroll.svg" alt="">
            <a href="courseform.php"><button class="btn btn-info text-white ">ADD NEW COURSE</button></a>
        </div>
    </div>
</div>
<hr>
<div class="conatiner-fluid mx-auto" style="">
    <div class="row mx-2" style="overflow-x: auto;">
        <table>
            <thead style="color: rgba(78, 73, 73, 0.211); " class="bg-light">
                <tr>
                    <th scope="col-4">Title</th>
                    <th scope="col-3">Teacher</th>
                    <th scope="col-3">Period</th>
                    <th scope="col-1"> </th>
                    <th scope="col-1"> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'e_classe_db');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * from course order by id DESC;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                      <td>' . $row["title"] . '</td>
                      <td>' . $row["teacher"] . '</td>
                      <td>' . $row["period"] . '</td>
                      <td class="text-nowrap"><a href="editcourse.php?edit=' . $row["id"] . '" class="bi bi-pencil text-info mx-4"></a></td>
                      <td class="text-nowrap"><a href="deletecourse.php?delete=' . $row["id"] . '" class="bi bi-trash text-info"></a></td>
                  </tr>';
                    }
                } else {
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