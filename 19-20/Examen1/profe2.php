<html>

<?php 
    if (iisset($_POST['cuenta']) and $_POST['cuenta']!==''){

        try{
            if(codigo_cuenta_correcto($_POST['cuenta'])) echo 'Número de cuenta válido.';
            else echo 'No válido';
        }catch (SoloNumerosException $e) {
            exit ($e->getMessage());
        }catch (No20DigitosException $e){
            exit ('La cuenta debe estar formada por 20 dígitos');
        }

        }
    
