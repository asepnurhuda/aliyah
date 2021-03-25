<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PPDB MA Miftahul Ulum</title>
</head>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
    background: #fff; 
    }
    page[size="A4"] {
    background: white;
    width: 21cm;
    height: 29.7cm;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    
    }
    @media print {
    body, page[size="A4"] {
        margin: 0;
        box-shadow: 0;
        }
    }
    table{
        border-top: 1px solid black;
        border-collapse: collapse;
    }
    .atas {
        border-top: 0px;
        border-bottom: 2px solid;
        padding-top: 1px;
        padding-bottom: 1px;
    }
    .header {
        text-align: center;
        font-size: 20px;
    }
    th {
    padding: 5px;
    text-align: left;  
    width: 180px;  
    }

    .untukphoto{
        width: 160px;
    }
    
    .titikdua {
        width: 10px;
    }
    img.logo {
        position:absolute; 
        height: 50px;
        width: 50px;
        text-align: center;
        vertical-align:middle;
        z-index: 9999;
        
    }
    img.photo {
        position:absolute; 
        width: 160px;
        height:190px;
        text-align: center;
        vertical-align:middle;
        z-index: 9999;
    }
</style>
<body>

<div class="page">
    <table class="atas" style="width:100%">
        <tr>
            <td width="100px"><img class="logo" src="{{ url('images/default.jpg') }}" /></td>
            <td class="header">FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br>MADRASAH ALIYAH MIFTAHUL ULUM ANGGANA <br>TAHUN 2021</td>
        </tr>
    </table>
    <table style="width:100%">
        <tr>
            <th>No Pendaftaran</th>
            <td class="titikdua">:</td>
            <td>{{ $student->no_pendaftaran }}</td>
            <td class="untukphoto" rowspan="6"><img class="photo" src="{{ url('images/'.$student->photo) }}"></td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td class="titikdua">:</td>
            <td>{{ $student->nama_lengkap() }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td class="titikdua">:</td>
            <td>{{ $student->gender() }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td class="titikdua">:</td>
            <td>{{ $student->tempat_lahir }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>:</td>
            <td>{{ $student->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td class="titikdua">:</td>
            <td>{{ $student->alamat }}</td>
        </tr>
    </table>

                        
</div>    
</body>
</html>