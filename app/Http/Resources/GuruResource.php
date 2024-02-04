<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuruResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
      public function toArray(Request $request): array
    {
        return [
            'IdGuru' => $this->IdGuru,
            'NamaGuru' => $this->NamaGuru,
            'JenisKelamin' => $this->JenisKelamin,
            'TempatLahir' => $this->TempatLahir,
            'TanggalLahir' => $this->TanggalLahir,
            'Alamat' => $this->Alamat,
            'Nohp' => $this->Nohp,
         


        ];
    }
}
