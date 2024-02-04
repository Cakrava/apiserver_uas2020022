<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BukuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
     return [
            'idbuku' => $this->idbuku,
            'judul' => $this->judul,
            'genre' => $this->genre,
            'tanggalTerbit' => $this->tanggalTerbit,
            'noRak' => $this->noRak,
         


        ];
    }
}