<?php
//Sessao
session_start();
if(isset($_SESSION['mensagem'])):?>

<script>
	//Mensagem
window.onload = function(){
M.toast({html:'<?php echo  $_SESSION['mensagem']; ?>'});

};
</script>
<?php
endif;
//Limpar sessao
session_unset();
?>