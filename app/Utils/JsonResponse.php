<?php

namespace App\Utils;

use Illuminate\Http\Response;

class JsonResponse {

    private $success;
    private $error;
    private $data;

    function __construct($success = false, $error = null, $data = null) {
	$this->success = $success;
	$this->error = $error;
	$this->data = $data;
    }

    function getSuccess() {
	return $this->success;
    }

    function getError() {
	return $this->error;
    }

    function getData() {
	return $this->data;
    }

    function setSuccess($success) {
	$this->success = $success;
    }

    function setError($error) {
	$this->error = $error;
    }

    function setData($data) {
	$this->data = $data;
    }

    public function send() {
        return new Response(json_encode([
	    "success" => $this->success,
	    "error" => $this->error,
	    "data" => $this->data
	]));
    }

}
