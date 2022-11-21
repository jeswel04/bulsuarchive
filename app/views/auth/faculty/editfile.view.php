<?php $this->view('includes/header')?>
<body >
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
    <h1>Edit Thesis / Capstone</h1>
    <form method="POST">
    <div class="cardContainer">
            <div class="">
                <?php
                $token=$_GET['id'];
                $root = ROOT;
                if($token != $research[0]['token']){
                    redirect('myuploads');
                    exit;
                }
                    if(!empty($research['0']['picture'])){

                        echo "<h3>".$research['0']['picture']."</h3>
                        <iframe id= \"iframe\" name= \"iframe\" src=\"../upload_research/".$research['0']['title'].".pdf"."#toolbar=0\" frameborder=\"0\"></iframe>";
                    }
                    else
                    echo "<h1>No picture</h1>";
                ?>
            </div>
            <div class="">
            <?foreach ($research as $research):?>
                <input type="text" id="title" name="title" value="<?=$research['0']['title'];?>" style="background-color: transparent; color:var(--color-primary); font-size:300%; font-weight:600;">
                <div class="cardContainer">
                    <div class="">
                    <h3>Type</h3>
                        <select name="type" id="type" type="text">
                            <option value="<?=$research['0']['type'];?>" selected="selected"><?=$research['0']['type'];?></option>
                            <option value="1">Capstone</option>
                            <option value="2">Thesis</option>
                        </select>
                    </div>
                    <div class="">
                        <h3>Date Research</h3>
                        <input class="field" type="date" value="<?=$research['0']['date_research'];?>">
                    </div>
                </div>

                <h3>Department</h3>
                <select type="text" id="department_id" name="department_id" type="text">
                    <option value="<?=$research['0']['department_id'];?>"><?=$research['0']['department_id'];?></option>
                </select>
                <h3>Course</h3>
                <select id="course_id" name="course_id" type="text">
                    <option value="<?=$research['0']['course_id'];?>" selected="selected"> <?=$research['0']['course_id'];?> </option>
                    <option value="3">Faculty</option>
                    <option value="2">Student</option>
                </select>
                <h3>Researcher</h3>
                    <input class="field" type="text" id="researchers" name="researchers" value="<?=$research['0']['researchers'];?>">
                <h3>Adviser</h3>
                    <input class="field" type="text" id="adviser" name="adviser" value="<?=$research['0']['adviser'];?>" style="margin-bottom:19%;">
                <button type="submit" id="update" name="update" class="field_btn">Accept</button>
                <button type="submit" id="decline" class="field_btn_list" name="decline">Delete</button>
            </div>
            <?endforeach;?>
        </form>
    </div>
  </main>
    <!------END Dashboard----->
  <!----------END OF MAIN-------------->

  <!---------- RECENT UPDATES -------------->
  <div class="right">
    <div class="top">
    <?php $this->view('auth/includes/righttop')?>
    </div>
    
    <div class="right">
<h2 class="recent-header"> Recent Updates</h2>
    <div class="recent-updates">      
      <div class="updates">
        <div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div>
        <div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div>
        <div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div>
        <div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div><div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div><div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div><div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div><div class="update">
          <div class="profile-photo">
            <img src="/img/profile-pic.jpg">
          </div>
          <div class="messgae">
            <p><b>Mike Tyson</b> received his order of
            Night lion tech GPS drone.</p>
            <small class="text-muted">2 Minutes Ago</small>
          </div>
        </div>
      </div>
</div>
    <!------- END OF RECENT UPDATES -------->
    
    <!------- BUTTON CONTAINER -------->
<div class="button-container">          
      <div id="dept" class="item btn-department">
        <span class="material-icons-sharp icon">school</span>          
        <div class="right"><h3>Add Department</h3></div>
      </div>
      <div id="course" class="item btn-course">
        <span class="material-icons-sharp icon">menu_book</span>          
        <div class="right"><h3>Add Course</h3></div>
      </div>

      <div id="account" class="item btn-account">
        <span class="material-icons-sharp icon">person_add</span>          
        <div class="right"><h3>Create an Account</h3></div>         
      </div>
    
      <div id="upload" class="item btn-thesis">
        <span class="material-icons-sharp">add</span>
        <h3>Add Thesis/ Capstone</h3>
      </div>
</div>
<!------- END BUTTON CONTAINER -------->

