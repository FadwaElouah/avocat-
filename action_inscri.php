<?php

if(isset($_POST['register']))
{
    if($_POST['psw'] != $_POST['cpsw'])
    {
        header('location:inscription.php?err=1&nom='.$_POST['fname'].'&login='.$_POST['email'].'&phone='.$_POST['phone'].'&role='.$_POST['role']);
    }
    elseif(!preg_match("/^[0-9]{4}-[0-9]{7}$/",$_POST['phone'] )) {
        header('location:inscription.php?err=10&nom='.$_POST['fname'].'&login='.$_POST['email'].'&phone='.$_POST['phone'].'&role='.$_POST['role']);
      }
    else
    {
        include 'config/cnx.php';
        $req1 = $pdo->prepare('select count(*) existe from utilisateur where Email=?');
        $req1->execute(array($_POST['email']));
        $rslt = $req1->fetch();
        if($rslt['existe']==1)
            header('location:inscription.php?err=2&nom='.$_POST['fname'].'&role='.$_POST['role'].'&phone='.$_POST['phone']);
        else
        {

            session_start();
            $req2 = $pdo->prepare('insert into utilisateur(nom_complete,Email,Telephone,passwords,role) values(?,?,?,?,?)');
            $req2->execute(array($_POST['fname'],$_POST['email'],$_POST['phone'],md5($_POST['psw']),$_POST['role']));
            $_SESSION['login']=$_POST['login'];
            sleep(5);
            header('location:login.php?err=3');
        }
    }
}
?>
