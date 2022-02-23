<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Registration Form</title>
</head>
<body>
	<%
		String fname = request.getParameter("firstname");
		String lname = request.getParameter("lastname");
		String email = request.getParameter("email");
		String mobile = request.getParameter("mobile");
		String address = request.getParameter("address");
	%>
	<h1>Welcome :)</h1>
	<h3>Following are your details: </h3>
	<% 
		out.println("First Name:     " + fname + "</br></br>");
		out.println("Last Name:      " + lname + "</br></br>");
		out.println("Email ID:       " + email + "</br></br>");
		out.println("Mobile Number:  " + mobile + "</br></br>");
		out.println("Address:        " + address + "</br></br>");
	%>
	<h4>Have a Nice Day!</h4>
</body>
</html>