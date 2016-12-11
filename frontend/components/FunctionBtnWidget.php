<?php
    namespace app\components;
    use yii\base\Widget;

    class FunctionBtnWidget extends Widget {
        public function init() {
            parent::init();
            ob_start();
            echo "<div>";
        }

        public function run() {
            $content = ob_get_clean();
            $menuItems = [
                ['label' => '早盘', 'url' => ['/site/index']],
                ['label' => '闯关', 'url' => ['/site/about']],
                ['label' => '滚球', 'url' => ['/site/contact']],
            ];
            $widgetArray = [
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ];
//            $content = "
//            <?php
//                NavBar::begin();
//                    echo Nav::widget($widgetArray);
//                NavBar::end();
//
//            ";
            return $content . "</div>";
        }

    }
?>