<?php include_once("header.php"); ?>

<?php
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
  }
  

?>

<style>
         body {
            background-image: url("/healthcheck/image/14.jpg") ;
            background-size: 100% 100%;
         }
      </style>

<div class="container">
        <div class="progress mt-3" style="height: 35px;">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
          aria-valuemin="0" aria-valuemax="100" style="width:20%" id="progressBar">
           Introduction
          </div>
        </div>
        <div class="row">
            <div class="forms mt-4" style="width: 1600px; padding-right: 1000px;">
                <form action="result.php" method="post" accept-charset="utf-8" class="col-sm-6 offset-sm-3 text-center">
                    <div class="shadow p-3 mb-5 bg-white rounded" id="first" style="width: 725px; height: 500px;
                    ">
                        <div class="row">
                           
                            <div class="text-content">
                                <img src="/healthcheck/image/10.png" alt="image" style="max-height: 250px; width: 50%;  display: block;
                                                        margin-left: auto;
                                                        margin-right: auto;
                                                        width: 50%; ">
                                <h3 style="text-align: center;"> Hello! </h3>
                                <p> You’re about to use a short, safe and anonymous health checkup. Your answers will be carefully analyzed and you’ll learn about possible causes of your symptoms.


                                </p>
                            </div>
                             
                        </div>

                        <a href="#" id="firstb" class="btn btn-primary">Next</a>
                    </div>
                    <div class="shadow p-3 mb-5 bg-white rounded" id="second"  style="width:735px ; height: auto;">
                        <div class="row">
                            <div class="privacy">
                            	<img src="/healthcheck/image/11.png" alt="image" style="max-height: 250px; width: 40%;  ">
                                <h2>Terms of Service</h2>
                                <p style="text-align: left; padding-left: 25px;">Before using the checkup, please read Terms of Service. Remember that:
                                  <ul>
                                      <li>Checkup is not a diagnosis. Checkup is for informational purposes and is not a qualified medical opinion.</li>
                                      <li>Do not use in emergencies. In case of health emergency, call your local emergency number immediately.</li>
                                      <li>Your data is safe. Information that you provide is anonymous and not shared with anyone.</li>
                                     
                                    </ul>
                                <input type="checkbox" name="privacy" id="privacy"> I read and accept Terms of Service.
                            </div>
                            <br>
                        </div>

                        
                       
                        <a href="#" id="secondp" class="btn btn-primary" >Back</a>  
                      
                            <a href="#" id="secondb" class="btn btn-primary">Next</a>
                          
                    </div>


                    <div class="shadow p-5 mb-5 bg-white rounded" id="third" style="width:735px ; height: auto;">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Please check all the statements below that apply to you</h2>
  								
            
                								<table class="table table-borderless">
                  
              							    <tbody>
              							      <tr>
              							        <td>I'm overweight or obese</td>
              							        <td> 
                                      <div class="radio">
                                          <label><input type="radio" name="optradio">Yes</label>
                                       </div>
                                     </td>
              							        <td>
                                     <div class="radio">
                                         <label><input type="radio" name="optradio">No</label>
                                     </div>
                                    </td>
              							        
              							      </tr>
              							      <tr>
              							        <td>I smoke cigarettes</td>
              							        <td> 
                                      <div class="radio">
                                        <label><input type="radio" name="optradio2">Yes</label>
                                      </div>
                                    </td>
              							        <td> <div class="radio">
                                    <label><input type="radio" name="optradio2">No</label>
                               </div></td>
              							        
              							      </tr>
              							      <tr>
              							        <td>I have high cholesterol</td>
              							        <td> <div class="radio">
                                    <label><input type="radio" name="optradio3">Yes</label>
                               </div></td>
              							        <td> <div class="radio">
                                    <label><input type="radio" name="optradio3">No</label>
                               </div></td>
              							        
              							      </tr>
              							      <tr>
            							        <td>I have hypertension</td>
            							        <td> <div class="radio">
                                  <label><input type="radio" name="optradio4">Yes</label>
                             </div></td>
            							        <td> <div class="radio">
                                  <label><input type="radio" name="optradio4">No</label>
                             </div></td>
            							        
            							      </tr>
            							      <tr>
            							        <td>I have diabetes</td>
            							        <td> <div class="radio">
                                  <label><input type="radio" name="optradio5">Yes</label>
                             </div></td>
            							        <td> 
                                    <div class="radio">
                                      <label><input type="radio" name="optradio5">No</label>
                                    </div>
                                  </td>
            							        
            							      </tr>
            							    </tbody>
             								 </table>
                          </div>
                      </div>
                      <a href="#" id="thirdp" class="btn btn-primary">Back</a>
                      <a href="#" id="thirdb" class="btn btn-primary">Next</a>

                    </div>
                    <?php 
                        $sqll = "SELECT DISTINCT symptom FROM disease";
                        $result = mysqli_query($conn, $sqll);
                    ?>

                   
                      <div class="shadow p-3 mb-5 bg-white rounded" id="fourth" style="width:735px ; height:514px;">
                        <div class="row">
                            <div class="col-sm-12">
                              <img src="/healthcheck/image/13.gif" alt="image" style="max-height: 275px; width: 40%; padding-top: 0px; ">
                               <div class="form-group">

                                <label for="sel1"><h2>Add Your Symptoms</h2></label>
                                <br><br>
                                <select class="form-control" id="sel1" name="sympt">
                                  <?php if(mysqli_num_rows($result)): ?>
                                    <?php while($rows = mysqli_fetch_assoc($result)):?>
                                    <?php $symptoms = $rows['symptom']; ?>
                                    <option value="<?php echo $symptoms; ?>"><?php echo $symptoms; ?></option>
                                   <?php endwhile; ?>
                                  <?php endif; ?>
                                </select>
                                <br><br><br>
                                <p></p>
                              </div>
                            </div>
                            
                        </div>

                         <a href="#" id="fourthp" class="btn btn-primary">Back</a>
                         <button type="submit" name="check" class="btn btn-primary">Submit</button>
                     </div>
                 

                             
                  </div>

                        
                    
                </form>
            </div>
        </div>
    </div>
    <br><br><br>

<?php include_once("footer.php"); ?>