<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>jsp file for index.html</title>
</head>
<body>
	<%
	String name = request.getParameter("uname");
	out.print("welcome " + name);
	%>
</body>
</html>