<!------- MODAL PER BUTTON CONTAINER -------->
<!--DEPARTMENT MODAL-->
<div class="modal-container" id="modal_container_dept">
  <div class="department">
    <span class="material-icons-sharp head">school</span>
    <button class="close" id="closeDept"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button>
    <h2 style="margin-top:10px ; margin-bottom:10px;">Add Department</h2>
    <form method="POST">
      <input type = hidden name="token" id="token" value=<?=Auth::createToken()?>></input>
      <input class="field" type="text" id="code" name="code" placeholder="Department Code" required>
      <?php if(!empty($errors['code'])):?>
          <span id="error"><?=$errors['code']?></span>
      <?php endif;?>
      
      <input class="field" type="text" id="description" name="description" placeholder="Description" required>
      <?php if(!empty($errors['description'])):?>
          <span id="error"><?=$errors['description']?></span>
      <?php endif;?>

      <button type="submit" class="field_btn" name="dept" id="submit">Submit</button>
      <button type="button" class="field_btn_list" id="dept_list" name="dept_list">Department List</button>
    </form>
  </div>
</div>
<!--END DEPARTMENT MODAL-->

<!--COURSE MODAL-->
<div class="modal-container" id="modal_container_course">
  <div class="course">
  <span class="material-icons-sharp head">menu_book</span>
  <button class="close" id="closeCourse"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button>
  <h2 style="margin-top:10px ; margin-bottom:10px;">Add Course</h2>
  <form method="POST">
    <input type = hidden name="token" id="token" value=<?=Auth::createToken()?>></input>
    <select type="text" id="department_id" name="department_id" required>
      <option value="" disabled selected>Department</option>
        <?php
          $department = new Department();
          $department =$department->fetchAll('code');
          if(!empty($department)){
            foreach($department as $key=>$title){
              if(!empty($department[$key]['token'])){
                echo"<option value=\"".$department[$key]['id']."\">".$department[$key]['code']."</option>";
              }
              else echo "<option value=\"\"> No Department Available</option>";
            }
          }
          else echo "<option value=\"\"> No Department Available</option>";
        ?>
    </select>
    <?php if(!empty($errors['department_id'])):?>
      <span id="error"><?=$errors['department_id']?></span>
    <?php endif;?>

    <input class="field" type="text" placeholder="Course Name" id="course_name" name="course_name" required>
    <?php if(!empty($errors['code'])):?>
      <span id="error"><?=$errors['code']?></span>
    <?php endif;?>

    <input class="field" type="text" placeholder="Course Name" id = "description" name = "description" required>
    <?php if(!empty($errors['description'])):?>
      <span id="error"><?=$errors['description']?></span>
    <?php endif;?>

    <button type="submit" class="field_btn" id="submit" name="course">Submit</button>
    <button type="button" class="field_btn_list" id="course_list" name="course_list">Course List</button>
  </form>
  </div>
</div>
<!--END OF COURSE MODAL-->

