@extends('layouts.app')
@section('title','Add Questions')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buat Pertanyaan</h1>
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
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($questions as $key=>$question)
                              <tr>
                                  <td>{{ $key+1}}</td>
                                  <td>{{ $question['questions']}}</td>
                                  <td>{{ $question['ans']}}</td>
                                  <td><input class="question_status" data-id="{{ $question['id']}}" <?php if($question['status']==1){ echo "checked";} ?> type="checkbox" name="status"></td>
                                  <td>
                                      <a href="{{ url('admin/update_question/'. $question['id'])}}" class="btn btn-primary btn-sm">Update</a>
                                      <a href="{{ url('admin/delete_question/'. $question['id'])}}" class="btn btn-danger btn-sm">Hapus</a>
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
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
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buat Soal Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/admin/add_new_question')}}" class="database_operation" method="post">  
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Pertanyaan</label>
                            {{ csrf_field()}}
                            <input type="hidden" name="exam_id" value="{{ Request::segment(3)}}">
                            <input type="text" required="required" name="question" placeholder="Pertanyaan" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Option A</label>
                            <input type="text" required="required" name="option_1" placeholder="A" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Option B</label>
                            <input type="text" required="required" name="option_2" placeholder="B" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Option C</label>
                            <input type="text" required="required" name="option_3" placeholder="C" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Option D</label>
                            <input type="text" required="required" name="option_4" placeholder=" D" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Option E</label>
                          <input type="text" required="required" name="option_5" placeholder=" E" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Pilih Jawaban Benar</label>
                      <select class="form-control" required="required" name="ans">
                          <option value="">Select</option>
                        
                          <option value="option_1">A</option>
                          <option value="option_2">B</option>
                          <option value="option_3">C</option>
                          <option value="option_4">D</option>
                          <option value="option_5">E</option>
          
                      </select>
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
