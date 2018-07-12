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
                            <h2>
                                Surat Yang Sudah Bisa DI ambil
                            </h2>
                            <p>silahkan ambil di sekretariat warga</p>
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
                            <div class="row clearfix">
                                <div class="col-sm-12">
                         <div class="body table-responsive">
                              
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
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis Surat</th>
                                        <th>Status Surat</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Pesan</th>
                                        <th>Tiket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $no = 0; ?>
                                	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                	<?php $no = $no + 1; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($no); ?></th>
                                        <td><?php echo e($data->nama_surket); ?></td>
                                        <td><span class="label label-success"><?php echo e($data->status); ?></span></td>
                                        <td><?php echo e($data->dibuat); ?></td>
                                        <td> - </td>
                                        <td><a href="/suket/tiket/<?php echo e($data->id_surket); ?>" class="btn btn-block btn-primary">Ambil tiket</a></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>