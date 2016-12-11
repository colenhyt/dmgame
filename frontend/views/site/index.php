<?php
use app\components\FunctionBtnWidget;
use app\components\PersonalInfoWidget;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="row">
        <!-- 左侧比赛相关 -->
        <div class="col-xs-12 col-sm-6 col-md-8 bg">
            <!-- 下注类型头部 -->
            <?php FunctionBtnWidget::begin(); ?>
                <a class="btn competition-btn">早盘</a>
                <a class="btn competition-btn">闯关</a>
                <a class="btn competition-btn">滚球</a>
            <?php FunctionBtnWidget::end(); ?>

            <!-- 时间头部 -->
            <div class="content-bg">
                <a class="btn content-bg" >今天</a>
                <a class="btn content-bg" >全部</a>
                <a class="btn content-bg" >未开始</a>
                <a class="btn content-bg" >进行中</a>
                <a class="btn content-bg" >已结束</a>
            </div>
            <!-- 赛事内容 * n -->
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <div>
                    <div>
                        <img src="dist/img/competition.ico" height="32" width="32"/>
                        <span id="competition-name">德玛西亚杯</span>
                    </div>
                    <!-- 对战队伍 -->
                    <div class="row competition-bg">
                        <div class="col-xs-6 col-md-4 team">
                            <p class="leftteam">
                                Wings Gaming
                            </p>
                            <p class="leftteam">
                                1.07234
                            </p>
                        </div>
                        <div class="col-xs-1 col-md-1 vslabel">
                            OB3
                        </div>
                        <div class="col-xs-6 col-md-4 team">
                            <p class="rightteam">
                                WG.Unity
                            </p>
                            <p class="rightteam">
                                1.07234
                            </p>
                        </div>
                    </div>
                    <!-- 下注选项 -->
                    <div class="row order">
                            <div class="bg_two">
                            <!-- 竞猜类型 -->
                            <div class="vslabel">
                                赌输赢
                            </div>
                            <div class="bg_two_1" id="tz_1">
                                <div class="left">
                                    <span>AS胜</span>
                                </div>
                                <div class="right">
                                    <span>X 1.6</span>
                                </div>
                            </div>
                            <div class="bg_two_2" id="tz_2">
                                <div class="left">
                                    <span>OpTic胜</span>
                                </div>
                                <div class="right">
                                    <span>X 2.28</span>
                                </div>
                            </div>
                            <div class="bg_two_3" id="tz_3">
                                <div class="right">
                                    <span>进行中</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg_two">
                            <!-- 竞猜类型 -->
                            <div class="vslabel">
                                一血
                            </div>
                            <div class="bg_two_1" id="tz_1">
                                <div class="left">
                                    <span>AS胜</span>
                                </div>
                                <div class="right">
                                    <span>X 1.6</span>
                                </div>
                            </div>
                            <div class="bg_two_2" id="tz_2">
                                <div class="left">
                                    <span>OpTic胜</span>
                                </div>
                                <div class="right">
                                    <span>X 2.28</span>
                                </div>
                            </div>
                            <div class="bg_two_3" id="tz_2">
                                <div class="right">
                                    <span>进行中</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
        <!-- 右侧下单相关 -->
        <div class="col-xs-6 col-md-4">
            <!-- 个人信息 -->
            <?php $person = PersonalInfoWidget::begin(); ?>
                <?= $person->setInfo($user) ?>
            <?php PersonalInfoWidget::end(); ?>
            <!-- 投注信息 -->
            <div style="border-top: 10px solid #ffffff;" class="bg">
                <div>
                    <span>德玛西亚杯<span>-局2</span><span>-猜输赢</span></span>
                </div>
                <div>
                    <span>Wings Gaming</span>

                </div>
            </div>
        </div>
    </div>
</div>
