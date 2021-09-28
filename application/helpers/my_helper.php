<?php 

function check_access($idUser, $idMenu)
{
	$ci = get_instance();

	$result = $ci->db->get_where('access', ['idUser' => $idUser, 'menu_id' => $idMenu])->num_rows();
	if ($result > 0) return "checked";
}