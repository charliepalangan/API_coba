<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class resource_login extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    private $token;
    private $role;
    private $Total_Poin;

    public function __construct($resource, $token, $role = null, $Total_Poin = null)
    {
        parent::__construct($resource);
        $this->token = $token;
        $this->role = $role;
        $this->Total_Poin = $Total_Poin;
    }



    public function toArray(Request $request): array
    {
        if($this->role == null){
            return [
                'Nama' => $this->Nama,
                'Email' => $this->Email,
                'token' => $this->token,
                'Total_Poin' => $this->Total_Poin
            ];
        } else {
            return [
                'Nama' => $this->Nama,
                'token' => $this->token,
                'role' => $this->role
            ];
        }

    }


}
