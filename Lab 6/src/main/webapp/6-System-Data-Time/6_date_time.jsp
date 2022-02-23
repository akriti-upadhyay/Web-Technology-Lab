<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>System Date and Time</title>
</head>
<body>
<%@ page import="java.util.Date" %>
<%!
    Date date; 
%>
<% 
    date = new Date();
%>
<h4>System date and time: </h4><br/> <%= date %>
</body>
</html>