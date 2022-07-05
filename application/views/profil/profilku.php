<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>css/profil/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Profil Karyaku</title>
</head>
<body>
    <header>
        <h2>KaryaKu</h2>
    </header>
    <main>
        <div class="sampul">
            <img class="img-sampul" src="<?= base_url();?>image/galeri/fiora3.jpg" />
        </div>

        <div class="foto-profil-nama-quote">
            <div class="foto-profil">
                <img class="img-profil" src="<?= base_url();?>image/galeri/anjia.jpg" />
            </div>
            <div class="nama">
                <h3>Pandji ALam</h3>
            </div>
            <div class="quote">
                <p><q>The things we can’t obtain are the most beautiful ones.</q></p>
            </div>
        </div>

        <div class="portofolio-favorit">
            <div class="portofolio">
                <h4>KaryaKu</h4>
            </div>
            <div class="favorit">
                <h4>Favorit</h4>
            </div>
        </div>

        <div class="galeri">
            <ul>
                <li>
                    <img src="<?= base_url();?>image/galeri/fiora3.jpg" />
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
            <a href="<?= base_url();?>galerihome/galeri"><img src="<?= base_url();?>image/icon/Image.png" alt=""></a>
            <a href="<?= base_url();?>upload/upload"><img src="<?= base_url();?>image/icon/Plus.png" alt=""></a>
            <a href="<?= base_url();?>profiluser/profil"><img src="<?= base_url();?>image/icon/Profile.png" alt=""></a>
        </div>
    </footer>
</body>
</html>