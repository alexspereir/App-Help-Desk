# App-Help-Desk
Aplicação para cadastro e consulta de chamados de problemas técnicos em informática.

-Utilizada a linguagem PHP para iniciar sessão no site, através de login e senha, os quais são verificados
com os cadastrados no arquivo validador_login.php.

-Os chamados criados são gravados em um arquivo para uma futura consulta.

-É realizada a validação do login e senha de cada usuário. Após o login e senha é verificado o nível
do usuário que está logado para saber quais chamados poderão ser vistos pelo mesmo.

Usuários e Senha de Teste:

adm@teste.com.br - Senha: 1234 - Tipo Administrador (Poderá ver todos os chamados)
user@teste.com.br - Senha: 1234 - Tipo Administrador (Poderá ver todos os chamados)
jubileu@teste.com.br - Senha: 1234 - Tipo Cliente (Poderá ver apenas o chamados feitos por ele)
fulana@teste.com.br - Senha: 1234 - Tipo Cliente (Poderá ver apenas o chamados feitos por ela)
