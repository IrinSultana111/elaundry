<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
 
<?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<ul class="list-group list-group-flush" style="margin:auto;width:20%;margin-top:70px">
<h1>Cartlist</h1>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="list-group-item" style="font-weight: bold"><?php echo e($item->name); ?> <a href="/removecart/<?php echo e($item->cart_id); ?> " ><button style="float:right" class="btn btn-danger btn-rounded btn-sm" > Delete</button></a></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <a href="/ordernow" style="margin-top: 35px;" ><button style="float:right" class="btn btn-primary"> Order Now</button></a>
</ul>



 




<?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/cartlist.blade.php ENDPATH**/ ?>