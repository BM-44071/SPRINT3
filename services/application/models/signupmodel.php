<?php
class Signupmodel extends CI_model
{
	public function signupService($data)
	{
		// $query=$this->db->select('*')
					// ->from('registration')
					// ->where($user)
					// ->get();
					// $result=$query->result_array();
		 //print_r($result);
		// if($query->num_rows()==1)
		// {
			// $response = array('ResponseCode' =>200,'message'=>'suceess','profile'=>$result[0]['Prof_pic'],'fname'=>$result[0]['Firstname'],'lname'=>$result[0]['Lastname'],'id'=>$result[0]['LoginId']);

 			//echo json_encode($response);
     foreach (array_keys($data) as $i)
     {
      $data[$i]=$this->db->escape($data[$i]);
      //echo $data[$i];
     }

$values=implode(',',$data);
$this->db->query("call user1({$values})");
$arrayName = array('ResponseCode' =>15 ,'message'=>'created');
print_r($arrayName);
             echo json_encode($arrayName);


		
			}
		}
			?>
              
