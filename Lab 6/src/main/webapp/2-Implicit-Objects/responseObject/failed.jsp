<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Failed</title>
</head>
<body>
	<%
	String data2 = (String) session.getAttribute("session-uid");
	out.println("Hi " + data2 + ". Id/Password are wrong. Please try Again.");
	%>
</body>
</html>