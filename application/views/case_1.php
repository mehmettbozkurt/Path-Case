<div class="container">
	<?php if ($this->session->flashdata("response") != NULL) { ?>
		<div style="font-size: 15px;"
			 class="alert alert-<?php echo $this->session->flashdata('response')['type']; ?> alert-dismissible fade show"
			 role="alert">
			<strong><?php echo $this->session->flashdata('response')['type']; ?>
				!</strong> <?php echo $this->session->flashdata('response')['message']; ?>
			<br>
			<p></strong> <?php echo $this->session->flashdata('response')['order']["old_order"]; ?></p>
			<p></strong> <?php echo $this->session->flashdata('response')['order']["new_order"]; ?></p><br>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>
	<div class="row justify-content-center mt-5 mr-0">
		<div class="col-12 col-md-10 col-lg-8">

			<form class="card card-sm" action="<?php echo base_url("home/word_order") ?>" type="get">
				<div class="card-body row no-gutters align-items-center">
					<div class="col-auto">
						<i class="glyphicon glyphicon-search h4 text-body"></i>
					</div>
					<div class="col">
						<input name="word" class="form-control form-control-borderless src_fild" type="search"
							   placeholder="Kelimeleri Giriniz" required>
					</div>
					<div class="col-auto">
						<button class="btn btn-lg btn-success src_btn" type="submit">Sırala</button>
					</div>
				</div>
			</form>

		</div>

	</div>
</div>

