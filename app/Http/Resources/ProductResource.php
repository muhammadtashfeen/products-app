<?php

namespace App\Http\Resources;

use App\Models\Image;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // dd(Image::where('product_id', $this->id)->count());

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'images' =>  new ImageCollection(Image::where('product_id', $this->id)->get())
        ];
    }
}
