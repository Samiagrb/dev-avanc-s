<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
        <%@ page import="java.sql.*" %>
    
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta charset="ISO-8859-1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Insert title here</title>
</head>
<body>
<a type="button" class="btn btn-info" href='pizza.jsp'>Retour à la liste</a>
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
			
			
			String sql = "SELECT * FROM pizza where NroPizz="+numPizz ;
	        
	        Statement req = cn.createStatement() ;
	        ResultSet rs = req.executeQuery(sql) ;
	  %>
	   <div class="container">
	             
	         
	        <% 
	        while (rs.next()) {            // Va aller voir toutes les lignes de rs%> 
	        	<div class="col-md-4 col-sm-6 imgPizza">
                <img src="images/<%= rs.getString(1) %>.jpg">
            
                <div class="description">
                    <input value=<%= rs.getString(2) %>>
                   <u>Prix :</u><input value= <%= rs.getString(3) %>>
                   <a type="button" class="btn btn-success" href="pizza.jsp">Enregister</a>
                   
                </div>
            </div>
	        <% }
	        %>
	        </div>
	        
	  
	  
	        
		
</body>
</html>