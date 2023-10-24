<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Printing</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"/>
<style>
    @page { size: A4 }
    body{
        font-family: Arial;
    }
    .rapat {
        line-height: 0;
    }
    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }
  
    table {
        border-collapse: collapse;
        width: 100%;
    }
  
    .table th {
        font-size: 11pt;
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
  
    .table td {
        font-size: 12pt;
        padding: 3px 3px;
        border:1px solid #000000;
    }
  
    .text-center {
        text-align: center;
    }
    .text-left {
        text-align: left;
    }
    .text-right {
        text-align: right;
    }
    .float-left {
        float: left;
    }
    .float-right {
        float: right;
    }
    .kecil {
        font-size: 12pt;
    }
    .text-align {
        text-align: justify;
    }
    div {
        height: 125px;
        width: 35%;
    }
    .margin-left {
        margin-left: 50px;
    }
    .margin-right {
        margin-right: 50px;
    }
    .margin-top {
        margin-top: 150px;
    }

    .hr {
        margin-top: -7px;
    }
</style>
</head>
<body class="A4" onload="window.print();">
    <section class="sheet padding-10mm">
        <img src="/img/logo.png" alt="logo" style="float:left;position:absolute;margin-left:20px;">
        
        <p class="text-center rapat"><strong>PEMERINTAH KABUPATEN DAIRI</strong></p>
        <p class="text-center rapat"><strong>KECAMATAN SIDIKALANG</strong></p>
        <p class="text-center rapat"><strong>KELURAHAN SIDIKALANG</strong></p>
        <p class="text-center rapat"><strong>Jalan Damar Gang Kelurahan No.1 Kode Pos 22211</strong></p>
        <p class="text-center rapat"><strong>S I D I K A L A N G</strong></p>
        <p class="text-center rapat"><strong>e-mail : kelurahan_sidikalang@dairikab.go.id</strong></p>
        <hr color="black" size=1>
        <hr class="hr" color="black" size=4>

        <p class="text-center rapat"><u><strong>SURAT KETERANGAN</strong></u></p>
        <p class="text-center rapat"><strong>NOMOR : 500/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2023</strong></p>
        <br>
        <p class="kecil text-align">1.&emsp;Yang bertandatangan dibawah ini :</p>
        <table class="table">
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;a. Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;"><strong>FAHREJA S. ANJAS UJUNG, SH</strong></td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;b. Jabatan</td>
                <td style="border: none;">:</td>
                <td style="border: none;">LURAH</td>
              </tr>
        </table>

        <p class="kecil text-align">&emsp;&emsp;Menerangkan bahwa</p>
        <table class="table">
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;a. Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;"><strong>{{ $srkip->nama }}</strong></td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;b. Jenis  Kelamin</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $srkip->kelamin }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;c. Tempat/Tgl. Lahir</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $srkip->tempat }}/{{ $srkip->tanggal }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;d. Agama</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $srkip->agama }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;e. Status  Perkawinan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $srkip->pernikahan }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;f. Nomor KTP/NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $srkip->nomor }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;g. Pekerjaan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $srkip->pekerjaan }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;h. Alamat</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $srkip->alamat }}</td>
            </tr>
        </table>

        <p class="kecil text-align">Nama tersebut diatas benar Penduduk Kelurahan Sidikalang Kecamatan Sidikalang Kabupaten Dairi. Nama tersebut diatas tercantum di <i><strong>DATA TERPADU KESEJAHTERAAN SOSIAL KEMENTERIAN SOSIAL R.I (DTKS)</strong></i>. Surat Keterangan ini dibuat untuk memperoleh Kartu Indonesia Pintar (KIP) anaknya yang bernama :</p>
        <table class="table">
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;&emsp;Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;"><strong>{{ $srkip->namaanak }}</strong></td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;&emsp;NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $srkip->nomoranak }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;&emsp;Jenis  Kelamin</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $srkip->kelaminanak }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;&emsp;Tempat/Tgl. Lahir</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $srkip->tempatanak }}/{{ $srkip->tanggalanak }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;&emsp;Alamat</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $srkip->alamatanak }}</td>
            </tr>
        </table>
        <p class="kecil text-align">2. Demikian Surat Keterangan Berkelakuan baik  ini dibuat untuk dapat dipergunakan seperlunya.</p>
        <div class="float-right margin-left">
            <p class="kecil rapat">Dikeluarkan di&emsp;: Sidikalang</p>
            <p class="kecil rapat"><u>Pada Tanggal&emsp;:&emsp;&emsp;&emsp;2023</u></p>
            <p class="kecil rapat">LURAH</p>
            <br>
            <br>
            <br>
            <p class="kecil rapat">FAHREJA S. ANJAS UJUNG, SH</p>
            <p class="kecil rapat">PENATA</p>
            <p class="kecil rapat">NIP.19831026 201101 1 004</p>
        </div>
        
        
    </section>
</body>
</html>