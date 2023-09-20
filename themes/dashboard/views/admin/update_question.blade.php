@extends('layouts.app')
@section('title','Update Exam Questions')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Soal</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-body">
                    <form action="{{ url('/admin/edit_question_inner')}}" class="database_operation">  
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Pertanyaan</label>
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" value="{{ $q[0]['id']}}">
                                    <input type="text" value="{{ $q[0]['questions']}}" required="required" name="question" placeholder="Pertanyaan" class="form-control">
                                </div>
                            </div>
                            <?php
                                $options = json_decode($q[0]['options']);
                            ?>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">A</label>
                                    <input type="text" value="{{ $options->option1}}" required="required" name="option_1" placeholder="A" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">B</label>
                                    <input type="text" value="{{ $options->option2}}" required="required" name="option_2" placeholder="B" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">C</label>
                                    <input type="text" value="{{$options->option3}}" required="required" name="option_3" placeholder="C" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">D</label>
                                    <input type="text" value="{{ $options->option4}}" required="required" name="option_4" placeholder="D" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="">E</label>
                                  <input type="text" value="{{ $options->option5}}" required="required" name="option_5" placeholder="E" class="form-control">
                              </div>
                          </div>
                            <div class="form-group">
                              <label for="">Pilih Jawaban</label>
                              <select class="form-control" required="required" name="ans">
                                  <option value="">Pilih</option>
                                
                                  <option value="option_1">A</option>
                                  <option value="option_2">B</option>
                                  <option value="option_3">C</option>
                                  <option value="option_4">D</option>
                                  <option value="option_5">D</option>
                              </select>
                          </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
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


 
@endsection
