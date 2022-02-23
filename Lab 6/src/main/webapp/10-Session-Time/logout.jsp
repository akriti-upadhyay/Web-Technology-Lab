<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%@ page import="java.util.Date" %>
	<%
		String name = (String)session.getAttribute("user");
		out.print("Thankyou "+name);
		
		Date startTime = (Date)session.getAttribute("startTime");
		Date currentTime = new Date();
		
		out.print("<br/><br/>Your session duration is: " + (currentTime.getTime()-startTime.getTime()) + " ms");
	%>	
	
</body>
</html>