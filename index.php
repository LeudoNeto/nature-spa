<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <title>Nature SPA</title>
</head>
<body>
    <div class="one">
        <div class="top">
            <img src="img/logo.png" height="80">
            <a href="tel:48999999990"><h2 id="phone">(48) 9 9999 9999</h2></a>
        </div>
        <div class="mid-one">
            <div class="text-mid-one">
                <h1>Já pensou em ficar livre de espinhas da noite pro dia?</h1>
                <h3>Com nossa massagem facial revitalizante, com produtos 100% naturais, você pode! Faça agora um chamado e iremos lhe responder com os detalhes e também o agendamento do serviço, caso desejado.</h3>
            </div>
            
            <form method="post">
                <div class="form-mid-one">
                
                    <h1>Chamada para ação</h1>
                    <div class="inputBox">
                        <span>NOME:</span>
                        <input name="name" type="text" required="required">
                    </div>
                    <div class="inputBox">
                        <span>E-MAIL:</span>
                        <input name="email" type="email" required="required">
                    </div>
                    <div class="inputBox">
                        <span>DDD + TELEFONE:</span>
                        <input name="phone" style="width: 8em;" onkeydown="phoneNumberFormatter()" id="phone-number" type="text" required="required">
                    </div>
                    <div style="padding-top: 0.8em;" class="inputBox">
                        <span>COMO PODEMOS TE AJUDAR?</span><br>
                        <div><textarea name="request" style="padding-top: 0.1em; width: 18em; height: 4em;" required="required"></textarea></div>
                    </div>
                    <input id="submit-button" class="submit-button button-one" type="submit" value="Chamada para ação"><br>
                    <p><?php
                    require_once 'Chamada.php';

                    $name = $_REQUEST["name"] ?? null;
                    $email = $_REQUEST["email"] ?? null;
                    $phone = $_REQUEST["phone"] ?? null;
                    $request = $_REQUEST["request"] ?? null;

                    $chamada = new Chamada;

                    if ($name !== null && $email !== null && $phone !== null && $request !== null)
                    {
                        $chamada->setName($name);
                        $chamada->setEmail($email);
                        $chamada->setPhone($phone);
                        $chamada->setRequest($request);

                        echo $chamada->create();
                    }
                    ?></p>

                </div>
            </form>

        </div>
    </div>

    <div class="two">
        <div class="two-img"><img src="img/quemsomos.jpg" height="300"></div>
        <div class="two-text">
            <h1>Quem somos.</h1>
            <p>Localizados na Rua Cônsul Orestes Correa no Bairro Macedo em Guarulhos-SP, somos um spa comprometido com a qualidade de nossos cremes, feitos com fórmula original nossa, e 100% naturais, ou seja, com 0 malefícios e mínimas contraindicações.</p>
        </div>
    </div>

    <div class="three">
        <h1>Com nossa massagem revitalizante você...</h1>

        <div class="three-benefits">
            <div class="three-benefits-one">
                <div>
                    <img src="img/beneficio1.png" height="55">
                    <div>
                        <h3>Não se preocupa com efeitos colaterais</h3>
                        <p>Por utilizar cremes 100% naturais, e já testados em muitos casos diferentes previamente, você pode ficar tranquila em relação a manchas ou erupções posteriores.</p>
                    </div>
                </div>
                <div>
                  <img src="img/beneficio2.png" height="55">
                  <div>
                        <h3>Não machuca os animais</h3>
                        <p>Todos os nossos cremes são testados apenas em humanos, com um método de eficácia comprovada, e além disso eles são completamente veganos.</p>
                    </div>
                </div>
                <div>
                  <img src="img/beneficio3.png" height="55">
                    <div>
                        <h3>Estimula a circulação sanguínea</h3>
                        <p>A massagem ajuda a circulação do sangue e oxigênio pelo corpo, o que ajuda na produção de colágeno, que clareia as manchas e é contra a acne.</p>
                    </div>
                </div>
            </div>
            <div class="three-benefits-two">
                <div>
                  <img src="img/beneficio4.png" height="55">
                    <div>
                        <h3>Desincha o rosto</h3>
                        <p>Fazemos uma drenagem linfática, o que elimina as toxinas do rosto, desinchando-o, assim ressaltando o contorno facial.</p>
                    </div>
                </div>
                <div>
                  <img src="img/beneficio5.png" height="55">
                    <div>
                        <h3>Reduz o estresse</h3>
                        <p>Com a liberação dos pontos de tensão, causados por estresse e que são possíveis causadores de acnes.</p>
                    </div>
                </div>
                <div>
                  <img src="img/beneficio6.png" height="55">
                    <div>
                        <h3>Diminui a flacidez</h3>
                        <p>Com nossa massagem os traços da terceira idade ficam menos evidentes, tendo um aumento na elasticidade da pele, trazendo assim o aspecto jovial dos seus anos dourados.</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center;"><button style="transition: 0.5s;" class="button-one other-button">Chamada para ação</button></div>
    </div>

    <div class="four">
        <h1>Perguntas Frequentes</h1>

        <div class="accordion">
            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false">
                <span class="accordion-title">Só com uma sessão estarei com a pele mais limpa?</span>
              </button>
              <div class="accordion-content">
                <p>
                  Com uma sessão já são notados todos os benefícios acima,
                  porém o tratamento de seis em seis meses é imprescindível para
                  o êxito do resultado que almejamos.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-2" aria-expanded="false">
                <span class="accordion-title">A massagem deixa hematomas ou manchas?</span>
              </button>
              <div class="accordion-content">
                <p>
                  Não, a nossa massagem é feita por profissionais altamente qualificados
                  e treinados para tratarem sua pele com a maior leveza e cuidado.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-3" aria-expanded="false">
                <span class="accordion-title">Existe uma previsão da estimativa do efeito causado pelo procedimento?</span>
              </button>
              <div class="accordion-content">
                <p>
                  Os benefícios os quais citamos são vistos acontecendo depois de
                  três a cinco dias, dependendo da pele de cada indivíduo.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-4" aria-expanded="false">
                <span class="accordion-title">Há algum efeito colateral?</span>
              </button>
              <div class="accordion-content">
                <p>
                  Não, nossos cremes são naturais e veganos, o que torna improvável algum efeito colateral ou alergia causada pelo organismo.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-5" aria-expanded="false">
                <span class="accordion-title">Posso pegar sol depois do procedimento?</span>
              </button>
              <div class="accordion-content">
                <p>
                  Não aconselhamos no primeiro e segundo dia, já que usamos para as espinhas ácidos leves
                  mas prejudiciais se forem expostos ao sol logo após o uso. O indicado é sair para o sol e voltar
                  com as atividades normais somente após o primeiro dia.
                </p>
              </div>
            </div>
        </div>

    </div>

    <div class="five">
        <div class="five-one">
            <h1>Ainda em dúvida?</h1>
            <p>Então saiba que aqui temos satisfação garantida.</p>

        </div>
        <div class="five-two">
            <p>Se após uma semana os efeitos do tratamento citados anteriormente não aparecerem, você tem seu dinheiro de volta.</p>
            <div><button class="button-one other-button" style="transition: 0.5s; text-align: center;">Chamada para ação</button></div>
            <p id="subtext">Agende já, nossas atendentes estão esperando.</p>
        </div>
    </div>

    <div class="six">
        <p>Nature SPA ⓒ Todos os direitos reservados - 2022</p>
        <p>CNPJ 99.999.999 - 0009-99 ° TERMOS DE USO</p>
    </div>
    
    <script src="script.js"></script>
</body>
</html>