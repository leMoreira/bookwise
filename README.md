# bookwise

select  l.id, 
        l.titulo, 
        l.autor,
        l.descricao,
        l.ano_de_lancamento,
        round(sum(a.nota) / 5.0) as nota_avaliacao,
        count (a.id) as count_avaliacoes
from
        livros l
        left join avaliacoes a on a.livro_id = l.id
where   l.id = :id
group by
        l.id,
        l.titulo,
        l.autor,
        l.descricao,
        l.ano_de_lancamento