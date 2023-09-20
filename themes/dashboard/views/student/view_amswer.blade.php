@extends('layouts.student')
@section('title','Exams')
@section('content')
<style type="text/css">
    .question_options>li{
        list-style: none;
        height: 40px;
        line-height: 40px;
    }
</style>
    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  
              
              <!-- /.card -->
              <div class="card mt-4">
                <div class="card-body">
                  <form action="#" class="container">
                   <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($question as $key=>$q)
                            <div class="mt-4 p-4 shadow border border-gray-300 bg-white rounded-lg">
                              <p>{{$key+1}}. {{ $q['questions']}}</p>
                              <?php 
                                    $options = json_decode(json_decode(json_encode($q['options'])),true);
                              ?>
                              <input type="hidden" name="question{{$key+1}}" value="{{$q['id']}}">
                              <ul class="question_options">
                                  <li><input type="radio" <?php if($options['option1']==$q['ans']){echo 'checked';} else{echo 'disabled';}?> >  {{ $options['option1']}}</li>
                                  <li><input type="radio" <?php if($options['option2']==$q['ans']){echo 'checked';} else{echo 'disabled';}?> >  {{ $options['option2']}}</li>
                                  <li><input type="radio" <?php if($options['option3']==$q['ans']){echo 'checked';} else{echo 'disabled';}?> >  {{ $options['option3']}}</li>
                                  <li><input type="radio" <?php if($options['option4']==$q['ans']){echo 'checked';} else{echo 'disabled';}?> >  {{ $options['option4']}}</li>
                                  <li><input type="radio" <?php if($options['option5']==$q['ans']){echo 'checked';} else{echo 'disabled';}?> >  {{ $options['option5']}}</li>
                              </ul>
                            </div>
                        @endforeach
                   </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


 
@endsection
