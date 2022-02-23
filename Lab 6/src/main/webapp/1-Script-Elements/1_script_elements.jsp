<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Scripting Elements</title>
</head>
<body>
	<h1>JSP Scripting Elements:</h1>
	
	<%-- This is a comment --%>
	<% out.print("Scriptlet Element in action"); %>
	
	<h2>Expression Element</h2>
	Current Time: <%= java.util.Calendar.getInstance().getTime() %> 
	
	<h2>Declaration Element</h2>
	<%! int min=60; %>  
	<%= "1 hour is equal to : " + min + " minutes" %>
</body>
</html>