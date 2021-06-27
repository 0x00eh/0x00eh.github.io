<?php
   //include auth_session.php file on all user panel pages
   include("auth_session.php");
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>TheBlackThreat- Hacking Challenges  </title>
      <link rel="stylesheet" href="css/main.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/main.css" rel="stylesheet" media="all">
      <link href="css/main.css" rel="stylesheet" media="all">
      <script src="vendor/check_api.js"></script>
      <script src="vendor/containeropen.js"></script>
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div id="navbar"class="navbar">
         <div class="Menu">  
            <span id="guide_icon" onclick="openNav()"><img src="images/spider-icon.png" alt="logo" style="margin:-0px;height: 25px;" />    
            </span>
         </div>
         <div id ="logo" class="logo" >
            <img src="images/logo_TBL.png" alt="logo" style="margin:-8px;height: 57px;" />
            <div class="user" id="user">
               <a href="logout.php" alt="Logout" style="color:white;font-size:20px;text-decoration:none;">Hey <?php echo $_SESSION['username'];?>!</a>
            </div>
         </div>
      </div>
      <div id="mySidenav" class="sidenav" id ="sidenav"> 
         <a href="javascript:void(0)" class="closebtn" id ="closebtn" onclick="closeNav()">&times;</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'theblackthreat')" id="defaultOpen">TheBlackThreat</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'home')" id="defaultOpen">Home</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'cmd_injection')" id="defaultOpen">Cammand-Injection</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'Networking')" id="defaultOpen">Networking</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'Steganography')" id="defaultOpen">Steganography</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'Cryptanalysis')" id="defaultOpen">Cryptanalysis</a>
         <a href="#" class="tablinks" onclick="openContainer(event, 'Authentication')" id="defaultOpen">Authentication Bypass</a>
      </div>
      <div id="nav_back" class="nav_back"></div>
      <!-------------------------------------------------------------------------------------------------------------->
      <div class="main_container" id="theblackthreat" >
         <img src="images/black-spider.png" alt="Black Spider" style="margin: 50px;margin-left: 50px;height: 500px;margin-left: 115px;" />
      </div>
      <!-------------------------------------------------------------------------------------------------------------->
      <div class="main_container" id="home" >
         <h4 style="color:darkred;"> Home</h4>
         <div class="header_tbl " id="header_tbl"></div>
         <div class="container_tbl" id="container_tbl">
            <h3 style="color:darkred;">General Instructions</h3>
            <br><br>
            <p style="color:black;font-size: 16px;">It is up to the user how they approach TheBlackThreat vulnerabilty . Either by working
               through every module at a fixed level, or selecting any module and working up to reach the highest 
               level they can before moving onto the next one. There is not a fixed object to complete a module; 
               however users should feel that they have successfully exploited the system as best as they possible 
               could by using that particular vulnerability.
               <br>
               <br>
               Please note, there are both documented and undocumented vulnerability with this software. This is 
               intentional. You are encouraged to try and discover as many issues as possible.
               TheBlackThreat vulnerabilty also includes a Web Application Firewall (WAF), PHPIDS, which can be enabled at any stage 
               to further increase the difficulty. This will demonstrate how adding another layer of security 
               may block certain malicious actions. Note, there are also various public methods at bypassing these
               protections (so this can be seen as an extension for more advanced users)!
               There is a help button at the bottom of each page, which allows you to view hints & tips for that 
               vulnerability. There are also additional links for further background reading, which relates to that security issue.
            </p>
         </div>
         <div class=" contact_tbl" id="contact_tbl">
            <p style="color:white;font-size:15px;">Contact
            <p> <br>
               <a href="https://www.facebook.com/ravisvhanker.vishwakarma"target="_blank" class="fa fa-facebook"></a>
               <a href="https://twitter.com/AmitianRavisv"target="_blank" class="fa fa-twitter"></a>
               <a href="https://www.linkedin.com/in/vravisv/"target="_blank" class="fa fa-linkedin"></a>
               <a href="https://shorturl.at/afAMX"target="_blank" class="fa fa-youtube"></a>
         </div>
         <div class="about_tbl" id="about_tbl">
            <p style="color:white;font-size:15px;">About
            <p><br>
               <img src="images/wallpaper.jpg">
            <p id="about"class="about"style="color:white;font-size:15px;margin-top:-40px;margin-left: 49px;"> Hello everyone I'm TheBlackThreat. And this site is made for you if you want to test you cyber security basic skill then i'm inviting you.</p>
         </div>
         <div class="tutorial_tbl"id="tutorial_tbl">
            <p style="color:white;font-size:15px;">Tutorial
            <p><br>
            <p style="color:white;font-size:15px;">If you Face any type of Problem Or you don't Know about what is good way for hacking then...</p>
            <br>           
            <center>
               <hr style="color:white;width:80%;">
               <br>
               <a href="https://vravisv.wix.com/theblackthreat"target="_blank" style="text-decoration:none;color:White;font-size:15px;"> Click here for Tutorial</a>
            </center>
         </div>
      </div>
      <!-------------------------------------------------------------------------------------------->
      <div class="main_container" id="cmd_injection" >
         <h4 style="color:darkred;"> Challenges</h4>
         <br> 
         <h3 style="color:black;font-size:17px;margin-left:50px;margin-left: -930px;">Vulnerability: Command Injection</h3>
         <div id="command"class="cammand">
            <form action="cm_inj.php" name="ping"method="post">
               Ping a Device<input id="cmd_injection"class="cmd_injection" type="text" name="ip" size="30px">
               <button name="Submit " value="Submit">Submit</button>
            </form>
         </div>
         <br>
         <br>
         <br>
         <h4 style="color:black;font-size:17px;margin-left:50px"><u> Pinging Devices</u></h4>
         <br><br>
         <p style="color:black;font-size:17px;margin-left:50px">This article explains how to ping an IP address for 
            a device. The goal of pinging a device is to find out if a device is reachable at a particular IP address.
         </p>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">Ping is a computer network administration utility used to
            test the reachability of a host on an Internet Protocol (IP) network and to measure the round-trip time for messages sent from the originating host to a destination computer.
         </p>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">A device on a computer network should respond to a echo request (ping) with an echo reply (pong) confirming it is online. This reply should come
            within milliseconds. If a reply does not come it is said to have "timed out" because the predefined wait time for a reply has been exceeded. If no reply is seen we typically 
            assume that no device is present at, or assigned with, that IP address.
         </p>
      </div>
      <!---------------------------------------------------------------------------------------------->
      <div class="main_container" id="Networking" >
         <h4 style="color:darkred;"> Networking</h4>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">Networks challenges where you have to deal with captured traffic, network services, packet analysis, etc
            The following set of problems deal with network traffic including different<br> protocols. You need to analyse the packet captures to solve these challenges.
         </p>
         <br>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" href="files/network_analysis.pcapng">Start the Challenge</a>
         <div id="net-auth"class="net_auth">
            <form action="net_auth.php" name="netpcap"method="post">
               Enter the Password<input id="net_auth"class="net_auth" type="password" placeholder="Password" name="net_auth" size="30px"required>
               <button name="Submit" value="Submit">Submit</button>
            </form>
            <br>
            <!---------------------------------------->
            <p style="color:black;font-size:17px;">FTP - authentication</p>
            <br>
            <a class="button small radius" style="margin-left:0px; text-decoration:none;"  href="files/ftp.pcap">Start the Challenge</a><br>
         </div>
         <div id="ftp_auth"class="ftp_auth">
            <form action="FTP_auth.php" name="netpcap"method="post">
               Enter the Password<input id="net_auth"class="net_auth" type="password"placeholder="Password" name="ftp_auth" size="30px"required>
               <button name="Submit " value="Submit">Submit</button>
            </form>
         </div>
         <!---------------------------------------->
         <p style="color:black;font-size:17px;margin-left:50px">TELNET- authentication</p>
         <br>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" href="files/telnet.pcap">Start the Challenge</a><br>
         <div id="telnet_auth"class="telnet_auth">
            <form action="telnet_auth.php" name="netpcap"method="post">
               Enter the Password<input id="telnet_auth"class="telnet_auth" type="password" placeholder="Password" name="telnet_auth" size="30px"required>
               <button name="Submit " value="Submit">Submit</button>
            </form>
         </div>
      </div>
      <!---------------------------------------------------------------------------------------------->
      <div class="main_container" id="Steganography" >
         <h4 style="color:darkred;"> Steganography</h4>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">Whereas cryptography concern the art of secret, steganography is the art 
            of hidding: the object of steganography is to hide the fact that there is an information in a document.
         </p>
         <br>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">"Gur Lnhgwn unir n Pbqr bs Ubabe gung vg rkcrpgf nyy zrzoref bs uvf 
            fcrpvrf gb nqurer gb ba cnva bs abg orvat frra nf n "gehr Lnhgwn" naq gueresber fhowrpg gb orvat qrfgeblrq.Gurersber zbfg 
            lnhgwn ner zbyqrq neebhaq gung pbqr, orvat ehguyrff ohg ubanenoyr,jvgu gur rkprcgvba bs Onq Oybbqf. Ntterffvba naq neebtnapr 
            frraf gb or vaangr va Uhagref, rfcrpvnyyl lbhat znyrf.Nppebqvat gb Qnpunaqr,vg vg vfa'g hapbzzba sbe n ha-oybbqrq be rira n
            CHc gb oryvrir ur vf 'Tbq'f tvsg gb gur havirefr.'"
         </p>
         <br>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" href="files/predator.jpg">Start the Challenge</a><br>
         <div id="stgn_1"class="stgn_1">
            <form action="stgno_1.php" name="stgn_1"method="post">
               Enter the Password<input target="_top"  type="password" placeholder="Password" name="stegnography" size="30px"required>
               <button name="Submit1" value="Submit1" onclick="submitform()">Submit </button>
            </form>
         </div>
         <br>
         <br>
         <h4 style="color:black;font-size:17px;margin-left:50px"><u> stegnography</u></h4><br>
         <p style="color:black;font-size:17px;margin-left:50px">The first recorded use of the term was in 1499 by Johannes Trithemius in his
          Steganographia, a treatise on cryptography and steganography, disguised as a book on magic. Generally, the hidden messages appear 
          to be (or to be part of) something else: images, articles, shopping lists, or some other cover text. For example, the hidden message
           may be in invisible ink between the visible lines of a private letter. Some implementations of steganography that lack a share
         d secret are forms of security through obscurity, and key-dependent steganographic schemes adhere to Kerckhoffs's principle</p>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">The advantage of steganography over cryptography alone is that the intended secret message does
          not attract attention to itself as an object of scrutiny. Plainly visible encrypted messages, no matter how unbreakable they are, arouse 
          interest and may in themselves be incriminating in countries in which encryption is illegal.</p>
      </div>
      <!---------------------------------------------------------------------------------------------->
      <div class="main_container" id="Cryptanalysis" >
         <h4 style="color:darkred;"> Cryptanalysis</h4>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">Cryptography or cryptology is the practice and study of techniques for secure
            communication in the presence of third parties called adversaries.
         </p>
         <br>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">"Behind every successful Coder there an even more successful De-coder to understand that code."</p>
         <br>
         <p style="color:black;font-size:17px;margin-left:50px">Task #1)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_1.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:17px;margin-left:50px">Task #1)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_1.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:17px;margin-left:50px">Task #2)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_2.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:17px;margin-left:50px">Task #3)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_3.txt">Start the Challenge</a><br>
         <p style="color:black;font-size:17px;margin-left:50px">Task #4)</p>
         <a class="button small radius"style="margin-left:50px;text-decoration:none;" target="_blank" href="files/task_4.txt">Start the Challenge</a><br>
         <div id="crypto_1"class="crypto_1">
            <form action="crypto_1.php" name="crypto_1"method="post">
               Enter the Sentence(Combination of all Password)<input id="crypto_1"class="crypto_1" placeholder="Password" type="password"  name="crypto_1" size="30px"required>
               <button name="Submit" value="Submit">Submit</button>
            </form>
         </div>
      </div>
   
      <!---------------------------------------------------------------------------------------------->
     
      <!---------------------------------------------------------------------------------------------->
      <div class="main_container" id="Authentication" >
         <h4 style="color:darkred;"> Authentication bypass</h4><br>
         <p style="color:black;font-size:17px;margin-left:50px;">Authentication is any process by which a system verifies 
         the identity of a User who wishes to access it.Web applications authentication may be implemented using Credentials,
          each of which is composed of a User ID and Password</p>
           
         <div class="tbl_easy" id ="tbl_easy">
          <form name="frmname"method="post" action="authentication.php">
               <div id="upper" class="upper" style="">
                  <label for="usrname">User Id:</label><br>
                  <input  type="text" id="usrname" name="id" style="height: 30px;width: 230px;border-radius: 2px;"required><br>
                                 
                  <button name="Submit" value="Submit">Submit</button>
               </div>
            </form><br>
            <br>
            <br>
            <br>
            <h4 style="color:black;font-size:17px;margin-left:-34px"><u>Authentication Bypass </u></h4><br>   
            <p style="color:black;font-size:17px;margin-left:-34px;width: 354%;">Organizations failing to enforce strong access policy and authentication controls could allow an attacker to bypass authentication.
            Attackers could also bypass the authentication mechanism by stealing the valid session IDs or cookies.<br><br>
            Authentication bypass vulnerability could allow attackers to perform various malicious operations by bypassing the device authentication mechanism.
            What's the issue - Authentication bypass exploit is mainly due to a weak authentication mechanism.<br><br>
           Organizations failing to enforce strong access policy and authentication controls could allow an attacker to bypass authentication.</p>
         </div>
         
      </div>
   </body>
</html>
