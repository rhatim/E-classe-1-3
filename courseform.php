<?php
include 'all.php'
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
  <form action="addcourse.php" method="POST" class="container bg-white " style="max-width: 475px">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
        <div class="opacity-50">  
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the title of the course">
        </div>
        <label for="teacher" class="form-label">Teacher</label>
        <div class="opacity-50">  
            <input type="text" name="teacher" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the teacher of the course">
        </div>  
        <label for="period" class="form-label">Period</label>
        <div class="opacity-50">  
            <input type="text" name="period" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the period of the course">
        </div>    
        </div>
        <div class="d-grid pt-5">
            <button type="submit" class="btn btn-info text-white shadow-lg mb-3  rounded">SUBMIT</button>
        </div>
        
      </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>