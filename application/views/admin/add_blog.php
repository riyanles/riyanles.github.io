<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url('admin/dasboard'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Portfolio</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>

<!-- awal -->

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-info">
            
            <div class="panel-body table-responsive">

                <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                    <?php if (isset($error_msg)): ?>
                        <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i>
                            <?php echo $error_msg; ?> &nbsp;
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                        </div>
                        <?php endif ?>

                            <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/add_blog/add') ?>" class="form-horizontal" novalidate>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Judul</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="judul" class="form-control" placeholder="Judul ...">
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-12" for="example-text">Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="15" name="description" placeholder="Enter text ..."></textarea>
                                        </div>
                                    </div>

                                
                                <div class="form-group">

                                    <label for="input-file-max-fs">Upload Image(hanya .jpg)</label>
                                    <div class="col-sm-12">

                                        <input class="form-control-file " type="file" name="image" onChange="readURL(this);" />

                                    </div>
                                    <div class="form-group">
                                                <div style="width:100px;float:left">&nbsp;</div>
                                                <img id="img_prev" src="#" alt="" width="400" />
                                            </div>
                                    <hr>
                                    <!-- CSRF token -->
                                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-5">
                                            <button type="submit" class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
                                        </div>
                                    </div>

                                </div>

                            </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir -->


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Portfolio Riyan 2019</span>
                </div>
            </div>
        </footer>

    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#img_prev')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>