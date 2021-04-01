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
    }

    .kepala{
        height: 90px;
        padding-left: 10px;
    }


</style>
<body>

    <div class="page">
        <div class="header-logo"><img src="{{ asset('images/logo-aliyah.png') }}" width="78" height="78"></div>
        <div class="header"><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU (PPDB) <br> MADRASAH ALIYAH MIFTAHUL ULUM ANGGANA <br> TAHUN PEMBELAJARAN 2021/2022</b></div>    
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
                <td>No HP</td>
                <td class="titikdua">:</td>
                <td>{{ $student->nohp }}</td>
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
            <tr>
                <td>NIK</td>
                <td class="titikdua">:</td>
                <td >{{ $student->nik }}</td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td class="titikdua">:</td>
                <td >{{ $student->warga_negara }}</td>
            </tr>
            <tr>
                <td>Status Nikah</td>
                <td class="titikdua">:</td>
                <td >{{ $student->nikah}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td class="titikdua">:</td>
                <td >{{ $student->agama }}</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td class="titikdua">:</td>
                <td >{{ $student->hobi }}</td>
            </tr>
            <tr>
                <td>Cita Cita</td>
                <td class="titikdua">:</td>
                <td >{{ $student->cita_cita}}</td>
            </tr>
            <tr>
                <td>Anak Ke</td>
                <td class="titikdua">:</td>
                <td >{{ $student->anak_ke }}</td>
            </tr>
            <tr>
                <td>Jumlah Saudara</td>
                <td class="titikdua">:</td>
                <td >{{ $student->jml_saudara }}</td>
            </tr>
            <tr>
                <td>NISN</td>
                <td class="titikdua">:</td>
                <td >{{ $student->nisn }}</td>
            </tr>
            <tr>
                <td>NPSN Asal Sekolah</td>
                <td class="titikdua">:</td>
                <td >{{ $student->npsn }}</td>
            </tr>
            <tr>
                <td>PAUD</td>
                <td class="titikdua">:</td>
                <td >{{ $student->paud }}</td>
            </tr>
            <tr>
                <td>Jumlah Nilai Raport</td>
                <td class="titikdua">:</td>
                <td >{{ $student->jml_nilai_raport }}</td>
            </tr>
            <tr>
                <td>Nilai Sem 1</td>
                <td class="titikdua">:</td>
                <td >{{ $student->sem_1 }}</td>
            </tr>
            <tr>
                <td>Nilai Sem 2</td>
                <td class="titikdua">:</td>
                <td >{{ $student->sem_2 }}</td>
            </tr>
            <tr>
                <td>Nilai Sem 3</td>
                <td class="titikdua">:</td>
                <td >{{ $student->sem_3 }}</td>
            </tr>
            <tr>
                <td>Nilai Sem 4</td>
                <td class="titikdua">:</td>
                <td >{{ $student->sem_4 }}</td>
            </tr>
            <tr>
                <td>Nilai Sem 5</td>
                <td class="titikdua">:</td>
                <td >{{ $student->sem_5 }}</td>
            </tr>
            <tr>
                <td>Nilai Sem 6</td>
                <td class="titikdua">:</td>
                <td >{{ $student->sem_6 }}</td>
            </tr>
            <tr></tr>
        </table>
        </div>
        <div class="photo">
            <img src="{{ asset('images/'.$student->photo) }}" width="148" height="200">
        </div>
        <div class="clear"></div>
        <div class="footer">
            Diterima di Madrasah Aliyah Miftahul Ulum pada tanggal : {{ config('sekolah.tanggal_diterima') }}
        </div>   
        <div class="kepala">
            Kepala Madrasah  
            <br>
            <br>
            <br>
            <br>
            <br>
            <b>Wahyuri, S.Pd</b>
        </div>                 
    </div>    
</body>
</html>