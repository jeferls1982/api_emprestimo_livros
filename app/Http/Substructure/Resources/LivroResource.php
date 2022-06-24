<?php

namespace App\Http\Substructure\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LivroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "nome" => $this->nome ?? null,
            "qtd" => $this->qtd ?? null,           
            "editora" => new EditoraResource($this->whenLoaded('editora'))
        ];
    }
}
