<?php
    include "db_user.php";

    // if (isset($_GET['order']) && $_GET['order'] === 'first_asc')
    // {
    //     $query =$connection->query("SELECT * FROM `user` ORDER BY `first_name` ASC");
    // }
    // else if (isset($_GET['order']) && $_GET['order'] === 'first_desc')
    // {
    //     $query =$connection->query("SELECT * FROM `user` ORDER BY `first_name` DESC");
    // }
    // else {}

    $page_limit=5;
    if (!empty($_GET['page']))
    {
        
     if($_GET['page']<0){
    $page = 1;
     }
    else
    $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    $find = isset($_POST['find'])?$_POST['find']:"";    
    $sql = "SELECT * FROM `user` WHERE `first_name` LIKE '%$find%' 
    OR `last_name` LIKE '%$find%' 
    OR `phone` LIKE '%$find%' 
    OR `address` LIKE '%$find%' 
    OR `email` LIKE '%$find%'";
    if(isset($_POST['find'])){
        var_dump($find);
        $query =$connection->query($sql);
    }
    else{
        $query = $connection->query('SELECT * FROM user ORDER BY id DESC');
        echo "else";
    }

    
    
    $sql2 = (isset($_POST['find'])) ? "SELECT COUNT(*) AS elements FROM `user` WHERE `first_name` LIKE '%$find%' 
    OR `last_name` LIKE '%$find%' 
    OR `phone` LIKE '%$find%' 
    OR `address` LIKE '%$find%' 
    OR `email` LIKE '%$find%'" : "SELECT COUNT(*) as elements FROM user";
    // echo $sql2; exit;
    $query = $connection->query($sql2);
    $count_result = $query->fetch();
    $count=(int)$count_result['elements'];
    if($count > $page_limit)
    {
        $offset = ($page - 1) * $page_limit;
    }
    $pager = ceil($count / $page_limit);
    
    
    $query = $connection->query(
        'SELECT * FROM (SELECT * AS elements FROM `user` WHERE `first_name` LIKE '%$find%' 
        OR `last_name` LIKE '%$find%' 
        OR `phone` LIKE '%$find%' 
        OR `address` LIKE '%$find%' 
        OR `email` LIKE '%$find%') ORDER BY id DESC LIMIT '.$page_limit.' OFFSET '.$offset
    );
    if($page<=3){
        $begin=1;
        $end=5;
    }
    else if($page>=$pager-2){
        $begin=$pager-4;
        $end=$pager;
    }
    else{
        $begin=$page-2;
        $end=$page+2;
    }
    
    
    $list = $query->fetchAll();    
?>
<html>
<head>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    .padding{
        padding-left:5px ;
        padding-right:5px ;
        padding-bottom:5px;
        padding-top:5px;
    }
    .hover:hover{
        color:#1A237E;
    }
    .back:hover{
        background: black;
    }
    .none{
        border:none;
        border-bottom:1px solid black;
    }
    </style>

    <title>List of Users</title>
</head>
<body >
        <form method="post">
                <div class=" col-lg-12">
                <div class="col-lg-6">
                <div class="input-group">
                <input type="text" class="form-control" autocomplete="on" name="find" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Find</button>
                </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </form>

        <table  class="table table-striped" style="background:white">
            <thead>
                <th>ID</th>
                <th>First name 
                    <!-- <a href="?order=first_asc" class="glyphicon glyphicon-sort-by-alphabet" name="asc_first" ></a>
                    <a href="?order=first_desc" class="glyphicon glyphicon-sort-by-alphabet-alt" name="desc_first" ></a> -->
                </th>
                <th>Last name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Actions</th>
            </thead>
            <body>
                <?php foreach ($list as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?> </td>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['last_name'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td>
                            <a class="glyphicon glyphicon-pencil padding hover" style="text-decoration:none" href="update.php?id=<?=$user['id']?>"></a> 
                            <a class="glyphicon glyphicon-trash padding hover"  style="text-decoration:none" href="delete.php?id=<?=$user['id']?>"></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </body>
            <nav><ul class="pagination pagination-lg">
            </table>
    </div> 
    <form>
        <ul class="pagination">
                <li>   
            <? if($page!=1):?>
                <a href="?page=<?=$page-1?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>     
                </a>
            <?if($page>3):?>
                <a href="?page=1">1</a>
                <?endif;?>
                <?if($page>4):?>
                <span class='back'>...</span> 
            <?endif;?>
            </li>
            <?endif;?>
                <?php for ($index = $begin; $index <= $end; $index++): ?>
                <?if($index==$page){?>
                <li class="active"><a href="?page=<?=$index?>"><?=$index?></a></li>
                <?}else{?>
                <li ><a href="?page=<?=$index?>"><?=$index?></a></li>
                <?}endfor;?>
                <li>
                <?if($page<$pager-3):?>
            <span class='back'>...</span> 
                <?endif; if($page<$pager-2):?>
                <a href="?page=<?=$pager?>"><?=$pager?></a>
                
            <?endif;?>
            <?if($page != $pager):?>
                <a href="?page=<?=$page+1?>" >                
                    <span >&raquo;</span>
                </a>

                </li>
            <?endif;?>
               
        </ul>
        <div class="col-lg-3" style="margin-top:20px">
            <div class="input-group">
                <input type="number" me min=1 max=<?=$pager?> name="page" class="form-control" placeholder="Go to...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Go!</button>
                </span>
            </div>
        </div>
     </form>
        <?$percent=floor($page*100/$pager);?>
        <div class="progress" style="margin-left:18px;margin-right:18px">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?=$page?>" aria-valuemin="0" aria-valuemax="50" style="width: <?=$percent?>%;">
            <b style="font:19px serif"><?=$page?>  <span style="font:15px sans-serif;color:red">-> <?=$percent?>% </span></b>
            </div>
        </div>
   
</body>
</html>