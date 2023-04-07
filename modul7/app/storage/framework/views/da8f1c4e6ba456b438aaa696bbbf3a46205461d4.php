
<?php $__env->startSection('title', 'Daftar Produk'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-4">
    <span class="float-left"><?php echo e(session('msg')); ?></span>
    <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
    <table class="table table-striped table-bordered">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($d->name); ?></td>
            <td><?php echo e($d->price); ?></td>
            <td>
                <a href="/product/<?php echo e($d->id); ?>/edit" class="btn btn-primary">Edit</a>
                <form method="post" action="/product/<?php echo e($d->id); ?>" onsubmit="return confirm('Yakin hapus?')" style="display:inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\app\qqq\example-app\resources\views/index-template.blade.php ENDPATH**/ ?>