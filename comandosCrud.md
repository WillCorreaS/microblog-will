### COMANDOS CRUD

- C: CREATE (INSERT) => inserir dados
- R: READ   (SELECT) => ler/carregar dados
- U: UPDATE (UPDATE) => altualiza dados
- D: DELETE (DELETE) => deletar/excluir dados

## Exemplos:

### INSERT na tabelade usuarios
```sql
INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Wilian', 'wilian.cine@gmail.com', '123senac', 'admin');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Thiago', 'thiago22e@gmail.com', '123senac', 'editor');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Gabriela', 'gabriela22@gmail.com', '123senac', 'editor');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Nikollas', 'nikko22@gmail.com', '123senac', 'editor');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Flávia', 'flavia22@gmail.com', '123senac', 'editor');
```

### SELECT na tabela de usuarios

```sql
SELECT nome, email FROM usuarios;
```

```sql
SELECT nome, email FROM usuarios WHERE tipo = 'admin';
```

```sql
SELECT nome, email FROM usuarios WHERE tipo = 'editor';
```

```sql
SELECT * FROM usuarios WHERE id > 1;
```

### UPDATE na tabela de usuários

```sql
UPDATE usuarios SET tipo = 'editor' WHERE id > 1;

-- Nunca deve se esquecer de passar pelo menos 1 condição para o comando 'UPDATE'
```

```sql
DELETE FROM usuarios WHERE id > 2;
-- Nunca deve se esquecer de passar pelo menos 1 condição para o comando 'UPDATE'
```
```sql
INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Chaves', 'chaves@gmail.com', '123senac', 'editor');
```
```sql
INSERT INTO usuarios(nome, email, senha, tipo)
VALUES('Chapolim', 'chapolim@hotmail.com', '123senac', 'admin');
```

```sql
SELECT id, nome, tipo FROM usuarios;
```

```sql
SELECT id, nome, tipo FROM usuarios WHERE id > 5;
```

```sql
SELECT nome FROM usuarios ORDER BY `usuarios`.`nome` ASC;
-- Comando feito para visualizar em ordem alfabética os nomes dos usuários
```

```sql
SELECT nome FROM usuarios ORDER BY `usuarios`.`nome` DESC;
-- Comando feito para visualizar em ordem (contraria) alfabética os nomes dos usuários
```

```sql
SELECT * FROM `usuarios` ORDER BY `usuarios`.`id` DESC
-- Comando para filtrar 'IDs' em ordem Descendente
```

```sql
SELECT * FROM `usuarios` ORDER BY `usuarios`.`id` ASC
-- Comando para filtrar 'IDs' em ordem Ascendente
```


#### Inserindo noticias no Microblog

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES('Novo Prêmio de Ciências',
       'No novo concurso de projetos de ciências da cidade de SP foi dado para uma criança de 12 anos o prêmio de ciências de 2024.',
       'Prêmio dado para criança de 12 anos.',
       'premio.jpg',
       '1');
```

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES('Modelo de moda peculiar',
       'Neste ano de 2024 um novo modelo de carro PECULIAR foi lançado pela Fiat.',
       'Novo modelo de carro lançado pela Fiat.',
       'novo_carro.jpg',
       '5');
```


```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES('Programação Web',
       'Este curso de Programação Web do Senac está fornecendo muito conhecimento nesta área.',
       'Estudando Programação Web no Senac.',
       'programacao_web.jpg',
       '3');
```

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES('Sobre CSS3',
       'Utilizando CSS3 é a melhor forma para estilizar páginas web e torná-las agradáveis ao usuários.',
       'Utilizando CSS3 no Front-end.',
       'css3_web.jpg',
       '4');
```

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES('Conhecimentos em MySQL',
       'Banco de Dados está se tornando fácil de entender neste curso de Programação Web do Senac.',
       'Aprendendo Banco de dados Back-end.',
       'mysql.jpg',
       '1');
```

```sql
DELETE FROM noticias WHERE id = 5;
```

```sql
SELECT titulo, data FROM noticias;
```

```sql
SELECT titulo, data FROM noticias ORDER BY data DESC;
```

```sql
SELECT id, titulo, data FROM noticias ORDER BY id DESC;
```

```sql
SELECT usuario_id, id, titulo, data FROM noticias ORDER BY usuario_id DESC;
```

```sql
SELECT usuario_id, id, titulo, data FROM noticias ORDER BY usuario_id.nome DESC;
```

#### CONSULTA COM JUNÇÃO DE TABELAS - SELECT com JOIN

<!-- Realizar consulta que mostra a data e titulo da noticia junto com o nome do autor da noticia (usuario) -->

```sql
--Selecionando as colunas indicando em qual tabela estão
SELECT
    noticias.data, -- coluna data da tabela noticia
    noticias.titulo, --
    usuarios.nome -- coluna nome da tabela usuarios

--Especificando as tabelas que serão "juntadas/combinadas"    
FROM noticias JOIN usuarios

--Criterio da junção/relação entre as tabelas
--Utilizamos as referências de FK(Chave estrangeira) e PK(Chave primaria)
ON noticias.usuario_id = usuarios.id
```

```sql
SELECT
    noticias.titulo,
    noticias.resumo,
    usuarios.nome,
    usuarios.id
FROM noticias JOIN usuarios
ON noticias.usuario_id = usuarios.id
```
