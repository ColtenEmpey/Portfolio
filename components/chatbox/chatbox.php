<link rel="stylesheet" href="chatbox.css" type="text/css">

<div id="bot">
  <div id="container">
  
    <div id="chat-header">
    <div id='close-button'>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-x-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
        </div>
        Ask me a question 
    </div>

    <div id="body">
        <div class="userSection">
          <div class="messages user-message" id="botReply">

          </div>
          <div class="seperator"></div>
        </div>
        <div class="botSection" id="botSection">
          <div class="messages bot-reply" id="userReply" >

          </div>
          <div class="seperator"></div>
        </div>                
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="inputArea">
      <input type="text" name="messages" id="userInput" placeholder="Type your question here" required>
      <input type="submit" id="send" value="Send">
    </form>
  <?php
  // $name = $_REQUEST['messages'];
  // echo $req;
  ?>
  </div>
  </div>

  <script type="text/javascript">
      // When send button gets clicked
      const init = () =>{
        document.getElementById("botReply").innerHTML = "Hello, go ahead and ask me some get to know you questions!"
      }
      init()
      
      const setMessage = (message) =>{
        let userHtml = '<div class="botSection">'+'<div class="messages bot-reply" id="userReply">'+message+'</div>'+
        '<div class="seperator"></div>'+'</div>';
        document.querySelector('#body').innerHTML+= userHtml;
      }
      const getResponse = async (question) =>{
        let userMessage = document.querySelector('#userInput').value
        //await quiry database for the response here
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = await function(){
            if (this.readyState == 4 && this.status == 200) {

              let userHtml = '<div class="userSection">'+'<div class="messages user-message" id="botReply">'+this.response+'</div>'+
              '<div class="seperator"></div>'+'</div>'
              document.querySelector('#body').innerHTML+= userHtml;
            }
          };
          xhttp.open("POST", "components/chatbox/dbConnect.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(`messages=${userMessage}`);
      }
      document.querySelector("#send").addEventListener("click", async (e) => {
        e.preventDefault()
        let userMessage = document.querySelector("#userInput").value
        setMessage(userMessage)
        getResponse(userMessage)
        document.querySelector('#userInput').value = "";
        })

  </script>