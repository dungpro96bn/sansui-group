@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">
            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">
            <!--font Prohibition-->
            <link rel="stylesheet" href="https://use.typekit.net/hiw5aio.css">
            <link rel="stylesheet" media="all" href="./css/oneday.css"/>
            <script type="text/javascript" src="./js/oneday.js"></script>
            <div id="oneday" class="oneday">
                <!--            BANNER-->
                <div class="banner">
                    <div class="content-inner">
                        <div class="title fl">
                            <h1 class="heading">
                                <span class="ttl-en en pro">ONEDAY</span>
                                <span class="ttl-ja">社員の1日</span>
                            </h1>
                        </div>
                        <div class="member">
                            <div class="bg-color">
                            </div>
                            <div class="member-list fl">
                                <div class="member-item js-fadein scroll" href="#m1">
                                    <div class="ig-box">
                                        <img class="member-img" src="./images/oneday/member1_photo@2x.png" alt="男性社員の写真">
                                    </div>
                                    <div class="member-text">
                                        <h3 class="ttl wfit">大型トレーラ<br class="mb-only">ドライバー</h3>
                                        <p class="sub-t pro">trucker</p>
                                    </div>
                                </div>
                                <div class="member-item js-fadein scroll" href="#m2">
                                    <div class="ig-box">
                                        <img class="member-img" src="./images/oneday/member2_photo@2x.png" alt="男性社員の写真">
                                    </div>

                                    <div class="member-text">
                                        <h3 class="ttl">事務職<span>（配車担当）</span></h3>
                                        <p class="sub-t pro">Dispatch</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                ONEDAY-->
                <section class="daylife">
                    <div class="content-inner">
                        <div class="od-item mdb" id="m1">
                            <div class="intro-box">
                                <picture class="m1 js-fadein">
                                    <source media="(max-width: 767px)" srcset="./images/oneday/m1_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/oneday/m1@2x.png">
                                    <img src="./images/oneday/m1@2x.png" alt="男性社員の写真">
                                </picture>
                                <picture class="daily">
                                    <source media="(max-width: 767px)" srcset="./images/oneday/daily_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/oneday/daily@2x.png">
                                    <img src="./images/oneday/daily@2x.png" alt="男性社員の写真">
                                </picture>

                                <div class="box-text js-fadein">
                                    <div class="box-content">
                                        <h2 class="ttl">大型トレーラドライバー <span class="pro"><br class="mb-only">trucker</span></h2>
                                        <p class="year"><b>2019年 入社<br class="pc-only"> <span>名古屋支店</span></b></p>
                                        <p class="text">前職は大型トラックドライバー。UACJ物流の良い口コミを多方面から聞いていたこともあり、入社を決意。トレーラ未経験での入社でしたが、今やUACJ物流にとって必要不可欠な存在に。入社後に一軒家を購入し、家族との時間も大切にしている。</p>
                                    </div>

                                </div>
                            </div>

                            <ul class="time-list wrap1">
                                <!--                                1-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od1_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od1@2x.png">
                                            <img src="./images/oneday/od1@2x.png" alt="男性社員の写真">
                                        </picture>
                                        <p class="time pro">8:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">朝礼に出席し、1日がスタート！</h3>
                                        <p class="text">伝達・指示事項をよく聞いて、「0災で行こう　ヨシ！」と唱和し、1日がスタートします。<br>
                                            本日は宿泊運行の予定です。</p>
                                    </div>
                                </li>
                                <!--                                2-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od2_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od2@2x.png">
                                            <img src="./images/oneday/od2@2x.png" alt="点検する男性社員">
                                        </picture>
                                        <p class="time pro">8:15</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">始業前点検</h3>
                                        <p class="text">各自、車両の点検を行って異常がないことを確認し、出発！安全に運行するために絶対に欠かすことのできない大切な作業です。</p>
                                    </div>
                                </li>
                                <!--                                3-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od3_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od3@2x.png">
                                            <img src="./images/oneday/od3@2x.png" alt="運転する男性社員">
                                        </picture>
                                        <p class="time pro">8:30</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">地場（近距離）運行</h3>
                                        <p class="text">荷主であるUACJ名古屋製造所様から近くの外部倉庫様へ製品の輸送を行います。<br>
                                            ハンドルを握ると一気に気が引き締まります。</p>
                                    </div>
                                </li>
                                <!--                                4-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od4_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od4@2x.png">
                                            <img src="./images/oneday/od4@2x.png" alt="休憩所の写真">
                                        </picture>
                                        <p class="time pro">12:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">昼休憩</h3>
                                        <p class="text">敷地内にある社員食堂（1食 360円）で食事。尚、運行計画によっては、外で食事をすることが多いです。</p>
                                    </div>
                                </li>
                                <!--                                5-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od5_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od5@2x.png">
                                            <img src="./images/oneday/od5@2x.png" alt="作業する男性社員">
                                        </picture>
                                        <p class="time pro">13:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">長距離運行（積込）</h3>
                                        <p class="text">UACJ名古屋製造所様・外部倉庫様にて積込み（自主荷役はなし）。アルミニウムは他の金属に比べて柔らかくデリケートな製品であり、傷つけないように荷台に保定します。</p>
                                    </div>
                                </li>
                                <!--                                6-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od6_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od6@2x.png">
                                            <img src="./images/oneday/od6@2x.png" alt="運転する男性社員">
                                        </picture>
                                        <p class="time pro">15:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">長距離運行（出発）</h3>
                                        <p class="text">UACJ物流は全線高速！高速道路を利用して全国各地へ出発。北は福島、南は九州まで運行します。九州への運行はフェリーを利用します。</p>
                                    </div>
                                </li>
                                <!--                                7-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od7_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od7@2x.png">
                                            <img src="./images/oneday/od7@2x.png" alt="サービスエリアの写真">
                                        </picture>
                                        <p class="time pro">21:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">目的地到着</h3>
                                        <p class="text">最寄りのパーキングエリアにて終業点呼を行い、1日の業務終了！<br>
                                            明日の運行に備えて、しっかり休息を取ります。</p>
                                    </div>
                                </li>
                                <!--                                8-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od8_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od8@2x.png">
                                            <img src="./images/oneday/od8@2x.png" alt="作業する男性社員">
                                        </picture>
                                        <p class="time pro">7:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">2日目が始まります。</h3>
                                        <p class="text">始業点呼から始まり、納入先へ出発します。納入先到着後は帰り荷を積み、名古屋へ戻ります。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="od-item" id="m2">
                            <div class="intro-box js-fadein">
                                <picture class="m1">
                                    <source media="(max-width: 767px)" srcset="./images/oneday/m2_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/oneday/m2@2x.png">
                                    <img src="./images/oneday/m2@2x.png" alt="男性社員の写真">
                                </picture>
                                <picture class="daily">
                                    <source media="(max-width: 767px)" srcset="./images/oneday/daily_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/oneday/daily@2x.png">
                                    <img src="./images/oneday/daily@2x.png" alt="男性社員の写真">
                                </picture>
                                <div class="box-text nd">
                                    <div class="box-content">
                                        <h2 class="ttl">総合職<span class="fs28">（配車担当）</span><br class="mb-only"><span class="pro">Dispatch</span></h2>
                                        <p class="year"><b>2017年 入社<br class="pc-only"><span>名古屋支店</span></b></p>
                                        <p class="text">前職は、営業職や総務担当として活躍。半年間の転職活動の末、会社の安定性と未経験からでも活躍できるという点に惹かれ、入社を決意。<br>現在では統括主任として活躍し、後輩からの信頼も厚い。</p>
                                    </div>

                                </div>
                            </div>

                            <ul class="time-list wrap1">
                                <!--                                1-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od21_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od21@2x.png">
                                            <img src="./images/oneday/od21@2x.png" alt="PCを確認する男性社員">
                                        </picture>
                                        <p class="time pro">8:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">出荷する製品の確認</h3>
                                        <p class="text">メールチェック後、その日に出荷する製品の送り状※を準備します。<br>
                                            ※送り状とは、荷物と一緒に納品先にお送りする書類のこと。</p>
                                    </div>
                                </li>
                                <!--                                2-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od22_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od22@2x.png">
                                            <img src="./images/oneday/od22@2x.png" alt="確認する男性社員">
                                        </picture>
                                        <p class="time pro">10:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">必要な車両の手配</h3>
                                        <p class="text">出荷内容を確認し、その日の出荷量からトラック・トレーラの必要台数を算出し、車両を手配します。</p>
                                    </div>
                                </li>
                                <!--                                3-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od23_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od23@2x.png">
                                            <img src="./images/oneday/od23@2x.png" alt="社員食堂の写真">
                                        </picture>
                                        <p class="time pro">12:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">社員食堂で昼食</h3>
                                        <p class="text">社員食堂で昼食。<br>
                                            食堂のメニューは栄養のバランスも良く、1食360円と安いので、毎日利用しています。オススメですよ！</p>
                                    </div>
                                </li>
                                <!--                                4-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od24_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od24@2x.png">
                                            <img src="./images/oneday/od24@2x.png" alt="電話をする男性写真">
                                        </picture>
                                        <p class="time pro">14:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">配車担当の腕の見せ所！</h3>
                                        <p class="text">製品の積み合わせや輸送ルートを決めて、各ドライバーに担当振り分け。各ドライバーの毎日の仕事内容も考慮しつつ、無理のない配車計画を立てていきます。分からないことがあれば、荷物を見に現場へ行くこともあります。</p>
                                    </div>
                                </li>
                                <!--                                5-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od25_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od25@2x.png">
                                            <img src="./images/oneday/od25@2x.png" alt="確認する男性社員">
                                        </picture>
                                        <p class="time pro">16:45</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">翌日の準備をして退勤</h3>
                                        <p class="text">データ入力などの事務処理が終わったら、翌日の出荷量を確認します。そして、翌日に必要となる車両台数をある程度把握した後、帰宅します。</p>
                                    </div>
                                </li>
                                <!--                                6-->
                                <li class="time-item fl js-fadein">
                                    <div class="img-box">
                                        <picture class="od">
                                            <source media="(max-width: 767px)" srcset="./images/oneday/od26_sp@2x.png">
                                            <source media="(min-width: 768px)" srcset="./images/oneday/od26@2x.png">
                                            <img src="./images/oneday/od26@2x.png" alt="スマホを操作する写真">
                                        </picture>
                                        <p class="time pro">18:00</p>
                                    </div>
                                    <div class="text-box">
                                        <h3 class="hs">帰宅後</h3>
                                        <p class="text">勤務終了後は、家族との時間を満喫。<br>朝8時から始業なので、7時間睡眠を心がけ、11時には就寝します。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

            </div>
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
