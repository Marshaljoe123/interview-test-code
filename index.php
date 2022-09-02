<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <title>Test code - front END</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                 <div class="col-3"></div>
                 <div class="col-6 text-warning bg-secondary">AUTOMOBILE MANUFACTURER CUSTOMER'S PAGE
                     <form id="automibile_customers_form">
                        <div class="form-group mb-3">
                          <label for="name"></label>
                          <input type="name" class="form-control" placeholder="Enter Full name" id="fullname" required="true">
                          <span class="error_form" id="fullname_error_message"></span>
                        </div>
                         
                        <div class="form-group mb-3">
                          <label for="refCode"></label>
                          <input type="" class="form-control" placeholder="Enter Reference code" id="refcode" required="">
                          <span class="error_form" id="refcode_error_message"></span>
                        </div>
                         
                        <div class="input-group form-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your Email" id="email" required="">
                            <span class="error_form" id="email_error_message"></span>
                             <div class="input-group-append">
                                <span class="input-group-text">@sample.com</span>
                             </div>
                        </div>
                         
                         <div class="form-group mb-3">
                             <label for="automobileMakers">Select Automobile Makers</label>
                             <select class="form-control" id="automobileMakers" required="">
                                <option>Toyota</option>
                                <option>Ford</option>
                                <option>Honda</option>
                                <option>Volkswagen</option>
                                <option>Honda</option>
                                <option>Camry</option>
                                <option>Nissan</option>
                                <option>Mazda</option>
                                <option>BMW</option>
                                <option>Tesla</option>
                             </select>
                             <span class="error_form" id="select_error_message"></span>
                         </div>
                         
                         <hr class="my-4">
                         
                         <div class="form-group form-check">
                             <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" value="" required=""> Engine issue
                                <span class="error_form" id="Engine_issue_error_message"></span>
                             </label>
                         </div>
                         
                         <div class="form-group form-check">
                             <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" value="" required=""> Gearbox issue
                                 <span class="error_form" id="gearbox_error_message"></span>
                             </label>
                         </div>    
                         
                         <div class="form-group form-check">
                             <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" value="" required=""> Need body repair
                                 <span class="error_form" id="need_body_repair_error_message"></span>
                             </label>
                         </div>
                         
                         <div class="form-group form-check">
                             <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" value="" required=""> Need repainting
                                 <span class="error_form" id="need_repainting_error_message"></span>
                             </label>
                         </div>
                         
                         <div class="form-group form-check">
                             <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" value="" required=""> Writing problems
                                 <span class="error_form" id="writing_problems_error_message"></span>
                             </label>
                         </div>
                         
                         <div class="form-group form-check">
                             <label class="form-check-label">
                                 <input class="form-check-input" type="checkbox" value="" required=""> Oil Leakage
                                 <span class="error_form" id="oil_leakage_error_message"></span>
                             </label>
                         </div>
                         
                         <div class="form-group form-check mb-3">
                             <label class="form-check-label">
                                 <input class="form-check-input" type="checkbox" value="brakeissue" required=""> Brake issue
                                 <span class="error_form" id="brake_issue_error_message"></span>
                             </label>    
                         </div>
                         
                         <button type="nextbtn" class="btn btn-primary mb-3 ms-md-5" id="btnnext">Next</button>
                     </form>
                 </div>
                 <div class="col-3"></div>
            </div>
        </div>
        
        <script>
            
            $(function() {
                
                $("#fullname_error_message").hide();
                $("#refcode_error_message").hide();
                $("#email_error_message").hide();
                $("#select_error_message").hide();
                $("#Engine_issue_error_message").hide();
                $("#gearbox_error_message").hide();
                $("#need_body_repair_error_message").hide();
                $("#need_repainting_error_message").hide();
                $("#writing_problems_error_message").hide();
                $("#oil_leakage_error_message").hide();
                $("#brake_issue_error_message").hide();
                
                var error_fullname = false;
                var error_referencecode = false;
                var errorEmail = false;
                var errorSelect = false;
                var errorEngineIssue = false;
                var errorGearbox = false;
                var error_needBodyRepair = false;
                var error_needRepainting = false;
                var error_writingProblems = false;
                var errorOil_leakage = false;
                var errorBreakIssue = false;
                
                
            });
        </script>
    </body>
</html>



