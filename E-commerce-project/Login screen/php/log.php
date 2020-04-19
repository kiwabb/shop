<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new mysqli('localhost','root','F1310179240','shop');
    $query = "select username,password from users where username = ? and password = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss',$username,$password);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows)
    {
        echo "登录成功，欢迎来到。。。商场，页面加载中！";
    }
    else 
    {
        echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";
    }
    /* mysqli_connect("localhost","root","F1310179240","shop");
    $sql = "select username,password from users where username = '$username' and password = '$password'";
    $result = mysqli_query($sql);
    $num = mysql_num_rows($result);
    if($num)
    {
        $row = mysql_fetch_array($result);
        echo $rwo[0];
    }
    else 
    {
        echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";    
    }*/
    ?>
    
</body>
</html>