<?php
	include("./include/selectDBWithLogin.php");
	include("./header.php");
?>


<?php

$setSQL = "SELECT * FROM `orderList` ORDER BY `no` DESC";
$result = mysql_query($setSQL);
//$row = mysql_fetch_array($result);
$row = mysql_fetch_assoc($result);
//echo $row["no"];
//$nextNo = $row["no"] + 1;
//$id = $_SESSION["id"]; header.php裡面有宣告了。


date_default_timezone_set("Asia/Taipei");
//echo "Today is " . date("Y-m-d") . "<br>";
//$time = date("h:i:sa");
$date = date("Y-m-d");
$time = date("H:i:s");

$QRCode = "http://localhost/parkingSys/orderQR.php?id=" . $id;

mysql_close($dbLink);

?>

<!DOCTYPE html>

<html>
	<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>
	  	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAO0SZ3Qj0mkQoYlWMpDSTXK4yK0urA_c&sensor=false"></script>
		
    <script type="text/javascript">
    //<![CDATA[
    var pos_x = 25.019908;
    var pos_y = 121.544791;
    var sw=0;
    var pos_str;
    var map, infowindow;
    
    var geocoder;
    var latlng;
    var pos;
    
    function GBrowserIsCompatible() {
	return true;
	if (window.JSON) return true;
    }
    function load() {
      var ParStr = getUrl();
      if (ParStr.length > 0){
          ParStr = ParStr.substr(4);
	  var parm  = ParStr.split(',');
	  pos_x = parseFloat(parm[0]);
	  pos_y = parseFloat(parm[1]);
	  pos_str = ParStr;
	  var strlen=13;
	  var address = "zzzzzzzzzzzzzxx";
      }else{
          //var address = document.getElementById('addr').value; 
          //var strlen  = document.getElementById('addr').value.length; 
          var address = document.getElementById('address').value; 
          var strlen  = document.getElementById('address').value.length;           
	  pos_str = address;
	  //document.getElementById('aid').value = document.getElementById('cid').value ; 
      }

      if (GBrowserIsCompatible()) {
	infowindow = new google.maps.InfoWindow();
	geocoder= new google.maps.Geocoder();
	latlng = new google.maps.LatLng(pos_x, pos_y);
	var mapOptions = {
	  center: latlng,
	  zoom: 16,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById("map"),mapOptions);
	if (strlen>0){
	    geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			latlng = results[0].geometry.location;
			map.setCenter(latlng);
			showMap(map,latlng,0);
		} else {
			showMap(map,latlng,1);
			// alert("Geocode was not successful for the following reason: " + status);
		}
	    });
	 }else {
		pos_str="<img src='images/latlng.jpg'><br>移動這指標到所要位置, 或請輸入地址,<BR>再按 [更換地點] 以顯示新地點.";
		showMap(map, latlng,1);
	 }
       }
    }

    function showMap(map, loc, sw){
    	if(pos)
    	{
			pos.setMap(null);
		}
	pos = new google.maps.Marker({
		draggable:true, position: loc, // title:"",
		map:map
		});
		/*
	document.getElementById('pos_k').value = 
			loc.lat().toFixed(6)+','+loc.lng().toFixed(6);
	document.getElementById('_url').value = 
		'http://'+ 'card.url.com.tw'+
		'/realads/map_latlng.php?pos='+
		loc.lat().toFixed(6)+','+loc.lng().toFixed(6);
		*/
		
		document.getElementById("longitude").value = loc.lng().toFixed(6);
		document.getElementById("latitude").value = loc.lat().toFixed(6);
	
	google.maps.event.addListener(pos, 'mousedown', function() {
		infowindow.close(map,pos);
		});
	google.maps.event.addListener(pos, 'mouseup', function() {
		infowindow.open(map,pos);
		LatLng = pos.getPosition();
		
	 	//var val = document.getElementById('pos_k').value = LatLng.lat().toFixed(6)+','+ LatLng.lng().toFixed(6);
		var val =  LatLng.lat().toFixed(6)+','+ LatLng.lng().toFixed(6);
			 	
		document.getElementById("longitude").value = LatLng.lng().toFixed(6);
		document.getElementById("latitude").value = LatLng.lat().toFixed(6);
					 	
	  	//document.getElementById('_url').value = 'http://'+ 'card.url.com.tw'+ '/realads/map_latlng.php?pos='+val;
		});
		
	infowindow.setContent(pos_str);

	
			
    }

      function getUrl(){
	var str = window.location.href;
	if ( str.indexOf("?") > -1 ){
	   var strQ = str.substr(str.indexOf("?")+1);
	   return strQ;
	} else {
	   return "";
	}
      }

     function URLDecode(str){
       var ret="";
       for(var i=0;i<str.length;i++){
          var chr = str.charAt(i);
    	  if (chr == "+"){
      	      ret+=" ";
   	  }else if(chr=="%"){
     	      var asc = str.substring(i+1,i+3);
     	      if(parseInt("0x"+asc)>0x7f){
      		  ret+=String.fromCharCode((parseInt("0x"+asc)));
      		  i+=2;
     	      }
    	 }else{
      		ret+= chr;
    	 }
       }
       return ret;
     }
     
     function enterAddress()
     {
	 	//alert("Enter");
        //var address = document.getElementById('addr').value; 
    	//var strlen  = document.getElementById('addr').value.length;
    	var address = document.getElementById('address').value; 
    	var strlen  = document.getElementById('address').value.length; 
          			
	    geocoder.geocode({ 'address': address}, function(results, status) 
		    {
				if (status == google.maps.GeocoderStatus.OK) 
				{
					latlng = results[0].geometry.location;
					map.setCenter(latlng);
					showMap(map,latlng,0);
					//alert("OK");
				} 
				else 
				{
					showMap(map,latlng,1);
					//alert("Geocode was not successful for the following reason: " + status);
				}				 	
		 	}	
	 	);
	 }

    </script>
    		
