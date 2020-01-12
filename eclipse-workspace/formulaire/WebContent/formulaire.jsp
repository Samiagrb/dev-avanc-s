<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<HTML> 
<HEAD> 
<TITLE>Accueil</TITLE>
</HEAD> 
<BODY> 

<% 
String nom = request.getParameter("nom"); 
%> 
<% 
String prenom = request.getParameter("prenom"); 
%> 
<% 
String dateNaiss = request.getParameter("dateNaiss"); 
%> 
<% 
String email = request.getParameter("email"); 
%> 
<% 
String numtel = request.getParameter("numtel"); 
%> 
<h1 >Informations de <%= prenom %> </h1>
<h2> Nom : <%= nom %></h2>
<h2> Prenom: <%= prenom %></h2>
<h2> dateNaiss: <%= dateNaiss %></h2>
<h2> Email : <%= email %></h2>
<h2> Numero de portable : <%= numtel %></h2>
</BODY> 
</HTML> 