<?php
/**
 * BaseLibClass includes all functions common to all library classes
 * @author  Caleb Nelson <calebnelson@mac.com>
 */
class BaseLibClass{
    /**
     * Generates a standard success message array
     * @param  string $message Optional Message about the return value
     * @param  mixed $data Optional Any data to return
     * @return array
     */
	protected function successMessage($message=null, $data=null){
		return array('status' => 'success', 'message' => $message, 'data' => $data);
	}
    /**
     * Generates a standard warning message array
     * @param  string $message Optional Message about the return value
     * @param  mixed $data Optional Any data to return
     * @return array
     */
	protected function warningMessage($message=null, $data=null){
		return array('status' => 'warning', 'message' => $message, 'data' => $data);
	}
    /**
     * Generates a standard failure message array
     * @param  string $message Optional Message about the return value
     * @param  mixed $data Optional Any data to return
     * @return array
     */
	protected function failureMessage($message=null, $data=null){
		return array('status' => 'failure', 'message' => $message, 'data' => $data);
	}
}
?>