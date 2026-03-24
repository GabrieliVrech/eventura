# Eventura

Projeto web em PHP para descoberta, visualização e futura gestão de eventos.

O estado atual do projeto foi organizado para crescer por página/feature, mantendo separação clara entre:

- páginas
- recursos compartilhados
- assets visuais
- futuras áreas do sistema

Atualmente existem duas páginas implementadas:

- página inicial
- página individual de evento

Também já existem pastas reservadas para futuras páginas:

- registro
- login
- calendário
- perfil
- histórico
- criar evento

## Stack Atual

- PHP
- HTML
- CSS
- JavaScript

Não há framework PHP no momento.
Não há banco de dados integrado ainda.
Os dados atuais das páginas são estáticos e vêm de arquivos PHP que retornam arrays.

## Como Rodar Localmente

Na raiz do projeto:

```bash
php -S localhost:8800  (ou uma porta livre)
```

Depois abra no navegador:

- `http://localhost:8800/index.php`
- `http://localhost:8800/evento/index.php`

## Estrutura do Projeto

```text
/
├─ index.php
├─ README.md
├─ home/
│  ├─ index.php
│  ├─ layout.php
│  ├─ data.php
│  ├─ partials/
│  │  ├─ hero.php
│  │  └─ main.php
│  ├─ css/
│  │  └─ home.css
│  └─ js/
│     └─ home.js
├─ evento/
│  ├─ index.php
│  ├─ layout.php
│  ├─ data.php
│  ├─ partials/
│  │  ├─ hero.php
│  │  ├─ main.php
│  │  └─ comments.php
│  ├─ css/
│  │  └─ evento.css
│  └─ js/
│     └─ evento.js
├─ shared/
│  ├─ includes/
│  │  └─ helpers.php
│  ├─ partials/
│  │  ├─ header.php
│  │  └─ footer.php
│  └─ css/
│     └─ site.css
├─ images/
│  ├─ logo.svg
│  ├─ logo.png
│  ├─ logo1.png
│  └─ ...
├─ registro/
├─ login/
├─ calendario/
├─ perfil/
├─ historico/
└─ criar-evento/
```

## Como o Projeto Está Organizado

### 1. `index.php` na raiz

O arquivo `index.php` da raiz existe para manter a home acessível diretamente pela raiz do projeto.

Ele funciona como um bootstrap simples:

- define o contexto base da home
- delega a renderização para `home/index.php`

Isso permite que a homepage continue acessível sem obrigar a URL `/home/index.php`.

### 2. Uma pasta por página

Cada página implementada possui a sua própria pasta.

Hoje isso já acontece com:

- `home/`
- `evento/`

Dentro de cada pasta de página, a lógica segue um padrão:

- `index.php`: entrada da página
- `layout.php`: estrutura HTML principal
- `data.php`: dados estáticos da página
- `partials/`: blocos menores da interface
- `css/`: estilos específicos da página
- `js/`: scripts específicos da página

Esse padrão foi escolhido para facilitar crescimento futuro, organização do código e manutenção.

### 3. Recursos compartilhados em `shared/`

Tudo o que pode ser reutilizado entre páginas fica em `shared/`.

#### `shared/includes/helpers.php`

Contém helpers globais, por exemplo:

- `e()`: escape de saída HTML
- `format_currency_eur()`: formatação de moeda em euros
- `avatar_initial()`: inicial do nome para avatar

#### `shared/partials/`

Componentes compartilhados entre páginas:

- `header.php`
- `footer.php`

#### `shared/css/site.css`

Estilos globais do projeto:

- reset básico
- variáveis CSS
- componentes reutilizáveis
- estilos do header/footer
- base visual comum

### 4. Assets em `images/`

A pasta `images/` centraliza os arquivos visuais do projeto.


## Como Cada Página Funciona

### Home

Fluxo da home:

1. `index.php` chama `home/index.php`
2. `home/index.php` carrega:
   - `shared/includes/helpers.php`
   - `home/data.php`
