<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
	use HasLinks;

	public function toArray($request): array|\JsonSerializable|Arrayable
	{
		return array_merge(parent::toArray($request), ['_links' => $this->links()]);
	}
}
