<form action="" class="" method="post">
	<div class="form-group">
		<label>Dispositivo:</label>
		<input type="" name="name" class="form-control" value="<?= (isset($device[0]['device name'])) ? $device[0]['device name'] : "" ?>" required>
	</div>

	<div class="form-group">
		<label>Canal 1:</label>
		<input type="" name="channels[]" class="form-control" value="<?= (isset($device[0]['channels'][0])) ? $device[0]['channels'][0]: "" ?>" required>
	</div>


	<div class="form-group">
		<label>Canal 2:</label>
		<input type="" name="channels[]" class="form-control" value="<?= (isset($device[0]['channels'][1])) ? $device[0]['channels'][1]: "" ?>" required>
	</div>
	
	<div class="form-group">
		<label>Canal 3:</label>
		<input type="" name="channels[]" class="form-control" value="<?= (isset($device[0]['channels'][2])) ? $device[0]['channels'][2]: "" ?>" required>
	</div>

	<button id="btn-fluid" type="submmit" class="btn btn-success">Salvar</button>
</form>