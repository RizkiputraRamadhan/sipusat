<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Berlangsung | SIPUSAT</title>
    <!-- Add the Tailwind CSS CDN here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
       .no-select {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            pointer-events: none;
        }
        /* Custom styles for radio buttons */
        .question_options {
            list-style-type: none;
            padding: 0;
        }

        .question_options li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .question_options li input[type="radio"] {
            -webkit-appearance: none;
            width: 15px;
            height: 15px;
            border: 2px solid #718096;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer;
            outline: none;
        }

        .question_options li input[type="radio"]:checked {
            background-color: #718096;
        }
</style>
<body oncontextmenu="return false">
  <!-- Add FontAwesome CDN in the <head> section of your HTML file -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<div class="content-wrapper">
    <section class="content">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <!-- Card for Exam Details -->
                    <div class="bg-white rounded-lg shadow-lg p-4 mb-4 no-select">
                        <div class="flex flex-wrap items-center p-10">
                            <div class="w-full md:w-1/2 mb-4 md:mb-0">
                                <h4 class=" mb-0"><b>Mapel:</b>  {{ $exam->title }}</h4>
                                <b>Status: </b><span class="text-green-500">Aktif  <i class="fas fa-check-circle"></i></span></span>
                            </div>
                            <div class="w-full md:w-1/2 text-center md:text-right">
                              <h4 class="mb-0">
                                   <h4 class="mb-0"><b>Timer:</b> <span class="js-timeout" id="timer">{{ $exam['exam_duration'] }}:00</span></h4>
                                </h4>
                            </div>
                        </div>
                    </div><!-- /.card -->

                    <!-- Card for Exam Form -->
                    <div class="bg-white rounded-lg shadow-lg p-5">
                        <form action="{{url('student/submit_questions')}}" method="POST">
                            <input type="hidden" name="exam_id" value="{{ Request::segment(3) }}">
                            {{ csrf_field() }}
                            <div class=" -mx-4">
                                @foreach ($question as $key => $q)
                                    <div class="w-full md:w-1/2 px-5 mt-4">
                                        <p class="no-select">{{ $key + 1 }}. {{ $q->questions }}</p>
                                        <?php 
                                        $options = json_decode(json_decode(json_encode($q->options)), true);
                                        ?>
                                        <input type="hidden" name="question{{ $key + 1 }}" value="{{ $q['id'] }}">
                                        <ul class="question_options p-2">
                                          <li><input type="radio" value="{{ $options['option1'] }}" name="ans{{ $key + 1 }}"> <span class="no-select">{{ $options['option1'] }}</span></li>
                                          <li><input type="radio" value="{{ $options['option2'] }}" name="ans{{ $key + 1 }}"> <span class="no-select">{{ $options['option2'] }}</span></li>
                                          <li><input type="radio" value="{{ $options['option3'] }}" name="ans{{ $key + 1 }}"> <span class="no-select">{{ $options['option3'] }}</span></li>
                                          <li><input type="radio" value="{{ $options['option4'] }}" name="ans{{ $key + 1 }}"> <span class="no-select">{{ $options['option4'] }}</span></li>
                                          <li><input type="radio" value="{{ $options['option5'] }}" name="ans{{ $key + 1 }}"> <span class="no-select">{{ $options['option5'] }}</span></li>
                                          <li style="display: none;"><input value="0" type="radio" checked="checked" name="ans{{ $key + 1 }}"> <p class="no-select">{{ $options['option5'] }}</p></li>
                                      </ul>                                      
                                    </div>
                                @endforeach

                                <div class="w-full py-8 px-5">
                                    <input type="hidden" name="index" value="{{ $key + 1 }}">
                                    <!-- Change button color to blue -->
                                    <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" id="selesaiButton">SELESAI</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script>
      function finishExam() {
        document.getElementById('selesaiButton').click();
       }

        let timeInSeconds = {{ $exam['exam_duration'] }} * 60;
        let timer = document.getElementById('timer');
        let interval = setInterval(function() {
        let minutes = Math.floor(timeInSeconds / 60);
        let seconds = timeInSeconds % 60;
        timer.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
        timeInSeconds--;
        if (timeInSeconds < 0) {
            clearInterval(interval);
            timer.innerHTML = "Time's up!";
            document.getElementById('selesaiButton').click();
        }
    }, 1000);

    document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });
 
       

    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            Swal.fire({
            icon: 'info',
            title: 'Not New Tab',
            text:  'ujian tidak boleh menambah tab baru, Ujian dinyatakan GAGAL!!',
            allowOutsideClick: false, 
        }).then((result) => {
        if (result.isConfirmed) {
            finishExam();
        }
        });
        }
    });

    document.addEventListener('click', function(event) {
        const clickedElement = event.target;
        if (clickedElement.tagName === 'A') {
            finishExam();
            handleAnchorClick(event);
        }
    });


    
        let examEnded = false;

        window.addEventListener("blur", function() {
        if (!examEnded) {
            Swal.fire({
            title: "Ujian tidak boleh membuka aplikasi lain. Ujian dinyatakan GAGAL!!",
            icon: "warning",
            confirmButtonText: "OK",
            allowOutsideClick: false, 
            }).then((result) => {
            if (result.isConfirmed) {
                finishExam();
            }
            });
        }
        });


    window.addEventListener("keydown", function(event) {
        if (event.key === "F5" || event.key === "F6" || event.key === "r" || event.key === "R") {
        event.preventDefault();
        finishExam();
        }
    });

    window.addEventListener("popstate", function(event) {
        history.pushState(null, null, window.location.href);
        finishExam();
    });

    window.addEventListener('keyup', (e) => {
        if (e.key == 'PrintScreen') {
            navigator.clipboard.writeText('');
            alert('Screenshots disabled!');
            finishExam();
        }
    });
  
      
</script>

</body>
</html>
