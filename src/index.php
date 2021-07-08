<?php require 'seguranca.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "Título - " . $url[0]; ?></title>
        <link rel="icon" href="<?php echo HOME_URI; ?>/images/favicon.ico" type="image/x-icon"/>
        <link href="<?php echo HOME_URI; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/css/nifty.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/css/nifty-demo-icons.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/css/estilos.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/jquery-easyui/themes/bootstrap/easyui.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/jquery-easyui/themes/icon.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/jquery-easyui/themes/color.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/switchery/switchery.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/datatables/DataTables-1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo HOME_URI; ?>/plugins/qtip2/jquery.qtip.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo HOME_URI; ?>/plugins/icheck/skins/square/square.css" rel="stylesheet" type="text/css">
        <link href="<?php echo HOME_URI; ?>/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css">
        <link href="<?php echo HOME_URI; ?>/plugins/fullcalendar291/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo HOME_URI; ?>/plugins/fullcalendar291/fullcalendar.print.css" rel="stylesheet" media="print" />
        <link href="<?php echo HOME_URI; ?>/plugins/morris-js/morris.min.css" rel="stylesheet" type="text/css">
        
        <script src="<?php echo HOME_URI; ?>/js/jquery-2.2.1.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/jquery-easyui/jquery.easyui.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/jquery-easyui/locale/easyui-lang-pt_BR.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/fast-click/fastclick.min.js"></script>   
        <script src="<?php echo HOME_URI; ?>/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/qtip2/jquery.qtip.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/masked-input/jquery.maskedinput.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/icheck/icheck.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/dropzone/dropzone.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/fullcalendar291/lib/moment.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/fullcalendar291/fullcalendar.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/fullcalendar291/lang/pt-br.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/datatables/datatables.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/plugins/datatables/DataTables-1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo HOME_URI; ?>/js/app/comum.app.js"></script>
    </head>
    <body>
        <div id="container" class="effect mainnav-lg footer-fixed">

            <?php include ABSPATH . '/includes/mhorizontal.inc.php'; ?>

            <div class="boxed">

                <?php
                $contagem = count($url);
                if (substr($getURL, -1) === '/') {
                    $contagem--;
                }

                foreach ($url as $num) {
                    if (preg_match("/^\d+$/", $num)) {
                        $contagem--;
                    }
                }

                $op_pages = array("editar", "cadastrar", "ver");
                foreach ($url as $op) {
                    if (in_array($op, $op_pages)) {
                        $contagem--;
                    }
                }

                if ($contagem === 1) {
                    if (file_exists(ABSPATH . REQUIRE_PATH . '/' . $url[0] . '.php')) {
                        require ABSPATH . REQUIRE_PATH . '/' . $url[0] . '.php';
                    } else {
                        require ABSPATH . REQUIRE_PATH . '/404.php';
                    }
                } elseif ($contagem === 2) {
                    if (file_exists(ABSPATH . REQUIRE_PATH . '/' . $url[0] . '/' . $url[1] . '.php')) {
                        require ABSPATH . REQUIRE_PATH . '/' . $url[0] . '/' . $url[1] . '.php';
                    } else {
                        require ABSPATH . REQUIRE_PATH . '/404.php';
                    }
                } else {
                    require ABSPATH . REQUIRE_PATH . '/404.php';
                }
                ?>

                <?php include ABSPATH . '/includes/mprincipal.inc.php'; ?>
                <?php //include ABSPATH . '/includes/msecundario.inc.php'; ?>

            </div>

            <?php include ABSPATH . '/includes/footer.inc.php'; ?>

            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        </div>
        <script src="<?php echo HOME_URI; ?>/js/nifty.min.js"></script>
    </body>
</html>
