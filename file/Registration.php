<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .shadow{
            box-shadow: 1px 4px 8px 2px rgba(0,0,0,0.2);
                transition: 0.3s;
            float: left;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<form class="form-horizontal col-lg-4" >
    <div calss="shadow" style="border:1px solid #BDBDBD;padding-left:10px;padding-right:10px;border-radius:5px 5px 5px 5px;background:#FFECB3"><br>  
        <h1><span class="glyphicon glyphicon-user " aria-hidden="true" style="margin-left:50%"></span></h1>
        <div class="form-group" >
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group" style="margin-left:18%" >
            <input type="file" id="exampleInputFile">
            <p class="help-block">input image.</p>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>