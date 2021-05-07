<h1>user login</h1> 
<form action="users" method-"POST">
<?php echo csrf_field(); ?>
    <input type="text" name ="username" placeholder="name" >
    <br><br>
    <input type="text" name ="password" placeholder="password" >
    <button type ='submit'>Login</button>
</form><?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/users.blade.php ENDPATH**/ ?>