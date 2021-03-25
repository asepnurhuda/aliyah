<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function map($student): array
    {
        return [
            $student->no_pendaftaran,
            $student->nama_depan,
            $student->nama_belakang,
            $student->nohp,
            $student->nik,
            $student->tempat_lahir,
            $student->tanggal_lahir,
            $student->nisn,
            $student->noseri_ijazah,
            $student->npsn_asal,
            $student->agama,
            $student->warga_negara,
            $student->gender, 
            $student->hobi,
            $student->cita_cita,
            $student->anak_ke,
            $student->jml_saudara,
            $student->paud,
            $student->tk,
            $student->jml_nilai_raport,
            $student->sem_1,
            $student->sem_2,
            $student->sem_3,
            $student->sem_4,
            $student->sem_5,
            $student->sem_6,
            $student->no_skl,
            $student->alamat,
            $student->nikah,
            $student->status
        ];
    }

    public function headings(): array
    {
        return [
            'No_pendaftaran',
            'Nama Depan',
            'Nama Belakang',
            'No HP',
            'NIK',
            'Tempat Lahir',
            'Tanggal Lahir',
            'NISN',
            'No Seri Ijazah',
            'NPSN Sekolah',
            'Agama',
            'Warga Negara',
            'Jenis Kelamin', 
            'Hobi',
            'Cita-cita',
            'Anak Ke',
            'Jml Saudara',
            'PAUD',
            'TK',
            'Jml Nilai Raport',
            'Nilai Sem_1',
            'Nilai Sem_2',
            'Nilai Sem_3',
            'NIlai Sem_4',
            'Nilai Sem_5',
            'Nilai Sem_6',
            'No SKL',
            'Alamat',
            'Status',
            'Keterangan'
        ];
    }
}
