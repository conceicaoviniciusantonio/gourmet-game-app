# Gourmet Game App
## Executando a aplicação
### Utilizando Docker
Dependências:
- Docker: https://docs.docker.com/engine/install/ubuntu/

Acesse o diretório raiz do projeto e execute os seguintes comandos:

Construindo a imagem:
```
$ docker build -t gourmet-game-app .
```
Executando a imagem da aplicação: 
```
$ docker run -it gourmet-game-app
```
### Utilizando o proprio sistema
Dependências:
- PHP 8.1.
- Composer: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

Acesse o diretório raiz do projeto e execute os seguintes comandos:

Instalando dependências do projeto:
```
$ php composer install
```
Executando arquivo da aplicação:
```
$ php index.php
```