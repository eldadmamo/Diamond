<?php
require __DIR__.'/../../ww.incs/recaptcha.php';
$captcha = recaptcha_get_html(RECAPTCHA_PUBLIC);

?>
<html>
<head>
    <title>Login</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/
jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/
jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.
googleapis.com/ajax/libs/jqueryui/1.8.0/themes/south-street/jquery-ui.
css" />
    <script src="/ww.admin/login/login.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" type="text/css"
    href="/ww.admin/login/login.css"/>
</head>
<body>
<div id="header"></div>
<div class="tabs">,
<ul>
    <li><a href="#tab1">Login</a></li>
    <li><a href="#tab2">Forgotten Password</a></li>
</ul>
    <div id="tab1">
        <form method="post" action="/ww.incs/login.php?redirect=<?php
        echo $_SERVER['PHP_SELF'];
        ?>">
        <table>
            <tr><th>email</th><td>
                    <input id="email" name="email" type="email" />
                </td></tr>
            <tr><th>password</th><td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr id="captcha">
                <th>captcha</th>
                <td><?php echo $captcha; ?></td>

            </tr>

            <tr><th colspan="2" align="right">
                    <input name="action" type="submit"
                    value="login" class="login"/>
                </th> </tr>
        </table>
        </form>
    </div>
    <div id="tab2">
        <form method="post"
              action="/ww.incs/forgotten-password.php?redirect=<?php
              echo $_SERVER['PHP_SELF'];
              ?>">
            <table>
                <tr><th>email</th><td>
                        <input id="email" type="text" name="email" />
                    </td></tr>
                <tr><th colspan="2" align="right">
                        <input name="action" type="submit" value="resend my password" class="login"/>
                    </th></tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
