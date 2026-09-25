<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    @vite('resources/css/app.css')
</head>
<body>
<header class="border-bottom py-3 bg-black ">
    <nav class="navbar navbar-expand-lg bg-white ">
        <div class="container-fluid">
            <h1 class="d-flex">
                <img src="soma-icon.png" class="rounded-pill w-5"><span class="pl-1"><strong>SOMA</strong></span>
            </h1>
            <div class="d-flex align-items-center gap-3 text-primary">
                <a href="#" class="nav-link"><i class="fas fa-solid fa-user rounded-circle btn btn-dark"></i></a>
            </div>
        </div>
    </nav>

</header>
<main>
<div class=" container-fluid">
    <div class="row">
        <aside class="col-md-6 col-lg-2 col-sm-12 border-end border-5 min-vh-100 p-3 bg-secondary m-0 px-0 pt-0">
           <p class="text-gray-700 mb-3 border-bottom p-3">SAID,AISHA ALLY</p>
           <p class="d-flex rounded-br-x bg-blue-300 mx-2 py-1 justify-content-start cursor-pointer">
            
            <i class="bi bi-person-circle text-primary px-1"></i>
            <span class=""><strong>Profile</strong></span>
           </p>
           <details class=" d-block mt-3 mx-2 py-1 group">
            <summary class="d-flex list-none cursor-pointer rounded-br-x bg-blue-300  py-1 justify-content-start px-1">
                <i class="bi bi-person circle-gear text-primary px-1"></i>
                <span><strong>Self  Service</strong></span>
                <i class="bi bi-chevron-left pl-8"></i>
            </summary>
            <p class="text-white pl-2">Program Transfer</p>
            <p class="text-white pl-2">Academic Result Statement</p>
            <p class="text-white pl-2">Academic Transcript</p>
            <p class="text-white pl-2">Previous Debt</p>
           </details>
           
            <a href="javascript:void(0)" onclick="showhelp()" class="d-flex rounded-br-x bg-blue-300 mx-2 py-1 justify-content-start mt-3 cursor-pointer">
            <i class="bi bi-display text-primary px-1"></i>
            <span>Help</span>
        </a>
           
         </aside>
         <section class="col-md-5 col-lg-10" id="main">
            <div class=" card my-3 py-10 px-2 h-5 shadow">
                <div class="d-flex justify-content-between">
                <p class="d-flex">
                    <i class="bi bi-people-fill"></i>
                    <span>Profile</span>
                </p>
                <p class="d-flex rounded-br-x bg-blue-300 mx-2 py-1 justify-content-start  cursor-pointer">
            <i class="bi bi-pencil-fill  text-primary px-1"></i>
            <span class=""><strong>Edit Profile</strong></span>
           </p>
                </div>
            </div>
            <div class="card">
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <div class="card m-2 align-items-center">
                        <p class="text-xl">SAID, AISHA ALLY</p>
                        <P class="secondary border-bottom pb-3">250222476604</P>
                        <hr class="my-2">
                        <div class="d-flex justify-content-between align-items-center px-3 w-100">
                            <span><strong>Gender</strong></span>
                            <span class="text-blue-400 border-bottom pb-2">Female</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center px-3 w-100">
                            <span><strong>Gender</strong></span>
                            <span class="text-blue-400 border-bottom pb-2">Female</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center px-3 w-100">
                            <span><strong>Gender</strong></span>
                            <span class="text-blue-400 border-bottom pb-2">Female</span>
                        </div><div class="d-flex justify-content-between align-items-center px-3 w-100">
                            <span><strong>Gender</strong></span>
                            <span class="text-blue-400 border-bottom pb-2">Female</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card m-2 align-items-center"></div>
                    </div>
            </div>
            </div>
             </section>
            
         </div>
         
<footer></footer>
<script>
    function showhelp(){
        document.getElementById("main")
        .innerHTML= `
          <div>
        <div class="card mt-3  mb-5 py-10 px-2 h-5 shadow">
            <p>Program To Program Transfer</p>
            <div class="card mt-7 py-10 px-2 h-5 shadow">
                <p class="">If you wish to transfer from one program to another, you can submit a request for a Program to Program Transfer.<br>
                    If you meet the eligibility criteria and your request is approved, you will be able to complete the transfer.</p>

            </div>
          </div>
          `;
    }
</script>
</body>
</html>