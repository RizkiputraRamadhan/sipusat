<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
    BASE_URL="<?php echo url('') ?>"
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" href="{{asset('asset/st.png')}}" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
</head>
<style>
    @media print {
        .print {
            display: none;
        }
    }
</style>
<?php
$ip_pribadi=$_SERVER['REMOTE_ADDR'];
$ip_utama = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$deteksi_perangkat = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
if($deteksi_perangkat) {
    $perangkat = "Handphone";
}
else {
    $perangkat = "Komputer";
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
    $browser = 'Netscape';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    $browser = 'Mozilla Firefox';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    $browser = 'Google Chrome';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
    $browser = 'Opera';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
    $browser = 'Internet Explorer';
}
else {
    $browser = 'Lainnya';
}  
?>
<body class="bg-gray-100">

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="" class="flex items-center">
            <img src="{{asset('asset/st.png')}}" class="h-8 mr-3" alt=" Logo" />
            <span class="print self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SIPUSAT</span>
        </a>
        <div class="flex items-center print">
            <a href="" class="mr-6 text-sm  text-gray-500 dark:text-white"><?php echo "$ip_utama"?></span></a>
            <a href="{{ url('student/logout')}}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700 print">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                <li>
                    <a href="{{ url('student/dashboard')}}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('student/exam')}}" class="text-gray-900 dark:text-white hover:underline">Ujian</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>


<banner class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div id="mega-menu-full-image-dropdown" class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
            <a class="p-8 text-left bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken" style="background-image: url({{asset('asset/sipusat.png')}})">
                <p class="text-white mb-1"> <span  id="currentDate"> </span>  <span class="ml-5 font-bold" id="currentTime"> </span></p>
                <p class="text-white mb-1"><?php echo "IP : ".$ip_pribadi;?></p>
                <p class="text-white mb-1"><?php echo "Perangkat : ".$perangkat;?></p>
                <p class="text-white mb-1"><?php echo "Browser : ".$browser;?></p>
                <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Peraturan dan Petunjuk Ujian Online</p>
                <button onclick="my_modal_5.showModal()" type="button" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                    Klik
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
                <button onClick="window.print()" type="button" class="inline-flex items-center px-2.5 py-1.5 ml-2 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                   Print PDF
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            </a>
        </div>
        <h1 class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white p-5">
            <i class="fas fa-pencil-ruler fa-pulse" style="color: #0561ff;"></i>
            {{ $header }}
        </h1>
        
    </div>
</banner>


<div class="min-h-screen rounded-lg">
    <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle rounded-lg">
        <form method="dialog" class="rounded-lg">
            <h3 class="font-bold text-lg mb-4">Peraturan Ujian</h3>
            <p class="text-gray-600 mb-4">
                1. Peserta tidak boleh membuka aplikasi lain.<br>
                2. Peserta tidak boleh menambahkan tab baru pada browser.<br>
                3. Peserta tidak boleh restart halaman ujian.<br>
                4. Peserta harus tepat waktu.<br>
                5. Jika melanggar pasal 1,2,3 maka akan <span class="font-bold text-red-600">otomatis ujian gagal.</span> <br>
            </p>
            <h3 class="font-bold text-lg mb-4">Petunjuk Ujian</h3>
            <p class="text-gray-600 mb-4">
                1. Peserta menuju halaman dashboard lalu klik <strong class="text-red-500">Tambahkan</strong>.<br>
                2. Jika sudah diklik maka akan muncul notifikasi bahwa ujian berhasil ditambahkan lalu klik OK.<br>
                3. Jika yang keluar pesan <strong class="text-red-500">Ujian sudah ditambahkan !!</strong> berarti ujian sudah masuk tinggal memulai ujian.<br>
                4. Peserta menuju halaman ujian lalu klik <strong class="text-red-500">Mulai Ujian</strong>.<br>
                5. Jika sudah selesai mengerjakan klik <strong class="text-red-500">Selesai</strong>.<br>
            </p>
            <div class="modal-action">
                <button class="  inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-black  rounded-lg hover:bg-white hover:text-gray-900 border-red-500 border">Close</button>
            </div>
        </form>
    </dialog>
    
    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            @yield('content')
        </div>
    </div>
</div>


<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4 print">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                <img src="{{asset('asset/st.png')}}" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SIPUSAT</span>
            </a>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="" class="hover:underline">SIPUSAT</a>. All Rights Reserved.</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true,
        columnDefs: [
          { targets: [0, 5], orderable: false } 
        ]
      });
    });
  </script>

 <script>
    function updateDateTime() {
      const now = new Date();

      const formattedDate = `${now.getDate()}/${now.getMonth() + 1}/${now.getFullYear()}`;

      const formattedTime = `${formatTwoDigits(now.getHours())}:${formatTwoDigits(now.getMinutes())}:${formatTwoDigits(now.getSeconds())}`;

      document.getElementById("currentDate").textContent = `${formattedDate}`;
      document.getElementById("currentTime").textContent = `${formattedTime}`;
    }

    function formatTwoDigits(value) {
      return value < 10 ? `0${value}` : value;
    }

    setInterval(updateDateTime, 1000);

    updateDateTime();

    function getIPAddress() {
      fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {
          const userIP = data.ip;
          document.getElementById("userIP").textContent = `IP : ${userIP}`;
        })
        .catch(error => {
          console.error('Error fetching IP address:', error);
          document.getElementById("userIP").textContent = "Failed to fetch IP address.";
        });
    }

    document.addEventListener("DOMContentLoaded", getIPAddress);
  </script>
  
<!-- jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ url('assets/js/custom.js')}}"></script>
</body>
</html>
