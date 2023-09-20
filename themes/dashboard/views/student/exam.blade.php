@extends('layouts.student')
@section('title','Mulai Ujian')
@section('content')

<div class="content-wrapper">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                 #
                </th>
                <th scope="col" class="px-6 py-3">
                  Judul/Mapel
                </th>
                <th scope="col" class="px-6 py-3">
                  Tanggal Ujian
                </th>
                <th scope="col" class="px-6 py-3">
                  Status
                </th>
                <th scope="col" class="px-6 py-3">
                  Hasil Ujian
                </th>
                <th scope="col" class="px-6 py-3">
                  Ujian
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($student_info as $std_info)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $loop->iteration}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $std_info['title']}}
                </th>
                <td class="px-6 py-4">
                  {{ $std_info['exam_date']}}
                </td>
                <td class="px-6 py-4">
                  @php
                  if(strtotime($std_info['exam_date']) < strtotime(date('Y-m-d'))){
                  echo "Tanggal Terlampaui";
                  } elseif (strtotime($std_info['exam_date']) == strtotime(date('Y-m-d'))) {
                    if($std_info['exam_joined']==1){
                    echo "<p class='text-red-700'>Selesai</p> ";
                    } else{
                    echo "<p class='text-green-700'>Aktif</p> ";
                    }
                  } else{
                    echo "<p class='text-red-700'>Belum Mulai</p> ";
                  }
                  @endphp
                </td>
                
                <td class="px-6 py-4">
                  @if ($std_info['exam_joined']==1)
                  <a href="{{ url('student/view_result/'.$std_info['exam_id'])}}" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-black border border-red-700 rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">Lihat Hasil</a>
                 @endif
                </td>
                <td class="px-6 py-4">
                  @php
                  if(strtotime($std_info['exam_date']) == strtotime(date('Y-m-d'))){
                  if($std_info['exam_joined']==0){
                  @endphp
                    <a href="{{ url('student/join_exam/'.$std_info['exam_id'])}}" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-black border border-blue-700 rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">Mulai Ujian</a>
                  @php
                  } else{
                  @endphp
                    <a href="{{ url('student/view_answer/'.$std_info['exam_id'])}}" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-black border border-green-700 rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">Lihat Jawaban</a>
                  @php
                  }
                  }
                  @endphp
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection
