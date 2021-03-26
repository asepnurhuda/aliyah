<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PPDB MAS Miftahul Ulum</title>
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

    .header-logo {
        width: 78px;
        height: 78px;
        float: left;
    }

    .header{
        
        width: 19cm;
        height: 2.1cm;
        text-align: center;
        font-size: 20px;
        font-family: "Times New Roman";
        border-bottom: 3px solid;
    }
    
    div.clear {
        clear:both;
    }
    
    .formulir{
        float: left;
        width: 14cm;
        padding: 10px 10px 30px 30px;
    }

    .photo{
        padding-top: 20px;
        padding-right: 10px;
        width: 4cm;
        height: 6cm;
    }

    .footer{
        height: 40px;
        padding-left: 10px;
        border-top: 2px solid;
    }

   


</style>
<body>

    <div class="page">
        <div class="header-logo"><img src="{{ asset('images/logo-aliyah.png') }}" width="78" height="78"></div>
        <div class="header"><b>KARTU PENDAFTARAN PESERTA DIDIK BARU (PPDB) <br> MADRASAH ALIYAH MIFTAHUL ULUM ANGGANA <br> TAHUN PEMBELAJARAN 2021/2022</b></div>    
        <div class="clear"></div>
        <div class="formulir">
        <table>
            <tr>
                <td>No Pendaftaran</td>
                <td class="titikdua">:</td>
                <td>{{ $student->no_pendaftaran }}</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td class="titikdua">:</td>
                <td>{{ $student->nama_lengkap() }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td class="titikdua">:</td>
                <td>{{ $student->gender() }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td class="titikdua">:</td>
                <td>{{ $student->tempat_lahir }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $student->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td class="titikdua">:</td>
                <td >{{ $student->alamat}}</td>
            </tr>
            
        </table>
        </div>
        <div class="photo">
            <img src="{{ asset('images/'.$student->photo) }}" width="148" height="200">
        </div>
        <div class="clear"></div>
        <div class="footer">
            <b>Catatan:</b> <br>
            <i>Calon siswa yang telah mendaftar harus mengikuti tes masuk, cek pelaksanaan (waktu tes) diwebsite pada menu Agenda Sekolah.</i>
        </div>                   
    </div>    
</body>
</html>