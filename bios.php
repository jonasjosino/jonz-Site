<?php include "topo.php"  ?>
  <?php include "menu.php"  ?>

  <div class="container">
	<h1> Básico sobre atualização de BIOS </h1>
	<hr>
	</br>

	<div class="col-md-2"  > 
		
	</div>
	<div class="col-md-10"  > 
	<img  src="img/bios2.png"> 
	</div>
	</br></br>
	
	<div class="col-md-12">
	<h2>Introdução</h2>

	Apesar de ser uma operação simples, a atualização de BIOS é algo um tanto quanto arriscado. Tal risco se deve ao fato de que, se algo der errado, a placa-mãe do computador pode ficar inutilizada. Mesmo assim, a atualização de BIOS é feita com grande freqüência. Isso acontece porque a tecnologia de hardware avança muito rápido, principalmente em relação aos HDs e aos processadores.

O BIOS é um programa que fica armazenado em uma memória especial localizada na placa-mãe. Trata-se de um tipo de memória ROM. O tipo mais usado atualmente é a Flash-ROM (ou Flash-BIOS) que pode sofrer modificações, ou seja, atualizações, por um software especial desenvolvido geralmente pelo fabricante. Um tipo de ROM utilizado em computadores mais antigos é o EPROM (Erasable Programmable ROM), que precisa de equipamentos especiais para reescrita de dados. Isso deixa claro que este tutorial visa a atualização de BIOS em chips Flash-ROM.
	
	
</br></br></br>

<h3>Flash-ROM</h3>

A memória Flash-ROM é responsável por "guardar" o SETUP (uma espécie de interface gráfica que permite a configuração de hardware através de parâmetros do BIOS) e o POST (teste de componentes do computador quando este é ligado). O BIOS (Basic Input Output System), como já dito, também fica nesse chip e consiste num programa responsável pela tradução das instruções do sistema operacional e dos aplicativos em comandos que podem ser compreendidos pelo hardware da máquina.

Em muitas placas-mãe, a configuração feita através do SETUP fica guardada em um chip de tecnologia CMOS (Complementary Metal Oxide Semiconductor) que, por sua vez, é alimentado por uma bateria. Em modelos mais recentes, essa memória fica integrada ao chipset.

Quando atualizar o BIOS

Quando o BIOS é atualizado, na verdade, atualizá-se a ROM-BIOS, isto é, o BIOS, o POST e o SETUP. Esse procedimento só é necessário se existir problemas de funcionamento no PC que podem ser corrigidos com a atualização. Outra razão, é que equipamentos de hardware são lançados constantemente e pode ser necessário atualizar o BIOS para que seu computador suporte o novo hardware. Isso acontece muito com processadores. As placas-mãe suportam determinados modelos de processadores que vão até uma certa velocidade. Caso seja lançado um processador da mesma linha que ultrapasse esse limite, o fabricante da placa-mãe geralmente disponibiliza uma atualização de BIOS para suportar os padrões dos novos chips.

Se seu computador não está apresentando nenhum problema que seja corrigido por um novo BIOS ou se você não vai adicionar nenhum recurso de hardware que requer uma atualização, não há motivos para atualizar o BIOS. Isso deixa claro que esse procedimento só deve ser feito nos casos que o exigem. Atualizar simplesmente para manter a versão mais nova é algo extremamente desnecessário.




</br></br></br>
<img src="">
</br></br></br>

</br></br>
</br></br></br>

<h3> O porquê dos riscos</h3>

A atualização de BIOS é um procedimento arriscado porque pode falhar e deixar a placa-mãe fora de uso. Isso pode acontecer, por exemplo, se durante o processo de atualização a energia elétrica faltar. Além disso, o arquivo de atualização pode estar corrompido ou uma versão de BIOS errada ser baixada. Mesmo se isso ocorrer, há como resolver o problema, mas em placas-mãe antigas somente técnicos experientes e devidamente equipados é que têm qualificação para isso. Algumas placas-mãe, como muitos modelos da Asus, permitem recuperar o BIOS anterior em casos de problemas. Por isso, é recomendável ler o manual da placa-mãe para saber quais recursos ela oferece em relação à atualização de BIOS. Isso varia de modelo para modelo, de fabricante para fabricante e sem o manual, o risco de cometer erros aumenta significantemente.

</br></br>
<img src="">
</br></br>

</br></br></br>

<h3>Atualizando o BIOS </h3>
 
Se você constatou que realmente vai ser necessário atualizar o BIOS de um computador, a primeira coisa que deve fazer é identificar o fabricante, o modelo e a versão da placa-mãe. Geralmente essas informações se encontram no manual que acompanha a placa. Em seguida, é conveniente anotar os dados de configuração existentes no SETUP. Isso porque o processo de atualização pode apagar toda a configuração atual. Dependendo do modelo da placa-mãe, pode ser necessário alterar um jumper, que funciona como uma espécie de dispositivo de segurança contra gravações indevidas. Para certificar-se desta necessidade, é imprescindível consultar o manual da placa-mãe. Antes de prosseguir, é necessário citar que o processo de atualização deste tutorial segue um modelo padrão, que pode ter grandes diferenças em relação à determinadas placas-mãe. Por isso mesmo, é necessário consultar o manual da placa ou consultar o site do fabricante para saber como proceder com sua placa-mãe. Usaremos aqui um exemplo baseado em BIOS da Award, muito comum no Brasil.

