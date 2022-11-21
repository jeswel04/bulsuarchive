const openfilter = document.getElementById('filter');
const closefilter = document.getElementById('closefilter');
openfilter.addEventListener('click',() =>{
   modal_container_filter.classList.add('show');
});
closefilter.addEventListener('click',() =>{
   modal_container_filter.classList.remove('show');
});




var diplay = document.getElementById('file');

function getImage(imagename)
{        
    var image=diplay.append(imagename.match( /[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]);
    document.getElementById("file").value = image;
    console.log(image);
}

var diplays = document.getElementById('file1');

function getImages(imagenames)
{        
    var images=diplays.append(imagenames.match( /[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]);
    document.getElementById("file1").value = images;
    console.log(images);
}
