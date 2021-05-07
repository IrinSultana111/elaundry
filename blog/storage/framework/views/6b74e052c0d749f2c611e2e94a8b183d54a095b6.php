<body style="background-color:white">
    
<?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<nav class="navbar navbar-expand-lg navbar-info bg-info" style="height:100px">
  <div class="container-fluid">
    <ul class="navbar-nav d-flex flex-row">
     <h1 style="color:white;margin-left:20px;">eLaundry</h1>
      
    
    </ul>
  </div>
</nav>
<div class="card" style="height:400px;width:400px; margin: auto; margin-top:150px;
 
   padding: 20px;">
  <div class="card-body">
    <h1 class="card-title">Login</h1>
    <p class="card-text">
      <form action="login" method="POST">
      
      <br>
      
<?php echo csrf_field(); ?>
<input type="text" name="email" id="" class="form-control" placeholder="Email">
<br>
 
<input type="password" name="password" id="" class="form-control" placeholder="Password">
 <br>
 <div  style=" float:right;margin-right: 0px;" >
 <button type="submit" class="btn btn-primary">Login</button>
<a href="/signup"><button type="button"class="btn btn-secondary">Sign Up</button></a>
 </div>

 
</form>
     
   
  </div>
</div>




</body>
<style>


</style><?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views//master.blade.php ENDPATH**/ ?>