<?php
    class blogReadtimeViewHelper extends waPluginViewHelper
    {
        public static function articleList(){

            $path = wa()->getConfig()->getRootPath();
            $settings = wa('blog')->getPlugin('readtime')->getSettings();

            $status = $settings['readTimeStatus'];
            $settings['blockText'] = strip_tags($settings['blockText'], '<h1><h2><h3><h4><h5><p><i><bold><italic><span>');
            $settings['words'] = _wp('минута,минуты,минут');

            if ($status != 0) {

                $view = wa()->getView();
                $view->assign('settings', $settings);
                return $view->fetch($path.'/wa-apps/blog/plugins/readtime/templates/articleList.html');
            }else{
                return;
            }

        }

    }