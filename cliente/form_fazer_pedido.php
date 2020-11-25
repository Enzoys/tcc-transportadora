<?php
    include "banco/confere.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        <a href="http://localhost/tcc1/cliente/cliemp.php">MENU ANTERIOR</a><br><br>
        <form method="post" action="banco/FazerPedido.php">
            <input type="hidden" id="status" name="status" value="EM ANÁLISE">
        <table width="200" border="0">                  
            <tr>    
                 <td></td>
                 <td>ENDEREÇO ORIGEM:</td>
            </tr>
            <tr>    
                 <td align="right">Estado:</td>
                 <td><select name="estado_origem">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                    </select>
                 </td>
            </tr>            
            <tr>    
                 <td align="right">Cidade:</td>
                 <td><input type="text" name="cidade_origem" size="5" /></td>
            </tr>           
            <tr>    
                 <td align="right">Bairro:</td>
                 <td><input type="text" name="bairro_origem" size="5" /></td>
            </tr>            
            <tr>    
                 <td align="right">Rua:</td>
                 <td><input type="text" name="rua_origem" size="5" /></td>
            </tr>            
            <tr>    
                 <td align="right">Numero:</td>
                 <td><input type="text" name="numero_origem" size="5" /></td>
            </tr>           
            <tr>    
                 <td align="right">Complemento:</td>
                 <td><input type="text" name="complemento_origem" size="5" /></td>
            </tr>            
            <tr>    
                 <td></td>
                 <td>ENDEREÇO DESTINO:</td>
            </tr>
            <tr>    
                 <td align="right">Estado:</td>
                 <td><select name="estado_destino">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                    </select>
                 </td>
            </tr>            
            <tr>    
                 <td align="right">Cidade:</td>
                 <td><input type="text" name="cidade_destino" size="5" /></td>
            </tr>           
            <tr>    
                 <td align="right">Bairro:</td>
                 <td><input type="text" name="bairro_destino" size="5" /></td>
            </tr>            
            <tr>    
                 <td align="right">Rua:</td>
                 <td><input type="text" name="rua_destino" size="5" /></td>
            </tr>            
            <tr>    
                 <td align="right">Numero:</td>
                 <td><input type="text" name="numero_destino" size="5" /></td>
            </tr>           
            <tr>    
                 <td align="right">Complemento:</td>
                 <td><input type="text" name="complemento_destino" size="5" /></td>
            </tr>
            
            <tr>
                <td align="right"></td>
                <td><input type="submit" value="Cadastrar" /></td>
            </tr>
       
        </table>
      </form>
</body>

</html>

