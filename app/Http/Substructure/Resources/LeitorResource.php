<?php

namespace App\Http\Substructure\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeitorResource extends JsonResource
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
            "id" => $this->id ?? null,
			"nome"=> $this->nome ?? null,
			"cpf"=> $this->cpf ?? null,
			"email"=> $this->email ?? null,
			"telefone"=> $this->telefone ?? null,
            "emprestimos" => EmprestimoResource::collection($this->whenLoaded('emprestimos')) ?? null
        ];
    }
}
