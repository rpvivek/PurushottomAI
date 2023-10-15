const chat = document.getElementById('chat');
const userMessage = document.getElementById('user-input');
const sendButton = document.getElementById('send-button');

sendButton.addEventListener('click', () => {
    const userText = userMessage.value;
    addMessage('user', userText);
    userMessage.value = '';
    sendMessageToAI(userText);
});

function addMessage(sender, text) {
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', sender);
    messageDiv.innerHTML = text;
    chat.appendChild(messageDiv);
}

function sendMessageToAI(userText) {
    // Make an API request to OpenAI here
    // Use JavaScript to send the user's message to your PHP script
    // and display the AI's response when it comes back
}
