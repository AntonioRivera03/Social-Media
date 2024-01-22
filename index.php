<!DOCTYPE html>
<link rel="icon" type="image/x-icon" href="logo.png">
<html lang="en">
<head>
  <meta charset="UTF- 8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOCIAL MEDIA</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="grid-container">
  <div class="user">
    <div class='profile'><img id='user_image' src='profilePic.png'></div>
    <div class='profile'>
      <div  id='user_name'>cairo_wala</div>
      <div  id='user_id'>@cairo_wala</div>
    </div>
  </div>
  <div class="header">
    <div id='search_box'>
      <img class='inline' id='searchPng' src='search.png'>
      <div class='inline' id='search_text'>
      <input id='searchinput' placeholder='Search'type='search'></input>
    </div>
  </div>
</div>
  <div class="followers">Followers</div>
  <div class="main">
    <div id='createPost'>
      <textArea id='textbox' class='inline' placeholder=' Create a post..' maxLength='240'></textArea>
      <div id='outerTextArea' class='inline-bottom'>
        <div id='charactersLeft' class='inline'>0/240</div>
        <button id='postButton' class='inline'> Post! </button>
      </div>
    </div>

    <div class='post'>
      <div></div>
      <div></div>
      <div></div>
    </div>

  </div>
  <div class="settings">
    <div>Actions</div>
    <hr>
    <div id='s_list'>
      <div>Messages</div>
      <div>Saved</div>
      <div>Settings</div>
    </div> 
  </div>
  <div class="feed">Feed</div>
</div>

<script>

  document.addEventListener("click", checkWindow);

  let searchbox = document.getElementById("search_box");
  document.getElementById('textbox').onkeyup = function () 
  {
    document.getElementById('charactersLeft').innerHTML = this.value.length + '/240'
  };
  function checkWindow()
  {
    let inputBox = document.getElementById('searchinput');
    let textBox = document.getElementById('textbox');
    let isFocused = (document.activeElement === inputBox);

    if(isFocused) 
    {
      searchbox.style.backgroundColor = '#000405';
      searchbox.style.border = 'solid';
      searchbox.style.borderColor = '#1a8cd9';
      document.getElementById("searchPng").src = "searchblue.png"
    }

    else if(!isFocused)
    {
      searchbox.style.backgroundColor = '#001C23';
      searchbox.style.border = 'none';
      searchbox.style.borderColor = '#1a8cd9';
      document.getElementById("searchPng").src = "search.png"
    }

    else if(document.activeElement === textBox)
    {
      
    }
    console.log(isFocused);
  }

  if(window.innerWidth < 600)
  {
    console.log("WALWALA")
    document.getElementById("user_name").innerHTML = ""
    document.getElementById("user_id").innerHTML = ""
  }


</script>



</body>
</html>