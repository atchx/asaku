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

        <p class="text-center rapat"><u>SURAT KETERANGAN BERKELAKUAN BAIK</u></p>
        <p class="text-center rapat">NOMOR : 500/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2023</p>
        <br>
        <p class="kecil text-align">1.&emsp;Yang bertandatangan dibawah ini :</p>
        <table class="table">
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;a. Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">RINDA PAKPAHAN</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;b. Jabatan</td>
                <td style="border: none;">:</td>
                <td style="border: none;">SEKRETARIS</td>
              </tr>
        </table>
        <p class="kecil text-align">&emsp;&emsp;Menerangkan bahwa</p>
        <table class="table">
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;a. Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skkb->nama }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;b. Jenis  Kelamin</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skkb->kelamin }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;c. Tempat/Tgl. Lahir</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skkb->tempat }}/{{ $skkb->tanggal }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;d. Agama</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skkb->agama }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;e. Status  Perkawinan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skkb->pernikahan }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;f. Nomor KTP/NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skkb->nomor }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">&emsp;&emsp;g. Pekerjaan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skkb->pekerjaan }}</td>
            </tr>
            <tr>
                <td style="border: none;">&emsp;&emsp;h. Alamat</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skkb->alamat }}</td>
            </tr>
        </table>
        <p class="kecil text-align">Benar Penduduk Kelurahan Sidikalang, Kecamatan Sidikalang, Kabupaten Dairi dan sepanjang pengetahuan kami yang bersangkutan  adalah:</p>
        <p class="text-center rapat"><strong><i>BERKELAKUAN BAIK</i></strong></p>
        <p class="kecil text-align">2. Demikian Surat Keterangan Berkelakuan baik  ini dibuat untuk dapat dipergunakan seperlunya.</p>
        <div class="float-right margin-left">
            <p class="kecil rapat">Dikeluarkan di&emsp;: Sidikalang</p>
            <p class="kecil rapat"><u>Pada Tanggal&emsp;:&emsp;&emsp;&emsp;2023</u></p>
            <p class="kecil rapat"><strong>An.</strong> Lurah</p>
            <p class="kecil rapat">&emsp;&emsp;SEKRETARIS</p>
            <br>
            <br>
            <br>
            <p class="kecil rapat">&emsp;&emsp;RINDA PAKPAHAN</p>
            <p class="kecil rapat">&emsp;&emsp;PENATA MUDA TK. I</p>
            <p class="kecil rapat">&emsp;&emsp;NIP. 196505041989032005</p>
        </div>
        
        
    </section>
</body>
</html>