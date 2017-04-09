<?php
require_once('../connect.php');

$params = new parseINI;
$params->getconfig('params.ini');
$TOday = $params->getparam('TOdate');


$mssql = connect_to_mssql('config.ini');




$firstdate=date("Y0101");
$lastdate=date("Ymd", strtotime("-1 day"));


$query_str = ("SELECT prod_g.group_code as otdel, sum(T1.summa) as summa
				FROM 
				(SELECT product_id, qty*price_sold as summa From XPERT.dbo.lm_RETAIL_TRAN_FIN_SESS_DT_PROD WHERE transtype='SALE' and (open_date between '" . $firstdate . "' and '" . $lastdate . "') and (cais<75 or cais>78)) T1
				left join XPERT.dbo.v_product product on T1.product_id=product.product_id
				left join XPERT.dbo.product_group prod_g on product.productlevel_key_1=prod_g.product_group_id
				GROUP by prod_g.group_code
				order by prod_g.group_code");

$result = $mssql->sql_query($query_str);

$res_arr = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

for ($x=0; $x<15; $x++)
{

	foreach ($result as $arr=>$row)
	{
		if ($row['otdel'] == $x + 1)
		{
			$res_arr[$x] = round($row['summa'], 1);
		}
	}
}
	
echo json_encode($res_arr);



?>