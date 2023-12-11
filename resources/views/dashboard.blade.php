<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            <h1>ADMIN</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <li><i class="fa-solid fa-building-columns"></i>&nbsp;&nbsp;<span>Pengajuan Pendaftaran Objek/Subjek Pajak Bumi dan Bangunan</span></li>
            <li><i class="fa-regular fa-newspaper"></i>&nbsp;&nbsp;<span>Surat Pernyataan</span></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Surat Pernyataan Belum Terdaftar Sebagai Objek Pajak Bumi dan Pembangunan</span></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Surat Pernyataan Kondisi Objek Pajak Bumi dan Bangunan</span></li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Surat Pemberitahuan Objek Pajak PBB Perdesaan dan Perkotaan</span></li>
            <li><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;<span>Sign Out</span></li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="btn"><i class="fa-regular fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-regular fa-user"></i></a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Semua</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>3</h1>
                        <h3>Disetujui</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <h3>Belum Disetujui</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                </div>
            </div>
        <div class="content-2">
            <div class="payments">
                <div class="title">
                    <h2>Data Pengajuan</h2>
                    <a href="#" class="btn">Lihat Semua</a>
                </div>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pemohon</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>06-11-2023</td>
                        <td>Bruno Major</td>
                        <td>Disetujui</td>
                        <td><a href="#" class="btn">Lihat</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>06-11-2023</td>
                        <td>Taylor Swift</td>
                        <td>Belum disetujui</td>
                        <td><a href="#" class="btn">Lihat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>06-11-2023</td>
                        <td>Baskara</td>
                        <td>Disetujui</td>
                        <td><a href="#" class="btn">Lihat</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>06-11-2023</td>
                        <td>Justin Bieber</td>
                        <td>Disetujui</td>
                        <td><a href="#" class="btn">Lihat</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>06-11-2023</td>
                        <td>Soimah</td>
                        <td>Belum disetujui</td>
                        <td><a href="#" class="btn">Lihat</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>