const question = document.querySelector("#question");
const choices = Array.from(document.querySelectorAll(".choice-text"));
const progressText = document.querySelector("#progressText");
const scoreText = document.querySelector("#score");
const progressBarFull = document.querySelector("#progressBarFull");

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let questionCounter = 0;
let availableQuestions = [];

let questions = [
  {
    question: "¿Cómo podemos obtener la dirección IP del cliente?",
    choice1: '$_SERVER["REMOTE_ADDR"];',
    choice2: "Con un IPConfig",
    choice3: '$_SERVER["REMOTE_ADDIP"];',
    choice4: "Creando Una Funcion JS",
    answer: 1,
  },
  {
    question: "¿Cuál es la diferencia entre unset( ) y unlink( )?",
    choice1: "No hay ninguna diferencia",
    choice2: "Uno usa una variable en 'undefined' y el otro crea un archivo",
    choice3: "Uno usa una variable en 'undefined' y el otro elimina un archivo",
    choice4: "Ninguna de las anteriores",
    answer: 3,
  },
  {
    question: "¿Qué son los Traits?",
    choice1: "Son lineas de codigo escritas en PHP",
    choice2: "Es un mecanismo PHP que no admite la herencia múltiple",
    choice3: "Son intentos del procesador para crear un archivo",
    choice4: "Mecanismo PHP para repeler virus",
    answer: 2,
  },
  {
    question:
      "¿Puede el valor de una constante cambiar durante la ejecución del script?",
    choice1: "Si, sin problema",
    choice2: "Solo si son de tipo float",
    choice3: "Dependiendo del programa",
    choice4: "No porque ya se ha declarado.",
    answer: 4,
  },
  {
    question:
      "¿Cuáles son los 3 niveles de alcance (scope levels) disponibles en PHP y cómo los definiría?",
    choice1: "Private, Public y Protected",
    choice2: "Null, Boolean y Constante",
    choice3: "Privete, Void y Protected",
    choice4: "Ninguna de las anteriores",
    answer: 1,
  },
];

const SCORE_POINTS = 100;
const MAX_QUESTIONS = 5;

startGame = () => {
  questionCounter = 0;
  score = 0;
  availableQuestions = [...questions];
  getNewQuestion();
};

getNewQuestion = () => {
  if (availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS) {
    localStorage.setItem("mostRecentScore", score);

    return window.location.assign("end.html");
  }

  questionCounter++;
  progressText.innerText = `Pregunta ${questionCounter} de ${MAX_QUESTIONS}`;
  progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

  const questionsIndex = Math.floor(Math.random() * availableQuestions.length);
  currentQuestion = availableQuestions[questionsIndex];
  question.innerText = currentQuestion.question;

  choices.forEach((choice) => {
    const number = choice.dataset["number"];
    choice.innerText = currentQuestion["choice" + number];
  });

  availableQuestions.splice(questionsIndex, 1);

  acceptingAnswers = true;
};

choices.forEach((choice) => {
  choice.addEventListener("click", (e) => {
    if (!acceptingAnswers) return;

    acceptingAnswers = false;
    const selectedChoice = e.target;
    const selectedAnswer = selectedChoice.dataset["number"];

    let classToApply =
      selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

    if (classToApply === "correct") {
      incrementScore(SCORE_POINTS);
    }

    selectedChoice.parentElement.classList.add(classToApply);

    setTimeout(() => {
      selectedChoice.parentElement.classList.remove(classToApply);
      getNewQuestion();
    }, 1000);
  });
});

incrementScore = (num) => {
  score += num;
  scoreText.innerText = score;
};

startGame();
