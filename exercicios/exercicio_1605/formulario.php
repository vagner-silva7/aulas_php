

<?php include "includes/cabecalho.php" ?>

    <article class="conteudo">

        <h2>Cadastro de produtos</h2>
            <hr>
            
            <p> Digite as informações abaixo, para cadastrar produtos.</p> 
            
            <p>Segue as instruções:</p>
            
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Quidem enim sed aliquam maiores omnis excepturi aperiam laborum 
            laudantium tenetur quaerat delectus reiciendis, officiis voluptate. 
            Cum laboriosam magnam illo dolore soluta?</p>

                <!-- Formulario contato -->
                <!-- Action - Envio ao formspree.io (envio de dados para o email cadastrado no site) -->
                <form id="my-form" action="https://formspree.io/f/mwkyrzgj" method="post" action="formulario.php">

                    <div>
                        <!-- instrução do caixa (Nome:)  -->
                        <!-- for será igual id -->
                        <label for="nome">Nome:</label>
                        
                        <!-- caixa de entrada -->
                        <!-- required, não permite envio em branco do item -->
                        <input type="text" name="nome" id="nome" placeholder="Digite nome do produto" required>
                    </div>

                    <div>
                        <!-- Em select, abre caixa de opções -->
                        <label for="fabricante">Selecione o fabricante:</label>
                        <select id="fabricante">
                            <?php
                                $produtos = [
                                    "" => "",
                                    "asus" => "asus",
                                    "microsoft" => "microsoft",
                                    "lg" => "lg",
                                    "brastemp" => "brastemp",
                                ];

                                // cada ciclo para prcorrer os elementosde um array

                                    foreach ( $produtos as $produto => $nome) {

                                    echo '<option value=".$produto.">'.$nome.'<option>';
                                    }
                            ?>

                        </select>
                    </div>

                    <div>
                        <!-- instrução do caixa (Preço:)  -->
                        <!-- for será igual id -->
                        <label for="preco">Preço:</label>
                        
                        <!-- caixa de entrada -->
                        <input type="number" name="preco" id="preco" min="100" max="10000" step=".01" placeholder="Digite o valor do produto" required>

                    </div>
                 
                    <div>
                        <!-- instrução do caixa (Quantidade:)  -->
                        <!-- for será igual id -->
                        <label for="quantidade">Quantidade:</label>
                        
                        <!-- caixa de entrada -->
                        <input type="number" name="quantidade" id="quantidade" min="0" max="50" placeholder="Digite a quantidade de produtos" required>
                    </div>

                    <div>
                        <!-- instrução do caixa (Descrição:)  -->
                        <!-- for será igual id -->
                        <label for="descricao">Descrição:</label>
                        
                        <!-- caixa de entrada -->
                        <!-- required, não permite envio em branco do item -->
                        <input type="text" name="descricao" id="descricao" placeholder="Digite descrição do produto" required>
 
                    </div>

                        <button type="submit">Enviar dados</button>

                        <p id="my-form-status"></p>

                <!-- Pode ser assim também: -->
                <!-- <input type="button" value="Enviar dados"> -->
                </form>


            </article>

</main>

<?php require "includes/rodape.php" ?>


<!-- Exercício Formulário HTML com PHP
1) Crie um novo arquivo e nele faça um formulário para cadastro (simulação) de produtos com os seguintes campos:

    Nome do produto (campo de texto)
    Fabricante (select de opções com pelo menos 4 nomes de fabricantes)
    ***** Preço (campo de número com valor mínimo de 100 e máximo de 10000, além de suporte à 2 casas decimais para os centavos)
    Quantidade (campo de número com valor mínimo de 0 e máximo de 50)
    Descrição (área de texto)

Desafio: as opções do campo select (Fabricante) devem ser carregadas a partir dos dados de um 
***** array PHP com os nomes dos fabricantes. Portanto, crie um array simples contendo uma lista com o nome de 4 fabricantes (exemplo: Asus, Microsoft, LG, Brastemp) e use um loop para gerar as opções dentro do select.

2) Faça a programação de processamento do formulário considerando o envio/recebimento dos dados via POST. Os dados devem ser exibidos no HTML usando as tags de sua preferência (parágrafos, listas, divs etc).

Desafio: pesquise sobre funções de filtros de sanitização e validação de campos de formulário e tente aplicar pelo menos um desses filtros em algum campo.
ENTREGA: Até 16/05/2022

Coloque os arquivos do exercício em seu repositório progweb-php no GitHub ou me envie por e-mail (professor.tiagobsantos@gmail.com). -->

