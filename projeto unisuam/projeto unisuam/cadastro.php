<!DOCTYPE html>
<html lang="pt-br">
        
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
        <title> Cadastro </title>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    </head>
    <body>
        <div id="background"> <!-- Caixa para definir a margem, a imagem de fundo e as cores. -->
                

            <div class="container"> <!-- Local (centralizado) onde todas as caixas e os títulos estão. -->
                
                <h1> Cadastro </h1> <br>

                <section class="form-box"> <!-- Tudo dentro desta div "section" é o formulário contendo todas as caixas de imput. -->
                                    
                    <form id="cadastro">
                        <div class="caixa">
                                <label for="nome"> <b> Nome Completo:</b> </label><br>
                                        <input type="text" id="nome" name="nome" 
                                        pattern="^[a-zA-Z\u00C0-\u00FF\s]*$" 
                                        required><br><br> <!-- Caixa para registrar o nome completo -->
                        </div>
                        <div class="caixa">                                                    
                                <label for="nome_materno"> <b>Nome Materno:</b> </label><br>
                                        <input type="text" id="nome_materno" name="nome_materno" 
                                        pattern="^[a-zA-Z\u00C0-\u00FF\s]*$" 
                                        required><br><br> <!-- Caixa para registrar o nome da sua mãe -->
                        </div>
                        <div class="caixa">
                        <label for="cpf"> <b>CPF:</b> </label><br>    
                                <input type="text" id="cpf" 
                                name="cpf" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}"
                                placeholder="000.000.000-00"  maxlength="14" 
                                required><br><br> <!-- Caixa para registrar o seu CPF; o pattern indica, por exemplo, 123.456.789-12 // a pontuação e o traço devem ser respeitados // -->
                        </div>
                        <div class="caixa">                                
                        <label for="data_nascimento"> <b>Data de Nascimento:</b> </label><br>
                                <input type="date" 
                                id="data_nascimento" name="data_nascimento" 
                                required><br><br> <!-- Caixa para registrar o dia em que nasceu -->
                        </div>
                        <div class="caixa">                                
                        <label for="sexo"> <b>Sexo:</b> </label><br>
                                <select id="sexo" 
                                    name="sexo" required> 
                                    <option value="feminino">Feminino</option> 
                                    <option value="masculino">Masculino</option>
                                </select><br><br> <!-- Caixa para registrar o seu sexo, se é masculino ou feminino -->
                        </div>
                        <div class="caixa">                            
                                <label for="celular"> <b>Número de Celular:</b> </label><br>
                                        <input type="tel"  
                                        name="celular" pattern="\(\d{2}\) \d{5}-\d{4}" maxlength="15"
                                        placeholder="Ex.: (11) 91234-5678" id="celular"
                                        required><br><br> <!-- Caixa para registrar o seu número de celular; o pattern indica, por exemplo, (11) 91234-5678 // o traço e os parênteses devem ser respeitados // -->
                        </div>
                        <div class="caixa">
                                <label for="telefone_fixo"> <b>Número de Telefone Fixo:</b> </label><br>
                                        <input type="tel"  
                                        name="telefone_fixo" pattern="\(\d{2}\) \d{4}-\d{4}" maxlength="14"
                                        placeholder="Ex.: (11) 1234-5678" id="telefone_fixo"
                                        required><br><br> <!-- Caixa para registrar o número do seu telefone fixo; o pattern indica, por exemplo, (11) 1234-5678 // o traço e os parênteses devem ser respeitados // -->
                        </div>
                        <div class="caixa">                                
                                <label for="endereco"> <b>Endereço Completo:</b> </label><br>
                                        <input type="text"  
                                        name="endereco" id="endereco"
                                        required><br><br> <!-- Caixa para registrar o seu endereço residencial -->
                        </div>
                        <div class="caixa">                                
                                <label for="email"> <b>E-mail:</b> </label><br> 
                                        <input type="email"  
                                        name="email" id="email"
                                        required><br><br> <!-- Caixa para registrar o seu e-mail -->
                        </div>
                        <div class="caixa">                                
                                <label for="nome_usuario"> <b>Nome de Usuário/Login:</b> </label><br>
                                        <input type="text" 
                                        name="nome_usuario" id="nome_usuario"
                                        required><br><br> <!-- Caixa para registrar o seu nome como usuário -->
                        </div>                                
                        <div class="caixa">
                                <label for="senha"> <b>Senha:</b> </label><br>
                                        <input type="password" minlength="5"
                                        name="senha" id="senha" 
                                        required><br><br> <!-- Caixa para registrar a senha para o seu perfil aqui no Space Gamer -->
                        </div>
                        <div class="caixa">                                
                                <label for="confirmacao_senha"> <b>Confirmação de Senha:</b> </label><br>
                                        <input type="password"  minlength="5"
                                        name="confirmacao_senha" id="confirmacao_senha"
                                        required><br><br> <!-- Caixa para confirmar a sua senha -->
                        </div>
                        <div id="buttons">
                            <input type="submit" value="Enviar"> <!-- Botão para finalizar (submit/Enviar) o cadastro -->
                            <a class="password" href="login.php"> já possui conta? </a>
                            <input type="reset" value="Refazer"> <!-- Botão para ara refazer (reset/Limpar Tela) o cadastro -->
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <script src="java/cadastro.js"></script>
    </body>
</html>