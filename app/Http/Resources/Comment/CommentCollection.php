<?php

namespace App\Http\Resources\Comment;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\Resource;

class CommentCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'comment' => $this->comment,
            'date' =>  Carbon::parse($this->created_at)->format('M d,Y') 
        ];
    }
}
