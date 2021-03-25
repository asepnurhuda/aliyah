<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'sekilas',
        'pilih_kami',
        'visi',
        'misi',
        'tentang_kami',
        'thumbnail'
    ];
    
    public function tentangKami(){
        return !$this->tentang_kami ? "<p>Madrasah Aliyah Miftahul Ulum Anggana</p>" : $this->tentang_kami ;
    }
}
