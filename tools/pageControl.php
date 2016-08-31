<?php

class pageControl
{
	public function changPageTo($url)
	{
		$script = "<script type='text/javascript'>";
		$script = $script . "window.location.href='$url'";
		$script = $script . "</script>";
		
		return $script;
	}
	
	public function registerUser($action, $userData)
	{
		if($action == "SUBMIT")
		{
			$get_user_no_raw = mysql_query("SELECT * FROM `user` ORDER BY `user_no` DESC;");
			$get_user_no_array = mysql_fetch_assoc($get_user_no_raw, MYSQL_ASSOC);
			$user_no = $get_user_no_array['acc_recid'] + 1;

			$sql = "INSERT INTO `user`
					(`user_id`, `user_no`, `user_idname`, `user_name`,
					`user_sex`, `user_birth`, `user_phone`, `user_addr`,
					`user_email`, `user_pass`, `user_level`)
					VALUES (
					'".$userData['userid']."', '".$user_no."', '".
					$userData['useridname']."', '".$userData['username']."',
					'".$userData['usersex']."','".$userData['userbirth']."','".
					$userData['userphone']."','".$userData['useraddr']."',
					'".$userData['useremail']."', '".$userData['userpass']."', '0');";
					
			if(!mysql_query($sql))
				echo "<script type='text/javascript'>alert(\"Unexpected Error! :: ".
				mysql_error()."\"); </script>";
			else
			{
				echo '<script type="text/javascript">
				alert("Registration Successful! redirecting to HOME...");</script>';
				header("Location: ./page_home.php");
			}
				
		}
		else if($action == "VERIFY")
		{
			$sql = "SELECT `user_id` FROM `user` WHERE `user_id` = '" . 
			$userData['userid'] . "'";
			$result = mysql_query($sql);
			if(mysql_num_rows($result) != 0)
				echo '<script type="text/javascript">
				alert("this UserID has been Registed! try another..."); </script>';
			else
				echo '<script type="text/javascript">
				alert("Congratulation! this UserID Available!"); </script>';
		}
	}
	
	public function showTable($raw_data)
	{
		$n = mysql_num_fields($raw_data);
		if( mysql_num_rows($raw_data)==0 )
		{
			echo "<tr><td colspan=\"7\">No Data Found!</td></tr>";
		}
		else
		{
			echo "<table border=\"1\" class=\"sortable\">
			<thead><tr bgcolor=\"#d1d3d6\">
			<td class=\"sorttable_nosort\"><input type=\"checkbox\" onclick=\"toggle(this);\"/>
			</td>";
			for( $j=0; $j<$n; $j++ )
			{
				$currentField = mysql_field_name($raw_data, $j);
				echo "<td>" . $currentField . "</td>";
			}
			echo "<td class=\"sorttable_nosort\">Modify</td>
			</tr></thead><tbody>";
			while($data_cell = mysql_fetch_array($raw_data))
			{
				echo "<tr>";
				echo "<td><input type=\"checkbox\" name=\"SelectRow[]\" value=\"" . 
				$data_cell['acc_recid']."\"/></td>";
				for( $i=0; $i<$n; $i++ )
				{
					echo "<td>" . $data_cell[$i] . "</td>";
				} 
				echo "<td><button type=\"submit\" name=\"modify_target\" value=\"". 
				$data_cell[$n-1]."\">edit</button></td>";
				echo "</tr>";
			}
			echo "</tbody></table>";
		}
	}

	public function modifyValue($editType_text, $user_id, $modify_target)
	{
		if($editType_text=="SUBMIT NEW RECORD")
		{
			$get_recid_raw = mysql_query("SELECT * FROM `acc_record` 									WHERE `user_id` = \"". $user_id ."\" ORDER BY `acc_recid` DESC;");
			$get_recid_array = mysql_fetch_assoc($get_recid_raw, MYSQL_ASSOC);
			$new_recid = $get_recid_array['acc_recid'];

			if(!$new_recid)
			{
				echo "0000000";
			}
			else
			{
				echo $new_recid+1;
			}
		}
		else
		{
			echo $modify_target;
		}
	}

	public function setToSession($sql)
	{
		if (session_status() == PHP_SESSION_NONE) session_start();
		$result = mysql_query($sql) or die("Error requesting data from Database! - " . 
		mysql_errno());
		$info = mysql_fetch_assoc($result, MYSQL_ASSOC);

		$_SESSION["login_info"] = array(
		'user_id' => $info['user_id'],
		'user_pass' => $info['user_pass'],
		'user_sex' => $info['user_sex'],
		'user_email' => $info['user_email'],
		'user_level' => $info['user_level'],
		'user_phone' => $info['user_phone'],
		'user_addr' => $info['user_addr'],
		'user_idname' => $info['user_idname'],
		'user_name' => $info['user_name'], 
		'user_birth' => $info['user_birth']
		);
	}

	public function checkImage()
	{
		$strCtrl = "CODE: <input type=\"text\" name=\"checknum\" id=\"checknum\">
		<img src=\"./tools/showrandimg.php\" id=\"rand-img\"><br>";
		
		echo $strCtrl;
	}
	
	public function verifyImage($checknum)
	{
		Session_start();
		$result = 1;
		if( $_SESSION["Checknum"] != $checknum )
		{
			echo "<script type='text/javascript'>alert(\"Check Error!\"); </script>";
			$result = 0;
		}
		return $result;
	}
}

?>