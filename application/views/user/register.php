<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>css/user/registrasi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Signup ke Karyaku</title>
</head>
<body>
    <main>
        <p>SIGN UP</p>
        <p>to</p>
        <p>KARYAKU</p>
        <form action="<?= base_url();?>user/aksi_daftar" method="post">
            <div class="container">
                
                <input type="text" placeholder="Enter Username" name="username" required>

                
                <input type="password" placeholder="Enter Password" name="password" required>
                    
                <button type="submit">Sign Up</button>
                <a href="<?= base_url();?>user/index"><p class="login">Sudah punya akun?</p></a>
            </div>
        </form>
    </main>
</body>
</html>