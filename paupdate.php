<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="checkdb";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM patients" ;
	
	$result = mysql_query($sql,$con) ;
	?>
  <?php
	while($row = mysql_fetch_array($result)){
	?>
<form name="myform" method="get" action="">
<table>
      <tr>
      <td><input type="hidden" name="p_id" value="<?php echo "$row[pa_id]"?>" /></td>
       <td><label>إسم المريض : </label></td>
       <td><input type="text" name="p_name" value="<?php echo "$row[pa_name]"?>" /></td> 
       <td><span style="color:#F00">*</span></td>
      <td>
      </td>
      </tr>
      <tr>
       <td><label>العنوان : </label></td>
        <td><textarea cols="30" rows="5" name="p_adress" value="<?php echo "$row[pa_adress]"?>"></textarea></td>
       <td><span style="color:#F00">*</span></td>
      </tr>
      <tr>
       <td><label>السن : </label></td>
       <td><input type="text"  name="p_age"  value="<?php echo "$row[pa_age]"?>" /></td>
       <td><span style="color:#F00">*</span></td>
      </tr>
      
      <tr>
       <td><label>التليفون : </label></td>
       <td><input type="text"  name="p_tel" value="<?php echo "$row[pa_tel]"?>"/></td>
       <td><span style="color:#F00">*</span></td>
      </tr>
      <tr>
       <td><label>إختر التخصص المراد الكشف لديه : </label></td>
       <td>
         <select name="p_specialize">
          <option>برجاء إختيار التخصص</option>
          <option <?php echo ($row['pa_specialize']=='أسنان')?'selected':'' ?>>أسنان</option>
          <option <?php echo ($row['pa_specialize']=='أنف وأذن وحنجرة')?'selected':'' ?>> أنف وأذن وحنجرة </option>
          <option <?php echo ($row['pa_specialize']=='النساء والتوليد')?'selected':'' ?>>النساء والتوليد</option>
          <option <?php echo ($row['pa_specialize']=='المخ والأعصاب')?'selected':'' ?>>المخ والأعصاب</option>
          <option <?php echo ($row['pa_specialize']=='جراحة الكسور والعظام')?'selected':'' ?>>جراحة الكسور والعظام</option>
          <option <?php echo ($row['pa_specialize']=='الجلدية')?'selected':'' ?>>الجلدية</option>
          <option <?php echo ($row['pa_specialize']=='القلب والأوعية الدموية')?'selected':'' ?>>القلب والأوعية الدموية</option>
          <option <?php echo ($row['pa_specialize']=='العلاج الطبيعي')?'selected':'' ?>> العلاج الطبيعي </option>
          <option <?php echo ($row['pa_specialize']=='جراحة الكلى والمسالك البولية')?'selected':'' ?>>جراحة الكلى والمسالك البولية</option>
          <option <?php echo ($row['pa_specialize']=='الجلدية والتناسلية')?'selected':'' ?>>الجلدية والتناسلية</option>
          <option <?php echo ($row['pa_specialize']=='العيـــون')?'selected':'' ?>>العيـــون</option>
          <option <?php echo ($row['pa_specialize']=='الأطــفـــال')?'selected':'' ?>>الأطــفـــال</option>
          <option <?php echo ($row['pa_specialize']=='الكبد والجهاز الهضمي والباطنة')?'selected':'' ?>>الكبد والجهاز الهضمي والباطنة</option>
         </select>
       </td>
      </tr>
       <tr>
       <td><label>تأكيد الحجز تليفونيا : </label></td>
       <td><input type="radio" name="p_confirm" value="نعم" <?php echo ($row['pa_confirm']=='نعم')?'checked':'' ?>size="17"/> نعم
       <input type="radio" name="p_confirm" value=" لم يتم" <?php echo ($row['pa_confirm']==' لم يتم')?'checked':'' ?>size="17" /> لم يتم
       </td>
      </tr>
       <tr>
       <td><label>هل أعجبك التطبيق : </label></td>
       <td><input type="radio" name="p_answer" value="نعم" <?php echo ($row['pa_answer']=='نعم')?'checked':'' ?>size="17"/> نعم
       <input type="radio" name="p_answer" value="لا" <?php echo ($row['pa_answer']=='لا')?'checked':'' ?>size="17"/> لا
       </td>
       </tr>
       <tr>
       <td></td>
       <td>
       </td>
       <td><input type="submit" name="insert" value="تعديل"  /></td>
      </tr>
     </table>
     </form>
     <script src="js/jquery-2.2.1.js" type="text/javascript"></script>
     <script type="text/javascript">
     </script>
  <?php
	;}
	 mysql_close($con);
	?>
//--------------------------- 
    <?php
$HostName="localhost";
$db_name="checkdb";
$LoginName="root";
$LoginPassword="";
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE patients SET  pa_name= '$_GET[p_name]',pa_adress='$_GET[p_adress]' ,pa_age='$_GET[p_age]' ,pa_tel='$_GET[p_tel]',pa_specialize='$_GET[p_specialize]',pa_confirm='$_GET[p_confirm]',pa_answer='$_GET[p_answer]',pa_comment='$_GET[p_comment]'WHERE  pa_id= '$_GET[p_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);

?>
</body>
</html>