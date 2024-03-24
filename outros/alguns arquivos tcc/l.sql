UPDATE tab_emprestimos SET date_format(data_entrega,'%d/%m/%Y');
UPDATE date_format(data_entrega,'%d/%m/%Y') from tab_emprestimos

select date_format(data_emprestimo, '%a %D %b %Y') 
as formatted_date 
from tab_emprestimos;