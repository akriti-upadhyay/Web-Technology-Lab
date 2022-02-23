<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Factorial</title>
</head>
<body>
	<%
		String n = request.getParameter("num");
		int num = Integer.parseInt(n);
		int factorial = 1;
		for(int i=num; i>=1; i--){
			factorial *= i;
		}
		out.print("Factorial of " + num + " is: " + factorial);
	%>
</body>
</html>