<?php
    namespace app\components;
    use yii\base\Widget;

    class PersonalInfoWidget extends Widget {
        public $contentInfo = "";
        public function init() {
            parent::init();
            echo "<div class='team bg'>";
        }

        public function run() {
            return "</div>";
        }

        public function setInfo($data) {
//            print($data['id']); die;
            return "<div style='text-align: center'>{$data['username']}</div>";
        }
    }
?>