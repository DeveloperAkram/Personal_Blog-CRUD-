<?php
session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: ../users/login.php");
    }
include('../include/connect.php');

$con = connectBD();

$sql = "SELECT *FROM categories";
$result = mysqli_query($con, $sql);

include('../include/header.php');

?>

<a class="btn btn-success" href="index.php"> Back </a>
<br><br>
    <div class="content">
    <h1> Add New Post </h1>
    
    <form action="store.php" enctype= "multipart/form-data" method= "post">
      <div class="form-group">
      <label for="title">Title</label>
      <input required type="text" class="form-control" name="title"  placeholder="Enter Title">
      </div>
      
      <div class="form-group">
      <label for="description">Description</label>
      <textarea required type="text" class="form-control" name="description" rows="10"></textarea>
      </div>
      
      <div class="form-group">
      <label for="image">Image</label>
      <input required type="file" class="form-control" name="image">
      </div>
      
      <div class="form-group">
      <label for="date">Date</label>
      <input required type="date" class="form-control" name="date">
      </div>
      
      <div class="form-group">
      <label for="category">Category</label>
      <select name= "category_id" class="form-control">
        <option> Select Category </option>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?= $row['id'] ?>"> <?= $row['title'] ?></option>
            <?php } ?>
      </select>
      </div>
     
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  
    </div>
    
<?php
// include('../include/footer.php');
?>