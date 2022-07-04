<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>css/user/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Login ke Karyaku</title>
</head>
<body>
    <main>
        <p>LOGIN</p>
        <p>to</p>
        <p>KARYAKU</p>
        <form action="<?= base_url();?>user/aksi_login" method="post">
            <div class="container">
                
                <input type="text" placeholder="Enter Username" name="username" required>

                
                <input type="password" placeholder="Enter Password" name="password" required>
                    
                <button type="submit">Login</button>
                <a href="<?= base_url();?>user/daftar"><p class="regis">Belum punya akun?</p></a>
            </div>
        </form>
    </main>
</body>
</html>