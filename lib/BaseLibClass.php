<?php
class BaseLibClass{
	protected function successMessage($message=null, $data=null){
		return array('status' => 'success', 'message' => $message, 'data' => $data);
	}
	protected function warningMessage($message=null, $data=null){
		return array('status' => 'warning', 'message' => $message, 'data' => $data);
	}
	protected function failureMessage($message=null, $data=null){
		return array('status' => 'failure', 'message' => $message, 'data' => $data);
	}
}
?>