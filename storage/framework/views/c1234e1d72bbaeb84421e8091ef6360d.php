<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create A Prodcut</h1>
    <div>
        
        

    </div>
    <form method="post" action="<?php echo e(route('product.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" >
        </div>
        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="Qty" >
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" >
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" >
        </div>

        <div>
            <input type="submit" value="Save Product">
        </div>

    </form>
</body>
</html><?php /**PATH D:\Projects\Laravel\CRUD\resources\views/Products/create.blade.php ENDPATH**/ ?>