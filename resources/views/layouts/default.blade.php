<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Mobile Specific Metas
 ================================================== --> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="stylesheet/styles.css">
  <link rel="stylesheet" href="stylesheet/normalize.css">
  <link rel="stylesheet" href="stylesheet/styleicon.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<!-- Favicons
  ================================================== -->
	<title>Notaria</title>
	<style>
            body{
	background-color: rgb(235, 235, 235);
}

.center{
  text-align: center;
}

a{
  text-decoration: none;
}

.input{
    font-size: 18px;
    height:30px;
    outline:0px;
    display: block;
}
.input:focus{
  -webkit-box-shadow:  0px 0px 8px rgb(105,105,105);
  box-shadow:  0px 0px 8px rgb(105,105,105);
}
/* Menu Services */

#detection
{
  width:50px;
  margin:0px;
  padding:0px;
  position:fixed;
  top:0px;
  left:0px;
  height:100vh;
  opacity:1;/*Invisible*/
 background-color: rgb(105,105,105);
}
.menu_services
{
  padding:0;
  margin:0;
  text-align:center;
  display:inline-block;
  position:fixed;
  top:0px;
  
  left:-200px;

  height:100vh;
  width:200px;
  background: rgb(105,105,105); 
  transition:all 0.5s;
  -webkit-transition:all 0.5s;
}
#detection:hover ~.menu_services
{
  left:0px;
}

.menu_services:hover /*Don't forget it, it's important*/
{
  left:0px;
  overflow: scroll;
}
.menu_service
{	display: inline-block;
  	list-style:none;
  	width: 90%;
  	margin-top: 10px;
}
.icon{
  font-size: 44px;
}
.menu_service_link{
	display: block;
	width: 100%;
	height: 100%;
  color: rgb(192,192,192);
}
.menu_service_link:hover{
  color:rgb(245,245,245);
}


/* main section */
.mainsection{
	position: absolute;
	width: 80%;
  height: 100%;
}
.main_left{
  left: 40px;
  transition:all 0.5s;
  -webkit-transition:all 0.5s;
}
.main_left2{
  left: 200px;
  transition:all 0.5s;
  -webkit-transition:all 0.5s;
}
.block_container{
  margin-left: 30px;
  padding-top: 20px;
}
.block{
	width: 300px;
	height: 300px;
	border: 2px solid rgb(59,60,54);
	margin: 10px;
}
.aling_block{
  position: relative;
  display: inline-block;
  text-align: center;
}
.block:hover .module_icon{
  color:rgb(192,192,192);
}
.title_module{
   color: rgb(59,60,54);
   font-size: 22px;
}
.module_icon {
  font-size: 120px;
  display: block;
  margin-top: 20px;
  color:rgb(59,60,54);
}
.shadow {
  -webkit-box-shadow: 0px 2px 3px 4px #888;
  box-shadow: 0px 2px 3px 4px #888;
}
.shadow:hover {
  -webkit-box-shadow: 0px 0px 0px 0px #888;
  box-shadow: 0px 0px 0px 0px #888;
}


/* Log-In*/
.login {
  font-family: 'Open Sans';
  border: 1px solid #888;
  display:inline-block;
  background-color: #fafafa;
  margin-top: 40px;
  box-shadow: 1px 1px 10px #777;
}

.top {
  font-size: 25px;
  padding: 10px 20px;
  text-align: center;
}
.tiny{
  font-size: 11px;
}

.middle {
  font-size: 15px;
  border: 1px solid #999;
  border-radius: 3px;
  display: inline-block;
  padding: 10px 10px 5px;
  background-color: #eee;
}

.bottom {
  font-size: 11px;
  padding: 10px 20px;
}

.middle .input{
    font-size: 22px;
    height:40px;
    display: block;
}
.login-input {
  padding: 1px 2px;
  width: 250px;
  transition: outline .3s;
}
.login-button{
  margin: 15px;
  background-color: rgb(59,60,54);
  color: rgb(235, 235, 235);
  padding: 10px 6px;
  line-height:10px;
  width: 85%;
}
.login-button:hover{
  background-color: rgb(90,90,90);
  color: rgb(245,245,245);
}

.error {
  font-size: 13px;
  background-color: rgb(255,148,148);
  padding: 5px;
  display: block;
  text-align: center;
  color: rgb(172, 34, 34);
}

/*forms*/
.form_container{
  color: rgb(59,60,54);
  width: 100%;
  margin: 20px;

  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
}
.form_container .form_data{
  width: 50%;
  padding: 10px;
}
.form_data {
  text-align: left;
}
.form_data .input {
  margin: 10px;
  border: 1px solid #bbb;
}
.long{
  width: 80%;
}
.form_data label {
  margin: 10px;
  display: block;
}

.message_area{
  margin: 10px;
  width: 80%;
  height: 100px;
  outline:0px;
  border: none;
}
.message_area:focus{
    -webkit-box-shadow:  0px 0px 8px rgb(105,105,105);
  box-shadow:  0px 0px 8px rgb(105,105,105);
}
.budget-button{
  background-color: rgb(59,60,54);
  color: rgb(235, 235, 235);
  width: 120px;
  text-align: center;
  border-radius: 5px;
}
/*Tablas*/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:rgb(59,60,54);
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:rgb(59,60,54);
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
        </style>
</head>
<body>
	@yield('content')
</body>
</html>