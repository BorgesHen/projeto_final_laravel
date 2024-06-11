function deletar_cliente(id){
Swal.fire({
    title: "Você tem certeza?",
    text: "Você não poderá reverter isso!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sim, deletar!",
    cancelButtonText: "Cancelar"
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Deletado!",
        text: "O seu cadastro foi deletado.",
        icon: "success"
      });
      document.getElementById('form-' + id).submit();
    }
  });
}

function info(){
    Swal.fire({
        title: "Informações",
        text: "Aqui consta a tabela com todas as informações dos clientes cadastrados e os botões com as ações disponíveis para cada cliente.",
        icon: "info",
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "OK"
      })
      };
    