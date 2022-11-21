const themeToggler = document.querySelector(".theme-toggler");

themeToggler.addEventListener('click', () => {
   document.body.classList.toggle('dark-theme-variables');
});

$('#date1').change(function(){
   console.log('Submiting form');                
   $('#formDate').submit();
 });

if ( window.history.replaceState ) {
   window.history.replaceState( null, null, window.location.href );
}


  // ================== FOR BOOKMARK ================== 

  const toggleBtns = document.querySelectorAll('.fa-bookmark');

  toggleBtns.forEach((btn) => {
      btn.addEventListener('click', () => {         
         btn.classList.toggle('bookmark-click');
      });
  });

// ================== FOR SIDEBAR  ================== 

   const asideBar = document.querySelector('.asidebar');
   const navItems = document.querySelectorAll('.navItem');

function navItemActive(){}   

   navItems.forEach(navItem => {

      navItem.addEventListener('click', () => {

         navItems.forEach(navItem => {
            navItem.classList.remove('active');
         });
         navItem.classList.add('active');

      });
   });

navItemActive();

function openSideBar() {   
      if (asideBar.className === 'asidebar')
         asideBar.classList.add('open');
      else
         asideBar.classList.remove('open');
}


function enabled(department_id){
   {
      console.log(department_id);
      var course_id = document.getElementById("course_id");
      if(department_id.value !=""){
         course_id.removeAttribute('disabled');
      }
   }

}





const openDept = document.getElementById('dept');
const closeDept = document.getElementById('closeDept');
const openDeptList = document.getElementById('dept_list');
const closeDeptList = document.getElementById('closeDeptList');

const openCourse = document.getElementById('course');
const closeCourse = document.getElementById('closeCourse');
const openCourseList = document.getElementById('course_list');
const closeCourseList = document.getElementById('closeCourseList');

const openAccount = document.getElementById('account');
const closeAccount = document.getElementById('closeAccount');

const openUpload = document.getElementById('upload');
const closeUpload = document.getElementById('closeUpload');

const openMessage = document.getElementById('submit');
const closeMessage = document.getElementById('done');

const openCite = document.getElementById('citation');
const closeCite = document.getElementById('closeCite');

openDept.addEventListener('click',() =>{
   modal_container_dept.classList.add('show');
});
closeDept.addEventListener('click',() =>{
   modal_container_dept.classList.remove('show');
});
openDeptList.addEventListener('click',() =>{
   modal_container_deptList.classList.add('show');
});
closeDeptList.addEventListener('click',() =>{
   modal_container_deptList.classList.remove('show');
});

openCourse.addEventListener('click',() =>{
   modal_container_course.classList.add('show');
});
closeCourse.addEventListener('click',() =>{
   modal_container_course.classList.remove('show');
});
openCourseList.addEventListener('click',() =>{
   modal_container_courseList.classList.add('show');
});
closeCourseList.addEventListener('click',() =>{
   modal_container_courseList.classList.remove('show');
});

openAccount.addEventListener('click',() =>{
   modal_container_account.classList.add('show');
});
closeAccount.addEventListener('click',() =>{
   modal_container_account.classList.remove('show');
});

openUpload.addEventListener('click',() =>{
   modal_container_upload.classList.add('show');
});
closeUpload.addEventListener('click',() =>{
   modal_container_upload.classList.remove('show');
});

openCite.addEventListener('click',() =>{
   modal_container_Cite.classList.add('show');

});
closeCite.addEventListener('click',() =>{
   modal_container_Cite.classList.remove('show');
});


function disableCourse(course){
      if(course.value==2){
          document.getElementById('course_id').disabled=false;
      }
      else{
          document.getElementById('course_id').disabled=true;
      }
  
  };
