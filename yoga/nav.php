<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .header{
   background: var(--white);
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   box-shadow: var(--box-shadow);
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding:2rem;
   margin: 0 auto;
   
   position: relative;
}

.header .flex .logo{
   font-size: 2.5rem;
   color:var(--black);
   position: relative;
    margin: 1px 1px 1px 1px;
    text-align: left;
}

.header .flex .logo span{
   color:var(--green);
}

.header .flex .navbar a{
   margin:0 1rem;
   
   color:var(--light-color);
}

.header .flex .navbar a:hover{
   text-decoration: underline;
   color:var(--green);
}

.header .flex .icons > *{
   font-size: 1.5rem;
   color:var(--light-color);
   cursor: pointer;
   margin-left: 1.5rem;
}

.header .flex .icons > *:hover{
   color:var(--green);
}

.header .flex .icons a span,
.header .flex .icons a i{
   color:var(--light-color);
}

.header .flex .icons a:hover span,
.header .flex .icons a:hover i{
   color:var(--green);
}

.header .flex .icons a span{
   font-size: 1rem;
}

#menu-btn{
   display: none;
}

.header .flex .profile{
   position: absolute;
   top:120%; right:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   width: 33rem;
   display: none;
   animation: fadeIn .2s linear;
}

.header .flex .profile.active{
   display: inline-block;
}


.nav-link {
  font-weight: bold;
  font-size: 14px;
  text-decoration: none;
  
  padding: 20px 0px;
  margin: 0px 20px;
  display: inline-block;
  position: relative;
  opacity: 0.75;
}

.nav-link:hover {
  opacity: 1;
}

.nav-link::before {
  transition: 300ms;
  height: 2px;
  content: "";
  position: absolute;
  background-color: #FFA500;
}

.nav-link-ltr::before {
  width: 0%;
  bottom: 10px;
}

.nav-link-ltr:hover::before {
  width: 100%;
}
.button {
  background-color: #FFA500; 
  border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  width: 120px;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 12px;}
    </style>
</head>
<body>
<?php



?>

<header class="header">

   <div class="flex">

      <a href="#" class="logo"><img width="150" height="119" src="https://ekamyoga.com/wp-content/uploads/2022/03/cropped-ekam-yoga-orange-green-logo.png" class="custom-logo" alt="Ekam Yoga"></a><span>.</span></a>
             

      <nav class="navbar">
         <a class="nav-link nav-link-ltr" href="home.php">home</a>
         <a class="nav-link nav-link-ltr" href="shop.php">yoga @ Online</a>
         <a  class="nav-link nav-link-ltr" href="orders.php">Perceive @ Online</a>
         <a class="nav-link nav-link-ltr" href="about.php">YTTC @ Online</a>
         <a class="nav-link nav-link-ltr" href="contact.php">YTTC @ Center</a>
         <a class="nav-link nav-link-ltr" href="contact.php">Ekam @ Lifestyle</a>
         <a class="nav-link nav-link-ltr" href="contact.php">Yoga @ Center</a>
      </nav>

      <div class="icons">
      <button type="submit" style="color:white ;" class="button button1">Login</button> |
      
         <a href="#" class="fas fa-search"></a>
         
          </div>

      
   </div>

</header>
</body>
</html>
