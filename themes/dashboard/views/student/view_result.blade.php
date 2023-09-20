@extends('layouts.student')
@section('title','Hasil Ujian')
@section('content')
  <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-red-500 dark:bg-gray-800 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Informasi Ujian
                </th>
                <th scope="col" class="px-6 py-3">
                   
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
                  <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Nama</kbd>
                </th>
                <td class="px-6 py-4">
                  <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $student_info->name}} </p>
                </td>
            </tr>
             <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
                  <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Email</kbd>
                </th>
                <td class="px-6 py-4">
                  <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $student_info->email}}</p>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
                <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Nama ujian</kbd>
              </th>
              <td class="px-6 py-4">
                <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $exam_info->title}}</p>
              </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
                <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Tanggal Ujian</kbd>
              </th>
              <td class="px-6 py-4">
                <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $exam_info->exam_date}}</p>
              </td>
            </tr>
        </tbody>
        <thead class="text-xs text-white uppercase bg-red-500 dark:bg-blue-800 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                 Hasil Ujian
              </th>
              <th scope="col" class="px-6 py-3">
                 
              </th>
          </tr>
      </thead>
      <tbody>
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
              <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Jawaban Benar</kbd>
            </th>
            <td class="px-6 py-4">
              <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $result_info->yes_ans}} </p>
            </td>
        </tr>
         <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
              <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Jawaban Salah</kbd>
            </th>
            <td class="px-6 py-4">
              <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $result_info->no_ans}}</p>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-gray-400">
            <kbd class="px-2 py-1.5 text-xs font-semibold text-gray-800">Total Soal</kbd>
          </th>
          <td class="px-6 py-4">
            <p class="px-2 py-1.5 text-xs font-semibold text-gray-800 bg-gray-100 "> : {{ $result_info->yes_ans+$result_info->no_ans}}</p>
          </td>
        </tr>
    </tbody>
    </table>
</div>
</div>
@endsection
