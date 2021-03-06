<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Halaman
            <small><?php echo $title; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $burl; ?>/"><i class="fa fa-dashboard"></i> Halaman Utama</a></li><li class="active"><?php echo $title; ?></li>
           
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
                <div class="row">
                  <div class="col-lg-9">
                    <div class='box box-warning'>
                      <div class="box-header with-border">
                        <h4 class="box-title">Form Edit Tenant</h4>
                      </div>
                      <div class='box-body'>
                        <form class='form-edit-tenant' id='loved'>
                          <input type="hidden" class="form-control" id="id_tenant" value="<?php echo $data['id_tenant']; ?>" />
                          <div class='form-group'>
                            <label class="col-md-3" for='foto'>Ganti Foto Profil</label> <span class='label label-danger'></span>
                            <div class='input-group has-feedback'>
                              <table class="no-margin tenant-table table table-bordered table-striped dt-responsive">
                                <thead>
                                  <tr>
                                  <th style="display: none;"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    echo $ambil;
                                  ?>
                                </tbody>
                              </table>  
                            </div>
                          </div>
                          <div class='form-group'>
                            <label class="col-md-3" for='npm'>NPM / NIDN / NIK</label> <span class='label label-danger'></span>
                                <div class='input-group has-feedback'><span class="input-group-addon" id="npm"><i class='fa fa-user'></i></span>
                                    <input disabled value="<?php echo $data['npm']; ?>" type='text' class='col-md-9 form-control' id='npm' placeholder='NPM / NIDN / NIK' data-toggle='tooltip' data-placement='top' title='Untuk mengganti NPM / NIDN / NIK bisa menghubungi Kepala / Staff Laboratorium' ><span class='form-control-feedback'></span>
                                </div>
                          </div>
                          <div class='form-group'>
                            <label class="col-md-3" for='password'>Password</label> <span class='label label-danger'></span>
                              <div class='input-group has-feedback'><span class="input-group-addon" id="password"><i class='fa fa-lock'></i></span>
                                  <input type='password' class='col-md-9 form-control' id='password' placeholder='Password' data-toggle='tooltip' data-placement='top' title='Minimal 5 karakter' ><span class='form-control-feedback'></span>
                              </div>
                          </div>
                          <div class='form-group'>
                              <label class="col-md-3" for='repassword'>Konfirmasi Password</label> <span class='label label-danger'></span>
                              <div class='input-group has-feedback'><span class="input-group-addon" id="repassword"><i class='fa fa-lock'></i></span>
                                  <input type='password' class='col-md-9 form-control' id='repassword' placeholder='Masukan kembali password' data-toggle='tooltip' data-placement='top' title='Password harus sama'>
                                  <span class='form-control-feedback'></span>
                              </div>
                          </div>
                          <div class='form-group'>
                            <label class="col-md-3" for='nama_lengkap'>Nama Lengkap</label> 
                            <span class='label label-danger'></span>
                                <div class='input-group has-feedback'>
                                  <span class="input-group-addon" id="nama_lengkap">
                                    <i class='fa fa-street-view'></i>
                                  </span>
                                  <input value="<?php echo $data['nama_lengkap']; ?>" maxlength="25" type='text' class='col-md-9 form-control' id='nama_lengkap' placeholder='Nama Lengkap' data-toggle='tooltip' data-placement='top' title='Masukkan nama lengkap' >
                                  <span class='form-control-feedback'></span>
                                </div>
                          </div>
                          <div class='form-group'>
                            <label class="col-md-3" for='email'>Email</label> <span class='label label-danger'></span>
                              <div class='input-group has-feedback'><span class="input-group-addon" id="email"><i class='fa  fa-envelope'></i></span>
                                <input value="<?php echo $data['email']; ?>" type='text' class='col-md-9 form-control' id='email' placeholder='email' data-toggle='tooltip' data-placement='top' title='Masukkan Email' ><span class='form-control-feedback'></span>
                              </div>
                          </div>
                          <div class='form-group '>
                              <label class="col-md-3"  for='status'>Status</label>
                              <div class="col-md-9 no-padding no-margin">
                                <select id="status" class="form-control">
                                  <option value="0" selected>Pilih Status</option>
                                    <?php
                                    if($list_status!=false){
                                      echo $list_status;
                                      }
                                    ?>
                                </select>
                                <br/>
                              </div>
                          </div>
                          <div id="list_unit" >
                            <div class="form-group">
                              <label class="col-md-3" for="unit">Unit</label>
                                <div class="col-md-9 no-padding no-margin">
                                  <select class="unit form-control">
                                    <option value="0" selected>Pilih Unit</option>
                                    <?php
                                      if($list_unit!=false){
                                        echo $list_unit;
                                      }
                                    ?>
                                  </select>
                                  <br/>
                                </div>
                            </div>
                          </div>
                          <div id="list_fakultas">
                            <div class="form-group">
                              <label class="col-md-3" for="prodi">Prodi</label>
                                <div class="col-md-9 no-padding no-margin">
                                  <select class="prodi form-control">
                                    <option value="0" selected>Pilih Prodi</option>
                                    <?php
                                      if($list_prodi!=false){
                                        echo $list_prodi;
                                      }
                                    ?>
                                  </select>
                                <br/>
                                </div>
                            </div>
                          </div> 
                          <hr>
                          <div class="form-group pull-right">
                            <button type='submit' class='btn btn-warning'>Simpan</button>
                          </div>
                        </form>
                      </div>           
                    </div>
                  </div>
                </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <div class="modal fade" id="modal-foto" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4>Ganti Foto Profil</h4>
                <p style="display: none;">Nama Tenant yang akan ganti foto : <strong><span class="nama_lengkap text-purple"></span></strong></p>  
            </div>
            <div class="modal-body">
                <input type="hidden" class="id_tenant" value="" >
                <div class="area-foto dropzone well dz-clickable"></div>
            </div>
            <div class="modal-footer">
                <button class="btn bg-yellow ok">Ok</button>
                <button class="btn bg-default fakeOk disabled ">Ok</button>
            </div>
        </div>
      </div>
      </div>