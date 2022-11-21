<div class='chat-wrapper'>
    
    
    <div class= "chat-box" id="chat-box">
        <?php
            include "components/chatbox/chatbox.php"
        ?>
        <!-- <div class="icon" id="icon"></div> -->
        <svg class="icon" id="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1d417c" class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
  <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg>
     </div>
     
</div>

     <script type='text/javascript'>
        let button = document.getElementById('close-button')
        let chatbox = document.getElementById('chat-box')
        let icon = document.getElementById('icon')
        icon.style.visibility = "visible" 
       
        button.addEventListener("click", (e)=>{
            chatbox.style.visibility = "hidden"
            icon.style.visibility = "visible" 
        })
        icon.addEventListener("click", (e)=>{
            icon.style.visibility = "hidden"
            chatbox.style.visibility = "visible" 
        })
    </script>
