<?php
include "model.php";
$model = new Model();
$ID = $_REQUEST['id'];
$delete = $model->delete($ID);
if($delete ){
    echo "<script>alert('row deleted successfully')</script>";
    echo "<script>window.location.href='records.php'</script>";
}

?>