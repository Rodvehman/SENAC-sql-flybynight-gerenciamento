'use strict';

// Seçecionando todos os links de Excluir
const links = document.querySelectorAll('.excluir');

for(const link of links){
    link.addEventListener("click", function(event){
        // Anular comportamento padrão do evento
        event.preventDefault();
        
        let resposta = confirm("Deseja realmente excluir este registro?");
        if (resposta){
            // Redirecionamos para o endereço (href) do link
            location.href = link.href;
        }
    });
}