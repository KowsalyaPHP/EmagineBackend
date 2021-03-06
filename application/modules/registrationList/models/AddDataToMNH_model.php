<?php
//require_once APPPATH.'config/database_constants.php';
class AddDataToMNH_model extends CI_Model
{
	
	public function getVendorDetails($input)
	{				
	    $select_query=array();
		$select =   array(
				'IFNULL (`id`,"") as id',
				'IFNULL (`company_name`,"") as company_name',			
				'IFNULL (`company_website`,"") as company_website',	
				'IFNULL (`company_address`,"") as company_address',
				'IFNULL (`city`,"") as city',			
				'IFNULL (`team_size`,"") as team_size',
				'IFNULL (`specialised_sector`,"") as specialised_sector',
//				'IFNULL (`registration_number`,"") as registration_number',								
				'IFNULL (`GST_number`,"") as GST_number',
				'IFNULL (`owner_name`,"") as owner_name',
				'IFNULL (`contact_number`,"") as contact_number',
				'IFNULL (`email`,"") as email',								
				'IFNULL (`SPOC_name`,"") as SPOC_name',
				'IFNULL (`SPOC_mobile_number`,"") as SPOC_mobile_number',
				'IFNULL (`SPOC_email`,"") as SPOC_email',	
				'IFNULL (`status`,"") as status',
				'if(status ="Approve","Approved","Approve") as appStatustxt',
				'if(status ="Reject","Rejected","Reject") as rejStatustxt'
		);
		$arrTables=array(
					'`recruiter`' 		
		);
		
		$this->db->select($select);
		$this->db->from($arrTables);
		$this->db->where('`id`', $input['id']);
		$db_select_query=$this->db->get()->result_array();

		if (!empty($db_select_query))
			return $db_select_query;
		else
			return false;
	}
	
	public function update_uniqueName($input,$srcShortNm){
		$id='';
		$registration_data=array(
				'id'  =>$input['id'],
				'srcShortName' =>$srcShortNm
		);
					
		$customer_table=array(
				'`recruiter` '
		);
		
		$this->db->set($registration_data);
		if(!empty($input['id']))
		{
			$result = $this->db->update($customer_table[0], $registration_data, array('id'=>$input['id']));
			$id=$input['id'];
		}
		
		return (string)$id;
	}
	
	public function getTokenDetails(){	
		$select =   array(
				'IFNULL (`id`,"") as id',
				'IFNULL (`access_token`,"") as access_token'			
		);
		$arrTables=array(
				'`token_details`'
		);
		
		$this->db->select($select);
		$this->db->from($arrTables);
		$db_select_query=$this->db->get()->result_array();
		if (!empty($db_select_query))
			return $db_select_query;
		else
			return false;
	}
	
	
}
// End of file CheckRoleDetails_model.php
// Location: .\application\modules\role\models\CheckRoleDetails_model.php