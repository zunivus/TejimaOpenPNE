<?php

/**
 * install actions.
 *
 * @package    OpenPNE
 * @subpackage install
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class installActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    chdir(sfConfig::get('sf_root_dir'));
    $task = new openpneInstallTask($this->dispatcher, new sfFormatter());
    $task->run(array(), array('standalone','sqlite'));
    echo '<a href="/">Homeにアクセス</a>';
    return sfView::NONE;
  }
}
