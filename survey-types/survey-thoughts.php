<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">





<?php $postid = get_the_ID();?>



 <div class="container">

   <form class="form-horizontal" method="post" action="<?php echo get_page_link($postid) ?>">

   <fieldset>



   <!-- Form Name -->

   <legend></legend>



Once you complete the assessment, click submit. Once you click submit you'll be able to see your score and what it means for you.</p> 


 <input name="form-type" type="" class="hidden" value="thoughts">

   <!-- Q1 -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="radios"> 1. How significant is the customer benefit?<br><strong>1 = MINOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = HUGE</strong></label>

     <div class="col-md-4">

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-0" value="1" checked="checked">

         1

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-1" value="2">

         2

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-2" value="3">

         3

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-3" value="4">

         4

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-1" id="radios-4" value="5">

         5 

       </label>

     </div>

   </div>







   <!-- Q2 -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="radios">  2. Is this idea truly new?<br><strong>1 = ME-TOO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = BREAKTHROUGH</strong></label>

     <div class="col-md-4">

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-0" value="1" checked="checked">

         1

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-1" value="2">

         2

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-2" value="3">

         3

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-3" value="4">

         4

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-2" id="radios-4" value="5">

         5

       </label>

     </div>

   </div>

   <!-- Q3 -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="radios"> 3. How bis is the potential market?<br><strong>1 = TINY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = ENORMOUS</strong></label>

     <div class="col-md-4">

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-0" value="1" checked="checked">

         1

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-1" value="2">

         2

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-2" value="3">

         3

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-3" value="4">

         4

       </label>

       <label class="radio-inline" >

         <input type="radio" name="radios-3" id="radios-4" value="5">

         5

       </label>

     </div>

   </div>  <!-- Q4 -->

     <div class="form-group">

       <label class="col-md-4 control-label" for="radios">  4. Can the benefit be delivered economically?<br><strong>1 = NOPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = ABSOLUTELY</strong></label>

       <div class="col-md-4">

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-0" value="1" checked="checked">

           1

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-1" value="2">

           2

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-2" value="3">

           3

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-3" value="4">

           4

         </label>

         <label class="radio-inline" >

           <input type="radio" name="radios-4" id="radios-4" value="5">

           5

         </label>

       </div>

     </div>  <!-- Q5 -->

       <div class="form-group">

         <label class="col-md-4 control-label" for="radios">  5. How significant are the technical hurdles?<br><strong>1 = MINOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = DAUNTING</strong></label>

         <div class="col-md-4">

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-0" value="1" checked="checked">

             1

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-1" value="2">

             2

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-2" value="3">

             3

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-3" value="4">

             4

           </label>

           <label class="radio-inline" >

             <input type="radio" name="radios-5" id="radios-4" value="5">

             5

           </label>

         </div>

       </div>  <!-- Q6 -->

         <div class="form-group">

           <label class="col-md-4 control-label" for="radios"> 6. Does this idea require a new ecosystem?<br><strong>1 = NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = YES</strong></label>

           <div class="col-md-4">

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-0" value="1" checked="checked">

               1

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-1" value="2">

               2

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-2" value="3">

               3

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-3" value="4">

               4

             </label>

             <label class="radio-inline" >

               <input type="radio" name="radios-6" id="radios-4" value="5">

               5

             </label>

           </div>

         </div>  <!-- Q7 -->

           <div class="form-group">

             <label class="col-md-4 control-label" for="radios"> 7. Does this idea fit with our skills/assets?<br><strong>1 = POOR FIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = TIGHT FIT</strong></label>

             <div class="col-md-4">

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-0" value="1" checked="checked">

                 1

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-1" value="2">

                 2

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-2" value="3">

                 3

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-3" value="4">

                 4

               </label>

               <label class="radio-inline" >

                 <input type="radio" name="radios-7" id="radios-4" value="5">

                 5

               </label>

             </div>

           </div>  


   <!-- Button -->

   <div class="form-group">

     <label class="col-md-4 control-label" for="singlebutton">Submit</label>

     <div class="col-md-4">

          <button id="signin_button" type="button" onclick="myFunction()" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>

     </div>

   </div>









    <!--Open - ---Modle-->



    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

      <div class="modal-dialog" role="document">

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h4 class="modal-title" id="myModalLabel">Results</h4>

          </div>

          <div class="modal-body">

          <p> Your score is <span id="score"></span></p>

          <p><span id="msg"></span></p>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button name="submit" class="btn btn-primary">Save Results</button>

          </div>

        </div>

      </div>

    </div>



</div>

       

       

       <!--Closemodle-->





   </fieldset>

   </form>





 </div>



<script type="text/javascript" src="/wp-content/themes/coursepress-child/survey-types/tmsg.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>