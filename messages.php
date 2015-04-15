<?php
/**
 * Created by PhpStorm.
 * User: IMGauree
 * Date: 4/14/2015
 * Time: 9:50 PM
 */
?>


<html>

<head>
    <link rel="stylesheet" href="styles/style_messages.css" type="text/css"/>
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
        <ul>
            <li>Message1</li>
            <li>Message1</li>
            <li>Message1</li>
            <li>Message1</li>
            <li>Message1</li>
            <li>Message1</li>
            <li>Message1</li>
        </ul>

        </div>


    <div id="middle">


    <div id="display_message">
        </div>

    <div id="compose">
        <form>
            <select >
                <option>onption1</option>
                <option>option2</option>
            </select>
            <textarea cols="50" rows="4" placeholder="write a message">

            </textarea>
            <input type="submit" name="send" value="send">

            </button>

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


