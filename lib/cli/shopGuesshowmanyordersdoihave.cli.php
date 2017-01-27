<?php


class shopGuesshowmanyordersdoihaveCli extends waCliController
{
    public function execute()
    {
        $min = waRequest::param('min', 1);
        $max = waRequest::param('max', 20);
        if($r = shopGuesshowmanyordersdoihavePlugin::rand($min, $max)) {
            $m = new waModel();
            $max_order_id = $m->query('SELECT MAX(id) FROM shop_order')->fetchField();
            $new_order_id = (int)($max_order_id + $r);
            $m->query('ALTER TABLE shop_order AUTO_INCREMENT = i:order_id', array('order_id' => $new_order_id));
        }
    }
}