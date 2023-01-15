<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Data barang</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Barang</th>
                  <th>Tanggal Masuk</th>
                  <th>Jumlah</th>
                  <th>Kondisi Barang</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->tgl_masuk, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->jumlah, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php if($data->kondisi == 1){
                        echo'<div class="badge badge-success">baik</div>';
                      }else{
                        echo'<div class="badge badge-danger">Kurang baik</div>';
                      } ?>
                  </td>
                  <td>
                    <a href="<?php echo base_url('page/edit_barang/'.$data->id) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo base_url('page/hapus/'.$data->id) ?>" class="btn btn-danger btn-del">Hapus</a>
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