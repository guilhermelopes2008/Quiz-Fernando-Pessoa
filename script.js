// Base de dados simulada
let users = JSON.parse(localStorage.getItem('pessoaQuizUsers')) || [];
let rankings = JSON.parse(localStorage.getItem('pessoaQuizRankings')) || [];

// Perguntas organizadas por nível
const questionsByLevel = {
    facil: [
        { 
            id: 1, 
            type: 'multiple', 
            question: "Quem foi Fernando Pessoa?", 
            options: [
                "Um pintor português do século XIX",
                "Um dos maiores poetas portugueses do século XX", 
                "Um político influente em Portugal",
                "Um cientista português"
            ], 
            answer: 1 
        },
        { 
            id: 2, 
            type: 'multiple', 
            question: "Em que ano nasceu Fernando Pessoa?", 
            options: ["1885", "1888", "1890", "1895"], 
            answer: 1 
        },
        { 
            id: 3, 
            type: 'multiple', 
            question: "Em que cidade nasceu Fernando Pessoa?", 
            options: ["Porto", "Coimbra", "Lisboa", "Faro"], 
            answer: 2 
        },
        { 
            id: 4, 
            type: 'multiple', 
            question: "O que são heterónimos na obra de Pessoa?", 
            options: [
                "Pseudónimos simples sem personalidade própria",
                "Personagens fictícias com personalidade e estilo próprios",
                "Títulos de suas obras principais",
                "Amigos imaginários"
            ], 
            answer: 1 
        },
        { 
            id: 5, 
            type: 'multiple', 
            question: "Quais são os três heterónimos mais conhecidos?", 
            options: [
                "Alberto Caeiro, Ricardo Reis e Álvaro de Campos",
                "Bernardo Soares, António Mora e Alexander Search", 
                "Fernando Pessoa, Ortónimo e Semi-heterónimo",
                "Todos os pseudónimos que criou"
            ], 
            answer: 0 
        }
    ],
    medio: [
        { 
            id: 1, 
            type: 'multiple', 
            question: "Que heterónimo é engenheiro e influenciado pelo futurismo?", 
            options: [
                "Ricardo Reis",
                "Alberto Caeiro", 
                "Álvaro de Campos",
                "Bernardo Soares"
            ], 
            answer: 2 
        },
        { 
            id: 2, 
            type: 'multiple', 
            question: "Qual heterónimo tem estilo clássico e linguagem elevada?", 
            options: [
                "Álvaro de Campos",
                "Alberto Caeiro", 
                "Ricardo Reis",
                "Fernando Pessoa ortónimo"
            ], 
            answer: 2 
        },
        { 
            id: 3, 
            type: 'multiple', 
            question: "Qual o estilo de escrita de Alberto Caeiro?", 
            options: [
                "Complexo e filosófico",
                "Simples, direto e ligado à natureza", 
                "Futurista e tecnológico",
                "Clássico e horaciano"
            ], 
            answer: 1 
        },
        { 
            id: 4, 
            type: 'multiple', 
            question: "Em que país se exilou Ricardo Reis?", 
            options: ["Espanha", "França", "Brasil", "Inglaterra"], 
            answer: 2 
        },
        { 
            id: 5, 
            type: 'multiple', 
            question: "Qual a filosofia associada a Ricardo Reis?", 
            options: [
                "Existencialismo",
                "Estoicismo e epicurismo moderado", 
                "Nietzscheanismo",
                "Marxismo"
            ], 
            answer: 1 
        }
    ],
    dificil: [
        { 
            id: 1, 
            type: 'multiple', 
            question: "Qual é o poema mais conhecido de Álvaro de Campos?", 
            options: [
                "O Guardador de Rebanhos",
                "Ode Triunfal", 
                "Tabacaria",
                "Autopsicografia"
            ], 
            answer: 1 
        },
        { 
            id: 2, 
            type: 'multiple', 
            question: "O que é um semi-heterónimo?", 
            options: [
                "Um heterónimo incompleto",
                "Personagem com personalidade próxima do autor real", 
                "Pseudónimo temporário",
                "Heterónimo secundário"
            ], 
            answer: 1 
        },
        { 
            id: 3, 
            type: 'multiple', 
            question: "Qual a obra atribuída a Bernardo Soares?", 
            options: [
                "Mensagem",
                "Livro do Desassossego", 
                "O Banqueiro Anarquista",
                "Poemas Completos"
            ], 
            answer: 1 
        },
        { 
            id: 4, 
            type: 'multiple', 
            question: "Que heterónimo diz 'pensar é estar doente dos olhos'?", 
            options: [
                "Álvaro de Campos",
                "Ricardo Reis", 
                "Alberto Caeiro",
                "Bernardo Soares"
            ], 
            answer: 2 
        },
        { 
            id: 5, 
            type: 'multiple', 
            question: "Como se chama a fase mais pessimista de Álvaro de Campos?", 
            options: [
                "Fase futurista",
                "Fase decadentista", 
                "Fase intimista ou melancólica",
                "Fase existencialista"
            ], 
            answer: 2 
        }
    ]
};
    dificil: [
        { 
            id: 1, 
            type: 'multiple', 
            question: "Qual é o poema mais conhecido de Álvaro de Campos?", 
            options: [
                "O Guardador de Rebanhos",
                "Ode Triunfal", 
                "Tabacaria",
                "Autopsicografia"
            ], 
            answer: 1 
        },
        { 
            id: 2, 
            type: 'multiple', 
            question: "O que é um semi-heterónimo?", 
            options: [
                "Um heterónimo incompleto",
                "Personagem com personalidade próxima do autor real", 
                "Pseudónimo temporário",
                "Heterónimo secundário"
            ], 
            answer: 1 
        },
        { 
            id: 3, 
            type: 'multiple', 
            question: "Qual a obra atribuída a Bernardo Soares?", 
            options: [
                "Mensagem",
                "Livro do Desassossego", 
                "O Banqueiro Anarquista",
                "Poemas Completos"
            ], 
            answer: 1 
        },
        { 
            id: 4, 
            type: 'multiple', 
            question: "Que heterónimo diz 'pensar é estar doente dos olhos'?", 
            options: [
                "Álvaro de Campos",
                "Ricardo Reis", 
                "Alberto Caeiro",
                "Bernardo Soares"
            ], 
            answer: 2 
        },
        { 
            id: 5, 
            type: 'multiple', 
            question: "Como se chama a fase mais pessimista de Álvaro de Campos?", 
            options: [
                "Fase futurista",
                "Fase decadentista", 
                "Fase intimista ou melancólica",
                "Fase existencialista"
            ], 
            answer: 2 
         }
    ]




