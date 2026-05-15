

<?php $__env->startSection('title', 'Daftar Produk'); ?>

<?php $__env->startSection('content'); ?>

<body class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-10">

            <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>

            <div class="d-flex justify-content-between align-items-center mb-3">

                <span><?php echo e(session('msg')); ?></span>

                <a href="#" class="btn btn-primary">
                    Tambah
                </a>

            </div>

            <table class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Variant</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>

                        <td><?php echo e($product->name); ?></td>

                        <td><?php echo e($product->price); ?></td>

                        <td>

                            <ul>

                                <?php $__currentLoopData = $product->variants()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li>
                                    <?php echo e($var->name); ?>

                                </li>

                                Desc: <?php echo e($var->description); ?> <br>

                                Proc: <?php echo e($var->processor); ?> <br>

                                RAM: <?php echo e($var->memory); ?> <br>

                                Strg: <?php echo e($var->storage); ?> <br>

                                Product: <?php echo e($var->product->name); ?>


                                <hr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                        </td>

                        <td>

                            <a href="#" class="btn btn-sm btn-primary">
                                Edit
                            </a>

                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>

                        </td>

                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/products/index.blade.php ENDPATH**/ ?>