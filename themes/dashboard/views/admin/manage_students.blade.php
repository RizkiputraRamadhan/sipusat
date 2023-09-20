@extends('layouts.app')
@section('title','Hasil Ujian Peserta')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil Ujian Siswa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <div class="card-tools">
                        <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Tambah Peserta Ujian Baru</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Ujian</th>
                                <th>Waktu Ujian</th>
                                <th>Hasil</th>
                                <th>status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($students as $key=>$std)
                              <tr>
                                  <td>{{ $key+1}}</td>
                                  <td>{{ $std['name']}}</td>
                                  <td>{{ $std['ex_name']}}</td>
                                  <td>{{ $std['exam_date']}}</td>
                                  <td>
                                    <?php 
                                    if($std['exam_joined']==1){
                                    ?>
                                          <a href="{{url('admin/admin_view_result/'.$std['id'])}}" class="btn btn-info btn-sm">Lihat Hasil</a>
                                    <?php    
                                    }
                                    ?>


                                  </td>
                                  <td><input type="checkbox" class="student_status" data-id="{{ $std['id']}}" <?php if($std['std_status']==1){ echo "checked";} ?> name="status"></td>
                                  <td>
                                      <a href="{{url('admin/delete_students/'.$std['id'])}}" class="btn btn-danger btn-sm">Delete</a>
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Peserta Ujian Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ url('admin/add_new_students')}}" class="database_operation">  
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Nama</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="name" placeholder="Nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">E-mail</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">No Tlp</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="mobile_no" placeholder="No Tlp" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Pilih Ujian</label>
                            <select class="form-control" required="required" name="exam">
                                <option value="">Pilih</option>
                                @foreach ($exams as $exam)
                                    <option value="{{ $exam['id']}}">{{ $exam['title']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" required="required" name="password" placeholder="Enter password" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
      </div>
      
    </div>
    </div>	


 
@endsection
