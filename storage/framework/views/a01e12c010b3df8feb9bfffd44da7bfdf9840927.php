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
                            <img src="../images/logo.png" height="100px" width="150px;">RUKUN TETANGGA KOTA BEKASI
                               </h>  <h2>
                               <center><h2><b>DATA PENGUMUMAN WARGA</b></h2></center>
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
                            <div class="row clearfix">
                                <div class="col-sm-12">
                         <div class="body table-responsive">
                              <div class="header">
                            <h2>
                                DATA PENGUMUMAN
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
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Tanggal Post</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row">1</th>
                                          <td><a href="/admin/info/view/<?php echo e($data->id_info); ?>"><?php echo e($data->judul); ?></a></td>
                                           <td>2018-06-12</td>
                                        <td>
                                          <a href="/admin/info/hapus/<?php echo e($data->id_info); ?>" class="btn btn-xs btn-danger"><ion-icon name="trash"></a> |
                                        
                                           <a href="/admin/info/edit/<?php echo e($data->id_info); ?>" class="btn btn-xs btn-warning"><ion-icon name="create"></a> |

                                           <a href="" class="btn btn-xs btn-primary"><ion-icon name="print"></a>
                                        </td>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>