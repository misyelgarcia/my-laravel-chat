<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <title>Mid Term Laravel Chat</title>
       </head>
<body>
     <link rel="stylesheet" type="text/css" href="./css/app.css"/>

    <div class="app">
        <header>
            <h1>Chatroom</h1>
                <input type="text" name="username" id="username" 
                placeholder="Please enter your name" required
                maxlength="100"
                />
       </header>
            
            <!-- messages will be displayed here -->
            <div id="messages" class="message-history">
            </div>
            <!-- end of messages display -->

            <form id="message_form">
                <input type="text" name="message" id="str_message" 
                placeholder="Please type a message" required
                maxlength="200"/>
                <button type="submit" id="btn_submit">Send</button>
            </form>
    </div>
       
    <!-- <script src="https://js.pusher.com/7.0.3/pusher.min.js" ></script> -->
    <script src="./js/app.js"></script>

   
</body>
</html>
