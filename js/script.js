let remove = document.querySelectorAll('.card');
function abremodal(id){
  remove.forEach(element =>{
      element.setAttribute('style','display:none')
  })
  document.getElementById(id).style.display="flex";
        }

function voltar(id){
    let = remove_modal = document.getElementById(id);
    remove_modal.style.display = "none";
    remove.forEach(element =>{
        element.setAttribute('style','display:flex')
    })
}