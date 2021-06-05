const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");


form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting 
}


sendBtn.onclick = ()=>{
    //let's start Ajax
    let xhr = new XMLHttpRequest(); //creation XML object 
    xhr.open("POST", "php/insert-chat.php", true); 
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = "";
                scrollToBottom();
               
            }
        }
    }
 // on doit envoyer les form data through ajax to php 
    let formData = new FormData(form);  //creating new formdata object
    xhr.send(formData); //sending the form data to php
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval(()=>{ 
    //let's start Ajax
    let xhr = new XMLHttpRequest(); //creation XML object 
    xhr.open("POST", "php/get-chat.php", true); 
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              chatBox.innerHTML = data;
              if(!chatBox.classList.contains("active")){//if active class not contains
                scrollToBottom();

              }
          }
      }
  }
   // on doit envoyer les form data through ajax to php 
   let formData = new FormData(form);  //creating new formdata object
   xhr.send(formData); //sending the form data to php
  }, 500); //this function ill run frequentmly after 500ms 


  function scrollToBottom(){
      chatBox.scrollTop = chatBox.scrollHeight;
  }