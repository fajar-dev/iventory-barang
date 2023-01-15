<div class="section-body">
  <div class="row justify-content-center">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Input Satuan Barang</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url()?>page/tambah_satuan" method="post">
         <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Kode Satuan</label>
              <input type="text" name="kode" class="form-control" required>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Satuan</label>
              <input type="text" name="satuan" class="form-control" required>
            </div>
          </div>
         </div>
          <button type="submit" class="btn btn-primary btn-lg my-3" tabindex="4">Simpan</button>
        </div>
          </form>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Satuan barang</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Kode</th>
                  <th>Satuan</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo htmlentities($data->kode_satuan, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->nama_satuan, ENT_QUOTES, 'UTF-8');?></td>
                  <td>
                    <a href="<?php echo base_url('page/hapus_satuan/'.$data->kode_satuan) ?>" class="btn btn-danger btn-del">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>