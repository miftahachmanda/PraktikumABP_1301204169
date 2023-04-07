<!DOCTYPE html>
<html>
<head>
<title>Daftar Produk</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtx
Ukn" crossorigin="anonymous">
<script src="<?php echo e(asset('assets/jquery.js')); ?>"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.
js"
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/am
npF" crossorigin="anonymous"></script>
</head>
<body style="width:95%">
<div class="row justify-content-center" style="margin-top:13%">
<div class="col-4">
<span class="float-left"><?php echo e(session('msg')); ?></span>
<a href="/product/create" class="btn btn-secondary
float-right">Tambah</a><br /><br />
<table class="table table-bordered table-striped">
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
<a href="/product/<?php echo e($d->id); ?>/edit" class="btn
btn-primary">Edit</a>
<form method="post" action="/product/<?php echo e($d->id); ?>"
style="display:inline" onsubmit="return confirm('Yakin hapus?')">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button class="btn btn-danger">Hapus</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
</body>
</html>
<?php
  $action = "product";
  $title = "miftah ";
  $method = "POST";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form <?php echo e($title); ?> Produk</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
	integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="<?php echo e(asset('assets/jquery.js')); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body style="width: 95%;">
	<div class="row justify-content-center" style="margin-top: 13%;">
		<div class="col-3">
			<h4>Form <?php echo e($title); ?> Produk</h4>
			<form class="border" style="padding: 20px;" method="POST" action="<?php echo e($action); ?>">
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="name" class="form-control" value="<?php echo e(isset($data) ? $data->name : ''); ?>" />
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="number" name="price" class="form-control" value="<?php echo e(isset($data) ? $data->price : ''); ?>" />
				</div>
				<div style="text-align: center;">
					<button class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html><?php /**PATH D:\app\qqq\example-app\resources\views/product/index.blade.php ENDPATH**/ ?>