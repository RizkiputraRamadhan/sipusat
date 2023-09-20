@extends('layouts.app')
@section('title','data siswa')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
                  <h3 class="card-title">Data Siswa Yang Sudah Register</h3>
  
                 
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type User</th>
                                <th>No Tlp</th>
                                <th>E-mail</th>
                                <th>Create</th>
                                <th>Update </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $key=>$p )
                               <tr>
                                   <td>{{ $key+1}}</td>
                                   <td>{{ $p->name}}</td>
                                   <td>{{ $p->typeuser}}</td>
                                   <td>{{ $p->mobile_no}}</td>
                                   <td>{{ $p->email}}</td>
                                   <td>{{ $p->created_at->format('d M Y')}}</td>
                                   <td>{{ $p->updated_at->format('d M Y')}}</td>
                                   <td>
                                       
                                       <a href="{{ url('admin/delete_registered_students/'.$p->id)}}" class="btn btn-danger btn-sm">Delete</a>
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

   

 
@endsection