// Estado da aplicação
let currentUser = null;
let currentQuestionIndex = 0;
let userAnswers = [];
let quizStarted = false;
let currentLevel = '';
let currentQuestions = [];

// Elementos DOM
const loginScreen = document.getElementById('login-screen');
const mainScreen = document.getElementById('main-screen');
const quizScreen = document.getElementById('quiz-screen');
const resultsScreen = document.getElementById('results-screen');

const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const loginBtn = document.getElementById('login-btn');
const logoutBtn = document.getElementById('logout-btn');
const userDisplay = document.getElementById('user-display');
const questionText = document.getElementById('question-text');
const optionsList = document.getElementById('options-list');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const submitQuizBtn = document.getElementById('submit-quiz-btn');
const quizProgress = document.getElementById('quiz-progress');
const scoreDisplay = document.getElementById('score-display');
const scorePercentage = document.getElementById('score-percentage');
const resultsDetails = document.getElementById('results-details');
const restartQuizBtn = document.getElementById('restart-quiz-btn');
const backToMainBtn = document.getElementById('back-to-main-btn');
const rankingBody = document.getElementById('ranking-body');
const currentLevelDisplay = document.getElementById('current-level-display');
const currentQuestionElement = document.getElementById('current-question');
const totalQuestionsElement = document.getElementById('total-questions');
const totalQuestionsDisplay = document.getElementById('total-questions-display');
const resultLevel = document.getElementById('result-level');

