<?php

namespace App\Livewire;

use Livewire\Component;

class BioData extends Component
{
    public $alamat, $kode_pos, $no_hp, $jenis_kartu_identitas, $nis, $tanggal_habis_kartu_identitas, $provinsi_lahir, $kota_lahir, $tanggal_lahir, $jenis_kelamin, $kelas_paket_keahlian, $kebangsaan, $noktp_nik_passport, $pendidikan_terakhir, $signature;
    public function render()
    {
        return view('livewire.bio-data');
    }

    public function store()
    {
        $this->validate([
            'alamat' => 'required',
            'kode_pos' => 'required',
            'no_hp' => 'required',
            'jenis_kartu_identitas' => 'required',
            'nis' => 'required',
            'tanggal_habis_kartu_identitas' => 'required',
            'provinsi_lahir' => 'required',
            'kota_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'kelas_paket_keahlian' => 'required',
            'kebangsaan' => 'required',
            'noktp_nik_passport' => 'required',
            'pendidikan_terakhir' => 'required',
        ]);

        $data = [
            'user_id' => auth()->user()->id,
            'alamat' => $this->alamat,
            'kode_pos' => $this->kode_pos,
            'no_hp' => $this->no_hp,
            'jenis_kartu_identitas' => $this->jenis_kartu_identitas,
            'nis' => $this->nis,
            'tanggal_habis_kartu_identitas' => $this->tanggal_habis_kartu_identitas,
            'provinsi_lahir' => $this->provinsi_lahir,
            'kota_lahir' => $this->kota_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'kelas_paket_keahlian' => $this->kelas_paket_keahlian,
            'kebangsaan' => $this->kebangsaan,
            'noktp_nik_passport' => $this->noktp_nik_passport,
            'pendidikan_terakhir' => $this->pendidikan_terakhir,
        ];
        
       BioData::create($data);
       $this->alert('success', 'Berhasil Ditambahkan!', [
        'position' => 'center',
        'timer' => 3000,
        'toast' => false,
        'timerProgressBar' => true,
    ]);
    }
}
