<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
     @vite('resources/css/app.css')
    
</head>
<body>
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5">
                <div class="card mt-5 p-5  mbshadow"> 
                    <h1 class="text-center">DIT
                    </h1>

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                   
                    
                    <form method="POST" action="/reset-password">
                        @csrf
                        <div class="mb-3">
                            
                            <input type="hidden" name="email" value="{{ request('email') }}">
                        </div>
                         <div class="mb-3">
                            <label class="form-label">New password</label>
                            <input type="password"  name="password" class="form-control" placeholder="enter your new password" required>
                        </div>
                        <div class="mb-3 row">
                        <label class="form-label">Confirm password</label>
                            <input type="password"  name="password_confirmation" class="form-control" placeholder="confirm password" required>
                        </div>
                     
                         <div class="mb-3 row">
                            <div class="col">
                            <button class="rounded-pill btn btn-primary" type="submit"> change password</button>
                            </div>

                            
                        
                    

                         
                         </form>
                         </div>
                         </div>
                         </div>
                         </div>
                       
</body>
</html>