<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Fernando Pessoa e os Heterónimos</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: radial-gradient(circle at center, #0184a8, #015670ff, #013d52);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .btn {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #34495e;
        }

        .hidden {
            display: none !important;
        }

        /* HEADER COM IMAGEM DE FUNDO */
        header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://farofafilosofica.blog/wp-content/uploads/2017/03/fernando-pessoa-farofa-filosofica.jpg?w=1920&h=768&crop=1');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
            padding: 100px 20px;
            margin-bottom: 30px;
        }

        header h1 {
            margin-bottom: 20px;
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
        }

        header p {
            font-size: 1.4rem;
            opacity: 0.95;
            font-weight: 300;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
            max-width: 600px;
            margin: 0 auto;
        }

        /* FORMULÁRIO DE LOGIN */
        #login-screen {
            max-width: 500px;
            margin: 0 auto;
        }

        #login-screen h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3498db;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #999;
        }

        #login-btn, #register-btn {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            font-weight: 600;
            margin-top: 10px;
        }

        .form-separator {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .form-separator::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e1e8ed;
        }

        .form-separator span {
            background: white;
            padding: 0 15px;
            color: #666;
            font-weight: 500;
        }

        .btn-secondary {
            background: #95a5a6;
        }

        .btn-success {
            background: #27ae60;
        }

        /* TELA PRINCIPAL */
        .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .level-selection {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .level-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            border: 3px solid #e9ecef;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .level-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }

        .level-card h3 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .level-card ul {
            text-align: left;
            margin: 15px 0;
            padding-left: 20px;
        }

        .level-card li {
            margin-bottom: 8px;
            color: #555;
        }

        .level-btn {
            width: 100%;
            margin-top: 15px;
        }

        /* QUIZ STYLES */
        .quiz-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            background: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .level-indicator {
            font-weight: 600;
            font-size: 1.1rem;
            color: #2c3e50;
        }

        .progress-info {
            color: #666;
            font-weight: 500;
        }

        .progress-bar {
            height: 12px;
            background-color: #ecf0f1;
            border-radius: 10px;
            margin-bottom: 25px;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        }

        .progress {
            height: 100%;
            background: linear-gradient(90deg, #3498db, #2980b9);
            width: 0%;
            transition: width 0.4s ease;
            border-radius: 10px;
        }

        .question-container {
            margin-bottom: 25px;
        }

        .question {
            font-size: 1.3rem;
            margin-bottom: 20px;
            font-weight: 600;
            color: #2c3e50;
            line-height: 1.5;
        }

        .options {
            list-style-type: none;
        }

        .option {
            padding: 15px 20px;
            margin-bottom: 12px;
            background-color: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .option:hover {
            background-color: #e9ecef;
            transform: translateX(5px);
        }

        .option.selected {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border-color: #3498db;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            gap: 15px;
        }

        .nav button {
            flex: 1;
        }

        /* RESULTS STYLES */
        .score-display {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .score-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3498db, #2980b9);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.3);
        }

        .score-circle #score-percentage {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .score-text {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: 5px;
        }

        .score-details {
            text-align: center;
        }

        .score-details h3 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .score-details p {
            font-size: 1.2rem;
            color: #666;
            font-weight: 500;
        }

        .results-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .results-actions .btn {
            flex: 1;
        }

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
            background-color: #27ae60;
            color: white;
        }

        .result-indicator.incorrect {
            background-color: #e74c3c;
            color: white;
        }

        .result-correct {
            border-left: 4px solid #27ae60;
            padding-left: 15px;
        }

        .result-incorrect {
            border-left: 4px solid #e74c3c;
            padding-left: 15px;
        }

        .form-message {
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            text-align: center;
            font-weight: 500;
        }

        .form-message.error {
            background-color: #ffeaea;
            color: #e74c3c;
            border: 1px solid #e74c3c;
        }

        .form-message.success {
            background-color: #eaffea;
            color: #27ae60;
            border: 1px solid #27ae60;
        }

        .password-strength {
            margin-top: 5px;
            font-size: 0.8rem;
        }

        .password-strength.weak {
            color: #e74c3c;
        }

        .password-strength.medium {
            color: #f39c12;
        }

        .password-strength.strong {
            color: #27ae60;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 768px) {
            header {
                padding: 60px 20px;
            }
            
            header h1 {
                font-size: 2.5rem;
            }
            
            header p {
                font-size: 1.1rem;
            }
            
            .container {
                padding: 15px;
            }
            
            .card {
                padding: 20px;
            }
            
            .level-selection {
                grid-template-columns: 1fr;
            }
            
            .user-info {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .quiz-header {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .score-display {
                flex-direction: column;
                gap: 25px;
            }

            .nav {
                flex-direction: column;
            }

            .results-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Quiz - Fernando Pessoa e os Heterónimos</h1>
            <p>Teste os seus conhecimentos sobre um dos maiores poetas portugueses</p>
        </div>
    </header>
    
    <div class="container">
        <!-- Tela de Login -->
        <div id="login-screen" class="card">
            <h2>Login</h2>
            
            <!-- Formulário de Login -->
            <div id="login-form">
                <div class="form-group">
                    <label for="username">Nome de utilizador:</label>
                    <input type="text" id="username" placeholder="Digite o seu nome">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Digite a sua password">
                </div>
                <button id="login-btn" class="btn">Entrar</button>
                
                <div class="form-separator">
                    <span>ou</span>
                </div>
                
                <button id="show-register-btn" class="btn btn-secondary">Criar Nova Conta</button>
            </div>
            
            <!-- Formulário de Registo -->
            <div id="register-form" class="hidden">
                <h3>Criar Nova Conta</h3>
                <div class="form-group">
                    <label for="reg-username">Nome de utilizador:</label>
                    <input type="text" id="reg-username" placeholder="Escolha um nome de utilizador">
                </div>
                <div class="form-group">
                    <label for="reg-email">Email:</label>
                    <input type="email" id="reg-email" placeholder="Digite o seu email">
                </div>
                <div class="form-group">
                    <label for="reg-password">Password:</label>
                    <input type="password" id="reg-password" placeholder="Crie uma password (mín. 6 caracteres)">
                </div>
                <div class="form-group">
                    <label for="reg-confirm-password">Confirmar Password:</label>
                    <input type="password" id="reg-confirm-password" placeholder="Repita a password">
                </div>
                <button id="register-btn" class="btn btn-success">Criar Conta</button>
                
                <div class="form-separator">
                    <span>ou</span>
                </div>
                
                <button id="show-login-btn" class="btn btn-secondary">Já tenho conta</button>
            </div>
        </div>
        
        <!-- Tela Principal (SIMPLIFICADA) -->
<div id="main-screen" class="hidden">
    <div class="user-info">
        <h2>Bem-vindo, <span id="user-display"></span>!</h2>
        <button id="logout-btn" class="btn">Sair</button>
    </div>
    
    <div class="card">
        <h2>Escolha o Nível de Dificuldade</h2>
        <p>Selecione o nível que deseja jogar:</p>
        
        <div class="level-selection">
            <div class="level-card">
                <h3>🌱 Nível Fácil</h3>
                <p>5 perguntas básicas sobre Fernando Pessoa</p>
                <button class="btn level-btn" data-level="facil">Jogar Nível Fácil</button>
            </div>
            
            <div class="level-card">
                <h3>🎯 Nível Médio</h3>
                <p>5 perguntas sobre heterónimos</p>
                <button class="btn level-btn" data-level="medio">Jogar Nível Médio</button>
            </div>
            
            <div class="level-card">
                <h3>🔥 Nível Difícil</h3>
                <p>5 perguntas avançadas</p>
                <button class="btn level-btn" data-level="dificil">Jogar Nível Difícil</button>
            </div>
        </div>
    </div>
</div>

        <!-- Tela do Quiz -->
        <div id="quiz-screen" class="hidden">
            <div class="quiz-header">
                <div class="level-indicator">
                    Nível: <span id="current-level-display"></span>
                </div>
                <div class="progress-info">
                    Pergunta <span id="current-question">1</span> de <span id="total-questions">10</span>
                </div>
            </div>

            <div class="progress-bar">
                <div class="progress" id="quiz-progress"></div>
            </div>

            <div class="card">
                <div class="question-container">
                    <div class="question" id="question-text"></div>
                    <ul class="options" id="options-list"></ul>
                </div>

                <div class="nav">
                    <button id="prev-btn" class="btn btn-secondary" disabled>Anterior</button>
                    <button id="next-btn" class="btn">Próxima</button>
                    <button id="submit-quiz-btn" class="btn btn-success hidden">Finalizar Quiz</button>
                </div>
            </div>
        </div>

        <!-- Tela de Resultados -->
        <div id="results-screen" class="hidden">
            <div class="card">
                <h2>Resultados do Quiz</h2>
                <p>Nível: <strong id="result-level"></strong></p>
                
                <div class="score-display">
                    <div class="score-circle">
                        <div id="score-percentage">0%</div>
                        <div class="score-text">Pontuação</div>
                    </div>
                    <div class="score-details">
                        <h3>Parabéns!</h3>
                        <p>Você acertou <span id="score-display">0</span> de <span id="total-questions-display">0</span> perguntas</p>
                    </div>
                </div>

                <div class="results-details" id="results-details">
                    <!-- Detalhes das respostas serão inseridos aqui via JavaScript -->
                </div>

                <div class="results-actions">
                    <button id="restart-quiz-btn" class="btn">Jogar Novamente</button>
                    <button id="back-to-main-btn" class="btn btn-secondary">Voltar ao Menu</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Base de dados simulada
        let users = JSON.parse(localStorage.getItem('pessoaQuizUsers')) || [];
        let rankings = JSON.parse(localStorage.getItem('pessoaQuizRankings')) || [];

        // Perguntas organizadas por nível (CORRIGIDO - cada nível tem pelo menos 1 de cada tipo)
        const questionsByLevel = {
            facil: [
                // Resposta direta
                { id: 1, type: 'direct', question: "Quem foi Fernando Pessoa?", answer: "Um dos maiores poetas portugueses do século XX." },
                { id: 2, type: 'direct', question: "Em que ano nasceu Fernando Pessoa?", answer: "1888." },
                { id: 3, type: 'direct', question: "Em que cidade nasceu Fernando Pessoa?", answer: "Lisboa." },
                { id: 4, type: 'direct', question: "O que são heterónimos?", answer: "Personagens fictícias com personalidade, biografia e estilo literário próprios." },
                { id: 5, type: 'direct', question: "Quais são os três heterónimos mais conhecidos de Pessoa?", answer: "Alberto Caeiro, Ricardo Reis e Álvaro de Campos." },
                { id: 6, type: 'direct', question: "Qual é o heterónimo considerado o \"mestre\"?", answer: "Alberto Caeiro." },
                
                // Múltipla escolha
                { id: 7, type: 'multiple', question: "Qual destes heterónimos celebra a modernidade e a máquina?", options: ["Ricardo Reis", "Alberto Caeiro", "Álvaro de Campos", "Bernardo Soares"], answer: 2 },
                { id: 8, type: 'multiple', question: "Qual destes é considerado um semi-heterónimo de Fernando Pessoa?", options: ["Álvaro de Campos", "Bernardo Soares", "Alberto Caeiro", "António Mora"], answer: 1 },
                
                // Verdadeiro/Falso
                { id: 9, type: 'truefalse', question: "Fernando Pessoa nasceu no Porto.", answer: false },
                { id: 10, type: 'truefalse', question: "Alberto Caeiro rejeitava a razão e a filosofia.", answer: true }
            ],
            medio: [
                // Resposta direta
                { id: 1, type: 'direct', question: "Que heterónimo é engenheiro e escreve com influência futurista?", answer: "Álvaro de Campos." },
                { id: 2, type: 'direct', question: "Qual é o heterónimo com estilo clássico e linguagem elevada?", answer: "Ricardo Reis." },
                { id: 3, type: 'direct', question: "Qual o estilo de escrita de Alberto Caeiro?", answer: "Simples, direto, ligado à natureza." },
                { id: 4, type: 'direct', question: "Que visão do mundo tem Alberto Caeiro?", answer: "Realista e sensorial, rejeita a metafísica." },
                { id: 5, type: 'direct', question: "Onde viveu Alberto Caeiro, segundo a sua biografia fictícia?", answer: "No campo, apesar de ter nascido em Lisboa." },
                { id: 6, type: 'direct', question: "Como se caracteriza a escrita de Ricardo Reis?", answer: "Equilibrada, racional, com influência da Antiguidade clássica." },
                { id: 7, type: 'direct', question: "Em que país se exilou Ricardo Reis, segundo Pessoa?", answer: "No Brasil." },
                
                // Múltipla escolha
                { id: 8, type: 'multiple', question: "Qual dos seguintes temas é central na poesia de Ricardo Reis?", options: ["Angústia existencial", "Tecnologia e futuro", "Harmonia e contenção", "Simplicidade da natureza"], answer: 2 },
                { id: 9, type: 'multiple', question: "Qual heterónimo representa melhor a emoção intensa?", options: ["Ricardo Reis", "Alberto Caeiro", "Álvaro de Campos", "Bernardo Soares"], answer: 2 },
                
                // Verdadeiro/Falso
                { id: 10, type: 'truefalse', question: "Ricardo Reis era defensor da monarquia.", answer: true },
                { id: 11, type: 'truefalse', question: "Álvaro de Campos escreveu poemas ligados à natureza e ao campo.", answer: false },
                { id: 12, type: 'truefalse', question: "O ortónimo de Fernando Pessoa é Álvaro de Campos.", answer: false },
                { id: 13, type: 'truefalse', question: "Ricardo Reis utilizava uma linguagem rebuscada e clássica.", answer: true },
                { id: 14, type: 'truefalse', question: "Alberto Caeiro usava muita pontuação e metáforas complexas.", answer: false },
                { id: 15, type: 'truefalse', question: "Fernando Pessoa foi um dos principais autores do modernismo português.", answer: true }
            ],
            dificil: [
                // Resposta direta
                { id: 1, type: 'direct', question: "Qual é o poema mais conhecido de Álvaro de Campos?", answer: "\"Ode Triunfal\"." },
                { id: 2, type: 'direct', question: "O que é um semi-heterónimo?", answer: "Uma figura com personalidade literária próxima do autor real (ex: Bernardo Soares)." },
                { id: 3, type: 'direct', question: "Qual a obra atribuída a Bernardo Soares?", answer: "Livro do Desassossego." },
                { id: 4, type: 'direct', question: "Que heterónimo diz \"pensar é estar doente dos olhos\"?", answer: "Alberto Caeiro." },
                { id: 5, type: 'direct', question: "Qual é o heterónimo que representa melhor a emoção intensa?", answer: "Álvaro de Campos." },
                { id: 6, type: 'direct', question: "Qual é o heterónimo que valoriza o equilíbrio e a contenção?", answer: "Ricardo Reis." },
                { id: 7, type: 'direct', question: "Que heterónimo tem uma visão angustiada e moderna da vida?", answer: "Álvaro de Campos." },
                { id: 8, type: 'direct', question: "Como se chama a fase mais pessimista de Álvaro de Campos?", answer: "Fase intimista ou melancólica." },
                
                // Múltipla escolha
                { id: 9, type: 'multiple', question: "Qual destes heterónimos tinha formação em engenharia naval?", options: ["Ricardo Reis", "Alberto Caeiro", "Álvaro de Campos", "Bernardo Soares"], answer: 2 },
                { id: 10, type: 'multiple', question: "Qual destas obras é atribuída a Bernardo Soares?", options: ["O Livro do Desassossego", "Mensagem", "O Guardador de Rebanhos", "Odes"], answer: 0 },
                
                // Verdadeiro/Falso
                { id: 11, type: 'truefalse', question: "Álvaro de Campos viveu em Londres e formou-se em engenharia naval.", answer: true },
                { id: 12, type: 'truefalse', question: "Alberto Caeiro usava muita pontuação e metáforas complexas.", answer: false },
                { id: 13, type: 'truefalse', question: "Bernardo Soares é um heterónimo de Fernando Pessoa.", answer: false },
                { id: 14, type: 'truefalse', question: "Fernando Pessoa escreveu apenas em português.", answer: false },
                { id: 15, type: 'truefalse', question: "Ricardo Reis exilou-se no Brasil por motivos políticos.", answer: true }
            ]
        };

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
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const showRegisterBtn = document.getElementById('show-register-btn');
        const showLoginBtn = document.getElementById('show-login-btn');
        const loginBtn = document.getElementById('login-btn');
        const registerBtn = document.getElementById('register-btn');
        const logoutBtn = document.getElementById('logout-btn');
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        const regUsernameInput = document.getElementById('reg-username');
        const regEmailInput = document.getElementById('reg-email');
        const regPasswordInput = document.getElementById('reg-password');
        const regConfirmPasswordInput = document.getElementById('reg-confirm-password');
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
        const currentLevelDisplay = document.getElementById('current-level-display');
        const currentQuestionElement = document.getElementById('current-question');
        const totalQuestionsElement = document.getElementById('total-questions');
        const totalQuestionsDisplay = document.getElementById('total-questions-display');
        const resultLevel = document.getElementById('result-level');

        // Event Listeners
        loginBtn.addEventListener('click', handleLogin);
        registerBtn.addEventListener('click', handleRegister);
        showRegisterBtn.addEventListener('click', showRegisterForm);
        showLoginBtn.addEventListener('click', showLoginForm);
        logoutBtn.addEventListener('click', handleLogout);
        prevBtn.addEventListener('click', showPreviousQuestion);
        nextBtn.addEventListener('click', showNextQuestion);
        submitQuizBtn.addEventListener('click', submitQuiz);
        restartQuizBtn.addEventListener('click', restartQuiz);
        backToMainBtn.addEventListener('click', backToMain);

        // Adicionar event listeners para os botões de nível
        document.querySelectorAll('.level-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const level = this.getAttribute('data-level');
                startQuiz(level);
            });
        });

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

            // Verificar se o utilizador já existe
            const existingUser = users.find(u => u.email === email || u.username === username);
            if (existingUser) {
                showMessage('Já existe uma conta com este email ou nome de utilizador.', 'error', registerForm);
                return;
            }

            // Criar novo utilizador
            const newUser = {
                id: Date.now(),
                username,
                email,
                password: btoa(password), // Encriptação básica
                createdAt: new Date().toISOString()
            };

            users.push(newUser);
            localStorage.setItem('pessoaQuizUsers', JSON.stringify(users));

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
        }

        // Função de login
        function handleLogin() {
            const username = usernameInput.value.trim();
            const password = passwordInput.value;

            if (!username || !password) {
                showMessage('Por favor, preencha todos os campos.', 'error', loginForm);
                return;
            }

            // Verificar credenciais
            const user = users.find(u => u.username === username);
            
            if (!user) {
                showMessage('Nome de utilizador ou password incorretos.', 'error', loginForm);
                return;
            }

            // Verificar password
            if (user.password !== btoa(password)) {
                showMessage('Nome de utilizador ou password incorretos.', 'error', loginForm);
                return;
            }

            // Login bem-sucedido
            currentUser = user;
            userDisplay.textContent = user.username;
            
            loginScreen.classList.add('hidden');
            mainScreen.classList.remove('hidden');

            // Limpar formulário
            usernameInput.value = '';
            passwordInput.value = '';
            clearFormMessages();
        }

        // Função de logout
        function handleLogout() {
            currentUser = null;
            usernameInput.value = '';
            passwordInput.value = '';
            
            mainScreen.classList.add('hidden');
            loginScreen.classList.remove('hidden');
            showLoginForm();
        }

        // Função para iniciar o quiz
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
            
            // Esconder tela principal e mostrar quiz
            mainScreen.classList.add('hidden');
            quizScreen.classList.remove('hidden');
            
            showQuestion();
        }

        // Função para mostrar a pergunta atual
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
                        <input type="text" id="answer-input" placeholder="Digite sua resposta aqui" 
                               value="${userAnswers[currentQuestionIndex] || ''}">
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

        // Função para mostrar pergunta anterior
        function showPreviousQuestion() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                showQuestion();
            }
        }

        // Função para mostrar próxima pergunta
        function showNextQuestion() {
            if (currentQuestionIndex < currentQuestions.length - 1) {
                currentQuestionIndex++;
                showQuestion();
            }
        }

        // Função para submeter o quiz
        function submitQuiz() {
            let score = 0;
            const results = [];
            
            currentQuestions.forEach((question, index) => {
                const userAnswer = userAnswers[index];
                let isCorrect = false;
                
                if (question.type === 'direct') {
                    // Para respostas diretas, comparar de forma flexível
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
            
            // Mostrar resultados
            showResults(score, results);
        }

        // Função para mostrar resultados
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

        // Função para reiniciar o quiz
        function restartQuiz() {
            resultsScreen.classList.add('hidden');
            startQuiz(currentLevel);
        }

        // Função para voltar ao menu principal
        function backToMain() {
            resultsScreen.classList.add('hidden');
            mainScreen.classList.remove('hidden');
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
        }

        // Verificar se já existe um usuário logado
        window.addEventListener('load', function() {
            const savedUser = localStorage.getItem('currentUser');
            if (savedUser) {
                const user = JSON.parse(savedUser);
                const foundUser = users.find(u => u.id === user.id);
                if (foundUser) {
                    currentUser = foundUser;
                    userDisplay.textContent = foundUser.username;
                    loginScreen.classList.add('hidden');
                    mainScreen.classList.remove('hidden');
                    showLoginForm();
                }
            }
        });

        // Enter key para login
        usernameInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleLogin();
            }
        });

        passwordInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleLogin();
            }
        });

        // Adicionar efeitos visuais aos botões de nível
        document.querySelectorAll('.level-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Atalho de teclado para navegação no quiz
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
    </script>
    <!-- Tela de Ranking -->
<div id="ranking-screen" class="hidden">
    <div class="user-info">
        <h2>Ranking Global</h2>
        <button id="back-from-ranking-btn" class="btn">Voltar ao Menu</button>
    </div>

    <div class="card">
        <h2>Estatísticas do Quiz</h2>
        
        <div class="stats-grid">
            <div class="stat-card">
                <h3>📈 Top Jogadores</h3>
                <div class="ranking-table-container">
                    <table class="ranking-table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th>Jogador</th>
                                <th>Nível</th>
                                <th>Pontuação</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody id="ranking-body">
                            <!-- Ranking será preenchido via JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="stat-card">
                <h3>📊 Distribuição por Nível</h3>
                <canvas id="levelChart" width="400" height="300"></canvas>
            </div>

            <div class="stat-card">
                <h3>🎯 Performance Média</h3>
                <canvas id="performanceChart" width="400" height="300"></canvas>
            </div>

            <div class="stat-card">
                <h3>⭐ Meus Resultados</h3>
                <div id="user-stats">
                    <!-- Estatísticas do usuário serão preenchidas via JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>