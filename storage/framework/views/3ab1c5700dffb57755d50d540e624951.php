<form method="POST" action="/auth">

    <?php echo csrf_field(); ?>

    Email
    <input type="text" name="em">

    <br><br>

    Password
    <input type="password" name="pwd">

    <br><br>

    <button>Login</button>

</form>

<?php echo e(session('msg')); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/login.blade.php ENDPATH**/ ?>