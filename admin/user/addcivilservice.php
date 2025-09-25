    <div id="validate_leaveCredits"></div>
     <form class="form-horizontal span6 " action="controller.php?action=addcivilservice" method="POST"> 
       
    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "CAREER">Career</label>

        <div class="col-md-8">
        <textarea class="form-control input-sm" id="CAREER" name="CAREER" placeholder=
              "Career Service/ RA 1080 (Board/BAR) Under Special Law/ CES/CSEE" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"></textarea> 
        </div>
      </div>
      </div> 

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "RATING">Rating</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm RATING" id="RATING" name="RATING" placeholder=
              "Rating" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 
     
     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATEEXAMINATION">Date of Examination</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="DATEEXAMINATION" name="DATEEXAMINATION"  value="" type="text" class="form-control DATEEXAMINATION" size="7" 
                data-inputmask="'alias': 'mm/dd/yyyy'" data-mask Required>
              </div>
        </div>
      </div>
    </div> 

     <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "PLACEEXAMINATION">Place</label>

        <div class="col-md-8">
          
           <textarea class="form-control input-sm" id="PLACEEXAMINATION" name="PLACEEXAMINATION" placeholder=
              "Place of Examination/ Conferment" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"
               autocomplete="off"></textarea>
        </div>
      </div>
      </div> 

    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "LICENSENO">Number</label>

        <div class="col-md-8">
           <input type="text" class="form-control input-sm LICENSENO" id="LICENSENO" name="LICENSENO" placeholder=
              "License Number" type="text" value=""    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
        </div>
      </div>
      </div> 
 

    <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "DATERELEASED">Date of Release</label>

        <div class="col-md-8">
           <div class="input-group" id=""> 
                <div class="input-group-addon"> 
                  <i class="fa fa-calendar"></i>
                </div>
                <input id="DATERELEASED" name="DATERELEASED"  value="" type="text" class="form-control DATERELEASED" size="7" 
                data-inputmask="'alias': 'mm/dd/yyyy'" data-mask Required >
              </div>
        </div>
      </div>
    </div>  

     
  <div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label" for=
        "idno"></label>

        <div class="col-md-8">
         <button class="btn btn-mod btn-sm " name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
            <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
         </div>
      </div>
    </div> 
  </form>

    <script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script> 
    <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script> 
     <!-- DataTables JavaScript --> 
 



<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.extensions.js"></script> 
  


<!-- Custom Theme JavaScript --> 
 

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script> 
     

     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

 
    //Money Euro
    $("[data-mask]").inputmask();
 
 
  function capitalize(textboxid, str) {
      // string with alteast one character
      // if (str && str.length >= 1)
      // {       
      //     var firstChar = str.charAt(0);
      //     var remainingStr = str.slice(1);
      //     str = firstChar.toUpperCase() + remainingStr;
      // }
      document.getElementById(textboxid).value =  str.toUpperCase();
  }


 
 
 
</script> 