// Event Listeners
loginBtn.addEventListener('click', handleLogin);
logoutBtn.addEventListener('click', handleLogout);
prevBtn.addEventListener('click', showPreviousQuestion);
nextBtn.addEventListener('click', showNextQuestion);
submitQuizBtn.addEventListener('click', submitQuiz);
restartQuizBtn.addEventListener('click', restartQuiz);
backToMainBtn.addEventListener('click', backToMain);

// Adicionar event listeners para os botões de nível
document.querySelectorAll('.level-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const level = this.dataset.level;
        startQuiz(level);
    });
});

// Funções
function handleLogin() {
    const username = usernameInput.value.trim();
    const email = emailInput.value.trim();
    
    if (!username || !email) {
        alert('Por favor, preencha todos os campos.');
        return;
    }
    
    // Verificar se o utilizador já existe
    let user = users.find(u => u.email === email);
    
    if (!user) {
        // Criar novo utilizador
        user = {
            id: Date.now(),
            username,
            email,
            createdAt: new Date().toISOString()
        };
        users.push(user);
        localStorage.setItem('pessoaQuizUsers', JSON.stringify(users));
    }
    
    currentUser = user;
    userDisplay.textContent = user.username;
    
    // Mostrar tela principal
    loginScreen.classList.add('hidden');
    mainScreen.classList.remove('hidden');
    
    // Carregar ranking
    loadRanking();
}

function handleLogout() {
    currentUser = null;
    usernameInput.value = '';
    emailInput.value = '';
    
    mainScreen.classList.add('hidden');
    loginScreen.classList.remove('hidden');
}

function startQuiz(level) {
    quizStarted = true;
    currentQuestionIndex = 0;
    currentLevel = level;
    currentQuestions = questionsByLevel[level];
    userAnswers = new Array(currentQuestions.length).fill(null);
    
    // Atualizar display do nível
    const levelNames = {
        'facil': 'Fácil',
        'medio': 'Médio', 
        'dificil': 'Difícil'
    };
    
    currentLevelDisplay.textContent = levelNames[level];
    currentQuestionElement.textContent = '1';
    totalQuestionsElement.textContent = currentQuestions.length;
    
    mainScreen.classList.add('hidden');
    quizScreen.classList.remove('hidden');
    
    showQuestion();
}

function showQuestion() {
    const question = currentQuestions[currentQuestionIndex];
    questionText.textContent = `${currentQuestionIndex + 1}. ${question.question}`;
    
    // Atualizar contador de perguntas
    currentQuestionElement.textContent = currentQuestionIndex + 1;
    
    // Atualizar barra de progresso
    const progress = ((currentQuestionIndex + 1) / currentQuestions.length) * 100;
    quizProgress.style.width = `${progress}%`;
    
    // Limpar opções anteriores
    optionsList.innerHTML = '';
    
    // Mostrar opções baseadas no tipo de pergunta
    if (question.type === 'direct') {
        optionsList.innerHTML = `
            <li class="form-group">
                <label for="answer-input">Sua resposta:</label>
                <input type="text" id="answer-input" placeholder="Digite sua resposta aqui" value="${userAnswers[currentQuestionIndex] || ''}">
            </li>
        `;
        
        // Adicionar evento para salvar resposta
        document.getElementById('answer-input').addEventListener('input', function() {
            userAnswers[currentQuestionIndex] = this.value;
        });
        
    } else if (question.type === 'multiple') {
        question.options.forEach((option, index) => {
            const li = document.createElement('li');
            li.className = 'option';
            if (userAnswers[currentQuestionIndex] === index) {
                li.classList.add('selected');
            }
            li.textContent = option;
            li.dataset.index = index;
            li.addEventListener('click', function() {
                document.querySelectorAll('#options-list .option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
                userAnswers[currentQuestionIndex] = parseInt(this.dataset.index);
            });
            optionsList.appendChild(li);
        });
        
    } else if (question.type === 'truefalse') {
        const trueOption = document.createElement('li');
        trueOption.className = 'option';
        if (userAnswers[currentQuestionIndex] === true) {
            trueOption.classList.add('selected');
        }
        trueOption.textContent = 'Verdadeiro';
        trueOption.dataset.value = 'true';
        trueOption.addEventListener('click', function() {
            document.querySelectorAll('#options-list .option').forEach(opt => {
                opt.classList.remove('selected');
            });
            this.classList.add('selected');
            userAnswers[currentQuestionIndex] = true;
        });
        optionsList.appendChild(trueOption);
        
        const falseOption = document.createElement('li');
        falseOption.className = 'option';
        if (userAnswers[currentQuestionIndex] === false) {
            falseOption.classList.add('selected');
        }
        falseOption.textContent = 'Falso';
        falseOption.dataset.value = 'false';
        falseOption.addEventListener('click', function() {
            document.querySelectorAll('#options-list .option').forEach(opt => {
                opt.classList.remove('selected');
            });
            this.classList.add('selected');
            userAnswers[currentQuestionIndex] = false;
        });
        optionsList.appendChild(falseOption);
    }
    
    // Atualizar botões de navegação
    prevBtn.disabled = currentQuestionIndex === 0;
    
    if (currentQuestionIndex === currentQuestions.length - 1) {
        nextBtn.classList.add('hidden');
        submitQuizBtn.classList.remove('hidden');
    } else {
        nextBtn.classList.remove('hidden');
        submitQuizBtn.classList.add('hidden');
    }
}

function showPreviousQuestion() {
    if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        showQuestion();
    }
}

