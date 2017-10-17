<?php ob_start(); ?> 
<div class="contactform">

<form name="sentMessage" id="contactForm"  method="post" action="index.php?action=mail">

<?php
if (isset($_POST["name"]))
{
    echo '$envoi';
}
?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="name" name="name" required data-validation-required-message="Please enter your name."   value="<?php  echo htmlspecialchars($_POST['name']); ?>" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email </label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required data-validation-required-message="Please enter your email address." value="<?php echo htmlspecialchars($_POST['email']); ?>" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Téléphone</label>
                                <input type="tel" class="form-control" placeholder="Téléphone"  id="phone" name= "phone" required data-validation-required-message="Please enter your phone number."  value="<?php  echo htmlspecialchars($_POST['phone']); ?>" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required data-validation-required-message="Please enter a message."  value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" id="envoyer" name="submit" class="btn btn-success btn-lg">Envoyer</button>
                            </div>
                        </div>
                    </form>


</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
