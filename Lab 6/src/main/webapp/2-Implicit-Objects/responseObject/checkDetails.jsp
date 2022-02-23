<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%
	String uid = request.getParameter("id");
	String password = request.getParameter("pass");
	session.setAttribute("session-uid", uid);
	if (uid.equals("akriti") && password.equals("nitt")) {
		response.sendRedirect("success.jsp");
	} else {
		response.sendRedirect("failed.jsp");
	}
	%>
</body>
</html>