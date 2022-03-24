<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="register-form" action="index.php?page=register" method="post" role="form">

                                <div class="form-group">
                                    <input type="text" name="prenom" id="firstname" tabindex="1" class="form-control"
                                        placeholder="prenom" value="" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nom" id="lastname" tabindex="1" class="form-control"
                                        placeholder="nom de famille" value="" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="e-mail" name="e-mail" id="e-mail" tabindex="1" class="form-control"
                                        placeholder="Email Address" value="" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="motdepasse" name="motdepass" id="motdepasse" tabindex="2"
                                        class="form-control" placeholder="motdepasse" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="motdepasse" name="confirm-mdp" id="confirm-mdp" tabindex="2"
                                        class="form-control" placeholder="Confirm motdepasse">
                                </div>
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register" id="register-submit" tabindex="4"
                                                class="form-control btn btn-secondary" value="Inscription">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>