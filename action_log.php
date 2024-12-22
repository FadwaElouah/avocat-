<?php
if(isset($_POST['login']))
{
    include 'config/cnx.php';
    $req = $pdo->prepare('select count(*) existe from utilisateur where Email=? and passwords=?');
    $req->execute(array($_POST['email'],md5($_POST['psw'])));
    $rslt = $req->fetch();
    if($rslt['existe']==0)
    {
        header('location:login.php?err=1');
    }
    else
    {
        session_start();
        $_SESSION['login']=$_POST['login'];
        header('location:index.php');
    }
}
?>