function showNextQuestion() {
    if (currentQuestionIndex < currentQuestions.length - 1) {
        currentQuestionIndex++;
        showQuestion();
    }
}

function submitQuiz() {
    let score = 0;
    const results = [];
    
    currentQuestions.forEach((question, index) => {
        const userAnswer = userAnswers[index];
        let isCorrect = false;
        
        if (question.type === 'direct') {
            isCorrect = userAnswer && 
                userAnswer.toLowerCase().trim() === question.answer.toLowerCase().trim();
        } else if (question.type === 'multiple') {
            isCorrect = userAnswer === question.answer;
        } else if (question.type === 'truefalse') {
            isCorrect = userAnswer === question.answer;
        }
        
        if (isCorrect) {
            score++;
        }
        
               results.push({
            question: question.question,
            userAnswer: userAnswer,
            correctAnswer: question.answer,
            isCorrect: isCorrect,
            type: question.type,
            options: question.options
        });
    });
    
    // Salvar resultado no ranking
    const rankingEntry = {
        userId: currentUser.id,
        username: currentUser.username,
        level: currentLevel,
        score: score,
        totalQuestions: currentQuestions.length,
        date: new Date().toISOString()
    };
    
    rankings.push(rankingEntry);
    localStorage.setItem('pessoaQuizRankings', JSON.stringify(rankings));
    
    // Mostrar resultados
    showResults(score, results);
}

function showResults(score, results) {
    quizScreen.classList.add('hidden');
    resultsScreen.classList.remove('hidden');
    
    // Calcular percentagem
    const percentage = Math.round((score / currentQuestions.length) * 100);
    
    // Atualizar displays
    scoreDisplay.textContent = score;
    totalQuestionsDisplay.textContent = currentQuestions.length;
    scorePercentage.textContent = `${percentage}%`;
    
    // Atualizar nível nos resultados
    const levelNames = {
        'facil': 'Fácil',
        'medio': 'Médio', 
        'dificil': 'Difícil'
    };
    resultLevel.textContent = levelNames[currentLevel];
    
    // Mostrar detalhes dos resultados
    resultsDetails.innerHTML = '';
    
    results.forEach((result, index) => {
        const resultDiv = document.createElement('div');
        resultDiv.className = `question-container ${result.isCorrect ? 'result-correct' : 'result-incorrect'}`;
        
        let userAnswerText = '';
        if (result.type === 'direct') {
            userAnswerText = result.userAnswer || '(Sem resposta)';
        } else if (result.type === 'multiple') {
            userAnswerText = result.userAnswer !== null ? 
                result.options[result.userAnswer] : '(Sem resposta)';
        } else if (result.type === 'truefalse') {
            userAnswerText = result.userAnswer === true ? 'Verdadeiro' : 
                            result.userAnswer === false ? 'Falso' : '(Sem resposta)';
        }
        
        let correctAnswerText = '';
        if (result.type === 'direct') {
            correctAnswerText = result.correctAnswer;
        } else if (result.type === 'multiple') {
            correctAnswerText = result.options[result.correctAnswer];
        } else if (result.type === 'truefalse') {
            correctAnswerText = result.correctAnswer ? 'Verdadeiro' : 'Falso';
        }
        
        resultDiv.innerHTML = `
            <div class="question">
                <strong>${index + 1}. ${result.question}</strong>
                <span class="result-indicator ${result.isCorrect ? 'correct' : 'incorrect'}">
                    ${result.isCorrect ? '✓' : '✗'}
                </span>
            </div>
            <p><strong>Sua resposta:</strong> ${userAnswerText}</p>
            <p><strong>Resposta correta:</strong> ${correctAnswerText}</p>
        `;
        
        resultsDetails.appendChild(resultDiv);
    });
}

