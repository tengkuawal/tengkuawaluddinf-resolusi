<!-- cookies dan session pada web -->
 <?php
 session_start();?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
 </head>
 <body>
    <form action="" method="post">
      <h1> <?php echo @$_SESSION['isLogin'] ? 'Anda sudah login : '.@$_SESSION['name'] : 'Anda belum login'; ?></h1>
       <?php  if(@$_SESSION['isLogin']){?>
         <button type="submit" name="btnLogout" style='background:blue; color:white;'>Logout</button>
         <?php } else { ?>
             <input type="text" name="username">
         <button type="submit" name="btnLogin" style='background:green; color
               :white;'>Login</button>
         <?php } ?>
    </form>
    <?php
    if(isset($_POST['btnLogin'])){
        $_SESSION['isLogin'] = 'true';
         $_SESSION['name'] = $_POST ['username'];
        header('location:pertemuan8.php');
    }
    
    if(isset($_POST['btnLogout'])){
        session_destroy();
        header('location:pertemuan8.php');
    }
    ?>
 </body>
 </html>
 