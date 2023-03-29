<?php
include 'conproject.php';
$idpro = $_GET['id'];
$sql1 = "SELECT * FROM product WHERE pro_id='$idpro' ";
$result = mysqli_query($conn,$sql1 );
$rs=mysqli_fetch_array($result);
$p_typeID = $rs['type_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!--Bootstrap  CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="Container">
        <div class="row">
            <div class="col-sm-6">
        <div class="alert alert-primary h4 text-center mb-4 mt-4" role="alert"> แก้ไขข้อมูลสินค้า </div>

    
    <form name = "form1" method="POST" action="update_product.php" enctype = "multipart/form-data">

    <label>รหัสสินค้า:</label>
    <input type="text" name="proid"  class="form-control" readonly  value=<?=$rs['pro_id']?> > <br>

    <label>ชื่อสินค้า:</label>
    <input type="text" name="pname"  class="form-control"  value =<?=$rs['pro_name']?> > <br>
    
    <label>ประเภทสินค้า:</label>
    <select class="form-select" name="typeID" >
    <?php
$sql="SELECT * FROM type ORDER BY type_name";
$hand=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
    $ttypeID = $row['type_id'];
    ?>

  <option value="<?=$row['type_id']?> "   <?php if($p_typeID==$ttypeID){echo "selected=selscted";} ?> >       
      <?=$row['type_name']?></option>
  <?php
}
mysqli_close($conn);

  ?>

</select>
    
    
    <label>ราคา:</label>
    <input type="number" name="price"  class="form-control"  value =<?=$rs['price']?> > <br>
    <label>จำนวน:</label>
    <input type="number" name="num"  class="form-control"  value =<?=$rs['amount']?> > <br>
    <label>รูปภาพ:</label> <br>
    <img  src="image/<?=$rs['image']?>"  width="120" ><br> <br>
    <input type="file" name="f1"  > <br> <br>
    <input type="hidded" name="txtimg"  class="form-control"  value =<?=$rs['image']?> > <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-danger" href="show_product.php" role="button">Cancel</a>
    

</form>
</div>
</div>


</div> 
    
</body>
</html>