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
            <link rel="stylesheet" media="all" href="./css/trucker.css"/>
            <script type="text/javascript" src="./js/trucker.js"></script>
            <div id="UACJ_work">
                <!--            W1-->
                <div id="work1" class="trucker tab">
                    <!--            BANNER-->
                    <div class="banner">
                        <div class="content-inner">
                            <div class="title fl">
                                <h1 class="heading">
                                    <span class="ttl-en en pro">work</span>
                                    <span class="ttl-ja">職種紹介</span>
                                </h1>
                            </div>

                            <div class="banner-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="./images/trucker/banner_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/trucker/banner@2x.png">
                                    <img alt="トラックの写真" src="./images/trucker/banner@2x.png">
                                </picture>
                                <div class="inner wrap1">
                                    <div class="text-box">
                                        <div class="inner-t">
                                            <h2 class="ttl">トラック・トレーラドライバー</h2>
                                            <p class="sub-t pro">TRUCKER</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--            JOB DESCRIPTION-->
                    <section class="job-des">
                        <div class="content-inner wrap1">
                            <div class="job-list">
                                <div class="job-item fl js-fadein">
                                    <div class="box-text">
                                        <div class="inner pdl mgb">
                                            <p class="sub-t">仕事内容</p>
                                            <h3 class="ttl">大型トラック・トレーラにより、アルミ製品及び原材料を輸送</h3>
                                            <p class="text">大型トラック・トレーラにより、アルミ製品及び原材料を輸送しています。輸送に関しては、名古屋支店ドライバーの場合、大きく3つに分けられます。<br>
                                                ① 地場運行（東海3県内の製品輸送・名古屋港→UACJ名古屋製造所様への原材料輸送）<br>
                                                ② 中距離運行（静岡～関西の製品輸送。前日積置→当日早出出発）<br>
                                                ③ 長距離運行（東北～九州の製品輸送。PM出発→宿泊運行、翌日納品）<br>
                                                九州への運行は「大阪～福岡」間、フェリーを利用します。</p>
                                        </div>
                                    </div>
                                    <div class="box-image">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/jd1_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/jd1@2x.png">
                                            <img alt="作業中の男性社員" src="./images/trucker/jd1@2x.png">
                                        </picture>
                                    </div>

                                </div>

                                <div class="job-item fl js-fadein">
                                    <div class="box-image od1">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/jd2_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/jd2@2x.png">
                                            <img alt="作業中の男性社員" src="./images/trucker/jd2@2x.png">
                                        </picture>
                                    </div>
                                    <div class="box-text od2">
                                        <div class="inner pdl2">
                                            <p class="sub-t">この仕事のやりがい</p>
                                            <h3 class="ttl">高度な「輸送技術」が自身の成長につながる</h3>
                                            <p class="text">積込～輸送～納品までの全てを無事に完了させたとき、こみ上げてくる達成感がやりがいと言えます。また、アルミニウム製品は他の金属に比べて柔らかくデリケートな製品です。製品を傷つけないように荷台に保定する技術と、荷台上で製品をずらさないような運転技術が、どこの会社でも通用するドライバーへと自身を成長させてくれます。</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="job-item senior js-fadein">
                                    <div class="bt">
                                        <div class="inner">
                                            <p class="sub-t">先輩社員の声</p>
                                            <div class="text-inner fl">
                                                <p class="text pc-only">まず第一に本当に働きやすいと思える職場です！有給休暇や育児休業を取得しているドライバーも多く、ドライバーにとってワークライフバランスという言葉は無縁と思っていましたが、UACJ物流に入社して以降、ワークライフバランスも重視して働くことができています。私はトレーラに乗務していますが、ドライバーのほとんどが運行管理者資格を取得しており、私も3年前に取得しまし</p>
                                                <p class="text mb-only">まず第一に本当に働きやすいと思える職場です！有給休暇や育児休業を取得しているドライバーも多く、ドライバーにとってワークライフバラ</p>
                                                <div class="img-b">
                                                    <img src="./images/trucker/avt.png">
                                                    <p class="note">2018年入社</p>
                                                </div>
                                            </div>
                                            <p class="text pc-only">た。資格取得にも積極的な会社ですので、費用面の補助もあり、モチベーション高く勉強ができます。将来的にはドライバー以外の仕事、例えば乗務経験を活かした配車業務等にも携わりたいと思っています。</p>
                                            <p class="text mb-only">ンスという言葉は無縁と思っていましたが、UACJ物流に入社して以降、ワークライフバランスも重視して働くことができています。私はトレーラに乗務していますが、ドライバーのほとんどが運行管理者資格を取得しており、私も3年前に取得しました。資格取得にも積極的な会社ですので、費用面の補助もあり、モチベーション高く勉強ができます。将来的にはドライバー以外の仕事、例えば乗務経験を活かした配車業務等にも携わりたいと思っています。</p>
                                        </div>
                                    </div>
                                    <img class="mess" src="./images/trucker/mess@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--            W2-->
                <div id="work2" style="display: none;" class="stevedore tab">
                    <!--            BANNER-->
                    <div class="banner">
                        <div class="content-inner">
                            <div class="title fl">
                                <h1 class="heading">
                                    <span class="ttl-en en pro">work</span>
                                    <span class="ttl-ja">職種紹介</span>
                                </h1>
                            </div>

                            <div class="banner-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="./images/trucker/work2_banner_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/trucker/work2_banner@2x.png">
                                    <img alt="工場内の写真" src="./images/trucker/work2_banner@2x.png">
                                </picture>
                                <div class="inner wrap1">
                                    <div class="text-box">
                                        <div class="inner-t">
                                            <h2 class="ttl">荷扱作業員</h2>
                                            <p class="sub-t pro">stevedore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--            JOB DESCRIPTION-->
                    <section class="job-des">
                        <div class="content-inner wrap1">
                            <div class="job-list">
                                <div class="job-item fl js-fadein">
                                    <div class="box-text">
                                        <div class="inner pdl mgb">
                                            <p class="sub-t">仕事内容</p>
                                            <h3 class="ttl">フォークリフトやクレーンにより、アルミ製品や原材料を運搬</h3>
                                            <p class="text">3.5ｔから15ｔのフォークリフトや20ｔから33ｔのクレーンを操作し、トラック・トレーラへアルミ製品及び原材料を積み込む作業や、それに付随する荷扱作業全般を行う仕事です。</p>
                                        </div>
                                    </div>
                                    <div class="box-image">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work2_jd1_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work2_jd1@2x.png">
                                            <img alt="フォークリフトの写真" src="./images/trucker/work2_jd1@2x.png">
                                        </picture>
                                    </div>

                                </div>

                                <div class="job-item fl js-fadein">
                                    <div class="box-image od1">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work2_jd2_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work2_jd2@2x.png">
                                            <img alt="フォークリフトの写真" src="./images/trucker/work2_jd2@2x.png">
                                        </picture>
                                    </div>
                                    <div class="box-text od2">
                                        <div class="inner pdl2">
                                            <p class="sub-t">この仕事のやりがい</p>
                                            <h3 class="ttl">運転好きにはピッタリのお仕事です！</h3>
                                            <p class="text">無事故・無災害で1日を終えると達成感があり、大きなやりがいかと思います。また、なかなか扱うことのない大きさのフォークリフトやクレーンを普段の仕事から使用することができるので、運転好きの方にはピッタリの仕事です。</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="job-item senior js-fadein">
                                    <div class="bt">
                                        <div class="inner">
                                            <p class="sub-t">先輩社員の声</p>
                                            <div class="text-inner fl">
                                                <p class="text pc-only">はじめは大きなフォークリフトの運転に戸惑いや不安もあるかと思いますが、先輩たちがマンツーマンで丁寧に指導してくれるので、入社して1か月後には12ｔフォークリフトに乗って、積込作業ができるようになっています。安全・確実に仕事ができるよう、日々役職や年齢に関係なく意見を出し合い、改善できる働きやすい職場です。私の職場である北陸支店は、入社1年未満の社員が新</p>
                                                <p class="text mb-only">はじめは大きなフォークリフトの運転に戸惑いや不安もあるかと思いますが、先輩たちがマンツーマンで丁寧に指導してくれるので、入社して</p>
                                                <div class="img-b">
                                                    <img src="./images/trucker/work2_avt.png">
                                                    <p class="note">2010年入社</p>
                                                </div>
                                            </div>
                                            <p class="text pc-only">入社員の指導を行うこともあり、自身の復習やモチベーションアップにもつながり、仕事に来るのが楽しいという声も聞きます。仕事は楽しくがモットーですね！</p>
                                            <p class="text mb-only">1か月後には12ｔフォークリフトに乗って、積込作業ができるようになっています。安全・確実に仕事ができるよう、日々役職や年齢に関係なく意見を出し合い、改善できる働きやすい職場です。私の職場である北陸支店は、入社1年未満の社員が新入社員の指導を行うこともあり、自身の復習やモチベーションアップにもつながり、仕事に来るのが楽しいという声も聞きます。仕事は楽しくがモットーですね！</p>
                                        </div>
                                    </div>
                                    <img class="mess" src="./images/trucker/mess@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!--                W3-->
                <div id="work3" style="display: none;" class="mechanic tab">
                    <!--            BANNER-->
                    <div class="banner">
                        <div class="content-inner">
                            <div class="title fl">
                                <h1 class="heading">
                                    <span class="ttl-en en pro">work</span>
                                    <span class="ttl-ja">職種紹介</span>
                                </h1>
                            </div>

                            <div class="banner-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="./images/trucker/work3_banner_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/trucker/work3_banner@2x.png">
                                    <img alt="整備工具の写真" src="./images/trucker/work3_banner@2x.png">
                                </picture>
                                <div class="inner wrap1">
                                    <div class="text-box">
                                        <div class="inner-t">
                                            <h2 class="ttl">車両整備士<br class="mb-only"><span>（トラック・トレーラ・フォークリフト等）</span></h2>
                                            <p class="sub-t pro">mechanic</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--            JOB DESCRIPTION-->
                    <section class="job-des">
                        <div class="content-inner wrap1">
                            <div class="job-list">
                                <div class="job-item fl js-fadein">
                                    <div class="box-text">
                                        <div class="inner pdl mgb">
                                            <p class="sub-t">仕事内容</p>
                                            <h3 class="ttl">ドライバーの安全運転に貢献！</h3>
                                            <p class="text">国から指定工場の認可を受けており、自社トラック・トレーラの点検・整備を行い、ドライバーの安全運行に貢献する仕事です。また、一般乗用車の車検やフォークリフトの点検・整備も行っています。車両をしっかり整備することで人命を守り、当社の物流サービスを止めないよう努めています。</p>
                                        </div>
                                    </div>
                                    <div class="box-image">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work3_jd1_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work3_jd1@2x.png">
                                            <img alt="整備する男性社員" src="./images/trucker/work3_jd1@2x.png">
                                        </picture>
                                    </div>

                                </div>

                                <div class="job-item fl js-fadein">
                                    <div class="box-image od1">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work3_jd2_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work3_jd2@2x.png">
                                            <img alt="整備する男性社員" src="./images/trucker/work3_jd2@2x.png">
                                        </picture>
                                    </div>
                                    <div class="box-text od2">
                                        <div class="inner pdl2">
                                            <p class="sub-t">この仕事のやりがい</p>
                                            <h3 class="ttl">感謝を直接もらえる仕事</h3>
                                            <p class="text">故障した車両をその場で修理し、車両を止めることなく稼働できた際、色々な人から直接、感謝の言葉をもらえたときにやりがいを感じます。また、故障原因を追究し、原因が分かって故障が直ったときに達成感を感じます。</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="job-item senior js-fadein">
                                    <div class="bt">
                                        <div class="inner">
                                            <p class="sub-t">先輩社員の声</p>
                                            <div class="text-inner fl">
                                                <p class="text pc-only">当社は様々な車種やメーカーの車両を保有していますので、単純作業以外にも色々な経験ができる職場です。また、自家整備の強みでもある「できることは自分たちでやる」ということを第一に考え、車両を止めないことはもとより、各人のスキルアップやモチベーションアップも図っているとても良い職場です。</p>
                                                <p class="text mb-only">当社は様々な車種やメーカーの車両を保有していますので、単純作業以外にも色々な経験ができる職場です。また、自家整備の強みでもある</p>
                                                <div class="img-b">
                                                    <img src="./images/trucker/work3_avt.png">
                                                    <p class="note">2017年入社</p>
                                                </div>
                                            </div>
                                            <!--                                    <p class="text pc-only">入社員の指導を行うこともあり、自身の復習やモチベーションアップにもつながり、仕事に来るのが楽しいという声も聞きます。仕事は楽しくがモットーですね！</p>-->
                                            <p class="text mb-only">「できることは自分たちでやる」ということを第一に考え、車両を止めないことはもとより、各人のスキルアップやモチベーションアップも図っているとても良い職場です。</p>
                                        </div>
                                    </div>
                                    <img class="mess" src="./images/trucker/mess@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!--            W4-->
                <div id="work4" style="display: none;" class="transport tab">
                    <!--            BANNER-->
                    <div class="banner">
                        <div class="content-inner">
                            <div class="title fl">
                                <h1 class="heading">
                                    <span class="ttl-en en pro">work</span>
                                    <span class="ttl-ja">職種紹介</span>
                                </h1>
                            </div>

                            <div class="banner-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="./images/trucker/work4_banner_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/trucker/work4_banner@2x.png">
                                    <img alt="パソコンを操作する男性社員" src="./images/trucker/work4_banner@2x.png">
                                </picture>
                                <div class="inner wrap1">
                                    <div class="text-box">
                                        <div class="inner-t">
                                            <h2 class="ttl">輸送部門</h2>
                                            <p class="sub-t pro">transport</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--            JOB DESCRIPTION-->
                    <section class="job-des">
                        <div class="content-inner wrap1">
                            <div class="job-list">
                                <div class="job-item fl js-fadein">
                                    <div class="box-text">
                                        <div class="inner pdl mgb">
                                            <p class="sub-t">仕事内容</p>
                                            <h3 class="ttl">物流の司令塔として</h3>
                                            <p class="text">配車部門は、工場で出来上がったアルミ製品をお客様へ配送したり、工場間で移動したりなどの輸送を指示する業務です。車種の違いに応じて、どの荷物をどの車に載せ、どういう運行をさせるか、ドライバーのスケジュールを組み立てます。また、当社の輸送をお手伝いいただける協力会社への依頼と管理もします。受注・請求部門は、お客様から注文を受けたり、その車両の手配や請求書の発行などを行っています。</p>
                                        </div>
                                    </div>
                                    <div class="box-image">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work4_jd1_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work4_jd1@2x.png">
                                            <img alt="電話応対中の男性社員" src="./images/trucker/work4_jd1@2x.png">
                                        </picture>
                                    </div>

                                </div>

                                <div class="job-item fl js-fadein">
                                    <div class="box-image od1">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work4_jd2_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work4_jd2@2x.png">
                                            <img alt="パソコンを操作する男性社員" src="./images/trucker/work4_jd2@2x.png">
                                        </picture>
                                    </div>
                                    <div class="box-text od2">
                                        <div class="inner pdl2">
                                            <p class="sub-t">この仕事のやりがい</p>
                                            <h3 class="ttl">仕事はシンプル、でもパズルのような面白さ</h3>
                                            <p class="text">UACJ様のアルミニウム製造工場内に、当社の主要拠点（名古屋支店・北陸支店・関東支店）があり、運ぶ荷物もほとんど決まっていますので、仕事はシンプルです。ただ、同じ方面の荷物をいかにまとめ、輸送効率を高めるかを考えぬき、最良の方法を導き出すことは、パズルのような面白さとやりがいがあります。また、急な対応や変更を難なく対応できたときや、荷主様に提案をして結果的にうまく配送できたときは、達成感を感じて楽しいと思えます。</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="job-item senior js-fadein">
                                    <div class="bt">
                                        <div class="inner">
                                            <p class="sub-t">先輩社員の声</p>
                                            <div class="text-inner fl">
                                                <p class="text pc-only">急な出荷や変更もあり、予定通りに進まないことも多々あります。その際はドライバーに無理をお願いすることもありますので、普段からコミュニケーションをしっかり取って、快く協力してもらえるような関係づくりが大切です。もちろん最初は簡単なことからスタートして徐々に慣れていき、ゆくゆくは物流の司令塔になることを期待しています。一人前になるまでしっかりサポートし</p>
                                                <p class="text mb-only">急な出荷や変更もあり、予定通りに進まないことも多々あります。その際はドライバーに無理をお願いすることもありますので、普段からコ</p>
                                                <div class="img-b">
                                                    <img src="./images/trucker/work4_avt.png">
                                                    <p class="note">2012年入社</p>
                                                </div>
                                            </div>
                                            <p class="text pc-only">ていきますので、安心してくださいね。</p>
                                            <p class="text mb-only">ミュニケーションをしっかり取って、快く協力してもらえるような関係づくりが大切です。もちろん最初は簡単なことからスタートして徐々に慣れていき、ゆくゆくは物流の司令塔になることを期待しています。一人前になるまでしっかりサポートしていきますので、安心してくださいね。</p>
                                        </div>
                                    </div>
                                    <img class="mess" src="./images/trucker/mess@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!--            W5-->
                <div id="work5"  style="display: none;" class="sales tab">
                    <!--            BANNER-->
                    <div class="banner">
                        <div class="content-inner">
                            <div class="title fl">
                                <h1 class="heading">
                                    <span class="ttl-en en pro">work</span>
                                    <span class="ttl-ja">職種紹介</span>
                                </h1>
                            </div>

                            <div class="banner-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="./images/trucker/work5_banner_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/trucker/work5_banner@2x.png">
                                    <img alt="資材の写真" src="./images/trucker/work5_banner@2x.png">
                                </picture>
                                <div class="inner wrap1">
                                    <div class="text-box">
                                        <div class="inner-t">
                                            <h2 class="ttl">資材営業部門</h2>
                                            <p class="sub-t pro">sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--            JOB DESCRIPTION-->
                    <section class="job-des">
                        <div class="content-inner wrap1">
                            <div class="job-list">
                                <div class="job-item fl js-fadein">
                                    <div class="box-text">
                                        <div class="inner pdl mgb">
                                            <p class="sub-t">仕事内容</p>
                                            <h3 class="ttl">既存のお客様をメインとした梱包・包装資材のルート営業</h3>
                                            <p class="text">UACJ様及びUACJグループ様を主体として、非鉄金属関連のお客様へ包装資材を販売・供給しています。金属板材の保護を目的としたマスキングフィルム、製品の輸送時に不可欠な木製スキッドをはじめ、様々な包装資材を取り扱っており、お客様のニーズや課題に合わせて、最適な資材を選定・提案していくのがメインの仕事です。</p>
                                        </div>
                                    </div>
                                    <div class="box-image">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work5_jd1_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work5_jd1@2x.png">
                                            <img alt="資材を確認する男性社員" src="./images/trucker/work5_jd1@2x.png">
                                        </picture>
                                    </div>

                                </div>

                                <div class="job-item fl js-fadein">
                                    <div class="box-image od1">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work5_jd2_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work5_jd2@2x.png">
                                            <img alt="スーツを着た男性社員" src="./images/trucker/work5_jd2@2x.png">
                                        </picture>
                                    </div>
                                    <div class="box-text od2">
                                        <div class="inner pdl2">
                                            <p class="sub-t">この仕事のやりがい</p>
                                            <h3 class="ttl">お客様に少しでも良い提案を！</h3>
                                            <p class="text">包装資材は商材としては地味ですが、製品の梱包や輸送に欠かせないものです。その資材を特定の商材に縛られずに販売できることが、私たちの強みの一つだと思います。その分、難しさもありますが、物流会社であるメリットも活かしながら、お客様により良い提案ができることがやりがいに繋がっています。</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="job-item senior js-fadein">
                                    <div class="bt">
                                        <div class="inner">
                                            <p class="sub-t">先輩社員の声</p>
                                            <div class="text-inner fl">
                                                <p class="text pc-only">中途で入社して、包装資材のことは何も分からずにスタートしました。前職からは扱う商材も業務内容もガラリと変わりましたが、上司や同僚のサポートを受けながら楽しく働いています。営業としてはまだ駆け出しですが、お客様とwin-winの関係が築ける営業マンになれるよう、これからも頑張っていきたいと思います。</p>
                                                <p class="text mb-only">中途で入社して、包装資材のことは何も分からずにスタートしました。前職からは扱う商材も業務内容もガラリと変わりましたが、上司や同僚</p>
                                                <div class="img-b">
                                                    <img src="./images/trucker/work5_avt.png">
                                                    <p class="note">2020年入社</p>
                                                </div>
                                            </div>
                                            <!--                                    <p class="text pc-only">入社員の指導を行うこともあり、自身の復習やモチベーションアップにもつながり、仕事に来るのが楽しいという声も聞きます。仕事は楽しくがモットーですね！</p>-->
                                            <p class="text mb-only">のサポートを受けながら楽しく働いています。営業としてはまだ駆け出しですが、お客様とwin-winの関係が築ける営業マンになれるよう、これからも頑張っていきたいと思います。</p>
                                        </div>
                                    </div>
                                    <img class="mess" src="./images/trucker/mess@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--                W6-->
                <div id="work6"  style="display: none;" class="general tab">
                    <!--            BANNER-->
                    <div class="banner">
                        <div class="content-inner">
                            <div class="title fl">
                                <h1 class="heading">
                                    <span class="ttl-en en pro">work</span>
                                    <span class="ttl-ja">職種紹介</span>
                                </h1>
                            </div>

                            <div class="banner-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="./images/trucker/work6_banner_sp@2x.png">
                                    <source media="(min-width: 768px)" srcset="./images/trucker/work6_banner@2x.png">
                                    <img alt="工場の空中写真" src="./images/trucker/work6_banner@2x.png">
                                </picture>
                                <div class="inner wrap1">
                                    <div class="text-box">
                                        <div class="inner-t">
                                            <h2 class="ttl">管理部門<span>（総務・経理・安全・システム等）</span></h2>
                                            <p class="sub-t pro">general</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--            JOB DESCRIPTION-->
                    <section class="job-des">
                        <div class="content-inner wrap1">
                            <div class="job-list">
                                <div class="job-item fl js-fadein">
                                    <div class="box-text">
                                        <div class="inner pdl mgb">
                                            <p class="sub-t">仕事内容</p>
                                            <h3 class="ttl">会社経営の根幹を担う</h3>
                                            <p class="text">会社経営の根幹を担う役割や日々現場で働く社員の後方支援など、当社がビジネスをする上で必要不可欠な存在が管理部門です。管理部門とは具体的には人事・労務・総務・経理・法務・安全・情報システムといった職種であり、売上に直結する現業部門をサポートしています。業務内容は様々ですが、専門性の高い知識やスキルが必要になる点は共通しており、日々の勉強が必要な職種といえます。</p>
                                        </div>
                                    </div>
                                    <div class="box-image">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work6_jd1_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work6_jd1@2x.png">
                                            <img alt="オフィス外観" src="./images/trucker/work6_jd1@2x.png">
                                        </picture>
                                    </div>

                                </div>

                                <div class="job-item fl js-fadein">
                                    <div class="box-image od1">
                                        <picture class="job-pic">
                                            <source media="(max-width: 1024px)" srcset="./images/trucker/work6_jd2_sp@2x.png">
                                            <source media="(min-width: 1025px)" srcset="./images/trucker/work6_jd2@2x.png">
                                            <img alt="トラックを撮影する女性写真" src="./images/trucker/work6_jd2@2x.png">
                                        </picture>
                                    </div>
                                    <div class="box-text od2">
                                        <div class="inner pdl2">
                                            <p class="sub-t">この仕事のやりがい</p>
                                            <h3 class="ttl">頼りにされる・感謝される</h3>
                                            <p class="text">管理部門の担当者は、基本的にはお客様と接することがないからこそ、社員から頼りにされたときや感謝されたときに、やりがいを感じることが多いです。他の部署で対応できない専門性の高い仕事が多いので、色々な部署から問い合わせや相談がきますが、その分感謝されます。慣れるまでは苦労することもありますが、経験を積むことによって様々なスキルが身に付き、「自分にしかできない仕事」という点で、大きな自信につながることも多くあります。</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="job-item senior js-fadein">
                                    <div class="bt">
                                        <div class="inner">
                                            <p class="sub-t">先輩社員の声</p>
                                            <div class="text-inner fl">
                                                <p class="text pc-only">管理部門は様々な部署の方と接する機会が多いため、人と関わることが好きな人や、人を支えるサポートすることが好きな人にとって、理想的な職種といえると思います。私は当社の管理部門で6年近く様々な業務を経験し、本当に楽しく仕事をしています。自身が声をあげれば色々な仕事を経験させてもらえますし、とても良い職場だと感じています。</p>
                                                <p class="text mb-only">管理部門は様々な部署の方と接する機会が多いため、人と関わることが好きな人や人を支える、サポートすることが好きな人にとって、理想的</p>
                                                <div class="img-b">
                                                    <img src="./images/trucker/work6_avt.png">
                                                    <p class="note">2016年入社</p>
                                                </div>
                                            </div>
                                            <!--                                    <p class="text pc-only">入社員の指導を行うこともあり、自身の復習やモチベーションアップにもつながり、仕事に来るのが楽しいという声も聞きます。仕事は楽しくがモットーですね！</p>-->
                                            <p class="text mb-only">な職種といえると思います。私は当社の管理部門で6年近く様々な業務を経験し、本当に楽しく仕事をしています。自身が声をあげれば色々な仕事を経験させてもらえますし、とても良い職場だと感じています。</p>
                                        </div>
                                    </div>
                                    <img class="mess" src="./images/trucker/mess@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!--            MENU TAB-->
                <section class="work">
                    <div class="content-inner">
                        <h2 class="hs pro">work</h2>
                        <ul class="work-list fl js-fadein">
                            <li class="work-item click" tab="#work1" ur="01">
                                <a>
                                    <picture class="work-img">
                                        <source media="(max-width: 767px)" srcset="./images/trucker/w1_sp@2x.png">
                                        <source media="(min-width: 768px)" srcset="./images/trucker/w1@2x.png">
                                        <img alt="スーツを着た男性社員" src="./images/trucker/w1@2x.png">
                                    </picture>
                                    <div class="box-text">
                                        <div class="inner">
                                            <p class="ttl wt">トラック・トレーラ<br>
                                                ドライバー</p>
                                            <p class="sub-t pro wt">trucker</p>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                    <img class="ar-icon" src="./images/trucker/ar-icon@2x.png">
                                </a>
                            </li>
                            <!--                        2-->
                            <li class="work-item click" tab="#work2" ur="02">
                                <a>
                                    <picture class="work-img">
                                        <source media="(max-width: 767px)" srcset="./images/trucker/w2_sp@2x.png">
                                        <source media="(min-width: 768px)" srcset="./images/trucker/w2@2x.png">
                                        <img alt="スーツを着た男性社員" src="./images/trucker/w2@2x.png">
                                    </picture>
                                    <div class="box-text">
                                        <div class="inner">
                                            <p class="ttl wt">荷扱作業員</p>
                                            <p class="sub-t pro wt">stevedore</p>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                    <img class="ar-icon" src="./images/trucker/ar-icon@2x.png">
                                </a>
                            </li>
                            <!--3-->
                            <li class="work-item click" tab="#work3" ur="03">
                                <a>
                                    <picture class="work-img">
                                        <source media="(max-width: 767px)" srcset="./images/trucker/w3_sp@2x.png">
                                        <source media="(min-width: 768px)" srcset="./images/trucker/w3@2x.png">
                                        <img alt="スーツを着た男性社員" src="./images/trucker/w3@2x.png">
                                    </picture>
                                    <div class="box-text">
                                        <div class="inner">
                                            <p class="ttl wt">車両整備士</p>
                                            <p class="sub-t pro wt">mechanic</p>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                    <img class="ar-icon" src="./images/trucker/ar-icon@2x.png">
                                </a>
                            </li>
                            <!--                            4-->
                            <li class="work-item click" tab="#work4" ur="04">
                                <a>
                                    <picture class="work-img">
                                        <source media="(max-width: 767px)" srcset="./images/trucker/w4_sp@2x.png">
                                        <source media="(min-width: 768px)" srcset="./images/trucker/w4@2x.png">
                                        <img alt="スーツを着た男性社員" src="./images/trucker/w4@2x.png">
                                    </picture>
                                    <div class="box-text">
                                        <div class="inner">
                                            <p class="ttl wt">輸送部門</p>
                                            <p class="sub-t pro wt">transport</p>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                    <img class="ar-icon" src="./images/trucker/ar-icon@2x.png">
                                </a>
                            </li>
                            <!--                        5-->
                            <li class="work-item click" tab="#work5" ur="05">
                                <a>
                                    <picture class="work-img">
                                        <source media="(max-width: 767px)" srcset="./images/trucker/w5_sp@2x.png">
                                        <source media="(min-width: 768px)" srcset="./images/trucker/w5@2x.png">
                                        <img alt="スーツを着た男性社員" src="./images/trucker/w5@2x.png">
                                    </picture>
                                    <div class="box-text">
                                        <div class="inner">
                                            <p class="ttl wt">資材営業部門</p>
                                            <p class="sub-t pro wt">sales</p>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                    <img class="ar-icon" src="./images/trucker/ar-icon@2x.png">
                                </a>
                            </li>
                            <!--                            6-->
                            <li class="work-item click" tab="#work6" ur="06">
                                <a>
                                    <picture class="work-img">
                                        <source media="(max-width: 767px)" srcset="./images/trucker/w6_sp@2x.png">
                                        <source media="(min-width: 768px)" srcset="./images/trucker/w6@2x.png">
                                        <img alt="スーツを着た男性社員" src="./images/trucker/w6@2x.png">
                                    </picture>
                                    <div class="box-text">
                                        <div class="inner">
                                            <p class="ttl wt">管理部門</p>
                                            <p class="sub-t pro wt">general</p>
                                        </div>
                                        <div class="bg"></div>
                                        <img class="ar-icon" src="./images/trucker/ar-icon@2x.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
