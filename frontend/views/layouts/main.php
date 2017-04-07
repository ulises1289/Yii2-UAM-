<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- LLAMA A JQUERY-->
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Inventarios VER 1.0',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top', 
        ],
    ]);
     
    $menuItems = [
        //['label' => 'Administrar Inventarios', 'url' => ['site/admininv']],
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Acerca de', 'url' => ['/site/about']],
        ['label' => 'Contacto', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
         $menuItems[] = ['label' => '*Administrador*', 'url' => ['site/administrador']];
         $menuItems[] = ['label' => 'Inventarios', 'url' => ['site/admininv']];
         $menuItems[] = ['label' => 'Personas', 'url' => ['site/adminper']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Sistema de Inventarios VER 1.0 | <?= date('Y') ?></p>
        <p id="WEBS" align="right">*ESTADO, PAIS*</p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
    
    <!-- Se agrega php para llamada a WebService -->

<?php

function getRealIP()
{
    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {   return $_SERVER["HTTP_CLIENT_IP"]; }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    { return $_SERVER["HTTP_X_FORWARDED_FOR"]; }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {  return $_SERVER["HTTP_X_FORWARDED"]; }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {  return $_SERVER["HTTP_FORWARDED_FOR"];  }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {  return $_SERVER["HTTP_FORWARDED"];  }
    else
    {        return $_SERVER["REMOTE_ADDR"];    }
}

    $resultado = "";
    //$codigoIP = getRealIP();
    //echo $codigoIP;
    $codigoIP = "201.199.201.190"; //CR
    //$codigoIP = "66.192.5.40"; //USA
    $url = "http://www.webservicex.net/geoipservice.asmx?WSDL";
    $client = new SoapClient($url,array(
                                       'exceptions' => true,
                                    ));
    try {
    $res = $client->GetGeoIP(array('IPAddress' => $codigoIP));
    } catch (SoapFault $fault) {
        $resultado = "FALLO";
    }
    if ("FALLO"==$resultado){
        $pais = "NO DEFINIDO";
    } else {
        if ($res->GetGeoIPResult->ReturnCode == 1){   
            $pais = $res->GetGeoIPResult->CountryName;}
        else{
            $pais = " ND ";
        }
    }
    							
?>

<!-- FIN -->
    <script>
        
        document.getElementById("WEBS").innerHTML = '<?php echo $pais; ?>';
    </script>

    
    
</body>
</html>
<?php $this->endPage() ?>
