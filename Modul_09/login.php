<?php
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    $koneksi = mysqli_connect('localhost','root','','informatika');

    $username=$_POST['username'];
    $password=$_POST['password'];
    $submit=$_POST['submit'];

    if($submit){
        $sql="select * from user where Username='$username' and Password='$password'";
        $query=mysqli_query($koneksi,$sql);
        $row=mysqli_fetch_array($query);
        if($row['username']!=""){
            $_SESSION['username']=$row['username'];
            $_SESSION['status']=$row['status'];
            echo "<script>
                        alert('Anda Berhasil Login Sebagai $row[username]');
                        document.location='hasillogin.php';
                  </script>
                ";
        }else{
            echo "<script>
                    alert('Gagal Login');
                    document.location='login.php';
                  </script>";
        }
    }
?>
<center>
<form method='POST' action='login.php'>
    <table border='0'>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Submit" name="submit"></td>
        </tr>
    </table>
</form>
</center>