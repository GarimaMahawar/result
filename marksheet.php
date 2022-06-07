<?php
include("connect.php");
//---------print marksheet-----------------------------
if(isset($_GET['action'])    &&    isset($_GET['rnum'] )  )
{
   $q = mysqli_query($conn,"select * from result where 
                                     rollnum = '".$_GET['rnum']."'  ");

	$num = mysqli_num_rows($q);
	if($num>0)
	{
		$row = mysqli_fetch_array($q);
	}
}
?>

<table width="100%" border="1">
  <tr>
    <th width="17%" scope="col"><img src="download.jfif" width="132" height="99";/></th>
    <th colspan="3" scope="col"><h3>BOARD OF SECONDARY EDUCATION,RAJASTHAN</h3>
    <h3>Government of Rajasthan</h3></th>
  </tr>
  <tr>
    <th scope="row">Student Name</th>
    <td width="27%" align="center"><?php echo $row[1]; ?></td>
    <th width="32%">Father Name</th>
    <td width="24%" align="center"><?php echo $row[2]; ?></td>
  </tr>
  <tr>
    <th scope="row">Mother's Name</th>
    <td align="center"><?php echo $row[3]; ?></td>
    <th>DOB</th>
    <td align="center"><?php echo $row[4]; ?></td>
  </tr>
  <tr>
    <th scope="row">Class</th>
    <td align="center"><?php echo $row[5]; ?></td>
    <th>Roll Number</th>
    <td align="center"><?php echo $row[6]; ?></td>
  </tr>
  <tr>
    <th scope="row">Enrollment number</th>
    <td align="center"><?php echo $row[7]; ?></td>
    <th>Gender</th>
    <td align="center"><?php echo $row[8]; ?></td>
  </tr>
  <tr>
    <th colspan="4" scope="row">-------------------------------------------------------Maximum Marks with Obtained marks Details-------------------------------------------</th>
  </tr>
  <tr>
    <th scope="row">Subject Name</th>
    <th>Maximum Marks</th>
    <th>Obtained Marks</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Hindi</th>
    <td align="center">100</td>
    <td align="center"><?php echo $row[9] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">English</th>
    <td align="center">100</td>
    <td align="center"><?php echo $row[10] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Science</th>
    <td align="center">100</td>
    <td align="center"><?php echo $row[11] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Maths</th>
    <td align="center">100</td>
    <td align="center"><?php echo $row[12] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Social Studies</th>
    <td align="center">100</td>
    <td align="center"><?php echo $row[13] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Sanskrit</th>
    <td align="center">100</td>
    <td align="center"><?php echo $row[14] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Total Marks</th>
    <td align="center">600</td> 
    <td style="font-weight:bold" align="center"><?php   echo  $obtain =$row[9] +  $row[10]   +  $row[11] +  $row[12]   +    $row[13] +  $row[14]; ?> </td>
	  <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Result</th>
	  <td align="center">
		
		  
<?php
$total=600;
if ($obtain>=259)
	{
?>
<b><font color="##246002">Pass</font></b>		  
<?php	
	}
else
	{
?>
<b><font color="#F50C10">Fail</font></b>	  
<?php
	}
?>


	  </td>
    <th>Division:-
		
	  <?php
$a=500;
$b=400;
$c=300;
$obtain=$row[9] +  $row[10]   +  $row[11] +  $row[12]   +    $row[13] +  $row[14];
		
if ($obtain>=$a)
	{
	echo"First Division";
	}
elseif($obtain>=$b)
{
	echo"Second Division";
}
elseif($obtain>=$c)
{
	echo"Third Division";
}
else
{
	echo("No further divisions");
}
?>
 
	  </th>
	  
    <th>Percentage:- <?php 
		$per=($obtain/600)*100;
		echo round($per,2); ?>
	  </th>
	  
  </tr>
</table>
<br>
</hr>

<b>INSTRUCTIONS:-</b>
<br/>
1.This is web based result. Authentic result shell be considered in marksheet issue by RBSE.
<br/>
2.Last date for applying online copy view and re-evalution form through college is 15 day from the date of result declaration. 
</br>

<br>
<center><input name="b1" type="button" value="Print Marksheet" onClick="window.print() " /></center>
