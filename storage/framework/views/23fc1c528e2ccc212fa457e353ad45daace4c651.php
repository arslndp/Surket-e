<?php $__env->startSection('content'); ?>
<!--start container-->
           <section id="content">
        
        <!--breadcrumbs start-->
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <img src="../images/logo.png" height="100px" width="150px;">RUKUN TETANGGA KOTA BEKASI
                               </h>  <h2>
                               <center><h2><b>PENGUMUMAN UNTUK WARGA</b></h2></center>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          <div class="col-sm-12">
                          		<?php echo Form::open(['url' => '/admin/info/create']); ?>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="judul" placeholder="Judul" />
                                        </div>
                                    </div>
                     
                                <div class="form-group">
                                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="isi" cols="30" rows="5" class="form-control no-resize" required  placeholder="Informasi" ></textarea>                     
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                            <?php echo Form::close(); ?>

                                    </div>
                       </div>
                     </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>