<?php
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','clg_project');
	}
	function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr);
		$key=implode(",",$key_arr);
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
	    $ins="insert into $tbl($key) values('$value')";
		$run=$this->conn->query($ins);
		return $run;
	}
	function selectall($tbl)
	{
	    $ins="select * from $tbl";
		$run=$this->conn->query($ins);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data not found");
		}
	}
	function select_where($tbl,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}

	function select_where_join2($tbl1,$tbl2,$on1,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on1 where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}

	function select_where_join4($tbl1,$tbl2,$on1,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on1 where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data not found");
		}
	}

	function select_where_join5($tbl1,$tbl2,$on1,$tbl3,$on2,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}

	function select_where_join6($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}

	function select_where_join1($tbl1,$tbl2,$on1,$tbl3,$on2)
	{
	    $ins="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2";
		$run=$this->conn->query($ins);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data not found");
		}
	}

	function select_where_join3($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3)
	{
	    echo $ins="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3";
		$run=$this->conn->query($ins);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data not found");
		}
	}

	function select_where_join($tbl1,$tbl2,$on1)
	{
	    $ins="select * from $tbl1 join $tbl2 on $on1";
		$run=$this->conn->query($ins);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data not found");
		}
	}
	
	function delete_where($tbl,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		$del="delete from $tbl where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
	}
	function update($tbl,$arr,$where)
	{
		$key_arr=array_keys($arr);
		$value_arr=array_values($arr);
		
		$upd="update $tbl set ";
		$i=0;
		$count=count($arr);
		foreach($arr as $w)
		{
			if($count==$i+1)
			{
				$upd.=" $key_arr[$i]='$value_arr[$i]'";
			}
			else
			{
				$upd.=" $key_arr[$i]='$value_arr[$i]',";
				$i++;
			}
		}
		$wkey_arr=array_keys($where);
		$wvalue_arr=array_values($where);
		$upd.="where 1=1";
		$j=0;
		foreach($where as $w)
		{
			$upd.=" and $wkey_arr[$j]='$wvalue_arr[$j]'";
			$j++;
		}
		$run=$this->conn->query($upd);
		return $run;
	}
}
$obj=new model();
?>