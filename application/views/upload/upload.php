<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>css/upload/style.css">
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
        <h2>Upload</h2>
    </header>
    <main>
        <div class="drag-area">
            <div class="icon"><img src="<?= base_url();?>image/icon/Image.png"></div>
            <p class="drag-drop">Arahkan Gambar Disini</p>
            <p>atau</p>
            <button>Browse Img</button>
            <input type="file" hidden>
        </div>

        <div class="keterangan-gambar">
            <input type="text" class="judul" placeholder="Judul..." name="judul" required maxlength="20">
            <textarea name="deskripsi" id="deskripsi" placeholder="Backstory/Deskripsi"></textarea>
        </div>
    </main>
    <footer>
        <div class="tool">
            <a href="<?= base_url();?>galerihome/galeri"><img src="<?= base_url();?>image/icon/Image.png" alt=""></a>
            <a href=""><img src="<?= base_url();?>image/icon/Plus.png" alt=""></a>
            <a href="<?= base_url();?>profiluser/profil"><img src="<?= base_url();?>image/icon/Profile.png" alt=""></a>
        </div>
    </footer>

    <script src="<?= base_url();?>scripts/script.js"></script>
</body>
</html>