function restartQuiz() {
    resultsScreen.classList.add('hidden');
    startQuiz(currentLevel);
}

function backToMain() {
    resultsScreen.classList.add('hidden');
    mainScreen.classList.remove('hidden');
    loadRanking();
}

function loadRanking() {
    // Ordenar rankings por pontuação (percentagem)
    const sortedRankings = [...rankings].sort((a, b) => {
        const scoreA = (a.score / a.totalQuestions) * 100;
        const scoreB = (b.score / b.totalQuestions) * 100;
        return scoreB - scoreA;
    });
    
    rankingBody.innerHTML = '';
    
    if (sortedRankings.length === 0) {
        rankingBody.innerHTML = `
            <tr>
                <td colspan="5" style="text-align: center; padding: 20px;">
                    Ainda não há resultados no ranking. Seja o primeiro a jogar!
                </td>
            </tr>
        `;
        return;
    }
    
    sortedRankings.slice(0, 10).forEach((ranking, index) => {
        const row = document.createElement('tr');
        const date = new Date(ranking.date).toLocaleDateString('pt-PT');
        const percentage = Math.round((ranking.score / ranking.totalQuestions) * 100);
        
        // Nomes dos níveis para display
        const levelNames = {
            'facil': 'Fácil',
            'medio': 'Médio',
            'dificil': 'Difícil'
        };
        
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${ranking.username}</td>
            <td><span class="level-badge ${ranking.level}">${levelNames[ranking.level]}</span></td>
            <td>${ranking.score}/${ranking.totalQuestions} (${percentage}%)</td>
            <td>${date}</td>
        `;
        
        rankingBody.appendChild(row);
    });
}

// CSS adicional para os indicadores de resultado
const style = document.createElement('style');
style.textContent = `
    .result-indicator {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        line-height: 20px;
        font-weight: bold;
        margin-left: 10px;
    }
    
    .result-indicator.correct {
        background-color: var(--success-color);
        color: white;
    }
    
    .result-indicator.incorrect {
        background-color: var(--accent-color);
        color: white;
    }
    
    .result-correct {
        border-left: 4px solid var(--success-color);
        padding-left: 15px;
    }
    
    .result-incorrect {
        border-left: 4px solid var(--accent-color);
        padding-left: 15px;
    }
    
    .question-container {
        margin-bottom: 20px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
    }
`;
document.head.appendChild(style);

// Inicializar a aplicação
document.addEventListener('DOMContentLoaded', function() {
    // Verificar se há um utilizador logado
    const lastUser = localStorage.getItem('lastUser');
    if (lastUser) {
        const user = users.find(u => u.id === parseInt(lastUser));
        if (user) {
            currentUser = user;
            userDisplay.textContent = user.username;
            loginScreen.classList.add('hidden');
            mainScreen.classList.remove('hidden');
            loadRanking();
        }
    }
    
    // Adicionar efeitos visuais aos botões de nível
    document.querySelectorAll('.level-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Função para preencher automaticamente respostas para teste (remover em produção)
function fillTestAnswers() {
    if (currentQuestions && userAnswers) {
        currentQuestions.forEach((question, index) => {
            if (question.type === 'direct') {
                userAnswers[index] = question.answer;
            } else if (question.type === 'multiple') {
                userAnswers[index] = question.answer;
            } else if (question.type === 'truefalse') {
                userAnswers[index] = question.answer;
            }
        });
        showQuestion();
    }
}

// Adicionar atalho de teclado para navegação (opcional)
document.addEventListener('keydown', function(event) {
    if (!quizScreen.classList.contains('hidden')) {
        if (event.key === 'ArrowLeft' && !prevBtn.disabled) {
            showPreviousQuestion();
        } else if (event.key === 'ArrowRight' && !nextBtn.classList.contains('hidden')) {
            showNextQuestion();
        } else if (event.key === 'Enter' && !submitQuizBtn.classList.contains('hidden')) {
            submitQuiz();
        }
    }
});

// Melhorar a experiência em dispositivos móveis
function setupTouchEvents() {
    let touchStartX = 0;
    let touchEndX = 0;
    
    document.addEventListener('touchstart', function(event) {
        touchStartX = event.changedTouches[0].screenX;
    });
    
    document.addEventListener('touchend', function(event) {
        touchEndX = event.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0 && !nextBtn.classList.contains('hidden')) {
                // Swipe left - próxima pergunta
                showNextQuestion();
            } else if (diff < 0 && !prevBtn.disabled) {
                // Swipe right - pergunta anterior
                showPreviousQuestion();
            }
        }
    }
}

// Inicializar eventos de toque
setupTouchEvents();

// Efeito de confetti para resultados excelentes
function showConfetti(percentage) {
    if (percentage >= 90) {
        // Adicionar efeito visual para resultados excelentes
        const confetti = document.createElement('div');
        confetti.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1000;
            background: radial-gradient(circle at center, transparent 0%, rgba(255,255,255,0.8) 100%);
        `;
        document.body.appendChild(confetti);
        
        setTimeout(() => {
            confetti.remove();
        }, 2000);
    }
}

// Atualizar a função submitQuiz para incluir confetti
const originalSubmitQuiz = submitQuiz;
submitQuiz = function() {
    originalSubmitQuiz();
    
    // Calcular percentagem para confetti
    const score = parseInt(scoreDisplay.textContent);
    const total = parseInt(totalQuestionsDisplay.textContent);
    const percentage = Math.round((score / total) * 100);
    
    showConfetti(percentage);
}
// Elementos DOM para login/registo
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');
const showRegisterBtn = document.getElementById('show-register-btn');
const showLoginBtn = document.getElementById('show-login-btn');
const registerBtn = document.getElementById('register-btn');
const passwordInput = document.getElementById('password');
const regPasswordInput = document.getElementById('reg-password');
const regConfirmPasswordInput = document.getElementById('reg-confirm-password');

// Event Listeners para login/registo
showRegisterBtn.addEventListener('click', showRegisterForm);
showLoginBtn.addEventListener('click', showLoginForm);
registerBtn.addEventListener('click', handleRegister);

// Funções para alternar entre login e registo
function showRegisterForm() {
    loginForm.classList.add('hidden');
    registerForm.classList.remove('hidden');
    clearFormMessages();
}

function showLoginForm() {
    registerForm.classList.add('hidden');
    loginForm.classList.remove('hidden');
    clearFormMessages();
}

// Função de registo
// Função de registo
function handleRegister() {
    const username = regUsernameInput.value.trim();
    const email = regEmailInput.value.trim();
    const password = regPasswordInput.value;
    const confirmPassword = regConfirmPasswordInput.value;

    // Validações
    if (!username || !email || !password || !confirmPassword) {
        showMessage('Por favor, preencha todos os campos.', 'error', registerForm);
        return;
    }

    if (password !== confirmPassword) {
        showMessage('As passwords não coincidem.', 'error', registerForm);
        return;
    }

    if (password.length < 6) {
        showMessage('A password deve ter pelo menos 6 caracteres.', 'error', registerForm);
        return;
    }

    // Enviar para a API
    fetch('register.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: username,
            email: email,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === "User created successfully") {
            showMessage('Conta criada com sucesso! Pode fazer login.', 'success', registerForm);
            
            // Limpar formulário
            regUsernameInput.value = '';
            regEmailInput.value = '';
            regPasswordInput.value = '';
            regConfirmPasswordInput.value = '';
            
            // Voltar ao login após 2 segundos
            setTimeout(() => {
                showLoginForm();
            }, 2000);
        } else {
            showMessage(data.message, 'error', registerForm);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showMessage('Erro ao criar conta. Tente novamente.', 'error', registerForm);
    });
}

