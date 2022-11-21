
const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link")


    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });

    var diplay = document.getElementById('file');

    function getImage(imagename)
    {        
        var image=diplay.append(imagename.match( /[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]);
        document.getElementById("file").value = image;
    }

    function disableCourse(course){
        if(course.value==2){
            document.getElementById('course_id').disabled=false;
        }
        else{
            document.getElementById('course_id').disabled=true;
        }
    
    };


window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".container1").style.display = "block";
            document.querySelector("#overlay").style.display = "block";
        },
        1000
    )
});

document.querySelector("#done").addEventListener("click", function(){
    document.querySelector(".container1").style.display = "none";
    document.querySelector("#overlay").style.display = "none";
});