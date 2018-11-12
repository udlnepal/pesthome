<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Appointments extends Admin_controller{

public function index()
{
	$data['test']="hello world";
	$this->display('admin/appointments',$data);
}
/* write above here */
}
?>