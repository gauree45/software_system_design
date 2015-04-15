<?php


?>

<html>

<head>
<link rel="stylesheet" href="styles/home.css" type="text/css"/>
</head>
<body>


<div class="header">
<div class="logo">

          <h1><a href="#"><span>Konne</span>Kt</a></h1>

</div>
</div>
<div class="navigation">
    <ul>
        <li class="search"><span>
                 <form method="get" id="search" action="#">
                     <input type="text" placeholder="search" name="s" id="s" />
                     <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
                 </form>
          </span>
        <li><a href="profilepage.php">Profile</a> </li>
        <li><a href="messages.php">Messages</a> </li>
        <li><a href="notifications.php">Notifications</a> </li>
        <li><a href="">logout</a></li>

    </ul>
</div>
<div class="content">

        <div id="left">

            <div class="image">
            <img src="images/aishwarya-rai-56c.jpg"/>
            </div>

            <h2>
                <a href="profile.php">Aishwarya </a>
            </h2>

            <div class="details">
                <table >

                    <tr class="odd">
                        <td>
                            <a href="friends.php">Friends</a>

                        </td>

                    </tr>
                    <tr class="even">
                        <td>
                            <a href="images.php">Images</a>

                        </td>

                    </tr>
                    <tr class="odd">
                        <td>
                            <a href="videos.php">Videos</a>

                        </td>
                    </tr>

                </table>

            </div>
        </div>

        <div id="middle">


            <div class="post-user">
                <form method="post">
                    <textarea cols="60" rows="4" placeholder="Whats on your mind?">

                </textarea >
                <p>
                    <input type="submit" name="commit" value="Post Status">

                    <input type="submit" name="commit" value="Post Image">

                    <input type="submit" name="commit" value="Post Video">
                </p>
                </form>
            </div>


        </div>
    <div id="right">


    </div>
    </div>




<div class="footer">
    <p>Software System Design Project Spring 2015</p>
</div>

</body>


</html>