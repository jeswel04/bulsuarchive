</body>
<script src="assets/js/message.js"></script>
<script>
const openUpload = document.getElementById('upload');
const closeUpload = document.getElementById('closeUpload');

openUpload.addEventListener('click',() =>{
modal_container_upload.classList.add('show');
});
closeUpload.addEventListener('click',() =>{
   modal_container_upload.classList.remove('show');
});
</script>
<script src="assets/js/displayfile.js"></script>

</html>