<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>

<body>
  <!-- Jessen include top nav file -->
   <?php include './top_nav/top-nav.php'; ?>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Create a new user account
            </h1>
            <form action="register.php" method="post">
                <div class="field">
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="text" name="username" placeholder="Username" id="username">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                            <p class="is-hidden" id="usernameHelp">Username has already been taken</p>
                            <p class="is-hidden" id="usernameInvalid">Username does not meet the requirements</p>
                        </div>
                    </div>
                    <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" name="email" placeholder="Email" id="email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </p>
                    <p class="is-hidden" id="emailHelp">Invalid Email</p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="password" placeholder="Password" id="rPassword">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                    <p class="is-hidden" id="rPasswordHelp">Password does not meet the requirements</p>
                </div>
                <div class="field">
                    <p class="control">
                        <button class="button is-success">
                            Register
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </section>
    <script src="js/main.js"></script>
</body></html>
