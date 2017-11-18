<?php

namespace App\Http\Resources\Post;

use App\Http\Resources\Comment\CommentCollection;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->detail,
            'publish date' => Carbon::parse($this->created_at)->format('M d,Y'),
            'comments' => $this->comments->count() > 0 ? CommentCollection::collection($this->comments) : "No Comment Yet"
        ];
    }
}
