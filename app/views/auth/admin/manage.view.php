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
    <aside class="asidebar">
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
  <h1>Update</h1>
            <form method="POST">
                <input type="number" name="school_id" id="school_id" value="<?=$user['school_id']?>" style="background-color: transparent; font-size:200%; color:var(--color-primary);" disabled><br>
            <div class="cardContainer" style="margin-top: 10px;">    
                <div>
                <strong><label>User Role</label></strong>
                <?php if(!empty($role)):?>
                  <?php foreach($role as $keys=>$value):?>
                      <?php if($user['role_id'] == $role[$keys]['id']):?>
                        <input type="text" class="field" id="role_id" name="role_id" value="<?=$role[$keys]['role']?>" disabled>
                      <?php endif;?>
                  <?php endforeach;?>
                <?php endif;?>
                
                <strong><label>Firstname</label></strong>
                <input type="text" class="field" id="firstname" name="firstname" value="<?=$user['firstname']?>">
                <strong><label>Lastname</label></strong>
                <input type="text" class="field" id="lastname" name="lastname" value="<?=$user['lastname']?>">
                <strong><label>Email</label></strong>
                <input type="text" class="field" id="email_verified" name="email_verified" value="<?=$user['email_verified']?>">
              </div>
              <div>
                <div class="cardContainer">
                  <div>
                      <strong><label>Department</label></strong>
                      <select class="field" name="department_id" id="department_id">
                        <?php if(!empty($department)):?>
                          <?php foreach($department as $key=>$value):?>
                            <?php if($row['department_id'] == $department[$key]['id']):?>
                                <option value="<?=$row['department_id']?>" selected="selected"><?=$department[$key]['department_code']?></option>
                            <?php endif;?>
                          <?php endforeach;?>
                          <?php foreach($department as $key=>$value):?>
                                <option value="<?=$department[$key]['id']?>"><?=$department[$key]['department_code']?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                        </select>
                  </div>
                  <div>
                    <strong><label>Date Validate</label></strong>
                    <input type="text" class="field" id="date_validate" name="date_validate" value="<?=$user['date_validate']?>" disabled>
                  </div>
                </div>
                <?php if($user['course_id'] !=null):?>
                  <strong><label>Course</label></strong>
                  <select class="field" name="course_id" id="course_id">
                    <?php if(!empty($course)):?>
                        <?php foreach($course as $key=>$value):?>
                          <?php if($row['course_id'] == $course[$key]['id']):?>
                              <option value="<?=$row['course_id']?>" selected="selected"><?=$course[$key]['course_description']?></option>
                          <?php endif;?>
                        <?php endforeach;?>
                        <?php foreach($course as $key=>$value):?>
                              <option value="<?=$course[$key]['id']?>"><?=$course[$key]['course_description']?></option>
                        <?php endforeach;?>
                    <?php endif;?>
                  </select>
                <?php endif;?>
                    <button type="submit" id="update" name="update" class="field_btn" style="margin-top:20px;">UPDATE</button>
                </form>
                    <button type="button" id="confirm" name="confirm" class="field_btn_list" style="margin-top:37px;">DELETE</button>
              </div>
            
            </div>

  </main>
    <!------END Dashboard----->
  <!----------END OF MAIN-------------->

  
  <div class="right">
      <div class="top">
        <button id="menu-btn">
          <span class="material-icons-sharp">menu</span>
        </button>
        <label class="theme-toggler-button">
          <input type="checkbox" class="theme-toggler">
          <span class="slider"></span>
        </label>
        <div class="profile">
          <div class="info">
            <p>Hey, <b><?=Auth::username()?></b></p>
            <small class="text-muted"><?=Auth::role()?></small>
          </div>
          <div class="profile-photo">
            <img src="../public/assets/images/bulsu_gate.jpg">
          </div>
        </div>
      </div><!--end top-->

      <!---------- MOST VIEW AND DOWNLOAD AREA -------------->

      <h2 class="recent-header"> MOST VIEWS </h2>
              <?php if(!empty($mostView)):?>
              <?php foreach($mostView as $key=>$value):?>
                <div class="cardUploadMost">

                  <strong><span style="color:var(--color-primary) ;"><?=$mostView[$key]['title']?></span></strong>
                    <?php foreach($course as $keys=>$value):?>
                    <?php if($mostView[$key]['course_id']==$course[$keys]['id']):?>
                        <br><span><?=$course[$keys]['course_code']?><strong> | </strong></span>
                        <span>VIEWS: <strong><?=$mostView[$key]['views']?></strong></span>
                    <?php endif;?>
                  <?php endforeach;?>
                </div>
                <?php endforeach;?>
              <?php endif;?>
      <h2 class="recent-header"> MOST DOWNLOADS </h2>
            <?php if(!empty($mostDownload)):?>
              <?php foreach($mostDownload as $key=>$value):?>
                <div class="cardUploadMost">

                  <strong><span style="color:var(--color-primary) ;"><?=$mostDownload[$key]['title']?></span></strong>
                    <?php foreach($course as $keys=>$value):?>
                    <?php if($mostDownload[$key]['course_id']==$course[$keys]['id']):?>
                        <br><span><?=$course[$keys]['course_code']?><strong> | </strong></span>
                        <span>DOWNLOADS: <strong><?=$mostDownload[$key]['downloads']?></strong></span>
                    <?php endif;?>
                  <?php endforeach;?>
                </div>
                <?php endforeach;?>
            <?php endif;?>

      <!------- END OF MOST VIEW AND DOWNLOAD AREA --------> 
      
    <!------- BUTTON CONTAINER -------->
    <div class="button-container">          
        <div id="dept" class="item btn-department">
          <div class="icon">
            <span class="material-icons-sharp">school</span>          
          </div>
          <div class="btn-container-right">
              <h3>Add Department</h3>            
          </div>
        </div>
        <div id="course" class="item btn-course">
          <div class="icon">
            <span class="material-icons-sharp">menu_book</span>          
          </div>
          <div class="btn-container-right">
            <h3>Add Course</h3>            
        </div>
        </div> 
        <div id="account" class="item btn-account">
          <div class="icon">
            <span class="material-icons-sharp">person_add</span>          
          </div>
          <div class="btn-container-right">
            <h3>Add Account</h3>            
        </div>
        </div>
        <div id="upload" class="item btn-thesis">
          <div>
            <span class="material-icons-sharp">add</span>
            <h3>Add Thesis/ Capstone</h3>
          </div>
        </div>
      </div>
      <!------- END BUTTON CONTAINER -------->

      <!------- MODAL PER BUTTON CONTAINER -------->
      <!----------------CONFIRMATION MODAL------------>
      <div class="modal-container" id="modal_container_confirm">
        <div class="confirm-modal">
          <form method="POST">
            <h2>Do you want to delete this Account?</h2>
              <div>
              <button type="submit" class="field_btn" name="delete" id="delete" style="float:left ;">SUBMIT</button>
              <button type="button" class="field_btn" name="cancel" id="closeConfirm" style="margin-top:10px ; background-color:var(--color-warning)">CANCEL</button>
            </div>
          </form>
        </div>
      </div>
      <!--END OF CONFIRMATION MODAL-->
      <!--DEPARTMENT MODAL-->
      <div class="modal-container" id="modal_container_dept">
        <div class="department">
          <span class="material-icons-sharp head">school</span>
          <button class="close" id="closeDept"> <strong><span class="material-icons-sharp close_logo">close</span></strong> </button>
          <h2 style="margin-top:10px ; margin-bottom:10px;">Add Department</h2>
          <form method="POST">
            <input type = hidden name="department_token" id="department_token" value=<?=Auth::createToken()?>></input>
            <input class="field" type="text" id="department_code" name="department_code" placeholder="Department Code" required>
            <?php if(!empty($errors['department_code'])):?>
                <span id="error"><?=$errors['department_code']?></span>
            <?php endif;?>
            
            <input class="field" type="text" id="department_description" name="department_description" placeholder="Description" required>
            <?php if(!empty($errors['department_description'])):?>
                <span id="error"><?=$errors['department_description']?></span>
            <?php endif;?>

            <button type="submit" class="field_btn" name="dept" id="submit">Submit</button>
            <button type="button" class="field_btn_list" id="dept_list" name="dept_list">Department List</button>
          </form>
        </div>
      </div>
      <!--END DEPARTMENT MODAL-->

      <!--DEPARTMENT LIST-->
      <div class="modal-container" id="modal_container_deptList">
        <div class="deptList">
          <div class="recent-order" style="margin-left: 2% ;">
            <table>
              <thead>
                <tr>
                <th><h3>Department List</h3></th> 
                <th><button class="close" id="closeDeptList"> <strong><span class="material-icons-sharp close_logo">close</span></strong> </button></th>
                </tr>
                <tr></tr>
                <tr>
                <th><h3>Department Code</h3>
                </th>
                <th>Department Name
                  
                </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($department)){
                    foreach($department as $key=>$value){
                      echo
                        "<tr>".
                        "<td>".$department[$key]['department_code']."</td>".
                        "<td>".$department[$key]['department_description']."</td>".
                        "</tr>";
                    }
                  }
                  else{
                    echo
                      "<tr>".
                      "<td>----</td>".
                      "<td>No Department Available</td>".
                      "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--END OF DEPARTMENT LIST-->

      <!--MODAL FOR COURSE-->
      <div class="modal-container" id="modal_container_course">
        <div class="course">
        <span class="material-icons-sharp head">menu_book</span>
        <button class="close" id="closeCourse"> <strong><span class="material-icons-sharp close_logo">close</span></strong> </button>
        <h2 style="margin-top:10px ; margin-bottom:10px;">Add Course</h2>
        <form method="POST">
        <input type = hidden name="course_token" id="course_token" value=<?=Auth::createToken()?>></input>
        <select type="text" id="department_id" name="department_id" required>
          <option value="" disabled selected>Department</option>
          <?php
          if(!empty($department)){
            foreach($department as $key=>$value){
            echo
              "<option value=".$department[$key]['id'].">".$department[$key]['department_code']."</option>";
            }
          }
          else echo "<option value=\"\">No Department Available</option>";
          ?>
        </select>
        <?php if(!empty($errors['department_id'])):?>
          <span id="error"><?=$errors['department_id']?></span>
        <?php endif;?>

        <input class="field" type="text" placeholder="Course Code" id="course_code" name="course_code" required>
        <?php if(!empty($errors['course_code'])):?>
          <span id="error"><?=$errors['course_code']?></span>
        <?php endif;?>

        <input class="field" type="text" placeholder="Course Name" id = "course_description" name = "course_description" required>
        <?php if(!empty($errors['course_description'])):?>
          <span id="error"><?=$errors['course_description']?></span>
        <?php endif;?>

        <button type="submit" class="field_btn" id="submit" name="course">Submit</button>
        <button type="button" class="field_btn_list" id="course_list" name="course_list">Course List</button>
        </form>
        </div>
      </div>
      <!--END COURSE MODAL-->

      <!--COURSE LIST-->
      <div class="modal-container" id="modal_container_courseList">
        <div class="courseList">
          <div class="recent-order" style="margin-left: 2% ;">
            <table>
              <thead>
              <tr>
              <th><h2>Course List</h2></th> 
              <th></th>
              <th><button class="close" id="closeCourseList"> <strong><span class="material-icons-sharp close_logo">close</span></strong> </button></th>
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
                <?php if(!empty($course)):?>
                    <?php foreach($course as $key=>$value):?>
                      <tr>
                          <td><?=$course[$key]['course_code']?></td>
                          <td><?=$course[$key]['course_description']?></td>
                          <?php if(!empty($department)):?>
                              <?php foreach($department as $keys=>$value):?>
                                  <?php if($course[$key]['department_id'] == $department[$keys]['id']):?>
                                      <td><?=$department[$keys]['department_code']?></td>
                                  <?php endif;?>
                              <?php endforeach;?>
                          <?php endif;?>
                      </tr>
                    <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--END COURSE LIST-->

      <!--CREATE ACCOUNT MODAL-->
      <div class="modal-container" id="modal_container_account">
        <div class="account" id="account">
          <span class="material-icons-sharp head">person_add</span>
          <button class="close" id="closeAccount"> <strong><span class="material-icons-sharp close_logo">close</span></strong> </button>
          <h2 style="margin-top:10px ; margin-bottom:10px;">Create an Account</h2>
          <div class="signup">
            <form method="POST">
              <div class="">
                <input type = hidden name="user_token" id="user_token" value=<?=Auth::createToken()?>>
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
                      if(!empty($department)){
                        foreach($department as $key=>$value){
                          echo "<option value=".$department[$key]['id'].">".$department[$key]['department_code']."</option>";
                        }
                      }
                      else echo "<option value=\"\">No Department Available</option>";
                  ?>
                </select>
                    <?php
                      if(!empty($error['department_id'])):?>
                      <span id="error"><?=$errors['department_id']?></span>
                    <?php endif;?>

                <select type="text" id="course_id" name="course_id" required>
                      <option value="" disabled selected>Course</option>
                      <?php
                      if(!empty($course)){
                        foreach($course as $key=>$value){
                          echo "<option value=".$course[$key]['id'].">".$course[$key]['course_code']." ".$course[$key]['course_description']."</option>";
                        }
                      }
                      else echo "<option value=\"\">No Department Available</option>";
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
            <button class="close" id="closeUpload"> <strong><span class="material-icons-sharp close_logo">close</span></strong> </button>
            <h2 style="margin-top:10px ; margin-bottom:10px;">Add Thesis/ Capstone</h2>
            <form method="POST" enctype="multipart/form-data">
              <input type = hidden name="research_token" id="research_token" value=<?=Auth::createToken()?>>
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

                <select type="text" id="department_id" name="department_id" required>
                  <option value="" disabled selected>Department</option>
                  <?php if(!empty($department)):?>
                      <?php foreach($department as $key => $value):?>
                          <option value="<?=$department[$key]['id']?>"><?=$department[$key]['department_code']?></option>
                      <?php endforeach;?>
                  <?php else:?>
                  <?php endif;?>
                </select>
                <?php if(!empty($errors['department_id'])):?>
                  <span id="error"><?=$errors['department_id']?></span>
                <?php endif;?>

                <select type="text" id="course_id" name="course_id" required>
                  <option value="" disabled selected>Course</option>
                  <?php if(!empty($course)):?>
                      <?php foreach($course as $key => $value):?>
                          <option value="<?=$course[$key]['id']?>"><?=$course[$key]['course_description']?></option>
                      <?php endforeach;?>
                  <?php else:?>
                  <?php endif;?>
                </select>
                <?php if(!empty($errors['course_id'])):?>
                  <span id="error"><?=$errors['course_id']?></span>
                <?php endif;?>
              </div>

              <div class="">
                <div class="field">                                                 
                    <label for="picture"><i class="uil uil-file-upload" style="cursor: pointer;" required></i><span class="label" style="cursor:pointer;">Upload a PDF version of Thesis/ Capstone</span></label>
                    <input type="file" id="picture" name="picture" onchange="getImage(this.value);" accept=".pdf" required>
                    
                    <span  class="span-validate" onchange="getImage(this.value);" id="file" name="file"></span>
                    <!-- Upload a PDF version of Thesis / Capstone) -->
                    <?php if(!empty($errors['picture'])):?>
                      <span id="error"><?=$errors['picture']?></span>
                    <?php endif;?>
                </div>

                <div class="field">                                            
                    <label for="picture1"><i class="uil uil-file-upload" style="cursor: pointer;" required></i><span class="label" style="cursor:pointer;">Upload a PDF version of Abstract</span></label>
                    <input type="file" id="picture1" name="picture1" onchange="getImages(this.value);" accept=".pdf" required>
                    <span  class="span-validate" onchange="getImages(this.value);" id="file1" name="file1"></span>
                    <!-- Upload a PDF version of your student ID (front and back) -->
                </div>
                
                

                <textarea class="field" id="research_description" name="research_description" placeholder="Description" required></textarea>
                <?php if(!empty($errors['research_description'])):?>
                  <span id="error"><?=$errors['research_description']?></span>
                <?php endif;?>

                <button type="submit" class="field_btn" id="submit" name="upload_file" style="margin-top:5px ;">Upload File</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--END OF UPLOAD FILE MODAL-->

  </div><!--end right-->
</div><!--end container-->
<?php $this->view('includes/footer')?>