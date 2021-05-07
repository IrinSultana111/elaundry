<?php

use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();

?>
<?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body style="background-image: url(<?php echo e(URL('/')); ?>/img/background.jpg)">
<div class="card" style="width:35%;margin:auto;margin-top:20px" >
  
  <div class="card-body" style="width:80%;margin:auto;margin-top:50px">
  <form action="/orderplace" method="POST">
<?php echo csrf_field(); ?>
<h2>Price</h2>
<p>Net Price : <?php echo e($total1); ?>TK</p>
<p>Delivery Charge: 60TK</p>
<p>Total Price: <?php echo e($total1+60); ?>TK</p>
<br>
<h2>Payment method</h2>
<input type="radio" id="delivery" name="payment" value="Cash On delivery">
<label for="delivery">Cash On delivery</label><br>
<input type="radio" id="online" name="payment" value="Online Payment">
<label for="online">Online Payment</label><br>
<br>
<br>
<h2>Address</h2>
<textarea id="address" name="address" rows="4" cols="50">
 
</textarea>
<br>
<br>


<button class="btn btn-success" style="float:right;margin-right:15px">Place Order</button>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>

</form>
 
  
</body><?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/ordernow.blade.php ENDPATH**/ ?>