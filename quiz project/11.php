<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quiz Project</title>
	<style>
body {
    font-family: Arial, sans-serif;
    text-align: center;
    color:yellowgreen;
	background-image:url("https://images.hindustantimes.com/img/2021/11/15/1600x900/fe3b045e-4576-11ec-86e0-9750c834616f_1636914131062_1636956473304.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}
h1
{
	color:yellowgreen;
	font-family:cooper black;
	background-color:black;
	width:300px;
    margin:auto;
    border-radius:15px;
}
#quiz-container 
{
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    border: 2px solid #333;
    padding: 20px;
	position:relative;
	top:50px;
}
#question-container
 {
    font-size: 18px;
    margin-bottom: 20px;
}
#user-info-form
{
	font-size:20px;
	font-weight:bold;
	position:relative;
	top:35px;
}
.button 
{
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
}
input[type="text"]:focus
{
	color:yellow;
	background-color:black;
	font-size:15px;
}
input[type="number"]:focus
{
	color:yellow;
	background-color:black;
	font-size:15px;
}
input[type="email"]:focus
{
	color:yellow;
	background-color:black;
	font-size:15px;
	}
#score 
{
    font-weight: bold;
}
#options-container button
{
	margin:10px;
	width:300px;
}
button:hover
{
	font-size:20px;
	font-weight:bold;
	background-color:#cce8d4;
}
</style>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Quiz!</h1>
        <form id="user-info-form" action="insert.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <div id="quiz-container">
                <h1>Quiz Game</h1>
                <div id="question-container">
                    <p id="question-text">who is the founder of the java ?</p>
                </div>
                <div id="options-container">
                    <button class="option">James Gosling</button>
                    <button class "option">Dennis Ritchie</button>
                    <button class="option">Bjarne Stroustrup</button>
                    <button class="option">Brian Kernighan</button>
                </div>
            <button type="submit">Submit</button>
			</div>
        </form>
		<p id="score">Score: <span id="score-value">0</span></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
