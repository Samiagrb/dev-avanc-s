<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    <%@ page import="java.sql.*" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%
	String numPizz= request.getParameter("NumPizz");



	
		//out.println("Debut");
		
			String login = "root";
			String password = "";
			String url = "jdbc:mysql://localhost:3306/pizza";
			Connection cn = null;
			//out.println("Debut2");
			// Etape 1 : chargement du driver
			Class.forName("com.mysql.jdbc.Driver"); // MySQL database connection
			//out.println("Driverchargé");
			// Etape 2 : récupération de la connexion
			cn = DriverManager.getConnection(url, login, password);
			//Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/pizzabox?" + "user=root&password=''");
			
			 //out.println("Connexion ok");
			
			
			String sql = "DELETE FROM pizza WHERE NroPizz =" + numPizz ;
	        
	        PreparedStatement req = cn.prepareStatement(sql) ;
	       	req.execute();
	       
	  
	       
	        
	        	     %>
	        	     
	        <a type="button" class="btn btn-info" href='pizza.jsp'>Retour à la liste</a>
	       
</body>
</html>