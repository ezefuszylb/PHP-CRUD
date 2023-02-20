<?php

include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];        
    }

    
}

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_task.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="Titulo" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Editar titulo">
        </div>
        <div class="form-group">
        <textarea name="Descripcion" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn btn-success" name="update">
            Editar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include("includes/footer.php") ?>