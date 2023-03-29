<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact</title>
</head>
<body>
<?php include('nav.php'); ?>
    <!-- het contactformulier -->
    <div class="contactformulier">
            <div class="container" style="margin-bottom: 50px; margin-top: 30px">
                <section class="mb-4">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="d-flex text-center">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                    <div class="row">
                                        <!-- NAAM -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <br>
                                                <label for="forename" class="d-block p text-black font-weight-bold">voornaam</label>
                                                <input type="text" required id="forename" name="forename" class="form-control" style="padding: 13px;">
                                                <label for="lastname" class="d-block p text-black font-weight-bold">achternaam</label>
                                                <input type="text" id="lastname" name="lastname" class="form-control" style="padding: 13px;">
                                            </div>
                                        </div>
                                        <!-- NAAM -->

                                        <!-- E-mail -->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <br>
                                                <label for="email" class="d-block p text-black font-weight-bold">E-mail</label>
                                                <input type="email" id="email" name="email" class="form-control" style="padding: 13px">
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <!-- telefoonnummer -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="subject" class="d-block p text-black font-weight-bold">Telefoonnummer</label>
                                                <input type="number" id="phonenumb" name="phonenumb" class="form-control" style="padding: 13px;">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <!-- het bericht -->
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <label for="message" class="d-block p text-black font-weight-bold">Bericht</label>
                                                <textarea maxlength="500" type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <br>

                                    <!-- Button voor versturen-->
                                    <div class="text-left text-md-left d-flex justify-content-center text-center" style="margin-bottom: -40px;">
                                        <button type="submit" class="verzend">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <svg viewBox="0 0 24 24" width="24" height="24">
                                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <span>Send</span>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    
</body>
</html>