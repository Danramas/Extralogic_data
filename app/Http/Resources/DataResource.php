<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
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
            'page_uid' => $this->page_uid,
            'to' => $this->to,
            'from' => $this->from,
            'message' => $this->message,
            'created' => $this->created_at,
        ];
    }
}
