<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/tanq/header.php");
?>


    <!-- Full Page Image Header with Vertically Centered Content -->
    <header>
        <div class="head-bg head-bg-fluid">
            <div class="masthead">
                <div class="head-bg-img"></div>
                <div class="container h-100">
                    <div class="h-100 align-items-center">
                        <div class="head-title text-center">
                            <img src="./assets/img/title.png" class="title">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="card">
                <div class=" mx-auto">
                    <img src="./assets/img/tanq-online-workshop2021-banner.jpg" class="img-fluid card-img rounded">
                </div>
                <div class="card-img-overlay d-flex justify-content-center" style="top:40%">
                    <button class="btn btn-primary btn-lg d-blcok mx-auto align-self-center " onclick="location.href='./progress-report/2021-1/'" role="button">もっと詳しく知る</button>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- 宇宙線探究活動　探Qって？ -->
    <section class="page-section" id="intro">
        <div class="container section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pull-left">
                        <h2 class="section-title">
                            宇宙線探究活動　探Qって？
                        </h2>
                    </div>
                    <div class="container">
                        <p>宇宙線の測定・観測と聞くと難しそうですが、探Qでこの宇宙線探究活動を中高生でもできるデバイスを開発・配布を行ってきており、たくさんの中高生が共同研究に加わっています。現在ではおよそ１０校の中高・高専で研究者のサポートを受けて宇宙線検出器の製作・探究活動を行っており、研究会で成果を発表するような高校生もいます。
                        </p>
                        <a href="https://tanq.kaduo.jp/material/tanq-pamflet2021-all-lite.pdf"><span class="material-icons icon">picture_as_pdf</span> 探Q　パンフレット</a>
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9">
                    <video class="w-100" autoplay muted playsinline loop poster="./assets/img/intro-clip.jpg">
                        <source src="" data-src="./assets/img/intro-clip.mp4" type="video/mp4">
                    </video>
                </div>
                </div>
            </div>

        </div>
    </section>
    <hr>


    <!-- 特徴 -->
    <section class="page-section" id="feature">
        <div class="container section">
            <h1 class="section-title">
                宇宙線探究活動　探Qの特徴
            </h1>
            <div class="row">

                <div class="col-lg-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="./assets/img/tanq-event-image1.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">宇宙線検出器を使う</h2>
                            <hr>
                            <p>　中高生でも簡単に作ることができるような検出器を開発し、全国の中高生へ配布を行います。また、全国の中高生に活動を知ってもらうために、オンラインや各地方で体験会を行っています。</p>
                            <a href="./detector.php"><span class="material-icons icon">web</span>宇宙線・検出器について</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="./assets/img/tanq-event-image2.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">研究者と共同研究する</h2>
                            <hr>
                            <p>Slackを用いたオンラインコミュニティとZOOMを用いたビデオセッションを活用することで、全国のどこからでも中高生が研究者と一緒に探究活動ができます。
                            </p>
                            <a href="./communication.php"><span class="material-icons icon">web</span> 全国の研究者や中高生との交流</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-2">
                        <div class="container-img">
                            <img class="rounded" src="./assets/img/tanq-event-image3.jpg">
                        </div>
                        <div class="container section text-center">
                            <h2 class="section-title">宇宙線で世界と繋がる</h2>
                            <hr>
                            <p>他国での宇宙線探究プロジェクトと連携することで、国際交流を促進します。例えばアルゼンチンとの共同探究を行う高校生チームがあったり、アメリカの研究者とのディスカッションをする高校生がいたりします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  

    <hr>
    <!-- EXAMPLE -->
    <section class="page-section" id="research">
        <div class="container section">
            <h1 class="section-title">
                探究事例
            </h1>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col mb-4">

                            <a href="https://www.notion.so/kaduo/322cd840f4814bda9dda73f72fa981d0">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/edogawatorite-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線による人体への被爆の影響の推定</p>
                                            <p class="small">江戸川学園取手高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">年間の被ばく線量のうちおよそ0.2 mSvが宇宙線に由来するものと言われています。宇宙線検出器から得られる到来頻度を元に学校付近での宇宙線被ばく総量の推定を試みました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.2~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/3b179a3cdb204f88b0f3f8081f56f39f">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/toshimaoka-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>自宅で検証、高度による宇宙線到来頻度の違い</p>
                                            <p class="small">豊島岡女子学園</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の検出頻度は高度によって異なり、飛行機などでは何十倍も多く検出されます。これを、高層の自宅（２９階）でも地上との有意な差がみえるのではないかという仮説の元行っている探究です。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/103969099cda4ca4a3613f752f4fb0c8">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/touoh-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>サイクロトロン加速器施設での陽子エネルギー測定</p>
                                            <p class="small">東桜学館</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙開発を中心とした企業による放射線体制試験を東北大CYRICでは陽子ビームを用いて行っています。より柔軟な照射事業を行うために供給している陽子ビームについて様々な条件でエネルギー測定をTime Of Flight法を用いて行いました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/c9e17fb4efa84d0b9dea28bc5193d027">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/bl4s-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>~Cancer Fighers~ ゲルを用いてドイツDESYの大型加速器で電子ビームの線量分布を測定する</p>
                                            <p class="small">Waseda University Honjyo Senior High School、Huechulafquen</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">アルゼンチンの高校生と共同でBL4Sという高校生対象の大型加速器実験公募に挑戦し、ドイツDESYの電子加速器を用いて大型ゲル線量計での線量分布測定を検討・提案をしました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~2020.5</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/bf88a3014fd74df684f9d87e1d64b19c">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/card-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>雲および太陽活動と宇宙線到来頻度の関係</p>
                                            <p class="small">山形東高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線を長期間観測すると、太陽活動やそれに由来する気象活動と宇宙線検出頻度は相関が得られ、また宇宙線に由来した雲形成等、複雑にプロセスが絡み合っていることが様々な研究機関から報告されています。その中でも比較的短い（～１か月）の相関性について探究を行っています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/78a75b046b0145e4afee3ce5ed285e0a">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/hiroo-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線中性子を測定して積雪量を測る</p>
                                            <p class="small">広尾学園・山形東高校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">積雪量の測定として宇宙線中性子の透過率を用いる手法があり、一部で既に実用化されています。簡易宇宙線検出器ベースに、販売されている装置の数十分の１のコストで同等の積雪量観測を行う装置の開発を行っています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.4~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col mb-4">
                            <a href="https://www.notion.so/2020-e64a70208e08415d96e950065b751932">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/waseda-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線による水中でのチェレンコフ光を検出する</p>
                                            <p class="small">早稲田大学本庄高等学院</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">水やアクリルといった屈折率の大きい物質では光速に近い宇宙線によってチェレンコフ光を発生し、これを受光することで宇宙線を検出することができます。こういったチェレンコフ検出器を形状や材質面で最適化しながら開発します。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.4~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/CMS-bdb1aa96574d48b4823bae6f80af1bb7">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/bmac-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>CMS実験のデータを解析してヒッグス粒子を探索する</p>
                                            <p class="small">早稲田大学本庄高等学院、東桜学館</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">IPPOG(International Particle Physics Outreach Group)主催の大型加速器実験CMSのデータ解析ワークショップに参加して、ヒッグス粒子等の粒子再構成を中心とした解析を行い、アメリカ等の研究者と交流しました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.3~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/hiroo-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>広範囲同時測定による超高エネルギー宇宙線探索</p>
                                            <p class="small">早稲田大学本庄高等学院、広尾学園</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の最大エネルギーは宇宙背景放射との相互作用でエネルギーを失うためにGZK限界という上限値があるといわれています。国内の複数の検出器でネットワーク測定を行うことで、このような超高エネルギー宇宙線の測定を試みています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2018.8~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/873ffea95da64d08a7369001e154fbaa">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/argentina-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>アルゼンチンと日本での共同宇宙線観測</p>
                                            <p class="small">米沢興譲館、東桜学館、Huechulafquen</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">日本とアルゼンチンの間で宇宙線到来頻度を比較して、地磁気や高度といった地理的条件による違いを分析しています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.12~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/35e7e2897edb4ceea9e16eba5e069a29">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/kojyokan-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>ミュオンの寿命測定</p>
                                            <p class="small">米沢興譲館バリオンズ</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">ミュオンはおよそ2マイクロ秒という短い寿命をもち、一瞬で崩壊してしまいます。宇宙線のミュオンについて実際に寿命を測定し、ミュオンの電荷等による違いを探ろうとしています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.7~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://youtu.be/yK8ywJyEbio?t=3827">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/card-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>The Relationship between Zenith Angle Dependence of Cosmic Ray and Geomagnetic Activity</p>
                                            <p class="small">仙台第一高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線ミュオンは荷電粒子のため地磁気の影響をうけ、地球に到達するまでの飛跡が曲がります。地上で検出する宇宙線の天頂角分布を測定することで、このような地磁気の依存性を検証しました。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2019~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/edf80ac5eca64607a75ff2eb0b0d7d43">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/card-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>宇宙線到来頻度と気象の関係</p>
                                            <p class="small">秋田高校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の到来頻度と気象との関係に着目し、検出器に取り付けた気温・気圧・湿度センサーの値や、気象庁の観測データを用いて宇宙線到来頻度との相関を調べています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2019~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/63d8c87378974b80a9d70f7786b02e42">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/iwataminami-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>太陽と宇宙線の関係</p>
                                            <p class="small">磐田南高等学校</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">宇宙線の発生源の１つである太陽の活動と宇宙線の間にどんな関係があるかを調べています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.10~</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                            <a href="https://www.notion.so/kaduo/B-3e347aad00e949798a327bec66e68638">
                                <div class="card">
                                    <div class="card-img"><img src="./assets/img/toshimaB-top.jpg" class="card-img-top" alt="...">
                                        <div class="img-center text-center">
                                            <p>小型のチェレンコフ光検出器をつくる</p>
                                            <p class="small">豊島岡女子学園（チェレン）　</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text small">チェレンコフ光とは、荷電粒子が物質中を光速を超えて通過するときに発する光です。宇宙線検出器を改造し、チェレンコフ光を検出する最適な条件を研究しています。</p>
                                        <div class="text-right">
                                            <small class="text-muted ">2020.12~</small>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4">
                                    <a href="https://www.notion.so/kaduo/2021-6-a13322f6cad84da5a87ffd3869eb4c54">
                                        <div class="card">
                                            <div class="card-img"><img src="./assets/img/hibiya-top.jpg" class="card-img-top" alt="...">
                                                <div class="img-center text-center">
                                                    <p>CsIシンチレーターを用いて放射線源を測定する</p>
                                                    <p class="small">日比谷高校</p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text small">CsIシンチレーターを用いて、<sup>137</sup>Csや<sup>60</sup>COといった線源の測定をおこなっています。</p>
                                                <div class="text-right">
                                                    <small class="text-muted ">2021.1~</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-4">
                                    <div class="col mb-4">
                                        <a href="https://www.notion.so/kaduo/728b37c62a71498f8b919947b441cafa">
                                            <div class="card">
                                                <div class="card-img"><img src="./assets/img/kaichi-top.jpg" class="card-img-top" alt="...">
                                                    <div class="img-center text-center">
                                                        <p>宇宙線による校舎の天井の厚みの推定</p>
                                                        <p class="small">開智高等学校</p>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text small">宇宙線ミュオンの透過力を利用して構造物の内部を透視する技術をミュオグラフィといいます。この原理を応用して、校舎の天井のコンクリート厚さの推定を行いました。</p>
                                                    <div class="text-right">
                                                        <small class="text-muted ">2020.11~</small>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    </div>
                </div>
            </div>
        </div>

         

    </section>

    <hr>
    <!-- 参加校 -->
    <section class="page-section" id="feature">
        <div class="container section">
            <h1 class="section-title">
                参加校
            </h1>
            <div class="row">
                <div class="container-img w-75 col-lg-9 mx-auto">
                    <img src="./assets/img/participants-map2.png">
                </div>
            </div>
        </div>
    </section>


    <hr>

    <!-- Staff -->
    <section class="page-section" id="Staff">
        <div class="container section">
            <h1 class="section-title">
                メンター
            </h1>
            <div class="row w-75 mx-auto">

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/kono.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">河野理夏子</h2>
                        <hr>
                        <p>東北大学　理学部物理学科3年</p>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/maruta.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">丸田京華</h2>
                        <hr>
                        <p>東北大学　工学部機械知能・航空工学科3年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/kita.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">喜多亮介</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科3年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/saito.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">齋藤隆太</h2>
                        <hr>
                        <p>東北大学　理学部物理学科3年</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/osawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">大澤真優乃</h2>
                        <hr>
                        <p>早稲田大学　基幹理工学部4年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/enomoto.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">榎本晴日</h2>
                        <hr>
                        <p>東京工業大学　理学院地球惑星科学系修士1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/akiyama.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">秋山翔希</h2>
                        <hr>
                        <p>東北大学　理学部宇宙地球物理学科3年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/nose.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">能勢千鶴</h2>
                        <hr>
                        <p>東北大学　理学部物理系2年</p>
                    </div>
