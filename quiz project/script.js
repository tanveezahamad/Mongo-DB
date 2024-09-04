const questionText = document.getElementById("question-text");
const optionsContainer = document.getElementById("options-container");
const scoreText = document.getElementById("score-value");

const questions = [
    {
        question: "who is the founder of the java ?",
        options: ["James Gosling", "Dennis Ritchie", "Bjarne Stroustrup", "Brian Kernighan"],
        correctAnswer: "James Gosling",
    },
    {
        question: "what is the fullform of IUPAC?",
        options: ["interconnection of Pure and appliction Chemistry", "International physical and Applied connection", "International Union of Pure and Applied Chemistry", "International Unit of position and absorbed Chemistry"],
        correctAnswer: "International Union of Pure and Applied Chemistry",
    },
	 {
        question: "who is the father of vietnam?",
        options: ["mao jadong", "ho chi minh", "gandhi", "sun yat-sen"],
        correctAnswer: "ho chi minh",
    },
    {
        question: "Which command will stop an infinite loop?",
        options: ["Alt-c", "shift-c", "Esc", "ctrl-c"],
        correctAnswer: "ctrl-c",
    },
	{
        question: "the pseudocode is…....",
        options: ["algorithm", "flowchart", "object code", "coding"],
        correctAnswer: "algorithm",
    },
    {
        question: "In any HTML document how you make a bulleted list?",
        options: ["<ul>", " <list>", "<ol>", "<nl>","both A & B"," none of these"],
        correctAnswer: "<ul>",
    },
	{
        question: " In any HTML document which tag to make a text italic?",
        options: ["<italic>", "<ii>", "<i>", "<em>","none"],
        correctAnswer: "<i>",
    },
    {
        question: " Width of a byte is. Select anyone.",
        options: ["7", "9", "5", "6","8"],
        correctAnswer: "8",
    },
    // Add more questions here
];

let currentQuestionIndex = 0;
let score = 0;

function showQuestion(question) {
    questionText.textContent = question.question;
    optionsContainer.innerHTML = "";
    question.options.forEach((option) => {
        const button = document.createElement("button");
        button.textContent = option;
        button.classList.add("option");
        button.addEventListener("click", () => checkAnswer(option, question.correctAnswer));
        optionsContainer.appendChild(button);
    });
}

function checkAnswer(selectedAnswer, correctAnswer) {
    if (selectedAnswer === correctAnswer) {
        score++;
    }
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        showQuestion(questions[currentQuestionIndex]);
    } else {
        endGame(); // Call endGame function when all questions are completed
    }
    updateScore(); 
}

function updateScore() {
    scoreText.textContent = score;
}

function endGame() {
    questionText.textContent = "Quiz Completed!";
    optionsContainer.innerHTML = "";
    updateScore(); // Update the score one more time before sending it to the server
    sendScoreToServer(score); // Send the score to the server when the quiz is completed
}

function sendScoreToServer(score) {
    fetch("insert.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `score=${score}`
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error("Error:", error);
    });
}

showQuestion(questions[currentQuestionIndex]);