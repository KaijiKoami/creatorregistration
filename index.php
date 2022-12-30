<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>クリエイター登録</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body text = "White">
    <!-- 画像提出form -->
    <div id = "forms">
      <form class = "item__contet" action="index.php" method="POST">
        <div class = "item__box" id = "setQR">
          <h4 class="item__title">TikTokQRの提出</h4>
          <label for="file_photo">
            画像を選択してください
            <input type="file" accept='image/*' id="file_photo" name="qr_file" onchange="previewImage(this);" required>
          </label>
          <p class = "preview__image">
            <img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
          </p>
          <script>
            function previewImage(obj)
            {
              var fileReader = new FileReader();
              fileReader.onload = (function() {
                document.getElementById('preview').src = fileReader.result;
              });
              fileReader.readAsDataURL(obj.files[0]);
            }
          </script>
        </div>
        <div class = "item__box" id = "genre">
          <h4 class="item__title">投稿ジャンル</h4>
          <p>TikTokで投稿している動画のジャンルを<strong>3つまで</strong>お答えください。</p>
          <br>
          <span>
            <input type="checkbox" id="カップル" name="genre[]" required>
            <label for="カップル">カップル</label>
          </span>
          <span>
            <input type="checkbox" id="エンタメ" name="genre[]">
            <label for="エンタメ">エンタメ</label>
          </span>
          <span>
            <input type="checkbox" id="料理" name="genre[]">
            <label for="料理">料理</label>
          </span>
          <span>
            <input type="checkbox" id="ファッション" name="genre[]">
            <label for="ファッション">ファッション</label>
          </span>
          <span>
            <input type="checkbox" id="ペット" name="genre[]">
            <label for="ペット">ペット</label>
          </span>
          <span>
            <input type="checkbox" id="美容" name="genre[]">
            <label for="美容">美容</label>
          </span>
          <span>
            <input type="checkbox" id="ファミリー" name="genre[]">
            <label for="ファミリー">ファミリー</label>
          </span>
          <span>
            <input type="checkbox" id="スポーツ" name="genre[]">
            <label for="スポーツ">スポーツ</label>
          </span>
          <span>
            <input type="checkbox" id="アニメ・漫画" name="genre[]">
            <label for="アニメ・漫画">アニメ・漫画</label>
          </span>
          <span>
            <input type="checkbox" id="イラスト" name="genre[]">
            <label for="イラスト">イラスト</label>
          </span>
          <span>
            <input type="checkbox" id="旅行" name="genre[]">
            <label for="旅行">旅行</label>
          </span>
          <span>
            <input type="checkbox" id="音楽" name="genre[]">
            <label for="音楽">音楽</label>
          </span>
          <span>
            <input type="checkbox" id="フィットネス" name="genre[]">
            <label for="フィットネス">フィットネス</label>
          </span>
          <span>
            <input type="checkbox" id="VLOG" name="genre[]">
            <label for="VLOG">VLOG</label>
          </span>
          <span>
            <input type="checkbox" id="ビジネス" name="genre[]">
            <label for="ビジネス">ビジネス</label>
          </span>
          <span>
            <input type="checkbox" id="ライフハック" name="genre[]">
            <label for="ライフハック">ライフハック</label>
          </span>
          <span>
            <input type="checkbox" id="グルメ" name="genre[]">
            <label for="グルメ">グルメ</label>
          </span>
          <script>
            const checkMax = 3;
            const checkBoxes = document.getElementsByName('genre');

            function checkCount(target) {
              let checkCount = 0;
              checkBoxes.forEach(checkBox => {
                if (checkBox.checked) {
                  checkCount++;
                }
              });
              if (checkCount > checkMax) {
                target.checked = false;
              }
            }

            checkBoxes.forEach(checkBox => {
              checkBox.addEventListener('change', () => {
                checkCount(checkBox);
              })
            });
            </script>
        </div>
        <div class = "item__box" id = "sex">
          <h4 class="item__title">性別</h4>
            <div class = "item__contet">
              <input type="radio" id="inq1" name="sex" value="1" required>
              <label for="inq1">男性</label>
              <input type="radio" id="inq2" name="sex" value="2">
              <label for="inq2">女性</label>
              <input type="radio" id="inq3" name="sex" value="3">
              <label for="inq3">その他</label>
              <input type="radio" id="inq4" name="sex" value="4">
              <label for="inq4">回答しない</label>
            </div>
        </div>
        <div class = "item__box" id = "age">
          <label for="age">
            <h4 class="item__title">年齢</h4>
          </label>
          <input class="item__contet" name="age" id="age" type="number" placeholder="20" min="0" max="150" required><span> 歳</span>
        </div>
        <div class = "item__box" id = "residence">
          <label for="residence_">
            <h4 class="item__title">居住地（都道府県）</h4>
          </label>
          <select name="residence" id="residence_" placeholder="選択してください" required>
            <option value="">-</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
        </div>
        <div class = "item__box" id = "sendbtn">
          <input type="submit" value="Register">
        </div>
        <?php
    if(count($_POST)){
        $url = 'https://script.google.com/macros/s/AKfycbxFi4K2gfLuZfCZLEpdt3JDownMZKF5glkS44mJGCStMZAP4n1E1LrYINwxinb2kMkg/exec';
        $data = array(
            'qr_file' => $_POST['qr_file'],
            'genre' => $_POST['genre'],
            'sex' => $_POST['sex'],
            'age' => $_POST['age'],
            'residence' => $_POST['residence'],
        );
        $context = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
                'content' => http_build_query($data)
            )
        );
        $response_json = file_get_contents($url, false, stream_context_create($context));
        $response_data = json_decode($response_json);
        var_dump($response_data);
    }
?>
      </form>
    </div>
  </body>
</html>
  
