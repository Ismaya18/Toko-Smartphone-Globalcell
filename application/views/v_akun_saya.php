<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Pelanggan</h3>

            <div class="card-tools">
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <table class="table table-bordered" id="example1">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($akun as $key => $value) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $value->nama_pelanggan ?></td>
                            <td class="text-center"><?= $value->email ?></td>
                            <td class="text-center"><?= $value->password ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_pelanggan ?>"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_pelanggan ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<!-- /.modal edit -->
<?php foreach ($akun as $key => $value) { ?>
  <div class="modal fade" id="edit<?= $value->id_pelanggan ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Pelanggan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php
          echo form_open('admin/edit/' . $value->id_pelanggan);
          ?>

          <div class="form-group">
            <label>Nama User</label>
            <input type="text" name="nama_pelanggan" value="<?= $value->nama_pelanggan ?>" class="form-control" placeholder="Nama Pelanggan" required>
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="text" name="email" value="<?= $value->email ?>" class="form-control" placeholder="Email" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Password" required>
          </div>


        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php
        echo form_close();
        ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>

<!-- /.modal delete -->
<?php foreach ($akun as $key => $value) { ?>
  <div class="modal fade" id="delete<?= $value->id_pelanggan ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus <?= $value->nama_pelanggan ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <h5>Apakah Anda Yakin Ingin Menghapus Data Ini?</h5>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url('admin/delete/' . $value->id_pelanggan) ?>" class="btn btn-primary">Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>