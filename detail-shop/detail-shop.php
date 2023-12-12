<?php 
include 'header.php';

if(isset($_SESSION['id_cs'])){

	$id_cs = $_SESSION['id_cs'];
}
$id = $_GET['id'];
$product = mysqli_query($conn, "SELECT * from product where id = '$id'");
$data = mysqli_fetch_assoc($product);
?>

<div class="container mt-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="shop.html" style="color: #29795a; text-decoration: none"
              >Shop</a
            >
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Detail Product
          </li>
        </ol>
      </nav>
</div>

    <div class="container" style="background-color: white; border-radius: 30px; margin-bottom: 60px; padding-bottom:70px">
      <div class="row pt-4">
        <div class="col-4">
          <div class="card" style="width: 20rem">
            <img src="image/product/<?= $data['image']; ?>" class="card-img-top" alt="..." />
          </div>
        </div>
        <div class="col-8">
          <h2><?= $data['name']; ?></h2>
          <h4 class="mb-2" style="color: #29795a">Rp <?= $data['price']; ?></h4>
          <p>Stock : <?= $data['stock']; ?></p>
          <form action="controller/add-to-cart.php" method="POST">
            <input type="hidden" name="id_cs" value="<?= $id_cs; ?>">
