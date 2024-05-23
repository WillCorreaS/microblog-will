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