<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO-DO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href='/style/home.css'>
  </head>
  <style>
   
  </style>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0"> 
            <div class="sidebar">
                <div class="title pt-2">
                    <h4>MENU</h4>
                </div>
                <div class="tasks">
                    <ul>
                        <h6>TASKS</h6>
                        <a href={{ route('tasks.index') }}><li><i class="fas fa-sticky-note sticky-note-icon"></i> Sticky Wall</li></a>
                        <li><i class="fas fa-rocket rocket-icon"></i> Upcoming</li>
                        <li><i class="fas fa-circle now-icon"></i> Today</li>
                        <li><i class="fas fa-calendar calendar-icon"></i> Calendar</li>
                    </ul>
                </div>
                <div class="lists">
                    <ul>
                        <h6>LIST</h6>
                        <li><i class="fas fa-paperclip paperclip-icon"></i> Personal</li>
                        <li><i class="fas fa-paperclip paperclip-icon"></i> Work</li>
                        <li><i class="fas fa-paperclip paperclip-icon"></i> School</li>
                        <li><i class="fas fa-paperclip paperclip-icon"></i> Others</li>
                        <li><i class="fas fa-plus plus-icon"></i> Add more</li>
                    </ul>
                </div>
                <div class="others mt-5">
                    <ul class="p-0">
                        <li><i class="fas fa-cogs"></i> Settings</li>
                        <li><i class="fas fa-sign-out-alt"></i> Sign-out</li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col-9">
               <div class="main-content ">
                <div class="title">
                    <h1>Sticky Wall</h1>
                </div>
                <div class="row">
                    @foreach ($tasks as $task)
                    <div class="col-4">
                        <div class="card card-1">
                            <div class="card-body">
                                <p>{{ $task -> title }}</p>
                                <p>{{ $task -> body }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-4">
                        <div class="card card-5">
                            <div class="card-body text-center">
                               <a href={{ route('tasks.create') }}><i class="fas fa-plus"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>