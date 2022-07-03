<?php
function buildApiResponse($data, $status){
	$response = $data && $status ? ['data' => $data, 'status' => true] : ['data' => null, 'status' => false];
	header('Content-type: application/json');
	return json_encode($response);
}

/**
 * 
 */
class Api extends Controller
{
	function products(){
		$this->setVisibility(USER_LEVEL_UNKNOWN);
		$model = new Model('products');

		$data = $model->getData();
		$data = array_map(function($item){
			$item['img'] = BASEDOMAIN . '/' . $item['img'];
			return $item;
		}, $data);

		$response = buildApiResponse($data, true);
		echo $response;
	}
}
