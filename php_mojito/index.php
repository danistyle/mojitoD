<?php include ("db.php")
?>
<?php include ("includes/header.php")
?>
<div class="container p-4">
    <div class = "row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form control" placeholder="cotél" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Enviar Coctél">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include ("includes/footer.php")
?>