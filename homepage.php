<?php
/**
 * Created by PhpStorm.
 * User: IMGauree
 * Date: 4/6/2015
 * Time: 4:07 PM
 */
?>


<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="styles/homepage.css">

</head>
<body>
<div class="main">
<div class="main_resize">
  <div class="header">

      <div class="logo">
        <h1><a href="#"><span>Konne</span>Kt</a></h1>
    </div>
<div class="menu_nav">
        <ul>
            <div class="search">
                <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
                </form>
            </div>
            <li><a href="messages.php">Messages</a></li>
            <li><a href="notifications.php">Notification</a></li>
            <li><a href="profile.php">Profile</a></li>

<ul>

</div>
   <div class="content">
       <div class="post-user">
 <textarea rows="4" cols="60" >
Whats on your mind?
</textarea>
           <p>
           <input type="submit" name="commit" value="Post Status">

               <input type="submit" name="commit" value="Post Image">

               <input type="submit" name="commit" value="Post Video">
           </p>
</div>
   </div>
</div>
</div>
<div class="footer">

</div>

</body>

</html>