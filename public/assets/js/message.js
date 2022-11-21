
const openConfirm = document.getElementById('confirm');
const closeConfirm = document.getElementById('closeConfirm');

openConfirm.addEventListener('click',() =>{
   modal_container_confirm.classList.add('show');
});
closeConfirm.addEventListener('click',() =>{
   modal_container_confirm.classList.remove('show');
});




window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".container1").style.display = "block";
            document.querySelector("#over_lay").style.display = "block";
        },
        1000
    )
 });
 
 document.querySelector("#done").addEventListener("click", function(){
    document.querySelector(".container1").style.display = "none";
    document.querySelector("#over_lay").style.display = "none";
 });
 