<!DOCTYPE html>
<html>
  <head>
    <title>Guessing Game</title>
    <style>
      body {
  background-image: url('pic.jpg');
  background-size: cover;
  background-position: center;
  background-repeat:no repeat;
  }
 .container { 
  height: 200px;
  position: relative;
}

.center {
  margin: 0;
  position: absolute;
  up:50%;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
        #message-box {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  padding: 20px;
  border: 2px solid black;
  background-color: white;
  text-align: center;
}

#message-box h2{
  font-size: 24px;
  margin-bottom: 10px;
}

#message-box p{
  margin-bottom: 20px;
}

#message-box label{
  font-size: 18px;
}

#message-box input[type="text"] {
  width: 200px;
  font-size: 18px;
  padding: 5px;
  margin-left: 10px;
}

#message-box button {
  font-size: 18px;
  padding: 5px 10px;
  margin-top: 10px;
  cursor: pointer;
}

    </style>
    <script>
      var currentMessageBoxIndex = 0;
      var numAttempts = 0;
      var maxAttempts = 3;
      var messageBoxes = [
        {
          message: "I'm small creature that you loved to catch especially in your childhood...",
          hint: "Hint: observe the background",
          answer: "Dragonfly"
        },
        {
          message: "If you forget to put me down, I'll blow away..",
          hint: "Hint:I'll protect you from getting wet",
          answer: "Umbrella"
        },
        {
          message: "I have two long ears, and I don’t walk, I hop. What am I?",
          hint:"",
          answer: "rabbit"
        },
        {
          message:"The alphabet goes from A to Z but I go Z to A. What am I?",
          hint:"",
          answer:"zebra"
        },
        {
          message:" I live upside down. I see with my ears and don’t use my eyes, and on Halloween, I’ll give you a big surprise. What am I?",
          hint:"",
          answer:"bat"
        },
        {
          message:"I jump when I walk and sit when I stand. What am I?",
          hint:"",
          answer:"kangaroo"
        },
        {
          message:"I’m spotty and speedy, but not at all greedy. I look like a leopard but don’t try to play me at cards. What am I?",
          hint:"",
          answer:"cheetah"
        },
        {
          message:" I move without wings, between silken strings, I leave as you find, my substance behind. What am I?",
          hint:"mostly you watch me at your home",
          answer:"spider"
        }
      ];

      function displayMessageBox(message, hint, answer) {
        var messageBox = document.createElement("div");
        messageBox.id = "message-box";
        messageBox.innerHTML = `
          <h2>${message}</h2>
          <p>${hint}</p>
          <label for="answer-input">Your answer:</label>
          <input type="text" id="answer-input">
          <br><br>
          <button onclick="checkAnswer('${answer}')">Submit</button>
        `;
        document.body.appendChild(messageBox);
      }

      function displayNextMessageBox() {
        if (currentMessageBoxIndex >= messageBoxes.length) {
          // Game over
          alert("Congratulations, you won the game!");
          return;
        }

        var currentMessageBox = messageBoxes[currentMessageBoxIndex];
        displayMessageBox(currentMessageBox.message, currentMessageBox.hint, currentMessageBox.answer);
        currentMessageBoxIndex++;
        numAttempts = 0;
      }
      
      function checkAnswer(answer) {
        var userAnswer = document.getElementById("answer-input").value.toLowerCase(); 

        if(userAnswer.length==0){
            alert("answer cant be empty please guess the correct answer")          
        }
        else if (userAnswer === answer.toLowerCase()) {
          alert("Correct answer!Moved to Next step");
          document.body.removeChild(document.getElementById("message-box"));
          displayNextMessageBox();
        } else {
          numAttempts++;
          if (numAttempts >= maxAttempts) {
            alert("Exceeded maximum number of attempts(3).Game Over");
            return;
          }
          alert("Your answer is wrong.Cant move to next step.. Please try again.");
        }
      }
      function startGame() {
  const startButton = document.getElementById('start-button');
  startButton.parentNode.removeChild(startButton);
}
</script>
  </head>
  <body >
    <div class="container">
    <div class="center">
        <button onclick="displayNextMessageBox();startGame();">Let's Start the Game</button>  
    </div>
    </div>
   
  </body>
</html>
