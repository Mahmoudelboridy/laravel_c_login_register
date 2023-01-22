<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New user registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="{{ route('createuser') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="mb-1">user name</label> <input type="text" class="form-control"
                            placeholder="Enter u username" autocomplete="off" required="required"
                            name="name" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">user email</label> <input type="email" class="form-control"
                            placeholder="Enter u email" autocomplete="off" required="required" name="email" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">password</label> <input type="password" class="form-control"
                            placeholder="Enter u password" autocomplete="off" required="required"
                            name="password" />
                    </div>
                    <div class="text-center">
                        <button class="bg-info mb-3 py-2 px-3 border-0" name="signup">sign up</button>
                        <br>
                        <a href="/login">u already have account ? login</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>



<style>
    a{
        text-decoration: none ;
    }
</style>