# Desafio Estágio da Convergence Works

Gosta de novas tecnologias e de desafios? Tem espírito de equipe e é comprometido? Você gostaria de colocar tudo isto em prática em uma empresa?

## API?
API é um conjunto de normas que possibilita a comunicação entre plataformas através de uma série de padrões e protocolos.Desenvolvedores podem criar novos softwares e aplicativos capazes de se comunicar com outras plataformas.
Como se trata de uma APIRest ela é fornecida por informações do site [https://www.correio24horas.com.br/rss/].


## Exemplo
A pasta Contém um arquivo chamado[cliente.php] -> Nele tem um exemplo de como monta a url da API.

## A pasta api
Contem 2 tipos de arquivos, um file [index.php] e uma Pasta [classes].
[index.php] ->Essa página será responsável por identificar o Módulo e o Método que desejamos executar capturando o REQUEST. 
[classes]-> Comporta o arquivo [Correio.php]-> Nele esta contido as funções que foram pedidas pelo desafio da API.

## [Correio.php]
O desafio foi respondido em torno de onze(11) funções, que são:

1 - [function_show()]
Função responsável por mostrar todos os dados em forma de JSON.
2 - [function_get_data()]
Função responsável por pegar os dados xml.
3 - [function_convert_to_json()] 
Função responsável por converter os arquivos xml para JSON.
4 - [function_sort_by_name_ascending()]
Função responsável por retornar os dados de forma crescente, utilizando usort e o titulo.
5 - [function_sort_by_name_descending()]
Função responsável por retornar os dados de forma decrescente, utilizando usort e o titulo.
6 - [function_sort_by_ascending_day()]
Função responsável por retornar os dados de forma crescente, utilizando usort e a data.
7 - [function_sort_by_descending_day()]
Função responsável por retornar os dados de forma crescente, utilizando usort e a data.
8 - [function_filter_by_category($param)]
Função responsável pela filtragem, tendo como parametro pedido, categoria (category).
9 - [function_filter_by_limit($param)]
Função responsável pela filtragem, tendo como parametro pedido, limitar as noticias (aceitar valores de 1 até 20).
10 - [function_filter_fields()]
Função responsável pela filtragem dos seguintes campos: title, description e pubDate.

Bonus - 11 - [function_filter_text($param)]
Função responsável pela filtragem, se a palavra contém no título ou na descrição.


Ps: Todas as filtragens caso não ocorra resposta retorna nulo.






# Desafio Estágio da Convergence Works

Gosta de novas tecnologias e de desafios? Tem espírito de equipe e é comprometido? Você gostaria de colocar tudo isto em prática em uma empresa?

## Quem somos?
Somos a Convergence Works, somos a convergência entre os desafios das empresas e as ideias pra vencê-los. Desenvolvemos plataformas para o mundo digital, com foco em comunicação. Somos especialistas na criação de sites e aplicativos para plataformas de comunicação. Integramos sistema de gestão de conteúdo, aplicativo, disparo de email, solução para clube de assinantes, implantação de editoriais em múltiplas plataformas.

## A Vaga
Para se candidatar:  

- Conhecimento em programação (PHP, JavaScript ou outras)
- Noções de desenvolvimento de software
- Conhecimentos em Git
- Conhecimentos em Http
- Capacidade de comunicação, comprometimento e vontade de pôr a mão na massa;
- Capacidade de aprender rapidamente tecnologias emergentes.

Benefícios
- Excelente ambiente de trabalho 
- Oportunidade de crescimento e contratação

## O Desafio
Para avaliar seu desempenho temos um desafio para você.

Você deverá fazer um fork deste repositório, e desenvolver uma api de notícias acessível. A aplicação deverá consumir a seguinte fonte de dados RSS [https://www.correio24horas.com.br/rss/] e entregar as notícias no formato json, permitindo as seguintes funcionalidades:

- Ordenação: As notícias deverão ser ordenadas por ordem crescente e decrescente a partir dos sequintes campos: pubDate e title
- Filtro de Categoria: Filtrar pelo campo de categoria (category)
- Filtro de limite: Limitar um número máximo de notícias (aceitar valores de 1 até 20)
- Filtro básico: Apenas deverá ser entregue os seguintes campos das notícias: title, description e pubDate.

Ps: Os filtros e ordenações deverão ser passados por parametro GET e documentados no README.md do projeto Git.

Bonus: Filtro de busca textual.

## Critérios de Avaliação

- Organização
- Semântica
- Decisões Técnicas
- Ferramentas Utilizadas