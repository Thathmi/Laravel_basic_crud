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
    
    <form method="post" action="<?php echo e(route('product.update', ['product' => $product])); ?>">

        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo e($product->name); ?>" >
        </div>
        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="Qty" value="<?php echo e($product->qty); ?>" >
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="<?php echo e($product->price); ?>" >
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo e($product->description); ?>" >
        </div>

        <div>
            <input type="submit" value="Update">
        </div>

    </form>
</body>
</html><?php /**PATH D:\Projects\Laravel\CRUD\resources\views/products/edit.blade.php ENDPATH**/ ?>