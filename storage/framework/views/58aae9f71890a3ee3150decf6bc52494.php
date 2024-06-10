<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Save user</h1>
    
    <form method="post" action="<?php echo e(route('user.save')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" >
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" >
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" >
        </div>

        <div>
            <input type="submit" value="Save User">
        </div>

    </form>
</body>
</html><?php /**PATH D:\Projects\Laravel\CRUD\resources\views/User/UserReg.blade.php ENDPATH**/ ?>