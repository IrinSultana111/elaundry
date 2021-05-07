<h1>user login</h1>
<form action="user" method="POST">

    <?php echo csrf_field(); ?>
    <input type="text" name="user" >
    <br>
    <br>
    <input type="text" name="password" id="">
    <button type ="submit">login</button>

</form><?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/login.blade.php ENDPATH**/ ?>