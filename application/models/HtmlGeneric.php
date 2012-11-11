<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  HtmlGeneric extends CI_Model {

	public function nivel()
	{
    	$nivel = array();
    	$rs = $this->db->query(self::$sql['nivel']);
    	while($row = $rs->row_array())
    	{
       		$nivel[] = $row;
    	}
    	return $nivel;
	}
       
	public function parentesco()
	{
     	$parentesco = array();
     	$rs = $this->db->query(self::$sql['parentesco']);
     	while($row = $rs->row_array())
     	{
        	$parentesco[] = $row;
     	}
     	return $parentesco;
	}
	
	private static $sql = array(
    	'nivel'=> 'SELECT id, nivel FROM niveles',
    	'parentesco'=> 'SELECT idparentesco, tipo_parentesco FROM parentescos'
	);

}

/* End of file modelName.php */
/* Location: ./application/controllers/modelName.php */