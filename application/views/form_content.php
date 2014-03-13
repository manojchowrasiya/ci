<!DOCTYPE html>
<html>
<script src="<?php echo base_url()?>css/bootstrap.min.js"></script>
<body>
  <?php //echo $msg;?>

  <div class="container">
    <div class="row">
     <?php echo form_open_multipart('profile/selection/'); ?>
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Part 1 -->
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="Name">Full Name</label>
  <div class="controls">
    <input id="fullname" name="fullname" type="text" placeholder="placeholder" class="input-xlarge" required="required">
    <p class="help-block">help</p>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="gender">Gender</label>
  <div class="controls">
    <select id="gender" name="gender" class="input-xlarge">
      <option></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="Contact Number">Contact Number:</label>
  <div class="controls">
    <input id="contactno:" name="contactno" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="Contact email Id">Contact email Id : </label>
  <div class="controls">
    <input id="emailid" name="emailid" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="Total Full Time Work Experience">Total Full Time Work Experience:</label>
  <div class="controls">
    <input id="totalexperience" name="totalexperience" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="select">Company Name (where did you do your internship)</label>
  <div class="controls">
    <select name="intercmpyname" id="select" class="chzn-select span4">
      <option>Other</option>
      <option>Alabama</option>
      <option>Alaska</option>
      <option>Arizona</option>
      <option>Arkansas</option>
      <option>California</option>
      <option>Colorado</option>
      <option>Connecticut</option>
    </select>
    <p class="help-block">Start typing to activate auto complete!</p>
  </div>

</div>


<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="checkboxes">Project Function</label>
  <div class="controls">
    <label class="checkbox" for="projectfunction-0">
      <input type="checkbox" name="projectfunction[]" id="projectfunction-0" value="Option one">
      Option one
    </label>
    <label class="checkbox" for="projectfunction-1">
      <input type="checkbox" name="projectfunction[]" id="projectfunction-1" value="Option two">
      Option two
    </label> <label class="checkbox" for="projectfunction-2">
      <input type="checkbox" name="projectfunction[]" id="projectfunction-2" value="Option three">
      Option three
    </label> <label class="checkbox" for="projectfunction-3">
      <input type="checkbox" name="projectfunction[]" id="projectfunction-3" value="Option four">
      Option four
    </label> <label class="checkbox" for="projectfunction-4">
      <input type="checkbox" name="projectfunction[]" id="projectfunction-4" value="Option five">
      Option five
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="10th/12th Percentage">10th/12th Percentage</label>
<div class="controls">
    <label class="radio inline" for="tenthperce-0">
      1
      <input type="radio" name="tenthperce" id="tenthperce-0" value="1" checked="checked" required="required">
    </label>
    <label class="radio inline" for="tenthperce-1">
      2
      <input type="radio" name="tenthperce" id="tenthperce-1" value="2" required="required">
    </label>
    <label class="radio inline" for="tenperc-2">
      3
      <input type="radio" name="tenthperce" id="tenthperce-2" value="3" required="required">
    </label>
    <label class="radio inline" for="tenthperce-3">
      4
      <input type="radio" name="tenthperce" id="tenthperce-3" value="4" required="required">
    </label>
    <label class="radio inline" for="tenperc-4">
      5
      <input type="radio" name="tenthperce" id="tenthperce-4" value="5" required="required">
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="graduationperc">Graduation Percentage</label>
  <div class="controls">
    <label class="radio inline" for="graduationperc-0">
      1
      <input type="radio" name="graduationperc" id="graduationperc-0" value="1" checked="checked" required="required">
    </label>
    <label class="radio inline" for="graduationperc-1">
      2
      <input type="radio" name="graduationperc" id="graduationperc-1" value="2" required="required">
    </label>
    <label class="radio inline" for="graduationperc-2">
      3
      <input type="radio" name="graduationperc" id="graduationperc-2" value="3" required="required">
    </label>
    <label class="radio inline" for="graduationperc-3">
      4
      <input type="radio" name="graduationperc" id="graduationperc-3" value="4" required="required">
    </label>
    <label class="radio inline" for="graduationperc-4">
      5
      <input type="radio" name="graduationperc" id="graduationperc-4" value="5" required="required">
    </label>
  </div>
</div>


