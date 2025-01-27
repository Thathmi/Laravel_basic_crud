<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        <?php if(session()->has('success')): ?>
          <div><?php echo e(session('success')); ?></div>
          
        <?php endif; ?>
    </div>
    <div>
        <a href="<?php echo e(route('product.create')); ?>" >Add a Product</a>
    </div>

    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->qty); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <th>
                        <a href="<?php echo e(route('product.edit',['product'=>$product])); ?>" >Edit</a>
                    </th>
                    <td>
                        <form method="post" action="<?php echo e(route('product.destroy',['product' => $product])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <input type="submit" value="Delete"/>
                        </form>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    

</body>
</html>
<?php /**PATH D:\Projects\Laravel\CRUD\resources\views/Products/index.blade.php ENDPATH**/ ?>