</head>
<body onload = "load()"  >

<form action="createOrderEnter.php" method="post">
	<table>
		<tr>
			<td>
				流水號							
			</td>
			<td>
				<input type="text" name="no" value = "<?php echo $row["no"] ?>" disabled/>
				<input type="hidden" name="no" value = "<?php echo $row["no"] ?>" />
			</td>
		</tr>
		<tr>
			<td>
				訂單代號
			</td>
			<td>
				<input type="text" name="orderTable_no" value="111" placeholder = "輸入訂單代號" required />
			</td>
		</tr>
		<tr>
			<td>
			會員代號
			</td>
			<td>
			<input type="text" name="id" value = "<?php echo $id ?>"  placeholder = "輸入會員代號" required />
			<input type="hidden" name="date" value = "<?php echo $id ?>"/>
			</td>
		</tr>
		
		<tr>
			<td>
			下訂日期
			</td>
			<td>
			<input type="text" name="date" value = "<?php echo $date ?>" disabled/>
			<input type="hidden" name="date" value = "<?php echo $date ?>"/>
			</td>
		</tr>
		
		<tr>
			<td>
			下訂時間
			</td>
			<td>
			<input type="text" name="time" value = "<?php echo $time ?>" disabled/>
			<input type="hidden" name="time" value = "<?php echo $time ?>"/>
			</td>
		</tr>
		
		<tr>
			<td>
			車輛流水號
			</td>
			<td>
			<input type="text" name="car_no" value = ""  placeholder = "1234" required />
			</td>
		</tr>				

		<tr>
			<td>
			租用車位編號
			</td>
			<td>
			<input type="text" name="parking_no" value = ""  placeholder = "1234" required />
			</td>
		</tr>	
	
	
		<tr>
			<td>
			租用開始日期(年月日)
			</td>
			<td>
			<input type="date" name="startDate" value = "2016-08-03"  placeholder = "2016/8/3" required />
			</td>
		</tr>				
			
		<tr>
			<td>
			租用開始時間(時)
			</td>
			<td>
			<input type="time" name="startTime" value = "13:00"  placeholder = "13:00:00" required />
			</td>
		</tr>
		
		<tr>
			<td>
			租用結束日期(年月日)
			</td>
			<td>
			<input type="date" name="endDate" value = "2016-08-03"  placeholder = "2016/8/3" required />
			</td>
		</tr>	
		
				
		<tr>
			<td>
			租用結束時間(時)
			</td>
			<td>
			<input type="time" name="endTime" value = "13:00"  placeholder = "13:00:00" required />
			</td>
		</tr>
		
		<tr>
			<td>
			租用時段
			</td>
			<td>
		<input type="radio" name="session" value = "" checked required />小時
		<input type="radio" name="session" value = "" required />白天
		<input type="radio" name="session" value = "" required />晚上
		<input type="radio" name="session" value = "" required />全天			
			</td>
		</tr>			
			
		<tr>
			<td>
			租用方案
			</td>
			<td>
		<input type="radio" name="caseNo" value = "" checked required />時租
		<input type="radio" name="caseNo" value = "" required />日租
		<input type="radio" name="caseNo" value = "" required />周租
		<input type="radio" name="caseNo" value = "" required />月租			
			</td>
		</tr>
					
		<tr>
			<td>
			使用的優惠代號
			</td>
			<td>
			<input type="text" name="promotionCode" value = "123456"  placeholder = "123456" required />
			</td>
		</tr>
		
		<tr>
			<td>
			交易狀態
			</td>
			<td>
		<input type="radio" name="caseNo" value = "" required />預約
		<input type="radio" name="caseNo" value = "" required />使用中
		<input type="radio" name="caseNo" value = "" required />退租
		<input type="radio" name="caseNo" value = "" required />完成			
			</td>
		</tr>							
		
		<tr>
			<td>
			通行認證QR碼
			</td>
			<td>
			<input type="text" name="certificationCode" value = "<?php echo $QRCode ?>"  placeholder = "./xxx.jpg" required />
			</td>
		</tr>
		
		<tr>
		<td>
		QRCode
		</td>
		<td>
<?php	
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "./lib/phpqrcode/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
	$errorCorrectionLevel = 'L';
    $matrixPointSize = 4;
	$data = $QRCode;

    if (isset($data)) { 
    
        //it's very important!
        if (trim($data) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
?>	
		</td>
		</tr>
		
		<tr>
			<td>
			想找哪裡的車位
			</td>
			<td>
			<input type="text" id = "address" name="address" value = "新北市"  placeholder = "輸入車位地址" required />
			<input type="button" name="addressButton" value="搜尋車位" onclick="enterAddress()">
			</td>
		</tr>
					
		<tr>
			<td>
			經度
			</td>
			<td>
			<input type="text" id="longitude" name="longitude" value = ""  placeholder = "25.019908" required />
			</td>
		</tr>
		
		<tr>
			<td>
			緯度
			</td>
			<td>
			<input type="text" id="latitude" name="latitude" value = ""  placeholder = "121.544791" required />
			</td>
		</tr>
							
																	
	</table>            	
 <div id="map" style="width: 100%; height: 480px"></div> 
  <button type="submit">新增</button>
</form>

</body>
</html>