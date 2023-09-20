@extends('layouts.app')
@section('title','Dashboard')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buat Ujian</h1>
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
                        <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Buat Baru</a>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul/Mapel</th>
                                <th>Category</th>
                                <th>Waktu Ujian</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($exams as $key=>$exam)
                               <tr>
                                   <td>{{ $key+1}}</td>
                                   <td>{{ $exam['title']}}</td>
                                   <td>{{ $exam['cat_name']}}</td>
                                   <td>{{ $exam['exam_date']}}</td>
                                   <td><input type="checkbox" class="exam_status" data-id="{{ $exam['id']}}" <?php if($exam['status']==1){ echo "checked";} ?> name="status"></td>
                                   <td>
                                       <a href="{{ url('admin/edit_exam/'.$exam['id'])}}" class="btn btn-info">Edit</a>
                                       <a href="{{ url('admin/delete_exam/'.$exam['id'])}}" class="btn btn-danger">Hapus</a>
                                       <a href="{{ url('admin/add_questions/'.$exam['id'])}}" class="btn btn-primary">Buat Pertanyaan</a>
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
          <h4 class="modal-title">Buat Ujian Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/admin/add_new_exam')}}" class="database_operation">  
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Masukan Judul/Mapel</label>
                            {{ csrf_field()}}
                            <input type="text" required="required" name="title" placeholder="Masukan Judul/Mapel" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Atur Tanggal Ujian</label>
                            <input type="date" required="required" name="exam_date"  class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label for="">Atur Waktu Ujian (60 = 1 jam)</label>
                          <input type="text" required="required" name="exam_duration"  class="form-control">
                      </div>
                  </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Pilih category</label>
                            <select class="form-control" required="required" name="exam_category">
                                <option value="">Pilih</option>
                                @foreach ($category as $cat)
                                <option value="{{ $cat['id']}}">{{ $cat['name']}}</option>
                                @endforeach
                            </select>
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
