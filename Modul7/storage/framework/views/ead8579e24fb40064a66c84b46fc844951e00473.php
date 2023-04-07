

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
			<form class="border" style="padding: 20px;" method="POST" action="/<?php echo e($action); ?>">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="_method" value="<?php echo e($method); ?>" />
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
</html><?php /**PATH D:\app\qqq\example-app\resources\views/Index.blade.php ENDPATH**/ ?>