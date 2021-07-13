// $(document).ready(function(){
//     // tudo que estiver aqui poderá ser executado, após o documento ser carregado
  
//     $("#contact-form").on("submit", function(e){
//       // está função diz, que quando esse formulario for enviado, tudo oque estiver aqui será executado.
//       e.preventDefault(); // está função é usada pro form não ir para outra pagina, pois o evento padrão de um formulario é ir para outra pagina.
//       var data = $("#contact-form").serialize(); // a function serialize serve para pegar todos os valores que foram colocados nos inputs do form
//       $.ajax({
//         // está é a função ajax, do jquery, ela será usada para fazer a requisição assícrona.
//         url: "contact.php", // aqui vai a url da requisição, nela é colocado o valor do atributo action da tag form
//         data:  data, // aqui vai os dados para o servidor, geralmente é os inputs do form
//         method: "POST", // aqui vai o método da requisição, acho que você já sabe sobre o get e post !
//         dataType: "json", // aqui será o tipo de resposta que vamos receber, será no formato json, um formato simples e mais usado.
//         success: function(data){
//           // essa é a function success, ela ira ser executada se a requisição for feita com sucesso
//            // a variavel data, veio do parametro da function, e será a resposta do php.
  
//            if (data=="Protocolo Invalido"){
//             swal("Mensagem de Erro!", "Houve um problema na requisição");
//            }else{
//                 swal("Mensagem enviada com sucesso!");
//                   /*
//                   se o usuario clicar no button close do modal
//                   ou em qualquer parte do documento será redirecionado
//                   */
//            }
//         },
//         // error: function(){
//         //   // essa é funcion error, ela será executada caso ocorrer algum erro na requisição
//         //   swal("Mensagem de Erro!", "Houve um problema na requisição");
//         // }
//       });
//     });
  
//   });