<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h1>Your request has been confirmed!</h1>
    <div class="p1 fw-bold text-dark" id="countdown">We have recieved your request. You will recieve an email shortly with the deatils of your order. 
        Now you will be redirected to the home page in <span id="seconds">4</span> seconds.</div>


     <!-- Javascript code -->
     <script>
        // Countdown timer function
        function countdown() {
            var seconds = 5; 
            var countdownElement = document.getElementById("seconds");

            var countdownInterval = setInterval(function() {
                seconds--;
                countdownElement.textContent = seconds;

                if (seconds <= 0) {
                    clearInterval(countdownInterval);
                    window.location.href = "index.php";
                }
            }, 1000); // 1000 milliseconds = 1 second
        }

        countdown();
    </script>
</body>
</html>
