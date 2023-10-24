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
        font-size: 11pt;
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
        font-size: 11pt;
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

        <p class="text-center rapat"><u>SURAT KETERANGAN AHLI WARIS</u></p>
        <p class="text-center rapat">NOMOR : 470/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2023</p>
        <p class="kecil text-align">Yang bertandatangan dibawah ini :</p>
        <table class="table" style="margin-top: -10px;margin-bottom: -10px;">
            <tr>
                <td style="width: 29%;border: none;">Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;"><strong>FAHREJA S. ANJAS UJUNG, SH</strong></td>
            </tr>
            <tr>
                <td style="border: none;">Jabatan</td>
                <td style="border: none;">:</td>
                <td style="border: none;">LURAH</td>
              </tr>
        </table>

        <p class="kecil text-align">Dengan ini menerangkan dengan sebenarnya bahwa:</p>
        <table class="table" style="margin-top: -10px;margin-bottom: -10px;">
            <tr>
                <td style="width: 29%;border: none;">Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;"><strong>{{ $skaw->nama }}</strong></td>
            </tr>
            <tr>
                <td style="border: none;">NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->nomor }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Tempat/Tgl. Lahir</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->tempat }}/{{ $skaw->tanggal }}</td>
            </tr>
            <tr>
                <td style="border: none;">Jenis  Kelamin</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->kelamin }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Kewarganegaraan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->kewarganegaraan }}</td>
            </tr>
            <tr>
                <td style="border: none;">Agama</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->agama }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Status  Perkawinan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->pernikahan }}</td>
            </tr>
            <tr>
                <td style="border: none;">Alamat</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->alamat }}</td>
            </tr>
        </table>

        <p class="kecil text-align">Nama tersebut diatas adalah Ahli Waris dari Almarhum :</p>
        <table class="table" style="margin-top: -10px;margin-bottom: -10px;">
            <tr>
                <td style="width: 29%;border: none;">Nama</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;"><strong>{{ $skaw->namaaw }}</strong></td>
            </tr>
            <tr>
                <td style="border: none;">NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->nomoraw }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Tempat/Tgl. Lahir</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->tempataw }}/{{ $skaw->tanggalaw }}</td>
            </tr>
            <tr>
                <td style="border: none;">Jenis  Kelamin</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->kelaminaw }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Kewarganegaraan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->kewarganegaraanaw }}</td>
            </tr>
            <tr>
                <td style="border: none;">Agama</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->agamaaw }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Status  Perkawinan</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->pernikahanaw }}</td>
            </tr>
            <tr>
                <td style="border: none;">Alamat</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->alamataw }}</td>
            </tr>
        </table>
        <p class="kecil text-align">Adalah benar penduduk Kelurahan Sidikalang, Kecamatan Sidikalang Kabupaten Dairi dan berdasarkan Surat Keterangan Meninggal Dunia Nomor {{ $skaw->nomorsurat }} tanggal {{ $skaw->tanggalsurat }} benar telah meninggal dunia pada :</p>
        <table class="table" style="margin-top: -10px;margin-bottom: -10px;">
            <tr>
                <td style="width: 29%;border: none;">Tanggal</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->tanggalmeninggal }}</td>
            </tr>
            <tr>
                <td style="border: none;">Pukul</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->pukul }}</td>
            </tr>
            <tr>
                <td style="width: 29%;border: none;">Tempat Meninggal</td>
                <td style="width: 1%;border: none;">:</td>
                <td style="width: 70%;border: none;">{{ $skaw->tempatmeninggal }}</td>
            </tr>
            <tr>
                <td style="border: none;">Dikebumikan di</td>
                <td style="border: none;">:</td>
                <td style="border: none;">{{ $skaw->kebumikan }}</td>
            </tr>
        </table>
        
        <p class="kecil text-align">Surat Keterangan ini diberikan kepada yang bersangkutan untuk dapat dipergunakan seperlunya.</p>
        <div class="float-left margin-right">
            <p class="kecil rapat">No. Reg</p>
            <p class="kecil rapat">Tanggal</p>
            <br>
            <p class="kecil rapat">Plt. CAMAT SIDIKALANG</p>
            <br>
            <br>
            <br>
            <p class="kecil rapat">SRI DEWI MANIK, S.Sos</p>
            <p class="kecil rapat">PENATA TK.I</p>
            <p class="kecil rapat">NIP. 19810404 200312 2010</p>
        </div>
        <div class="float-right margin-left">
            <p class="kecil rapat">Dikeluarkan di&emsp;: Sidikalang</p>
            <p class="kecil rapat">Pada Tanggal&emsp;:&emsp;&emsp;&emsp;2023</p>
            <br>
            <p class="kecil rapat">LURAH</p>
            <br>
            <br>
            <br>
            <p class="kecil rapat">RINDA PAKPAHAN</p>
            <p class="kecil rapat">PENATA</p>
            <p class="kecil rapat">NIP. 19831026 201101 1004</p>
        </div>
        
        
    </section>
</body>
</html>