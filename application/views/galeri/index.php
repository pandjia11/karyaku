<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>css/galerihome/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
    <title>Karyaku</title>
</head>
<body>
    <header>
        <h2>KaryaKu</h2>
    </header>
    <div class="kategori">
        <div class="dropdown">
            <select>
                <option value="0">Latest</option>
                <option value="1">Trending</option>
            </select>
        </div>
    </div>
    <main>
        <div class="galeri">
            <ul>
                <li>
                    <a href="google.com"><img src="<?= base_url();?>image/galeri/fiora3.jpg" /></a>
                </li>

                <li>
                    <img src="<?= base_url();?>image/galeri/angelisa.jpg" />
                </li>

                <li>
                    <img src="<?= base_url();?>image/galeri/anjia.jpg" />
                </li>
            
                <li>
                    <img src="<?= base_url();?>image/galeri/emilia.jpg" />
                </li>
            
                <li>
                    <img src="<?= base_url();?>image/galeri/fumikoa.jpg" />
                </li>
        
                <li>
                    <img src="<?= base_url();?>image/galeri/jeannedarc.jpg" />
                </li>
            
                <li>
                    <img src="<?= base_url();?>image/galeri/princess3.jpg" />
                </li>
            
                <li>
                    <img src="<?= base_url();?>image/galeri/pritifiora.jpg" />
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <div class="tool">
            <a href="<?= base_url();?>"><img src="<?= base_url();?>image/icon/Image.png" alt=""></a>
            <a href="<?= base_url();?>upload/upload"><img src="<?= base_url();?>image/icon/Plus.png" alt=""></a>
            <a href="<?= base_url();?>profiluser/profil"><img src="<?= base_url();?>image/icon/Profile.png" alt=""></a>
        </div>
    </footer>
</body>
</html>