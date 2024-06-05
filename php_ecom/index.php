<?php 

include('functions/userfunctions.php'); 
include('includes/header.php'); 
include('includes/slider.php'); 
?>

<style>
    .card-body{
        text-align: center;
    }
    /* .red-color-ul{
      text-decoration: underline;
   text-decoration-color: red; 
    } */
    .bg-f2f2f2{
        background-color: #f2f2f3;
}
</style>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4 class="red-color-ul">Trending Products</h4>
      <div class="underline mb-2"></div>
      <div class="owl-carousel">
    
       <?php
         $trendingProducts = getAllTrending();
          if(mysqli_num_rows($trendingProducts) > 0)
          {
            foreach($trendingProducts as $item){
              ?>
                  <div class="item">
                  <a href="product-view.php?product=<?=  $item['slug']; ?>">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="uploads/<?=  $item['image']; ?>" alt="Product Name" width="180px" height="180px">
                              <h6><?=  $item['name']; ?></h6>
                          </div>
                       </div>
                  </a>
                  </div>
                  <?php
            }
          }
       ?>
       </div>
       </div>
    </div>
  </div>
</div>

<div class="py-5 bg-f2f2f2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4 class="red-color-ul">About Us</h4>
      <div class="underline mb-2"></div>
         <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, exercitationem id. Modi harum laborum, unde quam tenetur, molestias velit adipisci, quas aliquam pariatur eligendi non possimus culpa inventore minima hic.
         </p> 
         <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, quo autem. Ab excepturi, dicta nulla accusamus quod suscipit maxime saepe officiis unde rerum alias soluta quaerat facere cum eum reprehenderit?
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, exercitationem id. Modi harum laborum, unde quam tenetur, molestias velit adipisci, quas aliquam pariatur eligendi non possimus culpa inventore minima hic.
         </p> 
       </div>
    </div>
  </div>
</div>

<div class="py-5 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <h4 class="text-white">E-shop</h4>
      <div class="underline mb-2"></div>
      <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i> Home</a><br>
      <a href="#" class="text-white"><i class="fa fa-angle-right"></i> About Us</a><br>
      <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i> My Cart</a><br>
      <a href="categories.php" class="text-white"><i class="fa fa-angle-right"></i> Our Collections</a>
       </div>
       <div class="col-md-3">
        <h4 class="text-white">Address</h4>
        <p class="text-white">
          #24, Ground Floor,
          2nd street, xyz layout,
          Bangalore,India.
        </p>
        <a href="tel:+919836728731" class="text-white"><i class="fa fa-phone"></i> +91 9836728731</a><br>
        <a href="mailto:xyz@gmail.com" class="text-white"><i class="fa fa-envelope"></i>  xyz@gmail.com</a>
       </div>
       <div class="col-md-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.9814775406644!2d80.57913637685917!3d16.4257670793563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f1e7e1c80d05%3A0x3ec78ef7893a9886!2sIndraprastha%20Apartments!5e0!3m2!1sen!2sin!4v1717049875158!5m2!1sen!2sin" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </div>
  </div>
</div>
<div class="py-2 bg-danger">
  <div class="text-center">
    <p class="mb-0 text-white">All rights reserved. Copyright @ <a href="https://github.com/vangara-pavithra" target="_blank" class="text-white"> Pavithra </a> - <?= date('Y') ?></p>
  </div>
</div>

<?php include('includes/footer.php'); ?>
<script>
  $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
  });
</script>