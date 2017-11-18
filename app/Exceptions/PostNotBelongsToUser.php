<?php

namespace App\Exceptions;

use Exception;

class PostNotBelongsToUser extends Exception
{
    public function render()
    {    
    	return Response()->json([
    		'errors' => 'Post Not Belongs To User'
    	]);
    }
}
