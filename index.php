<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sequence to formula</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body { padding-top: 60px; padding-bottom: 40px; }
            p.example { padding-top: 10px; padding-bottom: 10px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Sequence to Formula!</h1>
                <p>You can search formulas for set of numbers!</p>
            </div>
            <div class="row">
                <div class="span12">
                    <form class="well form-inline">
                        <input type="text" name="set" class="span10" placeholder="Input sequence here...">
                        <button type="submit" class="btn btn-primary pull-right"><i class="icon-search"></i> Submit</button>
                        <p class="example"><i>For example:</i> 1 2 3 4 5</p>
                    </form>
                </div>
            </div>

            <? if (isset($_REQUEST['set'])) { ?>
            <div class="row">
                <div class="span12">
                    <pre><?  
                        print_r ($_REQUEST); 
                        $result = preg_split("/[\s\;]+/", $_REQUEST["set"]);
                        print_r ($result);
                        include_once ("lib/mathpublisher.php");
                    ?></pre>
                    <?
                        echo mathfilter("<m>a = a + 1</m>", 24, "../img/");
                    ?>
                </div>
            </div>
            <? } ?>

        </div>

        <!-- BOTTOM -->
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
