<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
   <title>Sine Table</title>
</head>
<body>
	<%! 
	   int degrees[] = {0, 30, 90};
	   double number;
	   String result;
	%>
	<table border="2" align="center">
		<tr>
			<th>Degree</th>
			<th>Value</th>
		</tr>
		<% 
			for (int i=0; i<degrees.length; i++) { //start for loop 
		       number = Math.sin(Math.toRadians(degrees[i]));
		       result = String.format("%.1f", number);
		%>
		       <tr>
		          <td><%= degrees[i] %></td>
		          <td><%= result %></td>
		       </tr>
		<% } //end for loop %>
	</table>
</body>
</html>