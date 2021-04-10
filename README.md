# local-video-server
Servidor XAMPP local para reprodução vídeos em uma rede local

Eu tenho no desktop vários cursos que eu comprei e guardei todos em uma pasta.
Para assistir na TV ou no celular era quase impossível. As vezes, só copiando fisicamente os arquivos.

O que eu fiz:

Usei um servidor XAMPP local para hospedar um pequeno site em php, onde são listados todas as pastas e arquivos dentro delas.
O site lê o diretório principal e lista automaticamente os arquivos.

## Configuração:
No meu caso servidor XAMPP roda em um diretório e a pasta com os cursos está em outro HDD.
Precisei criar um Alias em xampp > apache > conf > httpd.conf
Isso garantiu que a pasta cursos externa fosse acessível pela url http://localhost/cursos ou http://seu-ip-local/cursos 

```
Alias /cursos "D:/cursos"

<Directory "D:/cursos" >
    Options Indexes FollowSymLinks MultiViews
    Require all granted
</Directory>
```
