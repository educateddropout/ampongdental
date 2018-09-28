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
<style type="text/css">
    .main-body {
        padding-top: 30px;
    }

</style>
<body>

    <!-- Header -->
    <?php include 'rss/views/layouts/header.php'; ?>
    <br>

    <div class="main-body">
        <div class="row">
            <div class="column is-10 is-offset-1">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="#">List of Patients</a></li>
                    </ul>
                </nav>

                 <div class="column is-6">
                        
                    <div class="card-content">
                        <div class="content">
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-large" type="text" placeholder="Search patients">
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
    <!-- end of body -->

    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>