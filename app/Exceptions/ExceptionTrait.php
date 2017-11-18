<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


trait ExceptionTrait{


	public function apiExceptions($request,$e)
	{
		if ($this->IsModel($e)){   
			return $this->ResponseModel();
		} 

		if ($this->IsHttp($e)) {   
			return $this->ResponseHttp();
		} 

		return parent::render($request, $e);
	}

	protected function IsModel($exception)
	{
		return $exception instanceof ModelNotFoundException;
	}

	protected function IsHttp($exception)
	{
		return $exception instanceof NotFoundHttpException;
	}
	protected function ResponseModel()
	{
		return Response()->json([
			'errors' => 'Post not found'
		],Response::HTTP_NOT_FOUND);
	}
	protected function ResponseHttp()
	{
		return Response()->json([
			'errors' => 'Incorect Route'
		],Response::HTTP_NOT_FOUND);
	}

}

?>