-- ATAULIZAÇÃO DE TABELAS
-- UPDATE NOME_TABELA
-- SET nome_do_campo = novo_valor
-- WHERE id = numero_do_id;

-- EXEMPLO
UPDATE contatos
SET
	sobrenome = 'Tenório',
    ddd = 33,
    telefone = 70607060,
    email = 'tenorio@exemplo.com.br'
WHERE id_contato = 1;

-- EXCLUIR REGISTROS
DELETE FROM contatos
WHERE id_contato = 1;

-- SE NÃO USAR O WHERE APAGA A TABELA INTEIRA
DELETE FROM contatos;