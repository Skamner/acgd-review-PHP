<?php
include 'Config/Database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($POST['recaptcha-response'])) {
        $message = "veuillez cocher le captcha";
    } else {
        if(isset($-POST['email']) && isset($-POST['pwd'])) {
            $email = strip-tags($_POST['email']);
            $pwd = strip-tags($_POST['pwd']);

            $sql = "SELECT * FROM user WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':email', $email);
            $stmt->execute();
            
            $result = $stmt->fetch(POD: :FETCH_ASSOC);

            if($result) 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '_partials/head.php'; ?>
<body>
<?php include '_partials/header.php'; ?>
<body>
<main>
    <div id="formulaire" class="my-5"
        <?= isset($message) ? "<div class= 'alert alert-danger text-center'>$message</div>"
        <form class="row col-xl-6 mx-auto" method="POST">
            <div class="col-12 col-xl-6 mb-4">
                <label for="validationDefault01" class="form-label">* Votre adresse mail</label>
                <input type="email" name="email" class="form-control" id="validationDefault01" value="" required>
            </div>
            <div class="col-12 col-xl-6 mb-4">
                <label for="validationDefault02" class="form-label">* Mot de passe</label>
                <input type="passworld" name="pwd" class="form-control" id="validationDefault02" value="" required>
            </div>

            <div class="col-12 mt-5 mb-2">
                <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
            </div>
            <div class="col-12 my-5 text-center">
                <button class="btn btn-primary" type="submit" id="bouton_orange">Je me connect</button>
            </div>
        </form>
    </div>
</main>
<?php include '_partials/footer.php'; ?>
</body>
</html>