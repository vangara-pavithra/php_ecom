<?php 

include('includes/header.php');
include('functions/userfunctions.php');

if(isset($_GET['category']))
{

$category_slug = $_GET['category'];
$category_data = getSlugActive('categories',$category_slug);
$category = mysqli_fetch_array($category_data);

if($category)
{


$cid = $category['id'];
?>
<style>
    .card-body{
        text-align: center;
    }
</style>

<div class="py-3 bg-primary">
    <div class="container">
        <h5 class="text-white">
            <a class="text-white" href="categories.php">
            Home/
            </a>
            <a class="text-white" href="categories.php">
            Collections/
            </a>
            <?= $category['name']; ?></h5>
    </div>

</div>

<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?= $category['name']; ?></h2>
        <hr>
        <div class="d-flex flex-nowrap overflow-auto gap-2">
        <?php 
            $products = getProdByCategory($cid);

            if(mysqli_num_rows($products)>0)
            {
                foreach($products as $item){
                    ?>
                        <div class="col-md-3 mb-2">
                            <a href="product-view.php?product=<?=  $item['slug']; ?>">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="uploads/<?=  $item['image']; ?>" alt="Product Name" width="180px" height="180px">
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

<?php
}
else
{
    echo "Something went wrong";
}
}
else
{
    echo "Something went wrong";
}
include('includes/footer.php'); ?>