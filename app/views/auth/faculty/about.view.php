<?php $this->view('includes/header')?>
<body>
<?php if(message()):?>
    <div id="over_lay">
        <div class="container1">
            <center>
                <?=message('',true)?>
            </center>
            <div class="">
                <button class="done" id="done">Ok</button>
            </div>
        </div>
    </div>
<?php endif?>
    
  <div class="container">
    <!------SIDEBAR----->
    <aside>
    <?php
          if(Auth::is_admin()){
            $this->view('auth/includes/sidebaradmin');
          }
          elseif(Auth::is_faculty()){
            $this->view('auth/includes/sidebarfaculty');
          }
          elseif(Auth::is_student()){
            $this->view('auth/includes/sidebarstudent');
          }
          ?>
    </aside>
    <!------END SIDEBAR----->

    <!------Dashboard----->
  <main>

  </main>
    <!------END Dashboard----->
  <!----------END OF MAIN-------------->

  <!---------- RECENT UPDATES -------------->
  <div class="right">
    <div class="top">
      <?php $this->view('auth/includes/righttop')?>
    </div>
    <!------- END OF RECENT UPDATES -------->
    
    <!------- BUTTON CONTAINER -------->

    <!------- END BUTTON CONTAINER -------->

    <!------- MODAL PER BUTTON CONTAINER -------->
    <!-------END OF MODAL PER BUTTON CONTAINER -------->
  </div>

<?php $this->view('includes/footer')?>