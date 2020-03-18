<?php 
  $kategori = ['Fashion','Elektronik'];
  $sub_kategori = [
                    'Fashion' => [
                                       [
                                        'id' => '1',
                                        'nama' => 'Baju Anak'
                                       ],
                                       [
                                        'id' => '2',
                                        'nama' => 'Baju Pria'
                                       ],
                                       [
                                        'id' => '3',
                                        'nama' => 'Baju Wanita'
                                       ]
                                  ],
                    'Elektronik' =>[ 
                                      [
                                        'id' => '4',
                                        'nama' => 'Smartphone'
                                       ],
                                       [
                                        'id' => '5',
                                        'nama' => 'Laptop'
                                       ]
                                    ]
                  ]
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?php echo media('logo.png') ?>" width="30" height="30" alt=""> MyShop
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown">
          Produk
        </a>
        <ul class="dropdown-menu">
          <?php 
            foreach($kategori as $row){
          ?>

          <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#!">
                <?php echo $row ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <?php 
                  foreach($sub_kategori[$row] as $sub){
                ?>

                <li class="dropdown-submenu">
                  <a class="dropdown-item" href="#"><?php echo $sub['nama'] ?></a>
                </li>

                <?php } ?>

              </ul>
          </li>

          <?php } ?>
        </ul>
      </li>
    </ul>
    <div class="inline">
      <a href="" class="mx-3 text-secondary">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="" class="mx-3 text-secondary">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="mx-3 text-secondary">
        <i class="fa fa-whatsapp"></i>
      </a>
      <a href="" class="mx-3 text-secondary">
        <i class="fa fa-envelope"></i>
      </a>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari Produk" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">
        <i class="fa fa-search"></i>
      </button>
    </form>
  </div>
</nav>