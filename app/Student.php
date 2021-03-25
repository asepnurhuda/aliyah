<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Student extends Model
{
    protected $fillable = [
            'user_id',
            'no_pendaftaran',
            'nama_depan',
            'nama_belakang',
            'noseri_ijazah',
            'nohp',
            'nisn',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'npsn_asal',
            'agama',
            'warga_negara',
            'gender', 
            'hobi',
            'cita_cita',
            'anak_ke',
            'jml_saudara',
            'paud',
            'tk',
            'jml_nilai_raport',
            'sem_1',
            'sem_2',
            'sem_3',
            'sem_4',
            'sem_5',
            'sem_6',
            'no_skl',
            'photo',
            'alamat',
            'status',
            'alasan',
            'nikah'
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gender()
    {
        if( $this->gender == 'L' ){
            return 'Laki-laki';
        }if( $this->gender == 'L' ){
            return 'Perempuan';
        }
    }

    public function nama_lengkap()
    {
        return $this->nama_depan.' '.$this->nama_belakang;
    }
}
