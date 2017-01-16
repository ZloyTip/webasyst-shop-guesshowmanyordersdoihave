<?php


class shopGuesshowmanyordersdoihaveCli extends waCliController
{
    public function execute()
    {
        $m = new waModel();
        $max_order_id = $m->query('SELECT MAX(id) FROM shop_order')->fetchField();
        $new_order_id = (int) ($max_order_id+mt_rand(1,20));
        $m->query('ALTER TABLE shop_order AUTO_INCREMENT = i:order_id', array('order_id' => $new_order_id));
    }
}