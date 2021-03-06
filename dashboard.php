<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="node_modules\@fortawesome\fontawesome-free\css\all.css">
    <link href="lib/css/font.css" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
    <link rel="stylesheet" type="text/css" href="lib\css\admin.css">
</head>

<body>

    <!-- Header -->
    <?php include 'rss/views/layouts/header.php'; ?>

    <!--body -->
    <div class="container">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <div class = "row">
                    <br>
                    <br>
                    <br>
                    <section class="hero is-info welcome is-small">
                        <div class="hero-body">
                            <div class="container">
                                <h1 class="title">
                                    Hello, Admin.
                                </h1>
                                <h2 class="subtitle">
                                    I hope you are having a great day!
                                </h2>
                            </div>
                        </div>
                    </section>
                    <section class="info-tiles">
                        <div class="tile is-ancestor has-text-centered">
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">439k</p>
                                    <p class="subtitle">Users</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">59k</p>
                                    <p class="subtitle">Products</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">3.4k</p>
                                    <p class="subtitle">Open Orders</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">19</p>
                                    <p class="subtitle">Exceptions</p>
                                </article>
                            </div>
                        </div>
                    </section>
                    <div class="columns">
                        <div class="column is-6">
                            <div class="card events-card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        Events
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                      <span class="icon">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </a>
                                </header>
                                <div class="card-table">
                                    <div class="content">
                                        <table class="table is-fullwidth is-striped">
                                            <tbody>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>Lorum ipsum dolem aire</td>
                                                    <td><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <footer class="card-footer">
                                    <a href="#" class="card-footer-item">View All</a>
                                </footer>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        Inventory Search
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                      <span class="icon">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </a>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input is-large" type="text" placeholder="">
                                            <span class="icon is-medium is-left">
                          <i class="fa fa-search"></i>
                        </span>
                                            <span class="icon is-medium is-right">
                          <i class="fa fa-check"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        User Search
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                      <span class="icon">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </a>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input is-large" type="text" placeholder="">
                                            <span class="icon is-medium is-left">
                          <i class="fa fa-search"></i>
                        </span>
                                            <span class="icon is-medium is-right">
                          <i class="fa fa-check"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of body -->

    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>