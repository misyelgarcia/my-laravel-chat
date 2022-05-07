require('./bootstrap');

const messages_box = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("str_message");
const message_form = document.getElementById("message_form");


message_form.addEventListener('submit', function(e){
    e.preventDefault();


    let isValid = true;
    let errorMessage = "";
  
    if(username_input.value == ''){
        errorMessage += 'Please enter your username.\n';
        isValid = false;
    }

    if(username_input.value.length > 100){

        errorMessage += 'Please enter a shorter username.\n';
        isValid = false;
    }

    if(message_input.value == ''){
        errorMessage += 'Please enter your message.\n';
        isValid = false;
    }
    
    if(username_input.value.length > 200){

        errorMessage += 'Please enter a shorter username.\n';
        isValid = false;
    }

    if(!isValid){
        alert(errorMessage);
        return;
    }


    const options = {
        method: 'post',
        url: '/send-message',
        data: {
        
            username: username_input.value,
            message: message_input.value
            
        },
        transformResponse: [(data) => {
             return data;
        }]
    };

    axios(options)
    .then(() => {
        message_input.value='';
    }).catch(error => {
        console.log(error.message);
        alert('We are not able to send your message, please try again.');
    });
});

window.Echo.channel('allChats')
    .listen('.message', (e) => {
        messages_box.innerHTML += '<div class="msg-item"><strong>' + e.username + ': </strong> ' + e.message + '</div>';
    });