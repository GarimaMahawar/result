<head>
	<style>
		#tab1{
			border: solid;
			border-collapse: collapse;
		}
		#tr2:hover{
		background-color:#EA549D;
  		}
		th{
			border: solid;
		}
	</style>
</head>

<title>Result Found</title>
<h2> Check  your Result:_</h2>
<fieldset><legend>DIPLOMA STUDENTS RESULT </legend><form name="frm1" action="?" method="get" >  

<table width="513" border="0" id="tab2">
  <tr>
    <td width="216">Search By
      <label>
        <select name="by" id="by">
          <option slected value="none">--Select by--</option>
          <option value="byroll">Roll number wise</option>
          <option value="byname">Name wise</option>
        </select>
      </label></td>
    <td width="287"><label>
      <input type="text" name="q" id="q">
    </label></td>
  </tr>
  <tr>
    
    
  </tr>
  <tr>
    <td><input type="submit" name="b1" id="b1" value="Search Result"></td>
    <td>&nbsp;</td>
  </tr>
</table>

</form></fieldset>
<br>





<?php
include("connect.php");
//-------------------------------condition for search result-------------------------------------------------
if(isset($_GET['b1'])   &&    !empty($_GET['q'])    &&     isset($_GET['by']   )   &&   $_GET['by']!="none" )
{
	if(isset($_GET['by'])    &&    $_GET['by']  ==  "byroll")
		{
			$check=mysqli_query($conn,"select * from result where
							rollnum = '".$_GET['q']."'   ");
			$num =  mysqli_num_rows($check);
			if($num>0)
			{

				$r=$_GET['q'];
  				//sleep(2);   //time in second
				header("location:marksheet.php?action=showMarksheet&rnum=$r");
				exit();
		    }
	 	   else
	    	{
	         ?>
                 <script language="javascript">
 			  	 alert("Roll Number not found");
				 window.location.href="checkresult.php";
				 </script>
			 <?php
    	    }
		}
	?>
<table width="100%" border="0" id="tab1">
	<tr bgcolor=#FFFD15>
		<th width="150">Roll no.</th>
		<th width="150">Name</th>
		<th width="150">Father Name</th>
		<th width="150">Enrollment No.</th>
	</tr>
	<?php
		//echo $data[6]." 	".$data[1]." 	".$data[2]."	 ".$data[7];
		//?>
</table>
<?php
	if(isset($_GET['by'])    &&    $_GET['by']  ==  "byname")		
		{
				$wh = "  where stdname like '".$_GET['q']."%' "    ;	
		}
	$q = mysqli_query($conn,"select * from result $wh");
	$num = mysqli_num_rows($q);
	if($num>0)
			{
				$count=0;
				while($data = mysqli_fetch_array($q)) 
			{
					
	?>

<a href = "marksheet.php?action=showMarksheet&rnum=<?php echo $data[6]; ?>"	>


	
<?php
	$count++;
?>
<table width="100%">	
	<tr  id="tr2" bgcolor="###7EDFE4">
		<td id="td1" width="150" align="center"><?php echo $data[6]; ?></td>
		<td id="td1" width="150" align="center"><?php echo $data[1]; ?></td>
		<td id="td1" width="150" align="center"><?php echo $data[2]; ?></td>
		<td id="td1" width="150" align="center"><?php echo $data[7]; ?></td>

	</tr>
	
	
</table>
	


<?php 
	}}
}
?>
	
	

	