# Modelagem física.

Modelagem física tem a tarefa de IMPALNTAR o banco de dados no servidor/back-end.

## COMANDO DE SQL para modelagem

### Criar o banco de DADOS

```sql
CREATE DATABASE microblog_will CHARACTER SET utf8mb4;

```

### Criar tabela de usuários

```sql
CREATE TABLE usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(65) NOT NULL,
    email VARCHAR(65) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin', 'editor') NOT NULL
);

```

### Criar tabela de noticias

```sql
CREATE TABLE noticias(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATETIME NOT NULL DEFAULT CURREnT_TIMESTAMP,
    titulo VARCHAR(150) NOT NULL,
    texto TEXT NOT NULL,
    resumo TINYTEXT NOT NULL,
    imagem VARCHAR(65) NOT NULL,
    usuario_id INT NOT NULL 
);

```