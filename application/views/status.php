<div class="section-body">
  <div class="row justify-content-center">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <div class="card-header">
          <h4>Input Status Barang</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url()?>page/tambah_status" method="post">
         <div class="row">
          <div class="col-8">
            <div class="form-group">
              <input type="text" name="status" class="form-control" placeholder="Status Barang" required>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-lg" tabindex="4">Tambah</button>
          </div>
         </div>
        </div>
          </form>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Status barang</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo htmlentities($data->status, ENT_QUOTES, 'UTF-8');?></td>
                  <td>
                    <a href="<?php echo base_url('page/hapus_status/'.$data->id_status) ?>" class="btn btn-danger btn-del">Hapus</a>
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