<!--CREATE ACCOUNT MODAL-->
<div class="modal-container" id="modal_container_account">
    <div class="account" id="account">
      <span class="material-icons-sharp head">person_add</span>
      <button class="close" id="closeAccount"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button>
      <h2 style="margin-top:10px ; margin-bottom:10px;">Create an Account</h2>

    <div class="signup">
      <form method="POST">
        <input type = hidden name="token" id="token" value=<?=Auth::createToken()?>>
        <div class="">
          <select type="text" id="role_id"name="role_id" onchange="disableCourse(this)" required>
            <option value="" disabled selected>User Type</option>
            <option value="3">Faculty</option>
            <option value="2">Student</option>
          </select>
          <?php if(!empty($errors['role_id'])):?>
            <span id="error"><?=$errors['role_id']?></span>
          <?php endif;?>
          
          <input class="field" type="number" id="school_id" name="school_id" placeholder="ID number" required>
          <?php if(!empty($errors['school_id'])):?>
            <span id="error"><?=$errors['school_id']?></span>
          <?php endif;?>
          
          <input class="field" type="text" id="firstname" name="firstname" placeholder="Firstname" required>
            <?php if(!empty($errors['firstname'])):?>
              <span id="error"><?=$errors['firstname']?></span>
            <?php endif;?>
            
          <input class="field" type="text" id="lastname" name="lastname" placeholder="Lastname" required>
            <?php if(!empty($errors['lastname'])):?>
              <span id="error"><?=$errors['lastname']?></span>
            <?php endif;?>
            
          <input class="field" type="text" id="email_verified" name="email_verified" placeholder="BUlSU email" required>
            <?php if(!empty($errors['email_verified'])):?>
              <span id="error"><?=$errors['email_verified']?></span>
            <?php endif;?>
        </div>
      <div class="">
        <select type="text" id="department_id" name="department_id" required>
          <option value="" disabled selected>Department</option>
            <?php
                $department = new Department();
                $department =$department->fetchAll('code');
                  foreach($department as $key=>$title){
                    if(!empty($department)){
                      if(!empty($department[$key]['token'])){
                        echo "<option value=\"".$department[$key]['id']."\">".$department[$key]['code']."</option>";
                      }
                      else "<option value=\"\">No Department Available</option>";
                  }
                  else{
                    echo "<option value=\"\">No Department Available</option>";
                  }
                }
              ?>
            </select>
            <?php
              if(!empty($error['department_id'])):?>
              <span id="error"><?=$errors['department_id']?></span>
            <?php endif;?>

            <select type="text" id="course_id" name="course_id" required>
              <option value="" disabled selected>Course</option>
              <?php
                $course = new Course();
                $course= $course->fetchAll('code');
                if(!empty($course)){
                  foreach($course as $key=>$title){
                    if($course[$key]['id']!=1){
                      echo "<option value=\"".$course[$key]['id']."\">".$course[$key]['code']." [".$course[$key]['description']."]"."</option>";
                    }
                  }
                }
                else{
                  echo "<option value=\"\">No Course Available</option>";
                }
              ?>
            </select>
            <?php if(!empty($error['course_id'])):?>
              <span id="error"><?=$errors['course_id']?></span>
            <?php endif;?>

            <input class="field" type="password" id="password" name="password" placeholder="Password" required>
            <?php if(!empty($error['password'])):?>
              <span id="error"><?=$errors['password']?></span>
            <?php endif;?>

            <input class="field" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
            <?php if(!empty($error['password'])):?>
              <span id="error"><?=$errors['password']?></span>
            <?php endif;?>

            <button type="submit" class="field_btn" id="submit" name="account">Create Account</button>
      </div>
      </form>
      </div>
    </div>
</div>
<!--END OF CREATE ACCOUNT MODAL-->

<!--UPLOAD MODAL-->
<div class="modal-container" id="modal_container_upload">
  <div class="upload" id="upload">
    <div id="overlay"></div><span class="material-icons-sharp head">add</span>
    <button class="close" id="closeUpload"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button>
      <h2 style="margin-top:10px ; margin-bottom:10px;">Add Thesis/ Capstone</h2>
      <form method="POST" enctype="multipart/form-data">
        <input type = hidden name="token" id="token" value=<?=Auth::createToken()?>>
        <div class="">
          <input class="field" type="text" id="title" name="title" placeholder="Title" required>
          <?php if(!empty($errors['title'])):?>
            <span id="error"><?=$errors['title']?></span>
          <?php endif;?>

          <input class="field" type="text" id="researchers" name="researchers" placeholder="Researcher" required>
          <?php if(!empty($errors['researchers'])):?>
            <span id="error"><?=$errors['researchers']?></span>
          <?php endif;?>

          <input class="field" type="text" id="adviser" name="adviser" placeholder="Adviser" required>
          <?php if(!empty($errors['adviser'])):?>
            <span id="error"><?=$errors['adviser']?></span>
          <?php endif;?>

          <input class="field" type="date" id="date_research" name="date_research" required>
          <?php if(!empty($errors['adviser'])):?>
            <span id="error"><?=$errors['adviser']?></span>
          <?php endif;?>

          <select type="text" id="type" name="type" required>
            <option value="" disabled selected>Type</option>
            <option value="Capstone">Capstone</option>
            <option value="Thesis">Thesis</option>
          </select>
          <?php if(!empty($errors[''])):?>
            <span id="error"><?=$errors['']?></span>
          <?php endif;?>

          <select type="text" id="department_id" name="department_id" required>
            <option value="" disabled selected>Department</option>
            <?php
              $department = new Department();
              $department = $department->fetchAll('code');
              if(!empty($department)){
                foreach($department as $key=>$title){
                  if(!empty($department[$key]['token'])){
                    echo
                        "<option value=\"".$department[$key]['id']."\">".$department[$key]['code']."</option>"
                        ;
                  }
                  else "<option value=\"\">No Department Available</option>";
                }
              }
              else "<option value=\"\">No Department Available</option>";
              ?>
          </select>
          <?php if(!empty($errors['department_id'])):?>
            <span id="error"><?=$errors['department_id']?></span>
          <?php endif;?>
        </div>
        <div class="">
          <select type="text" id="course_id" name="course_id" required>
            <option value="" disabled selected>Course</option>
            <?php $course = new Course();
            if(!empty($course)){
              $course = $course->fetchAll('code');
                foreach($course as $key=>$title){
                  if($course[$key]['id']!=1){
                    echo"<option value=\"".$course[$key]['id']."\">".$course[$key]['code']." [".$course[$key]['description']."]"."</option>";
                  }
                }
            }
            ?>
          </select>
          <?php if(!empty($errors['course_id'])):?>
            <span id="error"><?=$errors['course_id']?></span>
          <?php endif;?>

          <div class="field">                                                 
              <label for="picture"><i class="uil uil-file-upload" style="cursor: pointer;" required></i><span class="label" style="cursor:pointer;">Upload a PDF version of Thesis/ Capstone</span></label>
              <input type="file" id="picture" name="picture" onchange="getImage(this.value);" accept=".pdf" required>
               
              <span  class="span-validate" id="file" name="file">  </span>
              <!-- Upload a PDF version of your student ID (front and back) -->
          </div>
          <?php if(!empty($errors['picture'])):?>
            <span id="error"><?=$errors['picture']?></span>
          <?php endif;?>
           

          <textarea class="field" id="description" name="description" placeholder="Description" required></textarea>
          <?php if(!empty($errors['description'])):?>
            <span id="error"><?=$errors['description']?></span>
          <?php endif;?>

          <button type="submit" class="field_btn" id="submit" name="upload_file">Upload File</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--END OF UPLOAD FILE MODAL-->