Estando ciente dos pontos acima, acesse o site do fabricante da placa-mãe e procure a área correspondente à atualização de BIOS. Siga as instruções fornecidas e faça o download dos arquivos necessários à operação. Pode ser que o arquivo que contenha o novo BIOS esteja em formato ZIP, sendo necessário descompactá-lo. Depois de descompactado, o arquivo com o BIOS pode ter extensão .bin, .awd ou outra, conforme o fabricante do BIOS e o modelo da placa-mãe. Um outro arquivo que geralmente é baixado junto é o programa que faz a gravação do novo BIOS. No caso da Award, este programa recebe o nome de awdflash.exe (nada impede que novas versões utilizem um outro programa). Vale dizer que é expressamente recomendável utilizar o programa que o fabricante indicar para o modelo de sua placa-mãe.
 
 
 </br></br>
<img src="">
</br></br></br>

<h3>Iniciando a atualização</h3>

A operação de atualização de BIOS deve ser feita através de um "boot limpo", ou seja, nenhum programa deve ser carregado na memória a não ser o arquivos io.sys, msdos.sys e command.com. Para fazer isso, insira um disquete no drive A e no prompt do DOS digite format a:/s/u e aperte Enter em seu teclado. Também, verifique se no SETUP a seqüência de boot tem o disquete como primeira opção. Concluído esses passos, reinicie o computador com o disquete de "boot limpo" que você acabou de criar e aguarde o prompt aparecer.

Outra maneira de dar boot limpo é simplesmente ficar pressionando o botão F8 e no menu que aparecer, escolher "Somente prompt de segurança". Mas isso somente funciona com o Windows 95 e 98. Para os demais sistemas é necessário usar o disquete de boot.

Quanto aos arquivos para a atualização da BIOS, você pode colocá-los num disquete ou no HD da máquina, desde que você saiba o local onde deixou.

O passo a ser seguido agora é o de fazer backup (cópia de segurança) da BIOS existente, caso ocorra algum problema na atualização. Para isso, usá-se o programa awdflash (ou equivalente) através do comando no prompt: awdflash /pn /sy. Após digitar isso, aperte Enter em seu teclado. Irá surgir uma tela onde você digitará um nome para o arquivo do BIOS atual. Após ter realizado esse processo, reinicie a máquina, dando um novo "boot limpo". Agora, digite o comando awdflash bios.bin (ou equivalente, conforme orientação do fabricante) e tecle Enter, onde bios.bin é nome do novo BIOS. O programa perguntará se você quer mesmo gravá-lo. Você deverá responder teclando Y (do inglês yes). Neste exato momento, a gravação começará e ao término, aparecerá um opção para sair do programa ou reiniciar o computador. Mas atenção: se alguma mensagem de erro surgir, NÃO REINICIE NEM DESLIGUE A MÁQUINA! Execute o processo de gravação novamente. Se o erro persistir, regrave o backup que você fez. Agora, caso necessário, resta somente reiniciar o computador e configurar o SETUP com os dados que você anotou. Pronto, a atualização está concluída.

É importante frisar que alguns modelos recentes de placas-mãe vêm com BIOS mais fáceis de atualizar. Como exemplo, alguns modelos da Asus possuem um programa que permite a atualização através do próprio Windows: trata-se do Asus Update. Neste caso, o software pode procurar um BIOS no site da empresa e depois atualizar como se tivesse instalando um programa qualquer. A vantagem disso é que o aplicativo consegue achar o modelo exato para sua placa-mãe. Ao usá-lo, deve-se evitar a utilização de outros programas (como navegador de internet, editores de textos, etc), pois a operação requer certa quantidade de memória e se algum software travar o computador, problemas podem surgir. Por isso, a dica mais importante é: siga as orientações do manual de sua placa-mãe. Consultando este documento, as chances de erro durante o processo de atualização de BIOS serão bem menores.




ê estiver fazendo outra atividade enquanto come, acaba não prestando a devida atenção na comida. Esta situação pode fazer com que você mastigue rapidamente o alimento ou coma demais sem perceber, comportamento capaz de causar indigestão e outros problemas.

</br></br></br>
	<p> Fonte: http://olhardigital.uol.com.br </p>
	</br></br></br>
	<p>
	
	
</p>

	</br>
	
	
	</div>
	
	
</div>
</br></br></br></br></br></br>
<?php include_once("analyticstracking.php") ?>

  <?php include "rodape.php"  ?>