</div>
                    <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/hoashi.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">帆足莉子</h2>
                        <hr>
                        <p>東北大学　工学研究科量子エネルギー工学専攻修士1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/minakawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">皆川幸穂</h2>
                        <hr>
                        <p>東北大学　理学部研究科物理学専攻修士1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/nakagawa.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">中川鈴彩</h2>
                        <hr>
                        <p>東北大学　理学部化学科1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/sasaki.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">佐々木真奈香</h2>
                        <hr>
                        <p>東北大学　医学部保健学科放射線技術科学専攻1年</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="container-img">
                        <img class="rounded-circle" src="./assets/img/endo.jpg">
                    </div>
                    <div class="container section text-center">
                        <h2 class="section-title">遠藤心汰朗</h2>
                        <hr>
                        <p>東北大学　理学部物理学科1年</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>



    <!-- CONTACT -->
    <section class="page-section" id="contact">
        <div class="container">
            <h1 class="section-title">
                コンタクト
            </h1>
            <div class="row">
                <section class="page-section" id="staff">
                    <div class="container">
                        <div class="w-100 pr-5">
                            <img class="rounded img-fluid img-fluid" src="./assets/img/contact-eyecatch.jpg">
                        </div>
                                <ul class="m-5 list-group list-group-flush">
                                    <li class="list-group-item"><span class="material-icons icon">corporate_fare</span>加速キッチン合同会社</li>
                                    <li class="list-group-item"><span class="material-icons icon">location_city</span>〒980-0845 宮城県仙台市青葉区荒巻青葉６−６ー４０東北大学連携ビジネスインキュベータ４０１号室</li>
                                    <li class="list-group-item"><span class="material-icons icon">email</span> info@accel-kitchen.com
                                    </li>
                                    <li class="list-group-item"><span class="material-icons icon">language</span> <a href="https://accel-kitchen.com/"> https://accel-kitchen.com/</a></li>
                                </ul>
                    </div>
                </section>
            </div>
        </div>

      <hr>
</section>

 

<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/footer.php");
?>