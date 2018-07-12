<?php $__env->startSection('content'); ?>
<!-- START CONTENT -->

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
                            
                            <h>
 <img src="/images/logo.png" height="100px" width="150px;">
 RUKUN TETANGGA KOTA BEKASI</h>
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
                            <p class="lead">
                            	<center><h4>TIket Pengambilan Surat</h4></center>
                            	<center><b>*harap menunjukan tiket ini ketika ingin mengambil surat keterangan/pengantar</b></center>
                            	<center>
                            		<h3>Code : <?php echo e($data->id_surket); ?></h3>
                            	</center>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->

      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->
   
            </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>