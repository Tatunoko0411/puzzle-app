<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StageCellResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'stage_id' => $this->stage_id,
            'x' => $this->x,
            'y' => $this->y,
            'object_id' => $this->object_id,
            'created_at' => $this->created_at
                ->format('Y/m/d H:i:s')
        ];
    }
}
