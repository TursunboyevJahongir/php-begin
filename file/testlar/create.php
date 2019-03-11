<?php
    include "db_user.php";

    if ($_POST) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $query = $connection->prepare('INSERT INTO user (first_name, last_name, phone, address, email) VALUES (?, ?, ?, ?, ?)');
        $result = $query->execute([$first_name, $last_name, $phone, $address, $email]);
        if ($result) {
            header('Location: index.php');
        }
        else
        {
            $error_message = 'XATOLIK Bo`ldi!';
        }
    }
    
?>
<html>
<head>
    <style>
   
    .hover:hover{
        color:#1A237E;
    }
    .none{
        border:none;
        border-bottom:1px solid black;
    }
    </style>

    <title>Creat</title>
</head>
<body  style="background-image: url('image/tree.jpg'); background-attachment: fixed; background-size: cover">
<?php include "menu.php"; ?>
    <div class=" col-lg-5 col-md-12">
        <?php if (isset($error_message)): ?>
            <?= $error_message ?>
            <!-- @TODO ALERT ERROR-->
        <?php endif; ?>
        <form method="POST" class="form-horizontal">
            
            
        <div class="form-group">
            <label  class="col-sm-3 control-label"  >First Name</label>
            <div class="col-sm-9">
            <input type="text" autocomplete="off" class="form-control" name="first_name"  placeholder="First name">
            </div>
        </div>
        <div class="form-group">
            <label   class="col-sm-3 control-label">Last name</label>
            <div class="col-sm-9">
            <input type="text" autocomplete="off" class="form-control" name="last_name" placeholder="Last name">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 ">Phone</label>
            <div class="col-sm-9">
            <input type="number" autocomplete="off" class="form-control" name="phone" placeholder="Phone">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 "  >Address</label>
            <div class="col-sm-9">
            <input type="text" autocomplete="off" class="form-control"  name="address" placeholder="Address">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 ">Email</label>
            <div class="col-sm-9">
            <input type="email" autocomplete="off" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-default">Create</button>
            </div>
        </div>
        </form>
   
</body>
</html>