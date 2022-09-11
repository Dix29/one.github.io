<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function print_page()
{
	var DocumentContainer = document.getElementById("reciept_detail");
	var WindowObject = window.open('', "PrintWindow", "width=1024,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
	
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	WindowObject.focus();
	WindowObject.print();
	WindowObject.close();
}
</script>
</head>

<body>
<p>dfasdfadsfadsfsadfsad</p>
<p>f</p>
<p>sadf</p>
<p>sad</p>
<p>fsdf</p>
<div style="width:50px; cursor:pointer;" align="center" class="button" onClick="return print_page();">Print</div>


<div id="reciept_detail" class="reciept_detail" style="height:500px">
<table width="50%" border="1"  align="center">
  <tr>
    <td colspan="3"  align="center">INVOICE</td>
  </tr>
  <tr>
    <td>sds</td>
    <td>100</td>
    <td>500</td>
  </tr>
  <tr>
    <td>asd</td>
    <td>a20</td>
    <td>20</td>
  </tr>
</table>
</div>

<p>&nbsp; </p>
</body>
</html>
