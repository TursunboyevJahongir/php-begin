<?php
include "db_user.php";
$id = $_GET['id'];
if(empty($id)) {
    echo 'ID YOQ'; exit();
}
if(!$_POST) {
    $query = $connection->query('SELECT * FROM user WHERE id = '. $id);
    $user = $query->fetch();
}
else
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $query = $connection->prepare(
            'UPDATE user SET first_name = ?, last_name = ?, phone = ?, address = ?, email =? WHERE id = '. $id
    );
    $result = $query->execute([$first_name, $last_name, $phone, $address, $email]);
    if ($result) {
        header('Location: list.php');
    }
    else
    {
        $error_message = 'XATOLIK Bo`ldi!';
    }
}
?>
<html>
<head>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Update</title>
</head>
<body  style="background-image: url('image/tree.jpg'); background-attachment: fixed; background-size: cover">

        
       
    
    <?php include "menu.php"; ?>
    <div class=" col-lg-5 col-md-12">
    <?php if (isset($error_message)): ?>
            <?= $error_message ?>
            <!-- @TODO ALERT ERROR-->
        <?php endif; ?>
        <form action="?id=<?$id?>" method="POST" >
            
            
        <div class="form-group">
            <label  class="col-sm-3 control-label" >First Name</label>
            <div class="col-sm-9">
            <input type="text" autocomplete="off" class="form-control" name="first_name" value="<?=$user['first_name']?>">
            </div>
        </div>
        <div class="form-group">
            <label   class="col-sm-3 control-label">Last name</label>
            <div class="col-sm-9">
            <input type="text" autocomplete="off" class="form-control" name="last_name" value="<?=$user['last_name']?>">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 ">Phone</label>
            <div class="col-sm-9">
            <input type="number" autocomplete="off" class="form-control" name="phone" value="<?=$user['phone']?>" >
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 "  >Address</label>
            <div class="col-sm-9">
            <input type="text" autocomplete="off" class="form-control"  name="address" value="<?=$user['address']?>" >
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-3 ">Email</label>
            <div class="col-sm-9">
            <input type="email" autocomplete="off" class="form-control" name="email" value="<?=$user['email']?>">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-default">update</button>
            </div>
        </div>
        

        </form>
    </div>
   




</table>

</body>

</html>