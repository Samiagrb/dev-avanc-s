
<!DOCTYPE html>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
<%@ page import="java.sql.*" %>


<html>
<head>
<meta charset="ISO-8859-1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

    * { 
        box-sizing: border-box;
    }

        img{
            width:100%;
            padding: 0%;
            height: 230px;
            opacity: 1;
	        -webkit-transition: .3s ease-in-out;
	        transition: .3s ease-in-out;
        }

        img:hover {
	       -- opacity: .5;
        }

        div{
            overflow: auto;
        }

        .imgPizza{
            margin-bottom:2%;
            padding-bottom: 1%;
        }

        .btn-info{
            background-color: black;
            border: 1px solid black;
        }

        .btn-info:hover{
            background-color: rgb(128, 128, 128);
            border: 1px solid black;
        }
        .description{
            padding-bottom: 2%; 
            border-bottom: 3px solid black;
        }

    </style>
<title>Connexion</title>
</head>
<body>
	<%
		//out.println("Debut");
		try{
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
			
			
			String sql = "SELECT * FROM livreur" ;
	        
	        Statement req = cn.createStatement() ;
	        ResultSet rs = req.executeQuery(sql) ;
	        
	        // Affichage pizza
	     %>
	        <div class="container">
	        <% 
	        while (rs.next()) {            // Va aller voir toutes les lignes de rs%> 
	        	<div class="col-md-4 col-sm-6 imgPizza">
                <img src="images/<%= rs.getString(1) %>.jpg">
            
                <div class="description">
                    <h2><b><%= rs.getString(2) %></b></h2>
                    <p><u>Prenom :</u> <%= rs.getString(3) %> </p>
                    <button type="button" class="btn btn-info">Info</button>
                </div>
            </div>
	        <% }
	        %>
	        </div>
	        
	        
	        
	<%     
	        // Gestion erreur
		} catch(ClassNotFoundException e) {
			e.printStackTrace();
		} catch(SQLException e){
			e.printStackTrace();
		}
		
		
	%>
</body>
</html>