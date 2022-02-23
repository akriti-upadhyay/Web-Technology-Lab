<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Power of 2</title>
</head>
<body>
<table border="2" align="center">
	<tr>
		<th>Number</th>
     	<th>2^Number</th> 
	</tr>
     <% for (int i=0; i<=10; i++) { %>
            <tr>
                <td><%= i %></td>
                <td><%= Math.pow(2, i) %></td>
            </tr>
     <% } %>
</table>
</body>
</html>