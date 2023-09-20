@extends('layouts.student')
@section('title', 'dashboard')
@section('content')

  <section class="content">
    <div class="container-fluid">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($portal_exams as $key => $exam)
        <div class="p-4 shadow-lg rounded ring-2 ring-gray-300 dark:ring-gray-500 ">
          <h3 class="text-xl font-semibold">{{ $exam['title'] }}</h3>
          <p class="mt-2">{{ $exam['cat_name'] }}</p>
          <p class="mt-2">Exam date: {{ $exam['exam_date'] }}</p>
          <div class="flex justify-end mt-4">
            @if (strtotime(date('Y-m-d')) <= strtotime($exam['exam_date']))
              <button data-id="{{ $exam['id'] }}" class="apply_exam bg-blue-500 text-white py-2 px-4 rounded-lg">tambahkan <i class="fas fa-arrow-circle-right ml-2"></i></button>
            @else
              <button disabled class="apply_exam bg-red-500 text-white py-2 px-4 rounded-lg">Selesai</button>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection
