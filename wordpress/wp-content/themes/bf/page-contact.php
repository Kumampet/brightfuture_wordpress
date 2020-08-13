<?php get_header() ?>
<article>
        <div class="header-img-container">
            <div class="main-title-container">
                <h1 class="main-title-en">
                    CONTACT
                    <span class="main-title-ja">お問い合わせ</span>
                </h1>
            </div>
        </div>

        <div class="main-content-area">
            <!-- パンくずリスト -->
            <ul class="breadcrumbs">
                <li><a class="bread-link" href="./index.html">ホーム</a></li>
                <li>お問い合わせ</li>
            </ul>
            <!-- メインコンテンツ -->
            <article class="article-bg">
                <div class="article-container">
                    <div class="attention-box">
                        <p>お問い合わせはお電話または下記フォームにて受け付けております。</p>
                        <div class="tel-box">
                            <p class="tex">お電話でのお問い合わせ</p>
                            <h1>Tel:00-0000-0000</h1>
                            <p class="time">営業時間 00:00〜00:00 土日祝休</p>
                        </div>
                    </div>
                    <h2 class="article-title">お問い合わせフォーム</h2>
                    <div class="content-first">
                        <!-- 代表挨拶 -->
                        <p class="content-first-article">
                            下記に必要事項を入力し、「確認する」ボタンを押してください。<br>
                            お送りいただきましたお問い合わせには、後日折り返し返答させていただきます。<br>
                            お急ぎの場合や自動返信メールが届かない場合などは、お手数ですがお電話にてご連絡ください。
                        </p>
                        <table class="form-table">
                            <tr>
                                <th class="colorise-th required">お名前</th>
                                <th class="th-content"><input type="text" name="name" id="name" placeholder="例）山田太郎">
                                </th>
                            </tr>
                            <tr>
                                <th class="colorise-th required">メールアドレス</th>
                                <th class="th-content"><input type="text" name="name" id="name"
                                        placeholder="example@mail.com"></th>
                            </tr>
                            <tr>
                                <th class="colorise-th">電話番号</th>
                                <th class="th-content"><input type="text" name="name" id="name"
                                        placeholder="00-0000-0000"></th>
                            </tr>
                            <tr>
                                <th class="colorise-th">お問い合わせ内容</th>
                                <th class="th-content"><textarea name="text" id="contact-content" cols="30" rows="10"
                                        placeholder="例）〇〇について教えてほしい。"></textarea></th>
                            </tr>
                        </table>
                        <div class="privacy-policy-box">
                            <h3 class="p-ttl">個人情報のお取扱いについて</h3>
                            <div>
                                <p>以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、
                                    全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、
                                    個人情報の保護を推進致します。
                                </p>
                            </div>
                            <div>
                                <p>個人情報の管理</p>
                                <p>
                                    当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への
                                    不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリ
                                    ティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、
                                    安全対策を実施し個人情報の厳重な管理を行ないます。
                                </p>
                            </div>
                            <div>
                                <p>個人情報の利用目的</p>
                                <p>
                                    お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内
                                    やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
                                </p>
                            </div>
                            <div>
                                <p>個人情報の第三者への開示・提供の禁止</p>
                                <p>
                                    当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
                                </p>
                                <p>お客さまの同意がある場合</p>
                                <p>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</p>
                                <p>法令に基づき開示することが必要である場合</p>
                            </div>
                            <div>
                                <p>個人情報の安全対策</p>
                                <p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                            </div>
                            <div>
                                <p>ご本人の照会</p>
                                <p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                            </div>
                            <div>
                                <p>法令、規範の遵守と見直し</p>
                                <p>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                            </div>
                        </div>
                        <div class="apply-box">
                            <label for="apply-btn">
                                <input type="checkbox" name="apply" id="apply-btn">
                                <span class="check-box">個人情報の取り扱いに同意する</span>
                            </label>
                        </div>
                        <p class="article-btn"><a href="#">確認する</a></p>
                    </div>
                </div>
            </article>
        </div>
    </article>
    <?php get_footer() ?>