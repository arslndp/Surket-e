@extends('layouts.user')
@section('content')
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
                               <center><h2><b>PERSETUJUAN SURAT KETERANGAN</b></h2></center>
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
                                List Persetujuan
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
                                        <th>Jenis Surat</th>
                                        <th>NIK</th>
                                        <th>Status Surat</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $no = 0 ?>
                                	@foreach($data as $data)
                                	<?php $no = $no + 1 ?>
                                	<?php
                                		if($data->jenis_surket == 'peng_KTP')
                                		{
                                			$link = "/admin/liatsurat/ktp/".$data->id_surket;
                                		}
                                	?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="{{$link}}">{{ $data->nama_surket }}</a></td>
                                        <td>{{ $data->nik }}</td>
                                        <td>
                                        	<?php if($data->status == 'prosses'){ ?>
                                        	<span class="label label-warning">Prosess</span>
                                        	<?php }elseif ($data->status == 'setuju') { ?>
                                        	<span class="label label-success">Setujui</span>
                                        	<?php }else{ ?>
                                        	<span class="label label-warning">Tidak di setujui</span>
                                        	<?php }?>
                                        </td>
                                        <td>{{$data->dibuat}}</td>
                                        <td>
                                          <a href="/admin/setujui/{{$data->id_surket}}" class="btn btn-xs btn-success"><ion-icon name="done-all"></a> | 
                                          <a href="/admin/tidaksetujui/{{$data->id_surket}}" class="btn btn-xs btn-danger"><ion-icon name="close-circle"></a> |
                                           <a href="{{$link}}" class="btn btn-xs btn-warning"><ion-icon name="md-print"></a>
                                           	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!--end container-->
      </section>
@stop