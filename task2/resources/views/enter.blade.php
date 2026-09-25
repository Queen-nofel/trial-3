<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
     @vite (['resource/js/app.css'])
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5">
                <div class="card mt-5 p-4 shadow"> 
                    <h1 class="text-center">login</h1>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif


            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error')}}
                </div>   
            @endif             
                    <form method="POST" action="/enter">
                        @csrf
                        <div>
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="enter your name" required>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">email</label>
                            <input type="email" name="email" class="form-control" placeholder="enter your email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password"  class="form-control" placeholder="enter your password">
                         </div>
                         <div class="mb-3 row">
                            <div class="col">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-label">Remember me</label>
                            <div class="col nav justify-content-end"> <a href="/forgot"  class="nav-link">forgot Password</a></div>
                            </div>
                            <div class="d-flex align-items-center my-3 text-secondary">
                                <hr class="flex-grow-1 m-0" style="border-top:1px solid #555555;">
                                <a href="/create">Dont have an account?</a>
                                <hr class="flex-grow-1 m-0" style="border-top:1px solid #555555;">
                                
                            </div>
                            

                         </div>
                        <button type="submit" class="btn btn-primary">Enter</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>