<div class="control-group">
  <label class="control-label" for="valuegraduation">Brand Value of Graduation College</label>
  <div class="controls">
    <label class="radio inline" for="valuegraduation-0">
      1
      <input type="radio" name="valuegraduation" id="valuegraduation-0" value="1" checked="checked" required="required">
    </label>
    <label class="radio inline" for="valuegraduation-1">
      2
      <input type="radio" name="valuegraduation" id="valuegraduation-1" value="2" required="required">
    </label>
    <label class="radio inline" for="valuegraduation-2">
      3
      <input type="radio" name="valuegraduation" id="valuegraduation-2" value="3" required="required">
    </label>
    <label class="radio inline" for="valuegraduation-3">
      4
      <input type="radio" name="valuegraduation" id="valuegraduation-3" value="4" required="required">
    </label>
    <label class="radio inline" for="valuegraduation-4">
      5
      <input type="radio" name="valuegraduation" id="valuegraduation-4" value="5" required="required">
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="workexp">Work Experience</label>
  <div class="controls">
    <label class="radio inline" for="workexp-0">
      1
      <input type="radio" name="workexp" id="workexp-0" value="1" checked="checked" required="required">
    </label>
    <label class="radio inline" for="workexp-1">
      2
      <input type="radio" name="workexp" id="workexp-1" value="2" required="required">
    </label>
    <label class="radio inline" for="workexp-2">
      3
      <input type="radio" name="workexp" id="workexp-2" value="3" required="required">
    </label>
    <label class="radio inline" for="workexp-3">
      4
      <input type="radio" name="workexp" id="workexp-3" value="4" required="required">
    </label>
    <label class="radio inline" for="workexp-4">
      5
      <input type="radio" name="workexp" id="workexp-4" value="5" required="required">
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="cvbasedshortlisting">CV Based Shortlisting</label>
  <div class="controls">
    <label class="radio inline" for="cvbasedshortlisting-0">
      1
      <input type="radio" name="cvbasedshortlisting" id="cvbasedshortlisting-0" value="1" checked="checked" required="required">
    </label>
    <label class="radio inline" for="cvbasedshortlisting-1">
      2
      <input type="radio" name="cvbasedshortlisting" id="cvbasedshortlisting-1" value="2" required="required">
    </label>
    <label class="radio inline" for="cvbasedshortlisting-2">
      3
      <input type="radio" name="cvbasedshortlisting" id="cvbasedshortlisting-2" value="3" required="required">
    </label>
    <label class="radio inline" for="cvbasedshortlisting-3">
      4
      <input type="radio" name="cvbasedshortlisting" id="cvbasedshortlisting-3" value="4" required="required">
    </label>
    <label class="radio inline" for="cvbasedshortlisting-4">
      5
      <input type="radio" name="cvbasedshortlisting" id="cvbasedshortlisting-4" value="5" required="required">
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="extraactivity">Extra Curricular Activities</label>
  <div class="controls">
    <label class="radio inline" for="extraactivity-0">
      1
      <input type="radio" name="extraactivity" id="extraactivity-0" value="1" checked="checked" required="required">
    </label>
    <label class="radio inline" for="extraactivity-1">
      2
      <input type="radio" name="extraactivity" id="extraactivity-1" value="2" required="required">
    </label>
    <label class="radio inline" for="extraactivity-2">
      3
      <input type="radio" name="extraactivity" id="extraactivity-2" value="3" required="required">
    </label>
    <label class="radio inline" for="extraactivity-3">
      4
      <input type="radio" name="extraactivity" id="extraactivity-3" value="4" required="required">
    </label>
    <label class="radio inline" for="extraactivity-4">
      5
      <input type="radio" name="extraactivity" id="extraactivity-4" value="5" required="required">
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="rounds">No of Rounds</label>
  <div class="controls">
    <select id="rounds" name="rounds" class="input-xlarge">
      <option value="Male">1</option>
      <option value="Female">2</option>
      <option value="Female">3</option>
      <option value="Female">4</option>
      <option value="Female">5</option>
      <option value="Female">6</option>
      <option value="Female">7</option>
    </select>
  </div>
</div>
<?php for ($i=1; $i <=7 ; $i++) { ?>
<div class="control-group">
  <label class="control-label" for="round<?php echo $i;?>">Round <?php echo $i;?></label>
  <div class="controls">
    <select id="round<?php echo $i;?>" name="round<?php echo $i;?>" class="input-xlarge">
      <option value="Male">1</option>
      <option value="Female">2</option>
      <option value="Female">3</option>
      <option value="Female">4</option>
      <option value="Female">5</option>
      <option value="Female">6</option>
      <option value="Female">7</option>
    </select>
  </div>
</div>
<?php }?>

<div class="control-group">
  <label class="control-label" for="personality_traits">Which Personality traits does the company gives special importance to, during the entire selection process?
</label>
  <div class="controls">
    <label class="checkbox" for="personality_traits-0">
      <input type="checkbox" name="personality_traits" id="personality_traits-0" value="Option one">
      Option one
    </label>
    <label class="checkbox" for="personality_traits-1">
      <input type="checkbox" name="personality_traits" id="personality_traits-1" value="Option two">
      Option two
    </label> <label class="checkbox" for="personality_traits-2">
      <input type="checkbox" name="personality_traits" id="personality_traits-2" value="Option two">
      Option two
    </label> <label class="checkbox" for="personality_traits-3">
      <input type="checkbox" name="personality_traits" id="personality_traits-3" value="Option two">
      Option two
    </label> <label class="checkbox" for="personality_traits-4">
      <input type="checkbox" name="personality_traits" id="personality_traits-4" value="Option two">
      Option two
    </label>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="type_group_activity">Type of Group Activity
