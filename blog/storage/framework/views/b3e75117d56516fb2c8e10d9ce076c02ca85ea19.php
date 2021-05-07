<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
<img  >
<?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="/add_to_cart" method="POST">
<?php echo csrf_field(); ?>

<div class="card mb-3" style="max-width: 50%;height:50%; margin:auto;margin-top:100px">
  <div class="row g-0"  >
    <div class="col-md-4" style=" margin-top:100px;">
      <img
      src="<?php echo e(URL::asset('/img/pic.png')); ?> " 
        alt="..."
        class="img-fluid"
        style="margin-top"
        
      />
      
    </div>
    <div class="col-md-8"  >
      <div class="card-body" style="padding:100px" >
        <h5 class="card-title">Detail</h5>
        <p class="card-text">
        <p><span style="font-weight: bold">Product Name : </span><?php echo e($product['name']); ?></p>
            <p><span style="font-weight: bold">Product Price:</span> <?php echo e($product['price']); ?> TK</p>
                <p><span style="font-weight: bold">Product Catagory:</span> <?php echo e($product['catagory']); ?></p>
                    <p><?php echo e($product['discription']); ?></p>
                    <button type="submit" name="product_id" value ="<?php echo e($product['id']); ?>" class="btn btn-danger btn-rounded">add to cart</button>
        </p>
         
      </div>
    </div>
  </div>
</div>
 




</form>
<?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/details.blade.php ENDPATH**/ ?>