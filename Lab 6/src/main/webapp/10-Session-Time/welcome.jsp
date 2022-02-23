<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Welcome</title>
</head>
<body>
	<%@ page import="java.util.Date" %>
	<%
	String name = request.getParameter("name");
	session.setAttribute("user", name);
	
	Date createTime = new Date(session.getCreationTime());
	out.print("Session start time: " + createTime + "<br/><br/>");
	session.setAttribute("startTime", createTime);
	
	out.print("Welcome " + name + "</br></br>");
	%>
	<a href="logout.jsp"><input type="button" value="Logout"></a>
</body>
</html>
