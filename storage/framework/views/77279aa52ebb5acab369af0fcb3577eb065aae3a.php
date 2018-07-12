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
                                <center><h2><b>Lammpiran</b></h2></center>
                            
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
                            <h2 class="card-inside-title">File :</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                	<ul>
                                		<li>
                                			<?php
                                			if(!empty($lampiran))
                                				foreach ($lampiran as $data) 
                                				{
                                					echo "<li><a href='/'".$data->source.">".$data->nama_lampiran."</a></li>";
                                				}
                                			?>
                                		</li>
                                	</ul>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary" onclick="printDiv('printableArea')">Print Surat Keterangan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row clearfix" id="printableArea">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h>
 <img src="/images/logo.png" height="100px" width="150px;">RUKUN TETANGGA KOTA BEKASI
                               </h> 
                                <center><h2><b>SURAT PENGANTAR PEMBUATAN KARTU TANDA PENDUDUK</b></h2></center>
                            
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
                            <h2 class="card-inside-title">Dengan Ini Menyatakan Bahwa :</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
<style type="text/css">
  .right{margin-left: 200px; }
</style>
                                <h2 class="card-inside-title">Nama Lengkap  : <?php echo e($non_ktp->Nama); ?></h2>
                                
                                <h2 class="card-inside-title">Jenis Kelamin  : <?php echo e($non_ktp->jenis_kelamin); ?></h2>
                                    
                                <h2 class="card-inside-title">Tempat Tgl.Lahir/Umur : <?php echo e($non_ktp->Tempat_ttl); ?></h2>
                                      
                                <h2 class="card-inside-title">Pekerjaan : <?php echo e($non_ktp->pekerjaan); ?></h2>
                                   

                                <h2 class="card-inside-title">Alamat  : <?php echo e($non_ktp->alamat); ?></h2>
                                   
                                <h2 class="card-inside-title">KTP Nomor : </h2>
                                    
                                <h2 class="card-inside-title">Kartu Keluarga Nomor  : </h2>
                                    
                                <h2 class="card-inside-title">Bermaksud : Membuat Ktp</h2>
                                       
                                <h2 class="card-inside-title">Demikian surat ini kami buat dengan sebenearnya dan unutk di pergunakan sebagaimana mastinya.</h2>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h class="card-inside-title">No.  :......................................
                                <br>
                                <h>Mengatahui :     
<br>
                                <h>Ketua RW.008 <br> <br>
                                <br>
                                <br>
                                 <br>
                                <br>
                                <br>(.................................................)</h>

    <br>                                  
                                                </div>
                                            </div>
</h>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                <h class="card-inside-title">Bekasi,<?php echo e(date('d-m-Y')); ?><br>
                                <h>Ketua RT.007</h>
                                <br>
<br>
 <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                 <h>(..............................................)</h>
                                                </div>
                                            </div>
                                        


                                <div>
                                    
          
        </div>
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