      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Program Kampus</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="./">Beranda</a></li>
              <?php
                if(isset($_SESSION['id'])){
                  ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Mahasiswa<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=mahasiswa-read'>Daftar Mahasiswa</a>";} ?></li>
                        <li role="separator" class="divider"></li>
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=mahasiswa-create'>Tambah Mahasiswa</a>";} ?></li>
                      </ul>
                    </li>
                  <?php
                }
              ?>
              <?php
                if(isset($_SESSION['id'])){
                  ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Dosen<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=dosen-read'>Daftar Dosen</a>";} ?></li>
                        <li role="separator" class="divider"></li>
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=dosen-create'>Tambah Dosen</a>";} ?></li>
                      </ul>
                    </li>
                  <?php
                }
              ?>              
              <?php
                if(isset($_SESSION['id'])){
                  ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Jurusan<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=jurusan-read'>Daftar Jurusan</a>";} ?></li>
                        <li role="separator" class="divider"></li>
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=jurusan-create'>Tambah Jurusan</a>";} ?></li>
                      </ul>
                    </li>            
                  <?php
                }
              ?>
              <?php
                if(isset($_SESSION['id'])){
                  ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Kelas<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=kelas-read'>Daftar Kelas</a>";} ?></li>
                        <li role="separator" class="divider"></li>
                        <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=kelas-create'>Tambah Kelas</a>";} ?></li>
                      </ul>
                    </li>            
                  <?php
                }
              ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=user-read'>Daftar User</a>";} ?></li>
              <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=user-profile'>Profile</a>";} ?></li>
              <li><?php if(isset($_SESSION['id'])){echo "<a href='?page=logout'>Logout</a>";}else{echo "<a href='#myModal' data-toggle='modal' data-target='#myModal'>Login</a>";} ?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>