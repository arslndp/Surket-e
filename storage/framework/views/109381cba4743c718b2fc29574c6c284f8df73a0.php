<?php $__env->startSection("content"); ?>
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
 <img src="../images/logo.png" height="100px" width="150px;">
                                RUKUN TETANGGA KOTA BEKASI</H>
                                <center><h2><b>SURAT PENGANTAR PEMBUATAN KTP</b></h2></center>
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
                        	<?php echo Form::open(['url' => 'prossesktp', 'enctype' => "multipart/form-data"]); ?>

                            <h2 class="card-inside-title">Dengan Ini Menerangkan Bahwa :</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" />
                                        </div>
                                    </div>
                     
                                           <div class="form-group">
                                               Pilih Jenis Kelamin
                                    <input type="radio" name="gender" id="male" class="with-gap" value="Laki - Laki">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" class="with-gap" value="Wanita">
                                    <label for="female" class="m-l-20">Female</label>
                                    </div>
                                  
                                  <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Agama" name="agama" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Pekerjaan" name="job" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                               Pilih Jenis Kelamin
                                    <input type="radio" name="statusnikah" id="nikah" class="with-gap" value="Menikah">
                                    <label for="nikah">menikah</label>

                                    <input type="radio" name="statusnikah" id="belumnikah" class="with-gap" value="Belum menikah">
                                    <label for="belumnikah" class="m-l-20">belum menikah</label>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required  placeholder="Alamat" ></textarea>
                                        <label class="form-label"></label>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                           <input type="number" placeholder="Tangggal" name="tgl"> 
                                           <input type="number" placeholder="Bulan" name="bln"> 
                                           <input type="number" placeholder="Lahir" name="thn"> 
                                        </div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="tempat" cols="30" rows="5" class="form-control no-resize" required  placeholder="Tempat" ></textarea>
                                        <label class="form-label"></label>
                                    </div>
                                    </div>
                                    <div>
        
                            <div class="form-group">
                            	<b>*masukan foto Kartu Keluarga</b>
                            	<div class="file-field input-field">
                      <input class="file-path validate" type="text" />
                      <div class="btn">
                        <span>File</span>
                        <input type="file" name="kk" />
                      </div>
                    </div>
                            </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            <?php echo Form::close(); ?>

        <!--end container-->
      </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.user", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>