<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', 'powerbi');
$view['slots']->set('headerTitle', $view['translator']->trans('mautic.dashboard.menu.index'));
/** @var Symfony\Component\HttpFoundation\ParameterBag $parametersHelper */
$powerbiURL = $parametersHelper->get('powerbi_url');
?>

<style>
  .report-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
  }

  .report-content {
    width: 100%;
    /* full height - topNav - title - footer */
    height: calc(100vh - 60px - 55px - 46px);
  }
</style>
<div class="report-container">
  <iframe
    class="report-content"
    frameBorder="0"
    src="<?php echo $powerbiURL; ?>"
  />
</div>
