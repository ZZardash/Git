<?php require_once 'header.php'?>
    <!-- Main content -->
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">

          <div class="row">
            <!-- general form elements -->
            <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Genel Ayarlar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action ="islem/islem.php"method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="baslik" type="text" class="form-control"  placeholder="Lütfen site başlığı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" placeholder="Lütfen Açıklama giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anahtar Kelime</label>
                    <input name="anahtarkelime" type="text" class="form-control" placeholder="Lütfen anahtar kelime giriniz ">
                  </div>
                <div class="card-footer">
                  <button name="ayarkaydet"type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php require_once 'footer.php'?>