</label>
  <div class="controls">
    <label class="checkbox" for="type_group_activity-0">
      <input type="checkbox" name="type_group_activity" id="type_group_activity-0" value="Option one">
      Option one
    </label>
    <label class="checkbox" for="type_group_activity-1">
      <input type="checkbox" name="type_group_activity" id="type_group_activity-1" value="Option two">
      Option two
    </label> <label class="checkbox" for="type_group_activity-1">
      <input type="checkbox" name="type_group_activity" id="type_group_activity-2" value="Option two">
      Option two
    </label> <label class="checkbox" for="type_group_activity-1">
      <input type="checkbox" name="type_group_activity" id="type_group_activity-3" value="Option two">
      Option two
    </label> <label class="checkbox" for="type_group_activity-1">
      <input type="checkbox" name="type_group_activity" id="type_group_activity-4" value="Option two">
      Option two
    </label>
  </div>
</div>
<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="gd_topic">A6.2 Please mention your Group Discussion topic or little 
    background if it was a role play, case study or any other group activity</label>
  <div class="controls">                     
    <textarea id="gd_topic" name="gd_topic"></textarea>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="group_size">Group Size</label>
  <div class="controls">
    <select id="group_size" name="group_size" class="input-xlarge">
      <option value="Male">1</option>
      <option value="Female">2</option>
      <option value="Female">3</option>
      <option value="Female">4</option>
      <option value="Female">5</option>
      <option value="Female">6</option>
      <option value="Female">7</option>
    </select>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="gd_duration">Duration of Group Discussion</label>
  <div class="controls">
    <select id="gd_duration" name="gd_duration" class="input-xlarge">
      <option value="Male">1</option>
      <option value="Female">2</option>
      <option value="Female">3</option>
      <option value="Female">4</option>
      <option value="Female">5</option>
      <option value="Female">6</option>
      <option value="Female">7</option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="suggestion">Some specific suggestion for the aspirants?</label>
  <div class="controls">                     
    <textarea id="suggestion" name="suggestion"></textarea>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="noofpi">Number of Personal Interview Rounds *</label>
  <div class="controls">
    <select id="noofpi" name="noofpi" class="input-xlarge">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
    </select>
  </div>
</div>
<?php for ($i=1; $i <=7 ; $i++) { ?>
<div class="control-group">
  <label class="control-label" for="roundround<?php echo $i;?>name">Round <?php echo $i;?></label>
  <div class="controls">
    <select id="round<?php echo $i;?>name" name="round<?php echo $i;?>name" class="input-xlarge">
      <option value="Male">1</option>
      <option value="Female">2</option>
      <option value="Female">3</option>
      <option value="Female">4</option>
      <option value="Female">5</option>
      <option value="Female">6</option>
      <option value="Female">7</option>
    </select>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="duration_round">Duration of Interview  <?php echo $i;?></label>
  <div class="controls">
    <select id="duration_round<?php echo $i;?>" name="duration_round<?php echo $i;?>" class="input-xlarge">
      <option value="Male">1</option>
      <option value="Female">2</option>
      <option value="Female">3</option>
      <option value="Female">4</option>
      <option value="Female">5</option>
      <option value="Female">6</option>
      <option value="Female">7</option>
    </select>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="round<?php echo $i;?>_exp">Interview Experience and Insights</label>
  <div class="controls">                     
    <textarea id="round<?php echo $i;?>_exp" name="round<?php echo $i;?>_exp"></textarea>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="furthersuggestion<?php echo $i;?>">Any further advice for the candidates preparing for the interview?</label>
  <div class="controls">                     
    <textarea id="furthersuggestion<?php echo $i;?>" name="furthersuggestion<?php echo $i;?>"></textarea>
  </div>
</div>

<?php } ?>



<div class="control-group">
  <label class="control-label" for="employer1">Past employers</label>
  <div class="controls">
    <input id="employer1" name="employer1" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="emp1_exp">Employers Experience</label>
  <div class="controls">
    <input id="emp1_exp" name="emp1_exp" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>


<div class="control-group">
  <label class="control-label" for="employer2">Past employers</label>
  <div class="controls">
    <input id="employer2" name="employer2" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="emp2_exp">Employers Experience</label>
  <div class="controls">
    <input id="emp2_exp" name="emp2_exp" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="social_profile_id">Link to Facebook or Linkedin Profile:</label>
  <div class="controls">
    <input id="social_profile_id" name="social_profile_id" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="grad_college">Graduation College:</label>
  <div class="controls">
    <input id="grad_college" name="grad_college" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="grad_branch">Graduation Branch:</label>
  <div class="controls">
    <input id="grad_branch" name="grad_branch" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="post_grad_college">Post Graduation College (Optional) :</label>
  <div class="controls">
    <input id="post_grad_college" name="post_grad_college" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="post_grad_cource">Post Graduation Cource :</label>
  <div class="controls">
    <input id="post_grad_cource" name="post_grad_cource" type="text" placeholder="placeholder" class="input-xlarge">
    <p class="help-block">help</p>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton">Single Button</label>
  <div class="controls">
    <button id="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</body>
</html>