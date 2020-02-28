<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
  <!-- Jessen include top nav file -->
    <?php include './top_nav/top-nav.php'; ?>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Login
            </h1>
            <form action="authenticate.php" method="post">
                <div class="field">
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Username" name="username" id="username">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                            <p class="is-hidden" id="usernameHelp">Incorrect Username</p>
                        </div>
                    </div>
                    <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password" name="password" id="password">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                    <p class="is-hidden" id=passwordHelp>Incorrect Password</p>
                </div>
                <div class="field">
                    <p class="control">
                        <button class="button is-success">
                            Login
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="subtitle">
                Don't have an account?
            </h2>
            <a class="button is-small is-link" href="register_main.php">Register</a>
        </div>
    </section>
    <script src="js/main.js"></script>
</body></html>
