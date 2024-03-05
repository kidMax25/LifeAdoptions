<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Application Form</title>
    <!-- Add any necessary CSS styles or link to external stylesheets here -->
</head>

<body>

    <form action="./connect.php" method="post">
        <fieldset class="formFieldset">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="wrapper">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="First Name">First Name*:</label>
                                    <input type="text" value="" size="20" name="form[First Name]" class="rsform-input-box" aria-required="true">
                                    <span class="formClr"><span id="component915" class="formNoError">Invalid Input</span></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Last Name">Last Name*:</label>
                                    <input type="text" value="" size="20" name="form[Last Name]" class="rsform-input-box" aria-required="true">
                                    <span class="formClr"><span id="component916" class="formNoError">Invalid Input</span></span>
                                </div>
                            </div>
                            <!-- Add the rest of the form fields here -->
                            <div class="box-invisible form-info">
                                <p style="font-size: 14px;line-height: 1.5;">This is an application, not a contract. There is no obligation by either party.
                                    Vital statistics are confidential and are not shared with birthparents. Your information is submitted via a secure
                                    server for additional security. By submitting this application, you admit that your answers are true and correct.
                                    For more information, please read our privacy statement.</p>
                                <small style="display:block;margin-bottom:1em">This site is protected by reCAPTCHA and the Google <a
                                        href="https://policies.google.com/privacy">Privacy Policy</a> and <a
                                        href="https://policies.google.com/terms">Terms of Service</a> apply.
                                </small>
                            </div>
                            <div class=form-row>
                                <div class="form-group col-md-4"> <label for="Preferred Pronoun">Preferred Pronouns:</label>
                                    <input type=text value="" size=20 name="form[Preferred Pronoun]" class=rsform-input-box> 
                                    <span class=formClr><span id=component982 class=formNoError>Invalid Input</span></span> </div>
                                <div class="form-group col-md-4"> 
                                    <label for=LEADCF46>Your Date of Birth:</label>
                                    <input type=text value="" size=20 name="form[LEADCF46]" class="date_mask rsform-input-box"> 
                                    <span class=formClr><span id=component933 class=formNoError>Invalid Input</span></span>
                                    <p class=italic style=font-size:13px>*You must be 25 years of age or older to adopt.</p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=LEADCF41>Your Race:</label>
                                    <select name=form[LEADCF41][] class="form-control rsform-select-box">
                                        <option value=-None->-None-</option>
                                        <option value="American Indian/Alaska Native">
                                            American Indian/Alaska Native</option>
                                        <option value=Asian>Asian</option>
                                        <option value="Black/African American">
                                            Black/African American</option>
                                        <option value="Hispanic/Latin American">
                                            Hispanic/Latin American</option>
                                        <option value="Pacific Islander/Native Hawaiian">
                                            Pacific Islander/Native Hawaiian
                                        </option>
                                        <option value=White/Caucasian>
                                            White/Caucasian</option>
                                        <option value="Other Race/Ethnicity Alone">
                                            Other Race/Ethnicity Alone</option>
                                        <option value=Multiracial/Multiethnic>
                                            Multiracial/Multiethnic</option>
                                    </select> <span class=formClr><span id=component934 class=formNoError>Invalid Input</span></span> 
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" name="'birthparent-form2" id="Submit2" class="btn-cyan rsform-submit-button">Submit Application</button>
                                    <div id="gettime"></div>
                                    <p class="mt-4 mb-4" style="font-size: 14px;text-align:left">
                                        <strong>Please note:</strong> We will contact you within 72 hours of receipt of your complete application.
                                        Contact will be made by email or phone.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>

</body>

</html>