3. `home/index.php` prepara variáveis como:
   - `$hero`
   - `$eventos`
   - `$criacao`
   - `$rootPath`
4. `home/index.php` chama `home/layout.php`
5. `home/layout.php` monta o HTML e inclui:
   - `home/partials/hero.php`
   - `home/partials/main.php`
   - `shared/partials/footer.php`
6. `home/layout.php` também carrega:
   - `shared/css/site.css`
   - `home/css/home.css`
   - `home/js/home.js`

### Página de Evento

Fluxo da página de evento:

1. `evento/index.php` carrega:
   - `shared/includes/helpers.php`
   - `evento/data.php`
2. `evento/index.php` prepara variáveis como:
   - `$evento`
   - `$quantidadeInicial`
   - `$totalInicial`
   - `$rootPath`
3. `evento/index.php` chama `evento/layout.php`
4. `evento/layout.php` inclui:
   - `evento/partials/hero.php`
   - `evento/partials/main.php`
   - `shared/partials/footer.php`
5. Dentro de `evento/partials/main.php`, a seção de comentários é incluída via:
   - `evento/partials/comments.php`
6. `evento/layout.php` também carrega:
   - `shared/css/site.css`
   - `evento/css/evento.css`
   - `evento/js/evento.js`

## O Papel de `$rootPath`

Como o projeto usa componentes compartilhados entre páginas que estão em pastas diferentes, existe uma variável importante: `$rootPath`.

Ela é usada para construir caminhos corretos de:

- links
- CSS
- JS
- imagens

Exemplo:

- na home renderizada pela raiz, o contexto usa `''`
- numa página dentro de subpasta, o contexto usa `../`

Isso permite reutilizar o mesmo `header.php` e `footer.php` em mais de um lugar sem quebrar caminhos.

## Onde Alterar Cada Tipo de Coisa

### Se quiser mudar conteúdo

Edite o `data.php` da página:

- `home/data.php`
- `evento/data.php`

### Se quiser mudar estrutura visual

Edite:

- `layout.php`
- arquivos em `partials/`

### Se quiser mudar estilos

Edite:

- `shared/css/site.css` para estilos globais
- `css/` da página para estilos específicos

### Se quiser mudar comportamento

Edite o `js/` da página:

- `home/js/home.js`
- `evento/js/evento.js`

### Se quiser mudar algo comum a todas as páginas

Edite:

- `shared/partials/header.php`
- `shared/partials/footer.php`
- `shared/includes/helpers.php`
- `shared/css/site.css`

## Estado Atual da Fonte de Dados

Hoje o projeto ainda usa dados estáticos em arquivos PHP.

Exemplo:

- eventos da home vêm de `home/data.php`
- detalhes do evento vêm de `evento/data.php`


## Evolução Planeada

No futuro, o projeto deverá integrar uma base de dados para:

- registro de utilizadores
- login
- busca de dados do utilizador
- busca de dados dos eventos
- histórico
- criação de eventos


O passo natural será substituir parte dos `data.php` por uma camada de acesso a dados, serviços ou controllers.

## Como Adicionar uma Nova Página

O padrão recomendado para novas páginas é:

1. criar uma pasta na raiz com o nome da página
2. criar dentro dela:
   - `index.php`
   - `layout.php`
   - `partials/`
   - `css/`
   - `js/`
3. usar `shared/` para tudo o que for reutilizável
4. colocar assets globais em `images/`
5. manter a lógica da página isolada dentro da sua própria pasta

## Convenção Atual

- páginas em pastas próprias
- shared para recursos comuns
- images para assets visuais
- dados ainda estáticos
- sem framework

## Observação

Se alguma referência antiga aparecer no editor, como caminhos usando `eventos/`, considere isso legado do estado anterior do projeto.

A estrutura atual correta usa:

- `evento/` para a página individual de evento
- `home/` para a página inicial
