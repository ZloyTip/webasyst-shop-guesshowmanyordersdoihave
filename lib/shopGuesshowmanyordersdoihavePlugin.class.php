<?php

class shopGuesshowmanyordersdoihavePlugin extends shopPlugin
{

    public function orderActionCreate($data)
    {
        if(!$this->getSettings('enabled')) {
            return;
        }
        $min = $this->getSettings('min');
        $max = $this->getSettings('max');
        if($r = self::rand($min, $max)) {
            $m = new waModel();
            $max_order_id = $m->query('SELECT MAX(id) FROM shop_order')->fetchField();
            $new_order_id = (int)($max_order_id + $r);
            $m->query('ALTER TABLE shop_order AUTO_INCREMENT = i:order_id', array('order_id' => $new_order_id));
        }
    }

    public static function rand($min, $max)
    {
        $min = (int) $min;
        $max = (int) $max;
        if($max < $min) {
            return false;
        }
        if($max <= 0) {
            return false;
        }
        if($max == $min) {
            return $max;
        }
        $r = mt_rand($min,$max);
        if($r <= 0) {
            return false;
        }
        return $r;
    }

    public static function getDescriptionControl($name, $params)
    {
        $view = wa()->getView();
        $view->assign('path', wa()->getConfig()->getRootPath());
        $plugin = wa('shop')->getPlugin('guesshowmanyordersdoihave');
        return $view->fetch($plugin->path.'/templates/control.html');
    }
}
