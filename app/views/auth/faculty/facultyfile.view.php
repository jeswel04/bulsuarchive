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
    <div class="btn_download" id="citation" style="background-color: var(--color-primary);">Cite this File</div>
    <?php
        $token=$_GET['id'];
        $id=$_SESSION['USER_DATA']['id'];
        $root = ROOT;
        if($token != $research[0]['token']){
            redirect('repository');
            exit;
        }
        else{
          
          foreach($research as $key=>$title){
          $views= $research[0]['views'];
          $counter= new Research();
          $_POST['views']=$views+1;
          $counter->update($research[$key]['id'],$_POST);

          $history = new History();
          $_POST['user_token'] = $_SESSION['USER_DATA']['token'];
          $_POST['token'] = $research[$key]['token'];
          $_POST['research_id'] = $research[$key]['id'];
          $_POST['date'] = date("Y-m-d H:i:s");
          $_POST['user_id'] = $_SESSION['USER_DATA']['id'];
          if($history->where(['research_id'=>$research[$key]['id']])){
              $history->update($research[$key]['id'],$_POST);
          }else{
          $history->insert($_POST);
          }
          $year = explode("-",$research[$key]['date_research']);
          $author = explode(" ",$research[$key]['researchers']);
          echo
              "<a href=\"".$root."/download?file=".$research[$key]['picture']."\" class=\"btn_download\" style=\"background-color:var(--color-primary);\">Download Whole paper</a>".
              "<a href=\"".$root."/download?file=".$research[$key]['picture1']."\" class=\"btn_download\" style=\"background-color:var(--color-warning);\">Download Abstract</a>".
              "<h1 style=\"color:var(--color-primary);\">".$research[$key]['title']."</h1>".
              "<span>".$research[$key]['researchers']."</span>".
              "<br><span>".$research[$key]['adviser']."</span>".
              "<br><span>".$research[$key]['date_research']."</span>".
              "<div class=\"cardContainer\" style=\"height:80%;\">".
                  "<div class=\"\">".
                  "<br><h2>Abstract</h2>".
                  "<iframe id=\"iframe\" name=\"iframe\" src=\"../upload_research/".$research[$key]['picture']."#toolbar=0\" frameborder=\"0\" height:300%></iframe>".
                  "</div>".
                  "<div class=\"\">".
                  "<br><h2>Whole Paper</h2>".
                  "<iframe id=\"iframe\" name=\"iframe\" src=\"../upload_research/".$research[$key]['picture']."#toolbar=0\" frameborder=\"0\" height:300%></iframe>".
                  "</div>".
                  
              "</div>";
          }
        }
    ?>
    
  <div class="modal-container" id="modal_container_Cite">
  <div class="citation">
    <button class="close" id="closeCite"> <strong><span class="material-icons-sharp close_logo">close</span><strong> </button>
    <h2 style="margin-top:10px ; margin-bottom:10px;">Citation</h2>
      <?php $title = strtolower(($research[$key]['title']));?>
      <label for="apa">APA</label>
  
      <input class="field" type="text" name="apa" id="apa" value="<?php echo $author[1]." ".$author[0][0].". et. all. (".$year[0].")".ucwords($title).". Bulacan State University Sarmiento Campus, Philippines"?>">

      <label for="mla">MLA</label>
      <input class="field" type="text" name="mla" id="mla" value="<?php echo $author[1]." ".$author[0][0].". et. all. ".ucwords($title).". ".$year[0].". Bulacan State University Sarmiento Campus"?>">
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
        <div class="theme-toggler">
          <span class="material-icons-sharp active">light_mode</span>
          <span class="material-icons-sharp">dark_mode</span>
        </div>
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
      <!---------- RECENT UPDATES -------------->
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
        </div>
      </div>
    <!------- END OF RECENT UPDATES --------> 
    
    <!------- BUTTON CONTAINER -------->
      <div class="button-container">  
        <div id="upload" class="item btn-thesis">
          <span class="material-icons-sharp">add</span>
          <h3>Add Thesis/ Capstone</h3>
        </div>
      </div>"
      <!------- END BUTTON CONTAINER -------->

      <!------- MODAL PER BUTTON CONTAINER -------->
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
                
                

                <textarea class="field" id="description" name="description" placeholder="Description" required></textarea>
                <?php if(!empty($errors['description'])):?>
                  <span id="error"><?=$errors['description']?></span>
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