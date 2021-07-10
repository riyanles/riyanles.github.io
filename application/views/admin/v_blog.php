<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url('admin/dasboard'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Portfolio</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">

                <i class="fas fa-table pull-right"></i> Data Portfolio &nbsp; <a href="<?php echo base_url('index.php/admin/add_blog') ?>" class="btn btn-primary btn-sm pull-right-lg"><i class="fa fa-plus"></i>&nbsp;Add</a> &nbsp;
                <br>
            </div>
            <div class="card-body">
                <?php $msg = $this->session->flashdata('msg'); ?>
                    <?php if (isset($msg)): ?>
                        <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i>
                            <?php echo $msg; ?> &nbsp;
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                        </div>
                        <?php endif ?>
                            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                                <?php if (isset($error_msg)): ?>
                                    <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                                        <?php echo $error_msg; ?> &nbsp;
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                    </div>
                                    <?php endif ?>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php $no=1; foreach ($portfolio->result() as $key): ?>

                                                        <tr>
                                                            <th>
                                                                <?php echo $no++ ?>
                                                            </th>
                                                            <td>
                                                                <?php echo $key->judul; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->desc; ?>
                                                            </td>
                                                            <td><img src="<?php echo base_url('assets/img/portfolio/app-marketing/'.$key->img) ?>" width="64" /></td>
                                                            <td width="135px">
                                                                <a href="<?php echo site_url('admin/add_blog/update/'.$key->id) ?>">
                                                                    <button type="button" class="btn btn-warning  btn-sm"><i class="fa fa-edit"></i>Edit</button>
                                                                    <a href="<?php echo site_url('admin/add_blog/delete/'.$key->id) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete">
                                                                        <button type="button" class="btn btn-danger  btn-sm"><i class="fa fa-times"></i>&nbsp;Hapus</button>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Portfolio Riyan 2019</span>
                </div>
            </div>
        </footer>

    </div>