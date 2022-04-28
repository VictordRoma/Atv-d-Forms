<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="controller/ControllerPessoa.php" method="post">
            
        <table>
               
                
                <tr>
                    <td>
                        <label for="IblNome">Nome:</label>
                    </td>
                    <td>
                        <input type="text" name="txtNome" id="txtNome">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="IblEnd">Endereço:</label>
                    </td>
                    <td>
                        <input type="text" name="txtEnd" id="txtEnd">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="IblCid">Cidade:</label>
                    </td>
                    <td>
                        <input type="text" name="txtCid" id="txtCid">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="IblSen">Senha:</label>
                    </td>
                    <td>
                        <input type="text" name="txtSen" id="txtSen">
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <button>Cadastrar</button>
                    </td>
                </tr>


        </table>

        </form>
    </body>
</html>