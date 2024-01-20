<!DOCTYPE html>
<link rel="icon" type="image/x-icon" href="image.png">
<html lang="en">
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
<meta http-equiv="refresh" content="delay_time; URL=new_website_url" />

<head>
  <meta charset="UTF- 8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uBizz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="topNav">
    <div class="left">
      <div id="navOption" class="selected"  style="cursor: pointer;"><a href="">Home</a></div>
      <div id="navOption"  style="cursor: pointer;" onclick="window.location.href='/browse/browsePage.php'"><a >Browse</a></div>
    </div>
    <div>
    <div class="right">
    
    <div   style="cursor: pointer;"><a id="test" href="loginPage.php">Sign Up or Log In</a></div><div id="pic" onclick="setHidden()"></div>
    
    </div>
    <br><br><div onclick="logout()" class="logout" hidden="hidden "id="logout">Log out</div>
    
    
    
  </div>
  <div class="center">
    <div class="bizz">U.Bizz</div>
    <input type="text" class="search" id="searching" placeholder="Start your buying experience here!"><button style="margin-left: 120px;" onclick="doSearch()">SEARCH</button>
  </div>


  

</body>
</html>