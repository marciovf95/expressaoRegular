<?php 
    // Valida Telefones Brasileiros com o 0 No DDD
    // Exemplos válidos: +55 (011) 94587-9874 / 9999-9999 / 21 97897-8888 / 5511988888888
    // caso queira validar numero sem o 0 do 043 descomentar o regex e comentar o outro.
    // Nenhum número de telefone pode iniciar com 0 ou 1.

    function ValidarTelefone($numero)
    {
        //$regex = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
        $regex = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([0][1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';
        if (preg_match($regex, $numero) == false) {
            // O número esta invalidado.
            return false;
        } else {
            // O número esta .ok
            return true;
        }        
    }
    