// Modificar a função handleLogin existente para verificar password
loginBtn.addEventListener('click', handleLogin);

// Função de login
function handleLogin() {
    const username = usernameInput.value.trim();
    const password = passwordInput.value;

    if (!username || !password) {
        showMessage('Por favor, preencha todos os campos.', 'error', loginForm);
        return;
    }

    // Enviar para a API
    fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: username,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === "Login successful") {
            // Login bem-sucedido
            currentUser = data.user;
            userDisplay.textContent = data.user.username;
            
            loginScreen.classList.add('hidden');
            mainScreen.classList.remove('hidden');

            // Limpar formulário
            usernameInput.value = '';
            passwordInput.value = '';
            clearFormMessages();
            
            // Guardar no localStorage para sessão
            localStorage.setItem('currentUser', JSON.stringify(data.user));
            
        } else {
            showMessage(data.message, 'error', loginForm);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showMessage('Erro ao fazer login. Tente novamente.', 'error', loginForm);
    });
}

// Função para mostrar mensagens
function showMessage(message, type, form) {
    clearFormMessages();
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `form-message ${type}`;
    messageDiv.textContent = message;

    form.insertBefore(messageDiv, form.firstChild);

    // Auto-remover após 5 segundos
    setTimeout(() => {
        if (messageDiv.parentNode) {
            messageDiv.remove();
        }
    }, 5000);
}

