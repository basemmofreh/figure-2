Figure 2
--------------------
 consumer api that process data from different data sources

Getting Started
--------------------
 this project is built with reactJs for client side, PHP for the backend api . using the following instructions to get the project up and running:
 
Prerequisites
--------------------
-Node package manager "npm"
-any local server ex: wamp , xamp , appserv

#####SERVER SIDE 
--------------------
  1-import the database api.sql to you server or do it manually by Opening the file connection.php located in PHP-API/connection folder and create a database . a simple database that matches the connection variables (database name : api , tables: products: "id" "name" "price")
 
  2-insert some values in each field to be rendered  
 
-optional : to create csv File you need to access the file csvFileGenerator.php 
 
  3-to read the data that comes from the csv file access the file readCsv.php (csv file must be located in the same folder named as "simple (3)" )
 
  4-to read the api content access the index.php file 
  
  
#####ClIENT SIDE 
--------------------
   1-open folder React-client and use npm to install required modules via "npm install"
   
   2-open App.js located within React-client/src/app and locate the const variable api_1, api_2 to change API links if needed 
   
   3-use the command npm start to fire up the server for react development service
   
   