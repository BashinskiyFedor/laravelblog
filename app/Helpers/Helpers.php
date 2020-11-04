<?php

use Illuminate\Http\JsonResponse;

/**
 * Кастомизация респонса
 *
 * @param  int  $statusCode = 200  -  статус код ответа
 * @param  array  $data = []  -  данные в ответе
 * @param  ?string  $msg = ''  -  сообщение в ответе
 * @return Illuminate\Http\JsonResponse
 */
function customResponse(int $statusCode = 200, array $data = [], $msg = ''): JsonResponse
{
	if ($statusCode >= 200 && $statusCode <= 299)
	{
		$response = successResponse($statusCode, $data, $msg);
	} else {
		$response = errorResponse($statusCode, $data, $msg);
	}

	return $response;
}

function successResponse(int $statusCode, array $data = [], $msg = ''): JsonResponse
{
	$result = ['status' => 'ok'];

	if ($msg) $result['msg'] = $msg;

	if ($data) $result['data'] = $data;

	return response()->json($result, $statusCode, [], JSON_UNESCAPED_UNICODE);
}

function errorResponse(int $statusCode, array $data = [], $msg = ''): JsonResponse
{

	$result = ['status' => 'error'];

	if (is_array($msg) || is_string($msg)) {
		$result['msg'] = $msg;
	} elseif ($msg !== null) {
		switch ($statusCode)
		{
			case 403:
				$result['msg'] = 'Доступ запрещен.';
				break;

			case 404:
				$result['msg'] = 'Модель или страница не найдены.';
				break;

			default:
				$result['msg'] = 'Действие выполнить не удалось.';
		}
	}

	if ($data) $result['data'] = $data;

	return response()->json($result, $statusCode, [], JSON_UNESCAPED_UNICODE);
}
