<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
};

</style>
</head>
<script>
$(document).ready(function()
{
   
  $("#btn1").click(function()
  {
        $("#div1").append(" <tr ><th>Dupatta <button id='delete'> Delete</button></th></tr>");
  })

  $("#btn2").click(function()
  {
        $("#div1").append(" <tr ><th>Shirt <button id='delete'> Delete</button></th></tr>");
  })

  $(document).on('click', "#delete", function (e) {
    $(this).parent().remove();
});
 
  
  });

</script>
<h1>this is home</h1>
<p name="dupatta">Dupatta <button id="btn1"> Add</button> </p>
<p name="shirt">shirt <button id ="btn2"> Add</button> </p>
<p>pant<button  id ="btn3"> Add</button>  </p>
<p>tupi <button id ="btn4"> Add</button> </p>

<h1>Cart</h1>
<div >
<table id="div1">
 
    
  
   
</table> 
</div>
<form action="list" method="POST">
<?php echo csrf_field(); ?>
<button>Next</button>
</form>
<?php /**PATH C:\Users\Rubayet Anjum Joy\Desktop\Laravel Project\blog\resources\views/home.blade.php ENDPATH**/ ?>