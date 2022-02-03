<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">username</label>
                        <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                            placeholder="Edit password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Test">
                </form>
            </div>
        </div>
    </div>


</body>

</html>