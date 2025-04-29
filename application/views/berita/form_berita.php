<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>form Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">form Berita</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url()."berita/insert";?>" method="POST">
            <div class="box-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="judul" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="kategori" required>
            </div>
            <div class="form-group">
                <label for="headline">Headline</label>
                <input type="text" class="form-control" name="headline" placeholder="headline" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea class="form-control summernote" name="isi_berita" placeholder="isi_berita" required></textarea>
            </div>
            <div class="form-group">
                <label for="pengirim">Pengirim</label>
                <input type="text" class="form-control" name="pengirim" placeholder="pengirim" required>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
</section>
</div>



