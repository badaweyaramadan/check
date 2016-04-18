<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    </head>
    
    <body>
    <p><span class="error">* required field.</span></p>
     <form method="post" action="">
     <table>
      <tr>
       <td><label>إسم المريض : </label></td>
       <td><input type="text" name="p_name" placeholder="يرجي إدخال الإسم رباعي" value=""/></td> 
       <td><span style="color:#F00">*</span></td>
      <td>
      </td>
      </tr>
      <tr>
       <td><label>العنوان : </label></td>
        <td><textarea cols="30" rows="5" name="p_adress" placeholder="يرجي إدخال العنوان بالتفصيل" ></textarea></td>
       <td><span style="color:#F00">*</span></td>
      </tr>
      <tr>
       <td><label>السن : </label></td>
       <td><input type="text"  name="p_age" value=""/></td>
       <td><span style="color:#F00">*</span></td>
      </tr>
      
      <tr>
       <td><label>التليفون : </label></td>
       <td><input type="text"  name="p_tel" placeholder="يرجي إدخال رقم أو أكثر" value=""/></td>
       <td><span style="color:#F00">*</span></td>
      </tr>
      <tr>
       <td><label>إختر التخصص المراد الكشف لديه : </label></td>
       <td>
         <select name="p_specialize">
          <option>برجاء إختيار التخصص</option>
          <option>أسنان</option>
          <option> أنف وأذن وحنجرة </option>
          <option>النساء والتوليد</option>
          <option>المخ والأعصاب</option>
          <option>جراحة الكسور والعظام</option>
          <option>الجلدية</option>
          <option>القلب والأوعية الدموية</option>
          <option> العلاج الطبيعي </option>
          <option>جراحة الكلى والمسالك البولية</option>
          <option>الجلدية والتناسلية</option>
          <option>العيـــون</option>
          <option>الأطــفـــال</option>
          <option>الكبد والجهاز الهضمي والباطنة</option>
         </select>
       </td>
       <td><span style="color:#F00">*</span></td>
      </tr>
       <tr>
       <td><label>تأكيد الحجز تليفونيا : </label></td>
       <td><input type="radio" name="p_confirm" value="" /> نعم
       <input type="radio" name="p_confirm" value="" /> لم يتم
       </td>
       <td><span style="color:#F00">*</span></td>
      </tr>
       <tr>
       <td><label>هل أعجبك التطبيق : </label></td>
       <td><input type="radio" name="p_answer" value="" /> نعم
       <input type="radio" name="p_answer" value="" /> لا
       </td>
       </tr>
       <tr>
       <td><label>كيف عرفت بالتطبيق : </label></td>
       <td><input type="checkbox"   name="p_comment" value="" /> Facebook
         <input type="checkbox"   name="p_comment" value="" /> Twitter <br/>
         <input type="checkbox"   name="p_comment" value="" /> From Friend
         <input type="checkbox"   name="p_comment" value="" /> Other
       </td>
      </tr>
       <tr>
       <td></td>
       <td>
       </td>
       <td><input type="submit" name="insert" value="إرسال"  /></td>
       <td><input type="submit" name="insert" value="تعديل"  /></td>
      </tr>
     </table>
     </form>
     <script src="js/jquery-2.2.1.js" type="text/javascript"></script>
     <script type="text/javascript">
     </script>
     
     <?php 
$HostName="localhost";
$db_name="checkdb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['p_name']) && isset($_POST['p_adress']) && isset($_POST['p_age'])&& isset($_POST['p_tel'])&& isset($_POST['p_specialize'])&& isset($_POST['p_confirm'])&& isset($_POST['p_answer'])&& isset($_POST['p_comment']) ) 


{
$sql = "INSERT INTO patients (pa_name,pa_adress,pa_age,pa_tel,pa_specialize,pa_confirm,pa_answer,pa_comment)

 VALUES ('$_POST[p_name]' ,'$_POST[p_adress]','$_POST[p_age]','$_POST[p_tel]','$_POST[p_specialize]','$_POST[p_confirm]','$_POST[p_answer]','$_POST[p_comment]')" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>

    </body>
</html>
