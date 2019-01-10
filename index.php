<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Export CSV without using any library</title>
		
		<script  type="text/javascript">
		
			function downloadToCSV(csv, filename) {
				var csvFile;
				var downloadLink;
			
				// CSV file
				csvFile = new Blob([csv], {type: "text/csv"});
			
				// Download link
				downloadLink = document.createElement("a");
			
				// File name
				downloadLink.download = filename;
			
				// Create a link to the file
				downloadLink.href = window.URL.createObjectURL(csvFile);
			
				// Hide download link
				downloadLink.style.display = "none";
			
				// Add the link to DOM
				document.body.appendChild(downloadLink);
			
				// Click download link
				downloadLink.click();
			}
			
			function exportTbToCSVformat(filename) {
				var csv = [];
				var rows = document.querySelectorAll("table tr");
				
				for (var i = 0; i < rows.length; i++) {
					var row = [], cols = rows[i].querySelectorAll("td, th");
					
					for (var j = 0; j < cols.length; j++) 
						row.push(cols[j].innerText);
					
					csv.push(row.join(","));        
				}
			
				// Download CSV file
				downloadToCSV(csv.join("\n"), filename);
			}
		</script>
		
		
	</head>

<body>
	<br /><br /><br />
	<center>
	<font color="#990000" size="5"> <b>Export HTML Table Data to Excel/CSV in PHP</b> </font><br><br>
	<font color="#0066FF" size="3"> <b>Without using any Library [ Only Two JS fucntions are used ]</b> </font><br /><br />	
		<table border="1">
			<tr>
				<th><center>Name</center></th>
				<th><center>Email</center></th>
				<th><center>Address</center></th>
				<th><center>Qualification</center></th>
				<th><center>Designation</center></th>
				<th><center>About</center></th>
				<th><center>Accounts</center></th>
			</tr>
			<tr>
				<td><center>Rahul Barui</center></td>
				<td><center>rb24@gmail.com</center></td>
				<td><center>Purulia | Kolkata</center></td>
				<td><center>M.C.A</center></td>
				<td><center>Developer</center></td>
				<td><center>I Love Programming</center></td>
				<td><center><a target="_blank" href="https://github.com/Rahul-Barui"><font color="#3300CC"> <b>Github </b></font></a> |
				<a target="_blank" href="https://www.linkedin.com/in/rahul-barui-555651177"> <font color="#3300CC"><b> Linked-In </b></font></a> </center></td>
			</tr>
			<tr>
				<td><center>Testing Raja</center></td>
				<td><center>testraja@gmail.com</center></td>
				<td><center>Kolkata | Bangalore</center></td>
				<td><center>M.Tech</center></td>
				<td><center>Designer</center></td>
				<td><center>I Love Creative Design</center></td>
				<td><center><a href="#"><font color="#3300CC"> <b>N/A </b></font></a> |
				<a href="#"> <font color="#3300CC"><b> N/A</b></font></a> </center></td>
			</tr>
			<tr>
				<td><center>Honor Data</center></td>
				<td><center>data@yahoo.co.in</center></td>
				<td><center>Noida | USA</center></td>
				<td><center>Comp Science</center></td>
				<td><center>Content Writer</center></td>
				<td><center>Not Available</center></td>
				<td><center><a href="#"><font color="#3300CC"> <b>N/A </b></font></a> |
				<a href="#"> <font color="#3300CC"><b> N/A</b></font></a> </center></td>
			</tr>
		</table>
		<br><br>
		<button onclick="exportTbToCSVformat('export_details.csv')">Export to CSV</button>
		
	</center>


	
</body>
</html>