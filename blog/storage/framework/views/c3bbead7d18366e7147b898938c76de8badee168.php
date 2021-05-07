<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
<?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <body style="background-image: url(<?php echo e(URL('/')); ?>/img/background.jpg)">
     

<ul class="list-group" style="margin-top:100px;width:50%;padding-left:50px">

 


<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 
<li class="list-group-item" >
 <h2 style=" display: inline-block;"><?php echo e($item['name']); ?>  </h2> <a  href="/details/<?php echo e($item['id']); ?>">
<button  class="btn btn-outline-primary" data-mdb-ripple-color="dark" style="float:right ; ">add to Cart</button> </a>   
<p style=" display: inline;margin-left:5px;font-size: 14px ">    Price:<?php echo e($item['price']); ?>TK</p>  
</li>

  
 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>



    
</body>
 <?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/product.blade.php ENDPATH**/ ?>