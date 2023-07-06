<?php

namespace App\Exports;

use App\Models\BeasiswaUser;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class beasiswa_usersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $beasiswa; 
    protected $tahun; 
    function __construct($beasiswa, $tahun) {
        $this->beasiswa = $beasiswa;
        $this->tahun= $tahun;
    }
    public function collection()
    {
         $beasiswa_users = BeasiswaUser::all();
        if(isset($this->beasiswa) && $this->beasiswa != '0') $beasiswa_users = $beasiswa_users->where('beasiswa_id', $this->beasiswa);
        if(isset($this->tahun) && $this->tahun != '0') $beasiswa_users = $beasiswa_users->whereBetween('created_at', [$this->tahun.'-01-01 00:00:00', $this->tahun.'-12-31 23:59:59']);
        return  $beasiswa_users;
    }

    public function map($beasiswa_users): array
    {
        return [
            $beasiswa_users->nrp,
            $beasiswa_users->name,
            $beasiswa_users->departement_name,
            $beasiswa_users->major_name,
            $beasiswa_users->phone,
            $beasiswa_users->father_job,
            $beasiswa_users->father_salary,
            $beasiswa_users->mother_job,
            $beasiswa_users->mother_salary,
            $beasiswa_users->parents_salary_pic,
            $beasiswa_users->motivation_letter,
            $beasiswa_users->achievement,
            $beasiswa_users->beasiswa->nama
            // $beasiswa_user->status==0
            // @if($beasiswa_user->status == 0)
            //     return('menunggu');
            //     @elseif($beasiswa_user->status == 1)
            //     <td><div class="badge badge-primary">Lolos Pemberkasan</div></td>
            //     @elseif($beasiswa_user->status == 2)
            //     <td><div class="badge badge-success">Diterima</div></td>
            //     @elseif($beasiswa_user->status == 3)
            //     <td><div class="badge badge-danger">Ditolak</div></td>
            // @endif
            
        ];
    }
    public function headings(): array
    {
        return [
           ['NRP', 'Nama', 'Departement', 'Jurusan', 'Nomer HP', 'Pekerjaan Ayah', 'Penghasilan Ayah', 'Pekerjaan Ibu', 'Penghasilan Ibu', 'Slip Gaji', 'Motivation Latter', 'Bukti Prestasi', 'Kategori Beasiswa'],
        ];
    }
}
