<?php
//require_once APPPATH.'config/database_constants.php';
class ApiLog_model extends CI_Model
{
    public function insertApiLog($name, $url, $response, $is_success)
	{		
		date_default_timezone_set('Asia/Calcutta');
		$now = new DateTime();
		$dt = $now->format('Y-m-d H:i:s');
        
        $record_count = 0;
        if($is_success == true){
            $record_count = sizeof($response);
        }
        
        $sql ="INSERT INTO apilogs (api_name, api_url, record_count, response, is_success, createdDate) values 
		( '" . $name. "','" . $url. "'," . $record_count. ",'" . $response. "', ".$is_success.", '".$dt."' )";
        $result = $this->db->query($sql);
	}
}
