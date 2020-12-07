<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">
				<?php
				if (isset($_SESSION['input_sukes'])){
					?>
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Sukes!</strong><?php echo $_SESSION['input_sukes'];?>
				</div>
			</div>
			<?php
				}
				?>
			<div class="panel panel-primary">
				<div class="panel-heading">Tambah Ponsel</div>
				<div class="panel-body">
					<?php echo form_open('home/tambahdataponsel',array('class' => 'form-horizontal','method' =>'post'));?>
					<div class="form-group"<?php echo (form_error('namaponsel') != '')? 'has-error has-feedback' : ''?>">
					<label for="namaponsel" class="control-label col-sm-2">Nama Ponsel</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="namaponsel" value="<?php echo set_value('namaponsel');?>">
						<?php echo (form_error('namaponsel') != '') ? '<span class="glyphicon-remove form-control-feedback"></span>': ''?>
						<?php echo form_error('namaponsel');?>
					</div>
				</div>
				<div class="form-group">
					<label for="typeponsel" class="control-label col-sm-2">Tipe Ponsel</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="typeponsel" value="<?php echo set_value('typeponsel');?>">
						<?php echo form_error('typeponsel');?>
					</div>
				</div>
				<div class="form-group>">
					<div class="btn-form col-sm-12">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
