<div class="row">
	<div class="col-12 mt-2">
		<input type="text" name="produk" placeholder="Nama Produk" class="form-control">
	</div>
	<div class="col-12 mt-2">
		<select name="kategori" class="form-control custom-select">
			<option>Kategori Produk</option>
		</select>
	</div>
	<div class="col-12 mt-2">
		<select name="sub_kategori" class="form-control custom-select">
			<option>Sub Kategori Produk</option>
		</select>
	</div>
	<div class="col-12 mt-2">
		<input type="number" name="harga_min" placeholder="Mulai dari Harga" class="form-control">
	</div>
	<div class="col-12 mt-2">
		<input type="number" name="harga_max" placeholder="Sampai dari Harga" class="form-control">
	</div>
	<div class="col-12 mt-2">
		<select name="sub_kategori" class="form-control custom-select">
			<option>Urutkan Berdasarkan</option>
			<option value="abjad_asc">Abjad Naik</option>
			<option value="abjad_desc">Abjad Turun</option>
			<option value="harga_asc">Harga Terkecil</option>
			<option value="harga_desc">Harga Terbesar</option>
		</select>
	</div>
	<div class="col-12 mt-2">
		<button type="submit" class="btn btn-primary">Filter</button>
	</div>
</div>