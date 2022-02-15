<?php
include 'all.php'
?>
<?php
$conn = new mysqli('localhost', 'root', '', 'e_classe_db');
$id = $_GET['edit'];
$sql = "SELECT * FROM course WHERE id = $id";
$res = mysqli_query($conn, $sql);
$updat = mysqli_fetch_assoc($res);
?>
<div>
  <div class="row mt-4">
    <div class="col-md d-flex justify-content-between ms-2">
      <div class="">
        <h3>Course Form</h3>
      </div>
      <div class="me-3">
        <img class="" src="images/scroll.svg" alt="">
        <a href="courseform.php"><button class="btn btn-info text-white ">ADD NEW COURSE</button></a>
      </div>
    </div>
  </div>
  <hr>
  <form method="POST" class="container bg-white " style="max-width: 475px">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <div class="opacity-50">
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $updat['title']; ?>">
      </div>
    </div>
    <div class="d-grid pt-5">
      <button type="submit" name="submit" class="btn btn-info text-white shadow-lg mb-3  rounded">SUBMIT</button>
    </div>

    <?php
    if (isset($_POST['submit'])) {
      $title = $_POST['title'];
      $query = "UPDATE course set id = $id , title='$title' where id='$id'";
      $res = mysqli_query($conn, $query);
      echo '<script>window.location.href = "course.php";</script>';
      mysqli_close($conn, $query);
    }
    ?>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>