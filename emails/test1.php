<?php

echo '<!DOCTYPE html>
<html>
<head>
	<title>Simple Table</title>
		  <meta name="viewport" content="width=device-width, user-scalable=yes" />



	<style>
	@media screen and (max-width: 200px)
	.td {
		width: 100% !important;
		border-collapse: separate !important;
		float:left;
	}




/* 
Generic Styling, for Desktops/Laptops 
*/
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}





	</style>
</head>
<body width="100%" bgcolor="grey" style="margin:0;padding:0">




	<table bgcolor="green" align="center" style="background-color:green;width:580px;border-collapse:separate;min-height:40px;">
		<tr bgcolor="green" align="center" style="backgrond-color:green;width:580px;border-collapse:collapse;height:20px;padding-bottom:2px;">
			<td class="td" style="width:50%;background-color:red;margin:0 auto;">
				TD number 1
			</td>
			<td class="td"  style="width:50%;background-color:violet;margin:0 auto;height:10px;">
				TD number 1
			</td>
		</tr>

	</table>


	



	<table bgcolor="yellow" style="width:100%;border-collapse:collapse;">
		<tr>
			<td>sss
				ewwe
			</td>
		</tr>

	</table>


	
		<table bgcolor="green" align="center" style="background-color:green;width:580px;border-collapse:collapse;min-height:40px;">
		<tr bgcolor="green" align="center" style="backgrond-color:green;width:580px;border-collapse:collapse;height:20px;padding-bottom:2px;">
			<td class="td" style="width:50%;background-color:red;margin:0 auto;">
				TD number 1
			</td>
			<td class="td" style="width:50%;background-color:violet;margin:0 auto;height:10px;">
				TD number 2
			</td>
		</tr>

	</table>













<table>
	<thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Job Title</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>James</td>
		<td>Matman</td>
		<td>Chief Sandwich Eater</td>
	</tr>
	<tr>
		<td>The</td>
		<td>Tick</td>
		<td>Crimefighter Sorta</td>
	</tr>
	</tbody>
</table>

</body>
</html>';
?>