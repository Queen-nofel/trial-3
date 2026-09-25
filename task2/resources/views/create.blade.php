<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    
    
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5 ">
                <div class="card  mt-5 p-4 shadow">
                    <div class="text-center py-4">

                    <i class="bi bi-person-plus-fill rounded-circle text-3xl text-primary rounded-circle bg-blue-300 p-2"></i>
                    <p class="text-2xl mt-2"><strong>Create an Acccount</strong></p>
                    <p class="text-secondary"> Fill in the details below to get started</p>
                    </div>
                <div class="d-block">
                     @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>   
            @endif  
            <div id="app"> </div>           
                    <form action="/create" method="POST">
                        @csrf
                    <p class="mb-3">
                        <i class="bi bi-person"></i>
                        <span><strong>Full person</strong></span><br>
                        
                        <input type="text" name="name" class="form-control" placeholder="enter your full name">
                    </p>
                     <p class="mb-3">
                        <i class="bi bi-envelope"></i>
                        <span><strong>Email</strong></span><br>
                        
                        <input type="email" name="email" class="form-control" placeholder="enter your email address">
                    </p>
                     <p class="mb-3">
                        <i class="bi bi-lock"></i>
                        <span><strong>Password</strong></span><br>
                        
                        <input type="password" name="password" class="form-control" placeholder="enter your password">
                    </p>
                    
                    <button  class=" btn btn-primary text-white" type="submit">Register</button>
</form>
                     
                    </div>
                    <a href="enter.html" class="cursor-pointer text-center mt-3">Already have an account?Login</a>    
                </div>
                
            </div>
        </div>
    </div>
     @vite('resources/js/app.js')
</body>
</html>