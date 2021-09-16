const chatButton = document.querySelector('.chatbox__button');
const chatContent = document.querySelector('.chatbox__support');
const icons = {
    isClicked: '</p><i style="font-size:25px;color:#fff" class="fas fa-times"></i></p>',
    isNotClicked: '<p><i style="font-size:25px;color:#fff" class="fas fa-comment-dots"></i></p>'
}
const chatbox = new InteractiveChatbox(chatButton, chatContent, icons);
chatbox.display();
chatbox.toggleIcon(false, chatButton);