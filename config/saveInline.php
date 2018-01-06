<?php	
define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','central_laundry');
	
	mysql_connect(db_host,db_user,db_pass);
	mysql_select_db(db_name);	
	if(isset($_POST['rownum']))
{
	update_data($_POST['field'],$_POST['value'],$_POST['rownum']);
}

function get_data()
{

	$sql = "select *,m.m_kategori from desc_serve s
                    join sub_services m on m.no=s.kd_main_serve";

	$rs = mysql_query($sql);

	return $rs;
}

function update_data($field, $data, $rownum)
{

	$sql = "update desc_serve set ".$field." = '".$data."' where no = ".$rownum;
echo $sql;
	mysql_query($sql) or die(mysql_error());

}
	
?>
