<?php
  $name = (isset($_POST['name'])) ? $_POST['name'] : '';
  $nameKana = (isset($_POST['name_kana'])) ? $_POST['name_kana'] : '';
  $sex = (isset($_POST['sex'])) ? $_POST['sex'] : '';
  $zipCode1 = (isset($_POST['zip_code1'])) ? $_POST['zip_code1'] : '';
  $zipCode2 = (isset($_POST['zip_code2'])) ? $_POST['zip_code2'] : '';
  $address = (isset($_POST['address'])) ? $_POST['address'] : '';
  $telephone = (isset($_POST['telephone'])) ? $_POST['telephone'] : '';
  $mailAddress = (isset($_POST['mail_address'])) ? $_POST['mail_address'] : '';
  $birthday1 = (isset($_POST['birthday1'])) ? $_POST['birthday1'] : '';
  $birthday2 = (isset($_POST['birthday2'])) ? $_POST['birthday2'] : '';
  $birthday3 = (isset($_POST['birthday3'])) ? $_POST['birthday3'] : '';
  $parentName = (isset($_POST['parent_name'])) ? $_POST['parent_name'] : '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UFT-8">
    <title>お申し込みフォーム（連携サンプル）</title>
</head>

<body>
    <h1>お申し込みフォーム（連携サンプル）</h1>
    <form action="index.php" method="post">
        お名前（漢字）: <input type="text" name="name" value="<?php echo $name; ?>"><br />
        お名前（カナ）: <input type="text" name="name_kana" value="<?php echo $nameKana; ?>"><br />
        測定者性別: <input type="radio" name="sex" value="1" <?php echo($sex == 1 ? 'checked' : '') ?>>男性&nbsp;&nbsp;<input type="radio" name="sex" value="2" <?php echo($sex == 2 ? 'checked' : '') ?>>女性<br />
        郵便番号: <input type="text" name="zip_code1" value="<?php echo $zipCode1; ?>">&nbsp;-&nbsp;<input type="text" name="zip_code2" value="<?php echo $zipCode2; ?>"><br />
        ご住所: <input type="text" name="address" value="<?php echo $address; ?>"><br />
        電話番号: <input type="text" name="telephone" value="<?php echo $telephone; ?>"><br />
        メール: <input type="text" name="mail_address" value="<?php echo $mailAddress; ?>"><br />
        生年月日:
          <select name="birthday1">
              <option value="">選択してください
              <option value="2000" <?php echo($birthday1 == 2000 ? 'selected' : '') ?>>2000
              <option value="2001" <?php echo($birthday1 == 2001 ? 'selected' : '') ?>>2001
              <option value="2002" <?php echo($birthday1 == 2002 ? 'selected' : '') ?>>2002
          </select>&nbsp;年&nbsp;&nbsp;
          <select name="birthday2">
              <option value="">選択してください
              <option value="10" <?php echo($birthday2 == 10 ? 'selected' : '') ?>>10
              <option value="11" <?php echo($birthday2 == 11 ? 'selected' : '') ?>>11
              <option value="12" <?php echo($birthday2 == 12 ? 'selected' : '') ?>>12
          </select>&nbsp;月&nbsp;&nbsp;
          <select name="birthday3">
              <option value="">選択してください
              <option value="23" <?php echo($birthday3 == 23 ? 'selected' : '') ?>>23
              <option value="24" <?php echo($birthday3 == 24 ? 'selected' : '') ?>>24
              <option value="25" <?php echo($birthday3 == 25 ? 'selected' : '') ?>>25
          </select>&nbsp;日<br />
        保護者氏名: <input type="text" name="parent_name" value="<?php echo $parentName; ?>"><br />
        <input type="submit" value="送信">
    </form>
</body>

</html>