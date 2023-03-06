<?php
class blogReadtimePlugin extends blogPlugin{

    public function addJSCounter() {

        $status = $this->getSettings('readTimeStatus');
        $wordQuantity = $this->getSettings('wordQuantity');
        $words = _wp('minute,minutes,minutes');

        $blockText = strip_tags($this->getSettings('blockText'), '<h1><h2><h3><h4><h5><p><i><bold><span>');


        if ($status != 0) {
            $this->addJs('js/readtime.js');

            return array(
                'head' => '<script>let wordQuantity ='.$wordQuantity.',blockText ="'.$blockText.'",trans ="'.$words.'"; trans = trans.split(",");</script>',
            );
        }else{
            return;
        }
    }
}

