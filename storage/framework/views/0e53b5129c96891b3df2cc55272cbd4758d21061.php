<?php $__env->startSection('content'); ?>
<section id="content">
        
        <!--breadcrumbs start-->
        <div class="container-fluid">
            <div class="block-header">
                <h2><button class="btn btn-block btn-primary" onclick="printDiv('printAble')">Print</button></h2>
            </div>
            <!-- Input -->
            <div class="row clearfix" id="printAble">
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
								<?php echo e($data->judul); ?>                               
							</p>
							<p><?php echo e($data->tanggal); ?></p>
                            <p>
<pre>
<?php echo e($data->isi); ?>

</pre>
                            </p>
                        </div>
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
        <!--end container-->
      </section>
      <!-- END CONTENT -->


<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>