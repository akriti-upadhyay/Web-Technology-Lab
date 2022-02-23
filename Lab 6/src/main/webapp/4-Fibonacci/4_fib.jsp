<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Fibonacci Series</title>
</head>
<body>
	<%!
		int n;
	    String str;
	
	    int fibo(int n){
	    	if(n<2)
	         return n;
	      else
	         return fibo(n-1) + fibo(n-2);
	   }
	%>
	<h3>Fibonacci series:</h3><br>
	<% 
	   str = request.getParameter("num");
	   n = Integer.parseInt(str);
	
	   for(int i=0; i<n; i++) {
	      out.print(fibo(i) + " ");
	   }
%>
</body>
</html>