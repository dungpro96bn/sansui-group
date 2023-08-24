@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">
            <!--font Austin Pen-->
            <link rel="stylesheet" href="https://use.typekit.net/jdw6pch.css">
            <!--font Prohibition-->
            <link rel="stylesheet" href="https://use.typekit.net/kiq8cok.css">

            <!--    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
            <!--    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->

            <link rel="stylesheet" media="all" href="./css/member.css"/>
            <script type="text/javascript" src="./js/member.js"></script>


            <div id="member" class="member">

                <div id="member-01" class="is-active member-container">
                    <div class="main-banner">
                        <div class="heading-main">
                            <div class="inner">
                                <h1 class="heading">
                                    <span class="ttl-en en">members</span>
                                    <span class="ttl-ja">社員紹介</span>
                                </h1>
                            </div>
                        </div>
                        <div class="main-image">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="images/member/member01_mainimg_sp.png">
                                <source media="(min-width: 768px)" srcset="images/member/member01_mainimg_pc.png">
                                <img class="sizes" src="images/member/member01_mainimg_pc.png" alt="男性社員の写真">
                            </picture>
                        </div>
                    </div>
                    <div class="boxDescription js-fadein">
                        <div class="inner">
                            <div class="description-container" data-aos="fade-up">
                                <div class="memberInfo">
                                    <div class="work"><p class="ttl-ja">トラックドライバー</p><p class="ttl-en">trucker</p></div>
                                    <div class="info-work">
                                        <p class="year">2016年 入社</p>
                                        <p class="position">大阪営業所</p>
                                    </div>
                                </div>
                                <div class="infoText">
                                    <p class="text">前職は食品のルート配送。結婚を機に友人の紹介でUACJ物流に入社。若手乗務員の良き相談役として日々活躍。社内の釣り同好会の代表も務め、ゴルフのベストスコアは84！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member-main">
                        <div class="inner">
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">どのような仕事ですか？</p>
                                <h3 class="title">トラックの運転ばかりが仕事ではない</h3>
                                <p class="text">大型トラックドライバーとして、私が所属している大阪営業所では、近畿地方の配送と週に3回ほど名古屋に運行しています。時々広島や山口まで運行することもありますね。ドライバーというとトラックの運転ばかりをイメージされる方が多いと思いますが、当社のドライバーの仕事は少し違います。私たちが主に運ぶアルミニウムという素材は柔らかく、デリケートな素材です。少しモノが当たったりするだけで傷がつきますので、モノが当たらないよう細心の注意をはらっています。また、荷台上でズレたりして製品を傷つけないようきちんと荷台に保定したり、雨に濡れてもいけない素材ですので、20㎏以上あるシートを雨にぬれないよう掛けるといった部分にもかなりの時間と労力を要します。日頃大変な分、ドライバーとしての能力はどこでも通用すると自負しています。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">入社のきっかけは？</p>
                                <h3 class="title">友人からの紹介</h3>
                                <p class="text">前職は、食品のルート配送で夜勤をしていたのですが、結婚を機に家族との時間が欲しいと思うようになったのがきっかけですね。働き方を見直したいと考えていて転職活動をしていたところ、UACJ物流に勤めていた友人に「働きやすい良い会社だよ」と紹介してもらって入社しました。UACJ物流は紹介による入社がかなり多く、私が所属している大阪営業所は、紹介によって入社した社員がほとんどですね。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">やりがいに感じていることは？</p>
                                <h3 class="title">デリケートで繊細な荷物を扱うからこそのやりがい</h3>
                                <p class="text">私たちが扱う荷物は、デリケートで繊細なアルミニウム製品がほとんどです。また積みやすい荷物ばかりではなく、ときには積むのが難しい荷物もあります。形状や寸法など様々な種類の荷物をどのように積むかを頭の中で描き、それが荷台にきちんと積むことができたとき、そして事故なく納品できたときに、やりがいや達成感を感じますね。大変だからこそ得られる喜びです。</p>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image01">
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member01_image01_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member01_image01_pc.png">
                                    <img class="sizes" src="images/member/member01_image01_pc.png" alt="作業中の男性社員">
                                </picture>
                            </div>
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">この会社の魅力は？</p>
                                    <h3 class="title">社員が無理なく働くことのできる環境</h3>
                                    <p class="text">「社員が無理なく働くことのできる環境」、これにつきます。過度の残業や休日出勤がなく、休みもしっかり取れるので、ワークライフバランスを保ちやすいです。トラックドライバーでワークライフバランスを保つことはなかなか難しいですからね。その証拠に離職率が低く、定年まで働く社員がほとんどです。給料面も満足していますし、帰属意識の高い良い会社だと思いますよ！</p>
                                </div>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image02">
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">仕事での将来の夢は？</p>
                                    <h3 class="title">プロドライバーとして</h3>
                                    <p class="text">プロドライバーとして、意識を高く持ち、無事故・無違反に努めることがまず第一です。まずは目の前の仕事を真摯にキッチリ行うことで、今後の夢ややりたいことも見えてくるかと思っています。</p>
                                </div>
                            </div>
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member01_image02_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member01_image02_pc.png">
                                    <img class="sizes" src="images/member/member01_image02_pc.png" alt="男性社員の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="message-block js-fadein" data-aos="fade-up">
                        <div class="inner">
                            <div class="massageContent">
                                <div class="imageContent">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="images/member/member01_image03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/member/member01_image03_pc.png 2x">
                                        <img class="sizes" src="images/member/member01_image03_pc.png" alt="男性社員の写真">
                                    </picture>
                                </div>
                                <div class="textContent">
                                    <p class="title">未来の後輩へ</p>
                                    <p class="text">ドライバーとして当社で経験を積めば、どこの会社でも通用する能力が身につくと確信しています。大変な部分も多くありますが、誇りを持って日々、目の前の仕事に集中できているのは、働く環境が良いからだと思っています。昨今ドライバー不足が騒がれていますが、ドライバーがいなければお客様はもちろん、一般消費者である私たちの手元にも荷物が<picture class="image img-float">
                                            <source media="(max-width: 767px)" srcset="images/member/member01_image03_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/member/member01_image03_pc.png 2x">
                                            <img class="sizes" src="images/member/member01_image03_pc.png" alt="男性社員の写真">
                                        </picture>届かないので、とても社会的意義のある仕事だと思っています。ドライバーである誇りと向上心を持って、ぜひ一緒に働きましょう！
                                    </p>
                                </div>
                                <p class="hasTag">message</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="member-02" class="member-container">
                    <div class="main-banner">
                        <div class="heading-main">
                            <div class="inner">
                                <h1 class="heading">
                                    <span class="ttl-en en">members</span>
                                    <span class="ttl-ja">社員紹介</span>
                                </h1>
                            </div>
                        </div>
                        <div class="main-image">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="images/member/member02_mainimg_sp.png">
                                <source media="(min-width: 768px)" srcset="images/member/member02_mainimg_pc.png">
                                <img class="sizes" src="images/member/member02_mainimg_pc.png" alt="女性社員の写真">
                            </picture>
                        </div>
                    </div>
                    <div class="boxDescription">
                        <div class="inner">
                            <div class="description-container js-fadein" data-aos="fade-up">
                                <div class="memberInfo">
                                    <div class="work"><p class="ttl-ja">荷扱作業員</p><p class="ttl-en">stevedore</p></div>
                                    <div class="info-work">
                                        <p class="year">2022年 入社</p>
                                        <p class="position">北陸支店</p>
                                    </div>
                                </div>
                                <div class="infoText">
                                    <p class="text">前職は、建設・建築現場にて25ｔのラフタークレーンを操縦していました。UACJ様工場構内で作業をした際に、UACJ物流に対して良いイメージを持ったこともあり、入社を決意。当社では数少ない女性の現場職社員として期待されている。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member-main">
                        <div class="inner">
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">どのような仕事ですか？</p>
                                <h3 class="title">3.5ｔから15ｔのフォークリフトや20ｔから33ｔのクレーンを操作</h3>
                                <p class="text">UACJ様で生産されたアルミコイル製品をフォークリフト・クレーンを使用して、トレーラに積み込む作業やそれに付随する荷扱作業全般を担当しています。3.5ｔから15ｔのフォークリフトや20ｔから33ｔのクレーンを扱うので、職場見学にいらっしゃった求職者の方にはビックリされますね。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">入社のきっかけは？</p>
                                <h3 class="title">生き生きと働く姿に感銘を受けた！</h3>
                                <p class="text">今まで培ってきた経験を活かせる会社を探していたところ、UACJ物流の荷扱作業の募集を見つけたことがきっかけです。前職で、UACJ様工場構内でクレーン作業をした経験があり、整理・整頓された施設や安全が徹底された社風、そして、生き生きと作業する荷扱作業員やドライバーの方を鮮明に覚えていたこともあり、応募を決意しました。選考途中、職場見学の際に12ｔの大型フォークリフトを運転している社員の方を見て、ブランクのある私が運転できるのか少し不安になりましたが、今ではフォークリフトの運転にも慣れ、問題なく仕事ができています。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">やりがいに感じていることは？</p>
                                <h3 class="title">何より無事故・無災害で1日を終えること</h3>
                                <p class="text">UACJ物流は安全面に厳しく、決められたルールが徹底されています。また、私たちが扱うアルミニウムという製品は、とてもデリケートな荷物であり、少しの傷も許されません。私の仕事のやりがいは、そんなデリケートなアルミニウムという製品が何事もなく無事に納品され、荷物へのクレームもなく、無事故・無災害で1日が終了したときにやりがいを感じます。</p>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image01">
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member02_image01_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member02_image01_pc.png">
                                    <img class="sizes" src="images/member/member02_image01_pc.png" alt="確認する女性社員">
                                </picture>
                            </div>
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">この会社の魅力は？</p>
                                    <h3 class="title">ワークライフバランスの優れた会社</h3>
                                    <p class="text">企業規模の大きさと安定性は抜群だと思います。UACJ物流は大手物流企業のセンコーグループの一員であり、荷主であるUACJ様はアルミニウムの生産量で世界第4位の会社です。また福利厚生が手厚く、前職までの会社にはなかった制度がたくさんあります。個人的には企業型確定拠出年金（DC）制度があったことが魅力的でした。有給休暇も取得しやすい環境で、同じ職場の男性は育児休暇を取得されていたので、ワークライフバランスの優れた会社であると思っています。</p>
                                </div>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image02">
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">仕事での将来の夢は？</p>
                                    <h3 class="title">良い見本となれるような存在に</h3>
                                    <p class="text">未だ入社して間もなく、目の前の仕事をこなすことで、現状は精一杯です。今後は効率よく安全に積み込みができるようになることと、将来的にはこれから入社してくる方の良い見本となれるような存在になりたいです。</p>
                                </div>
                            </div>
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member02_image02_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member02_image02_pc.png">
                                    <img class="sizes" src="images/member/member02_image02_pc.png" alt="フォークリフトと女性社員">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="message-block js-fadein" data-aos="fade-up">
                        <div class="inner">
                            <div class="massageContent">
                                <div class="imageContent">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="images/member/member02_image03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/member/member02_image03_pc.png 2x">
                                        <img class="sizes" src="images/member/member02_image03_pc.png" alt="女性社員の写真">
                                    </picture>
                                </div>
                                <div class="textContent">
                                    <p class="title">未来の後輩へ</p>
                                    <p class="text">女性の方でも無理なく仕事ができる職場環境だと思っています。私は前職では拘束時間が長く、家事をしっかりできていませんでしたが、UACJ物流に入社後は、残業もそれほど多くないので、余裕を持って家事ができるようになり、主人にも「良い会社だ<picture class="image img-float">
                                            <source media="(max-width: 767px)" srcset="images/member/member02_image03_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/member/member02_image03_pc.png 2x">
                                            <img class="sizes" src="images/member/member02_image03_pc.png" alt="女性社員の写真">
                                        </picture>ね！」と言ってもらえています。<br/>何でも話し合いのできる良い職場ですので、女性でも男性でも一緒に働いてみませんか？</p>
                                </div>
                                <p class="hasTag">message</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="member-03" class="member-container">
                    <div class="main-banner">
                        <div class="heading-main">
                            <div class="inner">
                                <h1 class="heading">
                                    <span class="ttl-en en">members</span>
                                    <span class="ttl-ja">社員紹介</span>
                                </h1>
                            </div>
                        </div>
                        <div class="main-image">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="images/member/member03_mainimg_sp.png">
                                <source media="(min-width: 768px)" srcset="images/member/member03_mainimg_pc.png">
                                <img class="sizes" src="images/member/member03_mainimg_pc.png" alt="男性社員の写真">
                            </picture>
                        </div>
                    </div>
                    <div class="boxDescription">
                        <div class="inner">
                            <div class="description-container js-fadein" data-aos="fade-up">
                                <div class="memberInfo">
                                    <div class="work"><p class="ttl-ja">車両整備士<small>（トラック班）</small></p><p class="ttl-en">mechanic</p></div>
                                    <div class="info-work">
                                        <p class="year">2017年 入社</p>
                                        <p class="position">車両部</p>
                                    </div>
                                </div>
                                <div class="infoText">
                                    <p class="text">前職はディーラーでトラックの整備を担当していましたが、友人の紹介でUACJ物流に入社。趣味はモトクロスで、昔はレースに出ていたほどの腕前。休日は家族との時間を何より大事にする育パパです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member-main">
                        <div class="inner">
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">どのような仕事ですか？</p>
                                <h3 class="title">UACJ物流社員の乗用車の車検をすることも</h3>
                                <p class="text">トラック・トレーラだけではなく、一般乗用車の車検・法定点検・一般整備・下回り塗装なども行っています。UACJ物流社員の乗用車の車検を行うこともよくあります。一般乗用車の整備に関しては、ハイブリッド車や電気自動車など多様化してきているので、研修等を受けて知識をつけています。日々の勉強は欠かせないですね。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">入社のきっかけは？</p>
                                <h3 class="title">友人からの紹介</h3>
                                <p class="text">前職はディーラーでトラックの整備士として働いていました。残業も多く、職場⇔自宅間の往復の毎日で、家族との時間をなかなか確保できずにいました。ワークライフバランスの整った会社で、仕事と家庭の両立を図りたいとの思いから転職を考えていたところ、友人からの紹介でUACJ物流に入社しました。転職の決め手は、ワークライフバランス！残業時間も少なく、休日（トラック班は日・月休みで、年間休日116日）もしっかりあるので、入社を決意しました。現在では趣味や家族との時間も格段に増え、毎日がとても充実しています。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">やりがいに感じていることは？</p>
                                <h3 class="title">感謝の言葉</h3>
                                <p class="text">整備したトラック・トレーラのドライバーから、感謝の言葉を直接もらったときにやりがいを感じます。前職では、直接感謝の言葉をもらう機会がなかなか無く、やりがいを感じづらい職場でした。現在では、直接感謝の言葉をもらうので、素直に嬉しいですし、やる気も出ます。ドライバーの皆さんも良い方ばかりですので、毎日楽しく仕事ができています。</p>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image01">
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member03_image01_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member03_image01_pc.png">
                                    <img class="sizes" src="images/member/member03_image01_pc.png" alt="確認する男性社員">
                                </picture>
                            </div>
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">この会社の魅力は？</p>
                                    <h3 class="title">様々な車種を整備できる</h3>
                                    <p class="text">様々な車種のトラック・トレーラの整備ができることが一番の魅力だと感じています。技術の向上はもちろん、車種によっての特徴もあり、面白さを感じます。その他、一般乗用車の整備も行いますので、マンネリ化しないことも魅力ですね。職場環境についても満足しています。特に福利厚生面は、他社と比べてとても良いと思います。</p>
                                </div>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image02">
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">仕事での将来の夢は？</p>
                                    <h3 class="title">まずは日々の仕事に全力で</h3>
                                    <p class="text">今は日々の仕事に全力で取り組んでいて、将来の夢というとなかなか難しいですね。ただ、整備以外の分野も経験し、社会人としての厚みができたらと思っています。UACJ物流では様々なキャリアがあり、定年まで整備士の方もいれば、ドライバーの仕事に変わったり、現場や部署の管理運営にも携わることができます。私もいずれは、管理運営の仕事に携わることができたらなと思っています。</p>
                                </div>
                            </div>
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member03_image02_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member03_image02_pc.png">
                                    <img class="sizes" src="images/member/member03_image02_pc.png" alt="整備中の男性社員">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="message-block js-fadein" data-aos="fade-up">
                        <div class="inner">
                            <div class="massageContent">
                                <div class="imageContent">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="images/member/member03_image03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/member/member03_image03_pc.png 2x">
                                        <img class="sizes" src="images/member/member03_image03_pc.png" alt="男性社員の写真">
                                    </picture>
                                </div>
                                <div class="textContent">
                                    <p class="title">未来の後輩へ</p>
                                    <p class="text">整備士になろうと思う方は、車が好き・車いじりが好きという方が多いと思います。どこの会社でも仕事をしていく中で、専門知識や技術が身についていくにつれ、やりがいや面白さを感じることができる<picture class="image img-float">
                                            <source media="(max-width: 767px)" srcset="images/member/member03_image03_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/member/member03_image03_pc.png 2x">
                                            <img class="sizes" src="images/member/member03_image03_pc.png" alt="男性社員の写真">
                                        </picture>と思いますが、その中でもUACJ物流は人も良く、働きやすい会社だと思います。ぜひ一緒に働きましょう！</p>
                                </div>
                                <p class="hasTag">message</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="member-04" class="member-container">
                    <div class="main-banner">
                        <div class="heading-main">
                            <div class="inner">
                                <h1 class="heading">
                                    <span class="ttl-en en">members</span>
                                    <span class="ttl-ja">社員紹介</span>
                                </h1>
                            </div>
                        </div>
                        <div class="main-image">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="images/member/member04_mainimg_sp.png">
                                <source media="(min-width: 768px)" srcset="images/member/member04_mainimg_pc.png">
                                <img class="sizes" src="images/member/member04_mainimg_pc.png" alt="男性社員の写真">
                            </picture>
                        </div>
                    </div>
                    <div class="boxDescription">
                        <div class="inner">
                            <div class="description-container js-fadein" data-aos="fade-up">
                                <div class="memberInfo">
                                    <div class="work"><p class="ttl-ja">事務職<small>（輸送部門）</small></p><p class="ttl-en">transport</p></div>
                                    <div class="info-work">
                                        <p class="year">2004年 入社</p>
                                        <p class="position">館林営業所 所長</p>
                                    </div>
                                </div>
                                <div class="infoText">
                                    <p class="text">新卒で入社して以来、着実にキャリアアップし、現在若くして館林営業所の所長を務める。今後のUACJ物流を支える一人として、日々奮闘している。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member-main">
                        <div class="inner">
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">どのような仕事ですか？</p>
                                <h3 class="title">営業所の管理運営</h3>
                                <p class="text">現在は館林営業所の管理運営を行っています。管理運営といっても、売上から安全面・勤怠管理等、業務は多岐に渡ります。また、管理職として経営側の視点を持つよう意識をしています。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">入社のきっかけは？</p>
                                <h3 class="title">自分が勤めている会社を「良い会社だ」と言えますか？</h3>
                                <p class="text">入社当時は就職氷河期で、就職活動には大変苦労しました。そんな中、地元で働きたいとの思いから、大学の求人の中から本社が愛知県にある会社をいくつか見つけ、その中で親会社も大きく、安定している部分に惹かれ、UACJ物流に応募し、拾ってもらいました。実際に入社してからもそのイメージのまま、じっくりと腰を据えて、仕事に集中して働ける良い会社だと思っています。なかなか自分が勤めている会社を「良い会社」といえる会社員っていないんじゃないかと思いますね。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">やりがいに感じていることは？</p>
                                <h3 class="title">自身の成長と達成感</h3>
                                <p class="text">全国にある支店・営業所で、色々な人と知り合って共に仕事をし、目標を達成したときに大きな達成感を得ることができますし、自分自身も成長したと実感できます。色々な人と一緒に仕事をすることで、スキルアップも図ることができています。また、自身の人間性の幅も広がりますし、本当に良い経験をさせてもらっていると、今も感じますね。</p>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image01">
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member04_image01_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member04_image01_pc.png">
                                    <img class="sizes" src="images/member/member04_image01_pc.png" alt="男性社員の写真">
                                </picture>
                            </div>
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">この会社の魅力は？</p>
                                    <h3 class="title">必ず、誰かが見てくれている</h3>
                                    <p class="text">この会社の魅力は、目の前の仕事を一生懸命やっていれば、誰かがきっと見てくれていて、それに準じた評価をしてくれることですね。当社はベンチャー企業のように、実績や成果がすぐに給与等に反映されるわけではありませんが、日々の努力を必ず評価してくれます。その評価が給与等の待遇につながります。誰かが必ず頑張りを見てくれている、そんな会社だと思います。</p>
                                </div>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image02">
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">仕事での将来の夢は？</p>
                                    <h3 class="title">目標とする先輩に、少しでも</h3>
                                    <p class="text">私には目標となる先輩がいます。その先輩の背中を見て、目の前の仕事に一生懸命取り組んでいたからこそ、現在の自分がいます。その先輩に少しでも近づくことが、仕事の上での目標ですね。</p>
                                </div>
                            </div>
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member04_image02_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member04_image02_pc.png">
                                    <img class="sizes" src="images/member/member04_image02_pc.png" alt="男性社員の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="message-block js-fadein" data-aos="fade-up">
                        <div class="inner">
                            <div class="massageContent">
                                <div class="imageContent">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="images/member/member04_image03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/member/member04_image03_pc.png 2x">
                                        <img class="sizes" src="images/member/member04_image03_pc.png" alt="男性社員の写真">
                                    </picture>
                                </div>
                                <div class="textContent">
                                    <p class="title">未来の後輩へ</p>
                                    <p class="text">就職・転職は人生の大きな岐路といえます。あなたにとっての「良い会社とは？」「働きやすい会社とは？」を、一度深く考えてみてください。深く考えた後、当社の門を叩いてくれたら大歓迎です。しっ<picture class="image img-float">
                                            <source media="(max-width: 767px)" srcset="images/member/member04_image03_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/member/member04_image03_pc.png 2x">
                                            <img class="sizes" src="images/member/member04_image03_pc.png" alt="男性社員の写真">
                                        </picture>かりとUACJ物流社員全員であなたをサポートします。共に頑張りましょう！</p>
                                </div>
                                <p class="hasTag">message</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="member-05" class="member-container">
                    <div class="main-banner">
                        <div class="heading-main">
                            <div class="inner">
                                <h1 class="heading">
                                    <span class="ttl-en en">members</span>
                                    <span class="ttl-ja">社員紹介</span>
                                </h1>
                            </div>
                        </div>
                        <div class="main-image">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="images/member/member05_mainimg_sp.png">
                                <source media="(min-width: 768px)" srcset="images/member/member05_mainimg_pc.png">
                                <img class="sizes" src="images/member/member05_mainimg_pc.png" alt="男性社員の写真">
                            </picture>
                        </div>
                    </div>
                    <div class="boxDescription">
                        <div class="inner">
                            <div class="description-container js-fadein" data-aos="fade-up">
                                <div class="memberInfo">
                                    <div class="work"><p class="ttl-ja">事務職<small>（資材営業部門）</small></p><p class="ttl-en">sales</p></div>
                                    <div class="info-work">
                                        <p class="year">2014年 入社</p>
                                        <p class="position">資材営業部 主任</p>
                                    </div>
                                </div>
                                <div class="infoText">
                                    <p class="text">前職でも営業を経験した後、UACJ物流に入社。現在では、2人の後輩をまとめる資材営業部の主任。若くして一軒家を持ち、家族と飼い猫との時間も大切にしている。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member-main">
                        <div class="inner">
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">どのような仕事ですか？</p>
                                <h3 class="title">既存のお客様を中心とした、ルート営業・在庫管理</h3>
                                <p class="text">既存のお客様への梱包・包装資材のご提案と在庫管理をメインに行っています。週1～2回の出張もあり、多いときで1日3件ほどお客様の元を訪ねることもありますね。営業といっても「モノを売る」というよりは、お客様が今どんなことに困っているのか、ニーズをお伺いしてご要望を形にしていく仕事です。意識は「モノを売る」より「ニーズを聞く」ですね。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">入社のきっかけは？</p>
                                <h3 class="title">面接時の印象</h3>
                                <p class="text">私を面接してくれた方の印象と職場の朗らかな雰囲気が決め手となり、入社を決意しました。新卒で入社した会社は体育会系の会社で居心地が悪く退職し、通勤ができる範囲内で仕事を探していたところ、UACJ物流の求人を見つけて応募しました。選考が進むにつれ、面接してくれた方の人柄や職場の雰囲気がとても良く、この会社なら無理なく定年まで働けるような気がして、入社したいと強く思うようになりました。入社後もその印象は変わらず、現在も無理なく働けており、ぜひ定年まで働きたいと思わせてくれる会社ですね。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">やりがいに感じていることは？</p>
                                <h3 class="title">お客様に寄り添った分だけ数字として表れる</h3>
                                <p class="text">お客様の困りごとや要望に対して、どれだけ寄り添うことができたかが数字として表れる部分にとてもやりがいを感じます。その数字の分だけお客様に頼りにされた、お客様の困りごとや要望に応えられたということですから。また少人数の部署ですので、任される業務の範囲が広く、色々な経験ができることもやりがいであり、面白さですね。</p>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image01">
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member05_image01_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member05_image01_pc.png">
                                    <img class="sizes" src="images/member/member05_image01_pc.png" alt="男性社員の写真">
                                </picture>
                            </div>
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">この会社の魅力は？</p>
                                    <h3 class="title">面倒見の良い社風</h3>
                                    <p class="text">面倒見の良い社風であることが一番の魅力だと思います。入社当時、右も左も分からずとても不安でしたが、先輩の皆さんが優しく丁寧に仕事を教えて下さり、とても可愛がってくれました。現在、私には優秀な後輩が2人いますが、かつての先輩たちと同じように愛情を持って接することを心がけています。</p>
                                </div>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image02">
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">仕事での将来の夢は？</p>
                                    <h3 class="title">資材営業部の可能性は無限大</h3>
                                    <p class="text">資材営業部として取り扱っている商品の幅を広げたり、拠点を全国に広げたり、可能性は無限大だと思っています。そんな可能性のある資材営業部の拡大に携わることが、夢といいますか直近の目標ですね。またDXの促進等により、誰もが働きやすい職場環境になることを目指して、業務の改革にもチャレンジしていきたいですね。</p>
                                </div>
                            </div>
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member05_image02_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member05_image02_pc.png">
                                    <img class="sizes" src="images/member/member05_image02_pc.png" alt="男性社員の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="message-block js-fadein" data-aos="fade-up">
                        <div class="inner">
                            <div class="massageContent">
                                <div class="imageContent">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="images/member/member05_image03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/member/member05_image03_pc.png 2x">
                                        <img class="sizes" src="images/member/member05_image03_pc.png" alt="男性社員の写真">
                                    </picture>
                                </div>
                                <div class="textContent">
                                    <p class="title">未来の後輩へ</p>
                                    <p class="text">明るい雰囲気の働きやすい会社です。そんな雰囲気の中、先輩や上司から様々なことを学び、吸収できたからこそ、現在の私がいます。ただ私も未だ成長途中で、資材営業部も成長途中の部署です。<picture class="image img-float">
                                            <source media="(max-width: 767px)" srcset="images/member/member05_image03_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/member/member05_image03_pc.png 2x">
                                            <img class="sizes" src="images/member/member05_image03_pc.png" alt="">
                                        </picture>共に成長し、一緒に楽しく、働きやすい職場にしていけたら嬉しいです。ぜひ一緒に働きましょう。
                                    </p>
                                </div>
                                <p class="hasTag">message</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="member-06" class="member-container">
                    <div class="main-banner">
                        <div class="heading-main">
                            <div class="inner">
                                <h1 class="heading">
                                    <span class="ttl-en en">members</span>
                                    <span class="ttl-ja">社員紹介</span>
                                </h1>
                            </div>
                        </div>
                        <div class="main-image">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="images/member/member06_mainimg_sp.png">
                                <source media="(min-width: 768px)" srcset="images/member/member06_mainimg_pc.png">
                                <img class="sizes" src="images/member/member06_mainimg_pc.png" alt="女性社員の写真">
                            </picture>
                        </div>
                    </div>
                    <div class="boxDescription">
                        <div class="inner">
                            <div class="description-container js-fadein" data-aos="fade-up">
                                <div class="memberInfo">
                                    <div class="work"><p class="ttl-ja">事務職<small>（管理部門）</small></p><p class="ttl-en">general</p></div>
                                    <div class="info-work">
                                        <p class="year">2005年 入社</p>
                                        <p class="position">総務部 主任</p>
                                    </div>
                                </div>
                                <div class="infoText">
                                    <p class="text">入社後、2度の産休・育休を取得。現在は、総務部の主任として部下の指導も行う。季節の味覚狩り同好会の代表も務めるUACJ物流のムードメーカー！</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member-main">
                        <div class="inner">
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">どのような仕事ですか？</p>
                                <h3 class="title">女性がより輝ける、働きやすい会社を目指して</h3>
                                <p class="text">社員の皆さんの給与計算や福利厚生、広報も担当しています。また最近では、女性活躍推進を積極的に進めています。女性がより輝ける、働きやすい会社を目指して日々奮闘中です。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">入社のきっかけは？</p>
                                <h3 class="title">家庭との両立もしやすい</h3>
                                <p class="text">きっかけは派遣社員としてご縁があったことです。実際に総務の仕事を経験し、様々な知識を習得できる点に魅力を感じ、入社しました。当社は朝は早い（8：00）ですが、帰りも早い（16：45）ので、家庭との両立もしやすく、助かっています。</p>
                            </div>
                            <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                <p class="ttl-top">やりがいに感じていることは？</p>
                                <h3 class="title">役に立つ嬉しさ、試行錯誤する楽しさ</h3>
                                <p class="text">社員の困りごとを解決したり、サポートして役に立てたと感じたときにやりがいを感じます。スワロー通信（社内報）を制作する際には、たくさんの人に様々な情報をお届けし、且つ少しでも楽しく、また見たいと思ってもらえるように試行錯誤するのも楽しいです。入社された際には、ぜひスワロー通信をご覧ください！</p>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image01">
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member06_image01_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member06_image01_pc.png">
                                    <img class="sizes" src="images/member/member06_image01_pc.png" alt="女性社員の写真">
                                </picture>
                            </div>
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">この会社の魅力は？</p>
                                    <h3 class="title">自慢できる福利厚生制度</h3>
                                    <p class="text">大手物流企業であるセンコーグループの一員でありつつ、会社としては中小企業にあたるので、比較的自由度が高く、自身の仕事の成果が見えやすいところが魅力の一つだと思います。また、当社は福利厚生も充実しています。慶弔休暇はもちろん、ご家族も個別に利用できる福利厚生倶楽部（宿泊やレジャーなどの割引サービス）への加入、人間ドックの補助、健康アプリの導入、将来の資産形成に有利な企業型DCやセンコーグループの従業員持株会にも入会することができ、どなたでもライフスタイルに合わせて活用できるようになっています。また、資格取得も積極的に応援しており、入社後も自己研鑽により、色々な資格を取得する社員が多いです。</p>
                                </div>
                            </div>
                        </div>
                        <div class="memberInfo-image memberInfo-image02">
                            <div class="textContent">
                                <div class=" memberItem-info js-fadein" data-aos="fade-up">
                                    <p class="ttl-top">仕事での将来の夢は？</p>
                                    <h3 class="title">全ての従業員が働きやすい職場に</h3>
                                    <p class="text">UACJ物流で働く全ての社員が働きやすく、働きがいがあると思える職場になることを目指しています。やはりUACJ物流に入社してよかった、UACJ物流で働いてよかったという声を聴くと嬉しく思います。</p>
                                </div>
                            </div>
                            <div class="memberImage js-fadein" data-aos="fade-up">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="images/member/member06_image02_sp.png">
                                    <source media="(min-width: 768px)" srcset="images/member/member06_image02_pc.png">
                                    <img class="sizes" src="images/member/member06_image02_pc.png" alt="電話する女性社員の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="message-block js-fadein" data-aos="fade-up">
                        <div class="inner">
                            <div class="massageContent">
                                <div class="imageContent">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="images/member/member06_image03_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="images/member/member06_image03_pc.png 2x">
                                        <img class="sizes" src="images/member/member06_image03_pc.png" alt="女性社員の写真">
                                    </picture>
                                </div>
                                <div class="textContent">
                                    <p class="title">未来の後輩へ</p>
                                    <p class="text">社員の皆さんが、健康・プライベートを大切にしながら、仕事に集中できるよう環境整備を進めており<picture class="image img-float">
                                            <source media="(max-width: 767px)" srcset="images/member/member06_image03_sp.png 2x">
                                            <source media="(min-width: 768px)" srcset="images/member/member06_image03_pc.png 2x">
                                            <img class="sizes" src="images/member/member06_image03_pc.png" alt="女性社員の写真">
                                        </picture>ます！困ったことがあったら何でも相談して下さい。ぜひ一緒に、働きがいのある会社を作っていきましょう！
                                    </p>
                                </div>
                                <p class="hasTag">message</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="member-tabs">
                    <h2 class="heading-tab ttl-en js-fadein" data-aos="fade-up">members</h2>
                    <div class="tabContent">
                        <div class="inner">
                            <ul class="memberList">
                                <li class="memberItem js-fadein" data-aos="fade-up">
                                    <a href="#member-01" data-member="01">
                                        <div class="memberInfo">
                                            <p class="ttl">トラック<br/>ドライバー</p>
                                            <p class="work ttl-en">trucker</p>
                                        </div>
                                        <div class="imageTab">
                                            <picture class="image">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab01_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab01_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab01_pc.png" alt="">
                                            </picture>
                                            <picture class="image imgHover">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab01_hover_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab01_hover_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab01_hover_pc.png" alt="">
                                            </picture>
                                        </div>
                                        <div class="icon-arrow">
                                            <span class="line-arrow"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.828" height="12.914" viewBox="0 0 23.828 12.914">
                                                <path id="Path_5354" data-name="Path 5354" d="M28.5,18,18,28.5,7.5,18" transform="translate(-6.086 -16.586)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="memberItem js-fadein" data-aos="fade-up">
                                    <a href="#member-02" data-member="02">
                                        <div class="memberInfo">
                                            <p class="ttl">荷扱作業員</p>
                                            <p class="work ttl-en">stevedore</p>
                                        </div>
                                        <div class="imageTab">
                                            <picture class="image">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab02_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab02_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab02_pc.png" alt="">
                                            </picture>
                                            <picture class="image imgHover">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab02_hover_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab02_hover_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab02_hover_pc.png" alt="">
                                            </picture>
                                        </div>
                                        <div class="icon-arrow">
                                            <span class="line-arrow"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.828" height="12.914" viewBox="0 0 23.828 12.914">
                                                <path id="Path_5354" data-name="Path 5354" d="M28.5,18,18,28.5,7.5,18" transform="translate(-6.086 -16.586)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="memberItem js-fadein" data-aos="fade-up">
                                    <a href="#member-03" data-member="03">
                                        <div class="memberInfo">
                                            <p class="ttl">車両整備士</p>
                                            <p class="work ttl-en">mechanic</p>
                                        </div>
                                        <div class="imageTab">
                                            <picture class="image">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab03_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab03_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab03_pc.png" alt="">
                                            </picture>
                                            <picture class="image imgHover">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab03_hover_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab03_hover_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab03_hover_pc.png" alt="">
                                            </picture>
                                        </div>
                                        <div class="icon-arrow">
                                            <span class="line-arrow"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.828" height="12.914" viewBox="0 0 23.828 12.914">
                                                <path id="Path_5354" data-name="Path 5354" d="M28.5,18,18,28.5,7.5,18" transform="translate(-6.086 -16.586)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="memberItem js-fadein" data-aos="fade-up">
                                    <a href="#member-04" data-member="04">
                                        <div class="memberInfo">
                                            <p class="ttl">事務職<small>（輸送部門）</small></p>
                                            <p class="work ttl-en">transport</p>
                                        </div>
                                        <div class="imageTab">
                                            <picture class="image">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab04_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab04_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab04_pc.png" alt="">
                                            </picture>
                                            <picture class="image imgHover">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab04_hover_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab04_hover_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab04_hover_pc.png" alt="">
                                            </picture>
                                        </div>
                                        <div class="icon-arrow">
                                            <span class="line-arrow"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.828" height="12.914" viewBox="0 0 23.828 12.914">
                                                <path id="Path_5354" data-name="Path 5354" d="M28.5,18,18,28.5,7.5,18" transform="translate(-6.086 -16.586)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="memberItem js-fadein" data-aos="fade-up">
                                    <a href="#member-05" data-member="05">
                                        <div class="memberInfo">
                                            <p class="ttl">事務職<br/><small>（資材営業部門）</small></p>
                                            <p class="work ttl-en">sales</p>
                                        </div>
                                        <div class="imageTab">
                                            <picture class="image">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab05_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab05_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab05_pc.png" alt="">
                                            </picture>
                                            <picture class="image imgHover">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab05_hover_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab05_hover_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab05_hover_pc.png" alt="">
                                            </picture>
                                        </div>
                                        <div class="icon-arrow">
                                            <span class="line-arrow"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.828" height="12.914" viewBox="0 0 23.828 12.914">
                                                <path id="Path_5354" data-name="Path 5354" d="M28.5,18,18,28.5,7.5,18" transform="translate(-6.086 -16.586)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="memberItem js-fadein" data-aos="fade-up">
                                    <a href="#member-06" data-member="06">
                                        <div class="memberInfo">
                                            <p class="ttl">事務職<small>（管理部門）</small></p>
                                            <p class="work ttl-en">general</p>
                                        </div>
                                        <div class="imageTab">
                                            <picture class="image">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab06_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab06_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab06_pc.png" alt="">
                                            </picture>
                                            <picture class="image imgHover">
                                                <source media="(max-width: 767px)" srcset="images/member/member_imgTab06_hover_sp.png">
                                                <source media="(min-width: 768px)" srcset="images/member/member_imgTab06_hover_pc.png">
                                                <img class="sizes" src="images/member/member_imgTab06_hover_pc.png" alt="">
                                            </picture>
                                        </div>
                                        <div class="icon-arrow">
                                            <span class="line-arrow"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23.828" height="12.914" viewBox="0 0 23.828 12.914">
                                                <path id="Path_5354" data-name="Path 5354" d="M28.5,18,18,28.5,7.5,18" transform="translate(-6.086 -16.586)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