<!--COURSE LIST-->
<div class="modal-container" id="modal_container_courseList">
<div class="courseList">
    
    <div class="recent-order" style="margin-left: 2% ;">
        <table>
          <thead>
            <tr>
            <th><h2>Course List</h2></th> 
            <th></th>
            <th><button class="close" id="closeCourseList"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button></th>
            </tr>
            <tr></tr>
            <tr>
            <th>Course Code<br>
              
            </th>
            <th>Course Name <br>
              
            </th>
            <th>Department <br>
            </th>
            </tr>
          </thead>
          <tbody>
            <?php /**COURSES OPTION */
              if(!empty($course)){
                foreach($course as $keys=>$title){
                  foreach($department as $key=>$name){
                        if(!empty($department)){
                      if($course[$keys]['department_id']==$department[$key]['id']){
                      echo"<tr>".
                          "<td>".$course[$keys]['code']."</td>".
                          "<td>".$course[$keys]['description']."</td>".
                          "<td>".$department[$key]['code']."</td>".
                          "</tr>";
                      }
                    }
                  }
                }
              }
              else{
                  echo"<tr>".
                  "<td>No Course Available</td>".
                  "</tr>";
              }
            ?>
          </tbody>
        </table>
    </div>
  </div>
</div>
<!--END OF COURSE LIST-->

<!--DEPARTMENT LIST-->
<div class="modal-container" id="modal_container_deptList">
  <div class="deptList">
    <div class="recent-order" style="margin-left: 2% ;">
        <table>
          <thead>
            <tr>
            <th><h3>Department List</h3></th> 
            <th><button class="close" id="closeDeptList"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button></th>
            </tr>
            <tr></tr>
            <tr>
            <th><h3>Department Code</h3>
            </th>
            <th>Department Name
              
            </th>
            </tr>
          </thead>
            <?php
              if(!empty($department)){
                foreach($department as $key=>$title){
                  if(!empty($department[$key]['token'])){
                    echo"<tr>".
                        "<td>".$department[$key]['code']."</td>".
                        "<td>".$department[$key]['description']."</td>".
                        "<tr>";
                  }
                  else{
                    echo"<tr>".
                    "<td></td>".
                    "<td>No Department Available</td>".
                    "</tr>";
                  }
                }
                }
                else{
                  echo"<tr>".
                  "<td></td>".
                  "<td>No Department Available</td>".
                  "</tr>";
                }
              ?>
          <tbody>
            
          </tbody>
        </table>
    </div>
  </div>
</div>
<!--END OF DEPARTMENT LIST-->
    <!-------END OF MODAL PER BUTTON CONTAINER -------->

</div>
    


<?php $this->view('includes/footer')?>