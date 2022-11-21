<?php $this->view('auth/includes/header')?>
</head>
<body>
    <div class="logo">
        <img src="assets/images/main.png" alt="BulSU Archive">
    </div>

<?php if(message()):?>
    <div id="overlay">
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
        <div class="forms">
            <div class="form login">
                <h1 class="title">Login</h1>

                <!--Form for Login-->
                <form method="POST">

                    <!--CSRF Token a security for Cross Site Request Forgery-->
                    <input type ="hidden" id="user_token" name="user_token" value="<?=Auth::createToken()?>"></input>
                
                    <!--Input Email-->
                    <div class="input-field">
                        <input type="text" id="email_verified" name="email_verified" placeholder="Enter your BulSU Email" required>
                        <i class="uil uil-envelope icon"></i>
                        <!--Department print Error if they have-->
                        <?php if(!empty($errors['email_verified'])):?>
                            <span id="error"><?=$errors['email_verified']?></span>
                        <?php endif;?>
                        <!--End Condition-->
                    </div>
                    <!--End of Input Email-->

                    <!--Input Password-->
                    <div class="input-field">
                        <input type="password" id="password" name="password"  class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <!--End of Input Password-->
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="">
                        <button class="input-field" type="submit" id="login" name="login">Login</button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <h1 class="title">Registration</h1>

                <form method="POST" id="register" enctype="multipart/form-data">
                    <div class="left">
                    <input type = "hidden" id="temp_token" name="temp_token" value="<?=Auth::createToken()?>"></input>

                        <!--Select User Type-->
                        <div class="input-field">
                            <select type="text" id="role_id" name="role_id" onchange="disableCourse(this)" required>
                                <option value="" disabled selected>User Type</option>
                                <option value="3">Faculty</option>
                                <option value="2">Student</option>
                            </select>
                            <!--User Type print Error if they have-->
                            <?php if(!empty($errors['role_id'])):?>
                                <span><?=$errors['role_id']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End Select User Type-->
                        
                        <!--First Name Input-->
                        <div class="input-field">
                            <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                            <!--First Name print Error if they have-->
                            <?php if(!empty($errors['firstname'])):?>
                                <span id="error"><?=$errors['firstname']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End First Name Input-->

                        <!--Last Name Input-->
                        <div class="input-field">
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                            <!--Last Name print Error if they have-->
                            <?php if(!empty($errors['lastname'])):?>
                                <span id="error"><?=$errors['lastname']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End Last Name Input-->

                        <!--Select Department-->
                        <div class="input-field">
                            <select type="text" placeholder="Department" name="department_id" id="department_id" required>
                            <option value="" disabled selected>Department</option>
                            <?php
                                foreach($department as $key=>$title){
                                    echo "<option value=\"".$department[$key]['id']."\">".$department[$key]['department_code']."</option>";

                                }
                            ?>
                            </select>
                            <!--Department print Error if they have-->
                            <?php if(!empty($errors['department_id'])):?>
                                <span id="error"><?=$errors['department_id']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End Select Department-->

                        <!--Select Course-->
                        <div class="input-field">
                            <select type="text" placeholder="Course" name="course_id" id="course_id" required>
                                <option value="" disabled selected>Course</option>
                                <?php
                                if(!empty($course)){
                                    foreach($course as $keys=>$title){
                                        echo "<option value=\"".$course[$key]['id']."\">".$course[$keys]['course_description']."</option>";
                                    }
                                }
                                else{
                                    "<option value=\"\">No Course Available</option>";
                                }
                                ?>
                            </select>                            
                            <!--Department print Error if they have-->
                            <?php if(!empty($errors['course_id'])):?>
                                <span id="error"><?=$errors['course_id']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End Select Course-->
                    </div>

                    <div class="right">
                        <!--Input School ID-->
                        <div class="input-field">
                            <input type="number" placeholder="School ID" name="school_id" id="school_id" required>
                            <!--School ID print Error if they have-->
                            <?php if(!empty($errors['school_id'])):?>
                                <span id="error"><?=$errors['school_id']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End School ID-->

                        <!--Input Email-->
                        <div class="input-field">
                            <input type="text" placeholder="BulSU Email" name="email" id="email">
                            <!--Email print Error if they have-->
                            <?php if(!empty($errors['email'])):?>
                                <span id="error"><?=$errors['email']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End Email--->

                        <!--Input Password-->
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Create a password" name="password" id="password" required>
                            <!--Password print Error if they have-->
                            <?php if(!empty($errors['password'])):?>
                                <span id="error"><?=$errors['password']?></span>
                            <?php endif;?>
                            <!--End Condition-->
                        </div>
                        <!--End Password-->

                        <div class="input-field">
                            <input type="password" id="confirm_password" name="confirm_password" class="password" placeholder="Confirm a password" required>
                            
                        </div> 

                        <!--Input File-->
                        <div class="input-field">
                            <input disabled>                                                      
                            <label for="picture"><i class="uil uil-file-upload" style="cursor: pointer;" required></i></label>
                            <input type="file" id="picture" name="picture" onchange="getImage(this.value);" accept=".pdf" required>
                            <label class="label">Upload a PDF version of your student ID (front and back)</label> 
                            <span  class="span-validate" id="file" name="file"> </span>
                            <!-- Upload a PDF version of your student ID (front and back) -->
                        </div>
                        <?php if(!empty($errors['picture'])):?>
                                <span id="pic_error"><?=$errors['picture']?></span>
                            <?php endif;?>
                            
                        <!--End Input File-->
                    </div> 
                    <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="termCon" required>
                        <label for="termCon" class="text">I accepted all <a href="#">Terms and Conditions</a></label>
                    </div>
                </div>
                <div class="">
                    <button class="input-field" type="submit" id="signUp" name="signUp">Signup</button>
                </div>    
                                        
                </form>
                <div class="login-signup">
                    <span class="text-login">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php $this->view('auth/includes/footer')?>