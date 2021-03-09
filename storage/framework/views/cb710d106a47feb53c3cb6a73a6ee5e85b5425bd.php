<h1>add vehicle</h1>
<form action="add" method="POST">
    <?php echo csrf_field(); ?>  
    <input type="text" name="name" placeholder="enter name"><br><br>
    <input type="text" name="type" placeholder="enter name"><br><br>
    <input type="text" name="manufacture" placeholder="enter name"><br><br>
    <input type="text" name="purchase" placeholder="enter name"><br><br>
<button type='submit'>add</button>
</form><?php /**PATH C:\xampp\htdocs\vehicle1\resources\views/post.blade.php ENDPATH**/ ?>