// Limpar mensagens
function clearFormMessages() {
    const messages = document.querySelectorAll('.form-message');
    messages.forEach(msg => msg.remove());
}

// Validação de password em tempo real
if (regPasswordInput) {
    regPasswordInput.addEventListener('input', function() {
        const strength = checkPasswordStrength(this.value);
        updatePasswordStrength(strength);
    });
}

function checkPasswordStrength(password) {
    if (password.length === 0) return '';
    if (password.length < 6) return 'weak';
    
    const hasLetters = /[a-zA-Z]/.test(password);
    const hasNumbers = /[0-9]/.test(password);
    const hasSpecial = /[^a-zA-Z0-9]/.test(password);
    
    if (hasLetters && hasNumbers && hasSpecial) return 'strong';
    if ((hasLetters && hasNumbers) || (hasLetters && hasSpecial) || (hasNumbers && hasSpecial)) return 'medium';
    return 'weak';
}

function updatePasswordStrength(strength) {
    // Remover indicadores anteriores
    const existingIndicator = document.querySelector('.password-strength');
    if (existingIndicator) {
        existingIndicator.remove();
    }

    if (!strength) return;

    const indicator = document.createElement('div');
    indicator.className = `password-strength ${strength}`;
    
    const messages = {
        'weak': '🔴 Password fraca',
        'medium': '🟡 Password média', 
        'strong': '🟢 Password forte'
    };
    
    indicator.textContent = messages[strength];
    regPasswordInput.parentNode.appendChild(indicator);
    // Elementos DOM para ranking
    const rankingScreen = document.getElementById('ranking-screen');
    const rankingBtn = document.getElementById('ranking-btn');
    const backFromRankingBtn = document.getElementById('back-from-ranking-btn');
    const rankingBody = document.getElementById('ranking-body');
    const userStats = document.getElementById('user-stats');
    // Função para mostrar o ranking
function showRanking() {
    mainScreen.classList.add('hidden');
    rankingScreen.classList.remove('hidden');
    loadRankingData();
    loadCharts();
}

// Função para voltar do ranking
function backFromRanking() {
    rankingScreen.classList.add('hidden');
    mainScreen.classList.remove('hidden');
}

// Função para carregar dados do ranking
function loadRankingData() {
    const userRankings = rankings.filter(r => r.userId === currentUser.id);
    const allRankings = [...rankings].sort((a, b) => {
        const scoreA = (a.score / a.totalQuestions) * 100;
        const scoreB = (b.score / b.totalQuestions) * 100;
        return scoreB - scoreA;
    });

    // Atualizar tabela de ranking
    rankingBody.innerHTML = '';
    allRankings.slice(0, 10).forEach((ranking, index) => {
        const row = document.createElement('tr');
        const date = new Date(ranking.date).toLocaleDateString('pt-PT');
        const percentage = Math.round((ranking.score / ranking.totalQuestions) * 100);
        
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${ranking.username}</td>
            <td><span class="level-badge ${ranking.level}">${ranking.level.toUpperCase()}</span></td>
            <td>${ranking.score}/${ranking.totalQuestions} (${percentage}%)</td>
            <td>${date}</td>
        `;
        rankingBody.appendChild(row);
    });

    // Atualizar estatísticas do usuário
    updateUserStats(userRankings);
}

// Função para atualizar estatísticas do usuário
function updateUserStats(userRankings) {
    if (userRankings.length === 0) {
        userStats.innerHTML = '<p>Ainda não completaste nenhum quiz.</p>';
        return;
    }

    const totalQuizzes = userRankings.length;
    const totalScore = userRankings.reduce((sum, r) => sum + r.score, 0);
    const totalQuestions = userRankings.reduce((sum, r) => sum + r.totalQuestions, 0);
    const averageScore = Math.round((totalScore / totalQuestions) * 100);
    
    const levelCounts = {
        facil: userRankings.filter(r => r.level === 'facil').length,
        medio: userRankings.filter(r => r.level === 'medio').length,
        dificil: userRankings.filter(r => r.level === 'dificil').length
    };

    userStats.innerHTML = `
        <div class="user-stat-item">
            <strong>Total de Quizzes:</strong> ${totalQuizzes}
        </div>
        <div class="user-stat-item">
            <strong>Pontuação Média:</strong> ${averageScore}%
        </div>
        <div class="user-stat-item">
            <strong>Nível Fácil:</strong> ${levelCounts.facil} quizzes
        </div>
        <div class="user-stat-item">
            <strong>Nível Médio:</strong> ${levelCounts.medio} quizzes
        </div>
        <div class="user-stat-item">
            <strong>Nível Difícil:</strong> ${levelCounts.dificil} quizzes
        </div>
    `;
}

// Função para carregar gráficos
function loadCharts() {
    // Gráfico de distribuição por nível
    const levelCounts = {
        facil: rankings.filter(r => r.level === 'facil').length,
        medio: rankings.filter(r => r.level === 'medio').length,
        dificil: rankings.filter(r => r.level === 'dificil').length
    };

    const levelCtx = document.getElementById('levelChart').getContext('2d');
    new Chart(levelCtx, {
        type: 'doughnut',
        data: {
            labels: ['Fácil', 'Médio', 'Difícil'],
            datasets: [{
                data: [levelCounts.facil, levelCounts.medio, levelCounts.dificil],
                backgroundColor: ['#27ae60', '#f39c12', '#e74c3c']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // Gráfico de performance média
    const performanceCtx = document.getElementById('performanceChart').getContext('2d');
    
    const facilScores = rankings.filter(r => r.level === 'facil')
        .map(r => (r.score / r.totalQuestions) * 100);
    const medioScores = rankings.filter(r => r.level === 'medio')
        .map(r => (r.score / r.totalQuestions) * 100);
    const dificilScores = rankings.filter(r => r.level === 'dificil')
        .map(r => (r.score / r.totalQuestions) * 100);

    new Chart(performanceCtx, {
        type: 'bar',
        data: {
            labels: ['Fácil', 'Médio', 'Difícil'],
            datasets: [{
                label: 'Pontuação Média (%)',
                data: [
                    facilScores.length > 0 ? Math.round(facilScores.reduce((a, b) => a + b) / facilScores.length) : 0,
                    medioScores.length > 0 ? Math.round(medioScores.reduce((a, b) => a + b) / medioScores.length) : 0,
                    dificilScores.length > 0 ? Math.round(dificilScores.reduce((a, b) => a + b) / dificilScores.length) : 0
                ],
                backgroundColor: ['#27ae60', '#f39c12', '#e74c3c']
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
}
};
