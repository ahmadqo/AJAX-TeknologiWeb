<?php
include("koneksi.php");
?>
<doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sampel Project Ajax</title>
<script>
	var xmlHttp

function showDesa(str){
	xmlHttp=GetXmlHttpObject()
	if(xmlHttp==null){
		alert("Browser anda tidak support")
		return
}
var url="get_desa.php"

url=url+"?q="+str
xmlHttp.onreadystatechange=stateChanged
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("txtHint").innerHTML=xmlHttp.responseText
	}
}

function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttp;
}	
</script>
</head>
<body>
Silahkan Pilih Kecamatan :
<select name="desa" onChange="showDesa(this.value)">
		<option></option>
	<?php
        $query="select * from kecamatan";
        $rs = mysql_query($query);
        while($result_data = mysql_fetch_array($rs)){
            list($id_kecamatan, $kecamatan)=$result_data;
	?>
        <option value="<?php echo "$id_kecamatan"?>"><?php echo "$kecamatan"?></option>
	<?php
    }
	?>
	</select>
	<br/><br/>

	//menampilkan nilai dari idtextHint
	<div id="txtHint"></div>
</body>
</html>
