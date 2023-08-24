@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">

            <!--font Prohibition-->
            <link rel="stylesheet" href="https://use.typekit.net/kiq8cok.css">


            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

            <script type="text/javascript" src="./js/chart.js"></script>
            <link rel="stylesheet" media="all" href="./css/data.css"/>
            <script type="text/javascript" src="./js/data.js"></script>




            <div id="data" class="data">

                <div class="main-banner">
                    <div class="heading-main">
                        <div class="inner">
                            <h1 class="heading">
                                <span class="ttl-en en">data</span>
                                <span class="ttl-ja">データで見る UACJ物流</span>
                            </h1>
                        </div>
                    </div>
                    <div class="main-image">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="images/data/data_mainimg_sp.png">
                            <source media="(min-width: 768px)" srcset="images/data/data_mainimg_pc.png 2x">
                            <img class="sizes" src="images/data/data_mainimg_pc.png" alt="メイン画像">
                        </picture>
                    </div>
                </div>

                <div class="data-main">
                    <div class="inner">
                        <ul class="dataList cols-03">
                            <li data-aos="fade-up" id="dataItem01" class="dataItem cols-item03 item01 percentage-mid-career">
                                <p class="ttl-data">中途入社の割合</p>
                                <div class="dataInfo">
                                    <picture class="icon-data">
                                        <source media="(max-width: 767px)" srcset="images/data/data_icon01_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/data/data_icon01_pc.png 2x">
                                        <img class="sizes" src="images/data/data_icon01_pc.png" alt="">
                                    </picture>
                                    <div class="text-data"><span class="number count-up01">97</span><span class="sub-tllNum">%</span></div>
                                </div>
                                <p class="text-note">※ 過去3年間の統計</p>
                            </li>
                            <li data-aos="fade-up" id="dataItem02" class="dataItem cols-item03 item02 turnover-rate">
                                <p class="ttl-data">離職率</p>
                                <div class="dataInfo">
                                    <picture class="icon-data">
                                        <source media="(max-width: 767px)" srcset="images/data/data_icon02_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/data/data_icon02_pc.png 2x">
                                        <img class="sizes" src="images/data/data_icon02_pc.png" alt="">
                                    </picture>
                                    <div class="svg-item">
                                        <canvas id="chartContainer01" style="height: 180px; width: 180px;"></canvas>
                                        <div class="text-data"><p class="number"><span class="count-up-decimals">2</span><small>.</small><small class="count-up-decimals">77</small></p><span class="sub-tllNum">%</span></div>
                                    </div>
                                </div>
                                <p class="text-note">※ 過去3年間の統計</p>
                            </li>
                            <li data-aos="fade-up" id="dataItem03" class="dataItem cols-item03 item03 operation-manager">
                                <p class="ttl-data">運行管理者資格取得率</p>
                                <div class="dataInfo">
                                    <picture class="icon-data">
                                        <source media="(max-width: 767px)" srcset="images/data/data_icon03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/data/data_icon03_pc.png 2x">
                                        <img class="sizes" src="images/data/data_icon03_pc.png" alt="">
                                    </picture>
                                    <div class="text-data"><span class="number count-up03">50</span><span class="sub-tllNum">%</span></div>
                                    <div class="boxHover">
                                        <div class="what-is">
                                            <picture class="icon">
                                                <source media="(max-width: 767px)" srcset="images/data/data_icon14_sp.png 2x">
                                                <source media="(min-width: 768px)" srcset="images/data/data_icon14_pc.png 2x">
                                                <img class="sizes" src="images/data/data_icon14_pc.png" alt="">
                                            </picture>
                                            <p class="txt">運行管理者とは</p>
                                        </div>
                                        <div id="boxContent-popup">
                                            <div class="close-popup">
                                                <picture>
                                                    <source srcset="images/data/data_icon_close.png 2x">
                                                    <img class="sizes" src="images/data/data_icon_close.png" alt="">
                                                </picture>
                                            </div>
                                            <div class="content">
                                                <p class="title">運行管理者（国家資格）</p>
                                                <p class="text">運行管理者資格は、国土交通省が認定する国家資格であり、事業用自動車の安全運行を管理するスペシャリストです。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-note">※ 2022年10月 時点</p>
                            </li>
                        </ul>
                        <ul class="dataList cols-02">
                            <li data-aos="fade-up" id="dataItem04" class="dataItem cols-item02 item04 number-paid-leave">
                                <p class="ttl-data">有休取得日数</p>
                                <div class="dataInfo">
                                    <picture class="icon-data">
                                        <source media="(max-width: 767px)" srcset="images/data/data_icon04_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/data/data_icon04_pc.png 2x">
                                        <img class="sizes" src="images/data/data_icon04_pc.png" alt="">
                                    </picture>
                                    <div class="chartData">
                                        <div class="lineData"></div>
                                        <div class="item-chartData chartData01">
                                            <p class="text-chartData"><span class="number count-up04">16</span><span class="txt">日</span></p>
                                            <p class="bgData"></p>
                                            <p class="ttl-chartData">現場職</p>
                                        </div>
                                        <div class="item-chartData chartData02">
                                            <p class="text-chartData"><span class="number count-up04">15</span><span class="txt">日</span></p>
                                            <p class="bgData"></p>
                                            <p class="ttl-chartData">事務職</p>
                                        </div>
                                        <div class="item-chartData chartData03">
                                            <p class="text-chartData"><span class="number count-up04">10</span><span class="txt">日</span></p>
                                            <p class="bgData"></p>
                                            <p class="ttl-chartData">物流業界<br/>平均</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-note01">※ 2021年度 実績</p>
                                <p class="text-note02">※ 厚生労働省 令和3年<br class="pc-br"/>就労条件総合調査の概況より</p>
                            </li>
                            <li data-aos="fade-up" id="dataItem05" class="dataItem cols-item02 item05 acquisition-rate number-paid-leave">
                                <p class="ttl-data">有給休暇取得率</p>
                                <div class="dataInfo">
                                    <picture class="icon-data">
                                        <source media="(max-width: 767px)" srcset="images/data/data_icon05_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/data/data_icon05_pc.png 2x">
                                        <img class="sizes" src="images/data/data_icon05_pc.png" alt="">
                                    </picture>
                                    <div class="chartData">
                                        <div class="lineData"></div>
                                        <div class="item-chartData chartData01">
                                            <p class="text-chartData"><span class="number count-up05">70</span><span class="txt">%</span></p>
                                            <p class="bgData"></p>
                                            <p class="ttl-chartData">現場職</p>
                                        </div>
                                        <div class="item-chartData chartData02">
                                            <p class="text-chartData"><span class="number count-up05">67</span><span class="txt">%</span></p>
                                            <p class="bgData"></p>
                                            <p class="ttl-chartData">事務職</p>
                                        </div>
                                        <div class="item-chartData chartData03">
                                            <p class="text-chartData"><span class="number count-up05">56</span><span class="txt">%</span></p>
                                            <p class="bgData"></p>
                                            <p class="ttl-chartData">物流業界<br/>平均</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-note01">※ 2021年度 実績</p>
                                <p class="text-note02">※ 厚生労働省 令和3年<br class="pc-br"/>就労条件総合調査の概況より</p>
                            </li>
                        </ul>
                        <ul class="dataList cols-01">
                            <li data-aos="fade-up" id="dataItem06" class="dataItem cols-item01 item06 childcare-leave">
                                <p class="ttl-data">育児休業取得率</p>
                                <div class="dataInfo dataInfo-flex">
                                    <div class="logistics dataInfo-item">
                                        <div class="dataInfo-title">
                                            <p class="ttl">UACJ物流</p>
                                        </div>
                                        <div class="logistics-item dataInfo-flex-item01">
                                            <div class="title">
                                                <picture class="icon-data">
                                                    <source media="(max-width: 767px)" srcset="images/data/data_icon06_sp.png 2x">
                                                    <source media="(min-width: 768px)" srcset="images/data/data_icon06_pc.png 2x">
                                                    <img class="sizes" src="images/data/data_icon06_pc.png" alt="">
                                                </picture>
                                                <p class="text">女性の取得率</p>
                                            </div>
                                            <div class="dataText"><p class="percent"><span class="number count-up06">100</span><span class="txt-percent">%</span></p></div>
                                        </div>
                                        <div class="logistics-item dataInfo-flex-item02">
                                            <div class="title">
                                                <picture class="icon-data">
                                                    <source media="(max-width: 767px)" srcset="images/data/data_icon07_sp.png 2x">
                                                    <source media="(min-width: 768px)" srcset="images/data/data_icon07_pc.png 2x">
                                                    <img class="sizes" src="images/data/data_icon07_pc.png" alt="">
                                                </picture>
                                                <p class="text">男性の取得率</p>
                                            </div>
                                            <div class="dataText">
                                                <p class="percent"><span class="number count-up06">83</span><span class="txt-percent">%</span></p>
                                                <p class="note-logistics">6<small>名中</small> 5<small>名</small></p>
                                            </div>
                                        </div>
                                        <div class="logistics-item dataInfo-flex-item03">
                                            <div class="title">
                                                <picture class="icon-data">
                                                    <source media="(max-width: 767px)" srcset="images/data/data_icon08_sp.png 2x">
                                                    <source media="(min-width: 768px)" srcset="images/data/data_icon08_pc.png 2x">
                                                    <img class="sizes" src="images/data/data_icon08_pc.png" alt="">
                                                </picture>
                                                <p class="text">復帰率</p>
                                            </div>
                                            <div class="dataText">
                                                <p class="percent"><span class="number count-up06">100</span><span class="txt-percent">%</span></p>
                                                <p class="note-logistics-2">※ 2022年度実績</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="national-average dataInfo-item">
                                        <div class="dataInfo-title">
                                            <p class="ttl">全国平均</p>
                                        </div>
                                        <div class="national-average-item dataInfo-flex-item01">
                                            <div class="dataText"><p class="percent"><span class="number count-up06">85</span><span class="txt-percent">%</span></p></div>
                                        </div>
                                        <div class="national-average-item dataInfo-flex-item02">
                                            <div class="dataText"><p class="percent"><span class="number count-up06">14</span><span class="txt-percent">%</span></p></div>
                                        </div>
                                        <div class="national-average-item dataInfo-flex-item03">
                                            <div class="dataText"><p class="percent"><span class="number count-up06">95</span><span class="txt-percent">%</span></p></div>
                                        </div>
                                        <p class="text-note">※ 厚生労働省 令和3年　雇用均等基本調査より</p>
                                    </div>
                                </div>

                            </li>
                        </ul>
                        <ul class="dataList cols-01">
                            <li data-aos="fade-up" id="dataItem07" class="dataItem cols-item01 item07 childcare-leave-acquisition">
                                <p class="ttl-data">平均残業時間</p>
                                <div class="pie-chart">
                                    <picture class="icon-data">
                                        <source media="(max-width: 767px)" srcset="images/data/data_icon09_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/data/data_icon09_pc.png 2x">
                                        <img class="sizes" src="images/data/data_icon09_pc.png" alt="">
                                    </picture>
                                    <div class="item-pieChart">
                                        <div class="svg-item">
                                            <canvas id="chartContainer02"></canvas>
                                            <p class="text-pieChart"><span class="number count-up07">63</span><span class="txt-pieChart">時間</span></p>
                                        </div>
                                        <p class="ttl-chart">ドライバー</p>
                                    </div>
                                    <div class="item-pieChart">
                                        <div class="svg-item">
                                            <canvas id="chartContainer03"></canvas>
                                            <p class="text-pieChart"><span class="number count-up07">17</span><span class="txt-pieChart">時間</span></p>
                                        </div>
                                        <p class="ttl-chart">荷扱</p>
                                    </div>
                                    <div class="item-pieChart">
                                        <div class="svg-item">
                                            <canvas id="chartContainer04"></canvas>
                                            <p class="text-pieChart"><span class="number count-up07">24</span><span class="txt-pieChart">時間</span></p>
                                        </div>
                                        <p class="ttl-chart">整備</p>
                                    </div>
                                    <div class="item-pieChart">
                                        <div class="svg-item">
                                            <canvas id="chartContainer05"></canvas>
                                            <p class="text-pieChart"><span class="number count-up07">21</span><span class="txt-pieChart">時間</span></p>
                                        </div>
                                        <p class="ttl-chart">事務</p>
                                    </div>
                                </div>
                                <p class="text-note">※ 2021年度 実績</p>
                            </li>
                        </ul>
                        <ul class="dataList cols-01">
                            <li data-aos="fade-up" id="dataItem08" class="dataItem cols-item01 item08 occupation-ratio">
                                <p class="ttl-data">職種別割合</p>
                                <div class="dataInfo">
                                    <div class="line-occupation-ratio">
                                        <div class="data-01"><span class="number count-up08">43</span><span class="txt">%</span></div>
                                        <div class="data-02"><span class="number count-up08">17</span><span class="txt">%</span></div>
                                        <div class="data-03"><span class="number count-up08">4</span><span class="txt">%</span></div>
                                        <div class="data-04"><span class="number count-up08">36</span><span class="txt">%</span></div>
                                    </div>
                                    <div class="occupation-item occupation-01">
                                        <picture class="icon-data">
                                            <source media="(max-width: 767px)" srcset="images/data/data_icon10_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/data/data_icon10_pc.png 2x">
                                            <img class="sizes" src="images/data/data_icon10_pc.png" alt="">
                                        </picture>
                                        <p class="ttl">ドライバー</p>
                                    </div>
                                    <div class="occupation-item occupation-02">
                                        <picture class="icon-data">
                                            <source media="(max-width: 767px)" srcset="images/data/data_icon11_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/data/data_icon11_pc.png 2x">
                                            <img class="sizes" src="images/data/data_icon11_pc.png" alt="">
                                        </picture>
                                        <p class="ttl">荷扱</p>
                                    </div>
                                    <div class="occupation-item occupation-03">
                                        <picture class="icon-data">
                                            <source media="(max-width: 767px)" srcset="images/data/data_icon12_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/data/data_icon12_pc.png 2x">
                                            <img class="sizes" src="images/data/data_icon12_pc.png" alt="">
                                        </picture>
                                        <p class="ttl">整備</p>
                                    </div>
                                    <div class="occupation-item occupation-04">
                                        <picture class="icon-data">
                                            <source media="(max-width: 767px)" srcset="images/data/data_icon13_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/data/data_icon13_pc.png 2x">
                                            <img class="sizes" src="images/data/data_icon13_pc.png" alt="">
                                        </picture>
                                        <p class="ttl">事務</p>
                                    </div>
                                </div>
                                <p class="text-note">※ 2022年10月 時点</p>
                            </li>
                        </ul>


                    </div>
                </div>


            </div>


        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
