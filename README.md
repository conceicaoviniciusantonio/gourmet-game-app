# Gourmet Game App
## Executando a aplicação
### Utilizando Docker
Dependências:
- Docker

Acesse o diretório raiz do projeto e execute os seguintes comandos:

Construindo a imagem:
```
docker build -t gourmet-game-app .
```
Executando a imagem da aplicação: 
```
docker run -it gourmet-game-app
```
### Utilizando o proprio sistema
Dependências:
- PHP 8.1
- Composer

Acesse o diretório raiz do projeto e execute os seguintes comandos:

Instalando dependências do projeto:
```
php composer install
```

Executando testes unitários:
```
./vendor/bin/phpunit src/Tests/*
```

Executando arquivo da aplicação:
```
php index.php
```

