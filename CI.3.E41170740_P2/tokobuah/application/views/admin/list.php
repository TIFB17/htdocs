<!DOCTYPE hrml>
<html lang="en">
  <head>
    <?php $this->load->view('_partials/00head') ?>
  </head>
  <body>
    <?php $this->load->view('_partials/01navbar') ?>
    <div id="wrapper">


      <?php $this->load->view('_partials/02sidebar') ?>

      <div id="content-wrapper">

        <div class="container-fluid">


          <?php $this->load->view('_partials/03breadcrumb') ?>
          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>


                  <tbody>
                    <?php
                      foreach($products as $product) {?>
                        <tr>
                    <td width="150"><?php echo $product->name?></td>
                    <td><?php echo $product->price?></td>
                    <td> <img src="<?php echo base_url('upload/product/'.$product->image)?>" width="64"></td>
                    <td class="small"><?php echo substr($product->description,0,120)?>...</td>
                    <td width="250">
                      <a href="<?php echo base_url ('admin/product/edit'.$product->product_id)?>" class= "btn btn-sm">
                        <i class="fas fa-edit"></i> Edit
                      </a>
                      <a onclick="deleteConfirm('<?php echo site_url ('admin/product/delete'.$product->product_id)?>" href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> Hapus
                      </a>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>

        <?php $this->load->view('_partials/04footer') ?>

      </div>
      <!-- /.content-wrapper -->

    </div>

  </body>

</html>
