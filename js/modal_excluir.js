/*
    Subject    : CRUD – Linguagem PHP (COMMCEPTA)
    Created on : 14-May-2019, 05:21:53 PM
    Author     : Marcos Freire
*/


function confirmar(id) {
  
  if (confirm("Deseja realmente excluir?")) {
    window.location.href = "./controllers/ControllerExcluirProduto.php?id=" +id+'';
    return true;
  }
  else {
    return false;
  }
}
