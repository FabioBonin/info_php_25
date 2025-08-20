
    (
      SELECT * FROM usuarios u
INNER JOIN pessoas p ON u.id = p.id_usuario;

SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios u
INNER JOIN pessoas p ON u.id = p.id_usuario;


SELECT u.login, u.nome_usuario, e.cidade, p.data_nascimento, p.cpf, e.pais FROM usuarios u
JOIN pessoas p ON u.id = p.id_usuario
JOIN endereco e ON p.id = e.id_pessoas;
    )