<?php 

include('includes/header.php');
include('functions/userfunctions.php');
?>
<style>
    .card-body{
        text-align: center;
    }
</style>

<div class="py-3 bg-primary">
    <div class="container">
        <h5 class="text-white">Home/Collections</h5>
    </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Our Collections</h1>
        <hr>
        <div class="d-flex flex-nowrap overflow-auto gap-2">
        <?php 
            $categories = getAllActive("categories");
            if(mysqli_num_rows($categories)>0)
            {
                foreach($categories as $item){
                    ?>  
                        <div class="col-md-3 mb-2 ">
                        <a href="products.php?category=<?=  $item['slug']; ?>">
                            <div class="card shadow">
                            
                                <div class="card-body">
                                    <img src="uploads/<?=  $item['image']; ?>" alt="Category Image" width="180px" height="180px">
                                <h4><?=  $item['name']; ?></h4>
                                </div>
                            </div>
                            
                        </div>
                      

                    <?php
                }
            }
            else{
                echo "No data available";
            }
        ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>