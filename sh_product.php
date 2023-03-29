<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product</title>
     <!--Bootstrap  CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
     <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-4">
    <div class="row">
        <?php 
        include 'conproject.php';
        //คำสั่งแบ่งหน้าเพจ
        $perpage = 8;
        if(isset($_GET['page'])){
            $page = $_GET['page'];

        }else{
            $page = 1;
        }
        $start = ($page -1) * $perpage;



        //คำสั่งแสดงข้อมูล
$key_word = @$_POST['keyword'];
if($key_word !=""){
    $sql = "SELECT * FROM product WHERE pro_id='$key_word' or pro_name like '%$key_word%' ORDER BY pro_id limit {$start}, {$perpage}";


}else{
    $sql = "SELECT * FROM product  ORDER BY pro_id limit {$start}, {$perpage}";

}

       
        $hand = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hand)){
            $price = $row['price'];

        
        ?>

    <div class="col-md-3">
      <img src="image/<?=$row['image']?>" width="200" height="250" class="mt-5 p-3 my-3 border"> <br>
      ID: <?=$row['pro_id']?> <br>
     <b class="text-success"> <?=$row['pro_name']?> </b> <br>
      ราคา <b class="text-danger"><?=number_format($price,0)?></b> บาท <br>
      <a hrfe="#" class="btn btn-success"> add </a>
    </div>
    <?php 
    }
    //mysqli_close($conn);
    
    
    ?>
   
  </div> <!-- end row-->
<?php 
$sql1 = "SELECT * FROM product ";
$query1 = mysqli_query($conn,$sql1);
$total_record = mysqli_num_rows($query1);
$total_page = ceil($total_record / $perpage);
?>
<br><br>
<nav aria-label="Page navigation example ">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="sh_product.php?page=1">Previous</a></li>
    <?php  for ($i=1;$i<=$total_page; $i++) {?>

    <li class="page-item"><a class="page-link" href="sh_product.php?page=<?=$i?>">1<?=$i?></a></li>
    <?php  } ?>

    <li class="page-item"><a class="page-link" href="sh_product.php?page=<?=$total_page?>">Next</a></li>
  </ul>
</nav>

<?php mysqli_close($conn); ?>


</div> <!-- end container-->

</body>
</html>