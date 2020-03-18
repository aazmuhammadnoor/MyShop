<?php
	$produk = [
				[
					'id' => '1',
					'nama' => 'Produk 1',
					'kategori' => 'Fashion',
					'sub_kategori' => 'Baju Anak',
					'harga_jual' => 10000,
					'harga' => 15000,
					'image' => media('produk/m1.jpg')
				],
				[
					'id' => '2',
					'nama' => 'Produk 2',
					'kategori' => 'Fashion',
					'sub_kategori' => 'Baju Anak',
					'harga_jual' => 15000,
					'harga' => 15000,
					'image' => media('produk/m2.jpg')
				],
				[
					'id' => '3',
					'nama' => 'Produk 3',
					'kategori' => 'Fashion',
					'sub_kategori' => 'Baju Anak',
					'harga_jual' => 17000,
					'harga' => 15000,
					'image' => media('produk/m2.jpg')
				],
				[
					'id' => '4',
					'nama' => 'Produk 4',
					'kategori' => 'Fashion',
					'sub_kategori' => 'Baju Anak',
					'harga_jual' => 16000,
					'harga' => 20000,
					'image' => media('produk/mk4.jpg')
				],
				[
					'id' => '5',
					'nama' => 'Produk 5',
					'kategori' => 'Fashion',
					'sub_kategori' => 'Baju Anak',
					'harga_jual' => 14500,
					'harga' => 20000,
					'image' => media('produk/mk5.jpg')
				],
				[
					'id' => '6',
					'nama' => 'Produk 6',
					'kategori' => 'Fashion',
					'sub_kategori' => 'Baju Anak',
					'harga_jual' => 5600,
					'harga' => 20000,
					'image' => media('produk/mk6.jpg')
				]
			  ];

?>
<div class="row align-items-stretch p-2">
	<?php
		foreach ($produk as $key => $value) {
	?>
	<div class="col-6 col-md-4 mb-4">
		<div class="d-flex flex-row">
			<img src="<?php echo $value['image'] ?>" class="img-fluid" alt="Responsive image">
		</div>
		<div class="d-flex flex-column mt-2 p-2">
			<?php 
				if($value['harga'] > $value['harga_jual']){
					echo '<p class="text-danger text-right"><del>Rp. '.$value['harga'].'</del></p>';
				}else{
					echo '<p><br></p>';
				}
			?>
			<h3 class="text-primary">
				Rp. <?php echo $value['harga_jual'] ?>
			</h3>
			<h6 class="text-dark">
				<?php echo $value['nama'] ?>
			</h6>
		</div>
	</div>
	<?php
		}
	?>
</div>