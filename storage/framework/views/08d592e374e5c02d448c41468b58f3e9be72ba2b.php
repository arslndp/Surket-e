<?php $__env->startSection('content'); ?>
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
 <img src="images/logo.png" height="100px" width="150px;">
                                RUKUN TETANGGA KOTA BEKASI 
                                 </h>
                                <center><h2><b>SURAT PENGANTAR/KETERANGAN</b></h2></center>
                           </div>
                        <div class="body">
                        <?php if(session('pesan')): ?>
                        <div class="col s12 m5">
		                    <div class="card-panel  green accent-4">
		                      <span class="white-text"><?php echo e(session('pesan')); ?>.</span>
		                    </div>
		                  </div>
                  <?php endif; ?>
                        <?php if(Session::get('nik') == ''): ?>
                            <h2 class="card-inside-title">*Masukan NIK KTP/KK</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                	<?php echo Form::open(['url' => 'logktp']); ?>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="NIK KTP" name="nik" />
                                        </div>
                                    </div>
         <div class="form-group">
                                    
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">LANJUT</button>
                                <?php echo Form::close(); ?>

                            </form>
                        <?php else: ?>
                        	<div class="col l12 m12 l12">
			                  <div id="profile-card" class="card">
			                    <div class="card-image waves-effect waves-block waves-light">
			                      <img class="activator" src="images/user-bg.jpg" alt="user bg">
			                    </div>
			                    <div class="card-content">
			                      <img src="https://images.cdn2.stockunlimited.net/clipart/user-icon_1598864.jpg" alt="" class="circle responsive-img activator card-profile-image">

			                      <span class="card-title activator grey-text text-darken-4"> <?php echo e(Session::get('nama')); ?></span>
			                      <p><b>nik : </b> <?php echo e(Session::get('nik')); ?></p>
			                      <p><b>Tempat,tanggal lahir : </b> <?php echo e(Session::get('Tempat_ttl')); ?></p>
			                      <p><b>Jenis Kelamin : </b> <?php echo e(Session::get('jenis_kelamin')); ?></p>
			                      <p><b>Alamat : </b> <?php echo e(Session::get('Alamat')); ?></p>
			                      <p><b>RT : </b> <?php echo e(Session::get('rt')); ?></p>
			                      <p><b>RW : </b> <?php echo e(Session::get('rw')); ?></p>
			                      <p><b>Kelurahan : </b> <?php echo e(Session::get('kelurahan')); ?></p>
			                      <p><b>Kecamatan : </b> <?php echo e(Session::get('kecamatan')); ?></p>
			                      <p><b>Agama :</b> <?php echo e(Session::get('agama')); ?></p>
			                      <p><b>Status Pernikahaan : </b> <?php echo e(Session::get('Status_nikah')); ?></p>
			                      <p><b>Pekerjaan : </b> <?php echo e(Session::get('pekerjaan')); ?></p>
			                      <p><b>Warga negara : </b> <?php echo e(Session::get('warga_negara')); ?></p>
			                      <p><b>Berlaku sampai dengan : </b> <?php echo e(Session::get('valid_till')); ?></p>

			                    </div>
			                  </div>
			                </div>

                        <?php endif; ?>
        <!--end container-->
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>