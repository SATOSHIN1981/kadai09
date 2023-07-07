<?php
//【重要】
/**
 * DB接続のための関数をfuncs.phpに用意
 * require_onceでfuncs.phpを取得
 * 関数を使えるようにする。
 */
try {
    $db_name = 'gs_db_kadai02';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM kadai02_table;');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';

        $view .= '<a href="detail.php?id='.$result['id'].'">';
        $view .= $result['id'] . '：' . $result['uid']  .  $result['name']  .  getOptionLabel('q1', $result['q1']) . ' | ' . getOptionLabel('q2', $result['q2']) . ' | ' . getOptionLabel('q3', $result['q3']);
        $view .= '</a>';       
        
        $view .= '<a href="delete.php?id='.$result['id'].'">';
        $view .= '[削除]';
        $view .= '</a>';  

        $view .= '</p>';
    }
}

function getOptionLabel($question, $answer)
{
    switch ($question) {
        case 'q1':
            $questionLabel = "掃除の分担は？";
            break;
        case 'q2':
            $questionLabel = "洗濯の分担は？";
            break;
        case 'q3':
            $questionLabel = "料理の分担は？";
            break;
        default:
            $questionLabel = "";
            break;
    }

    switch ($answer) {
        case '1':
            $answerLabel = "あなた10割、相手0割";
            break;
        case '2':
            $answerLabel = "あなた8割、相手2割";
            break;
        case '3':
            $answerLabel = "あなた6割、相手4割";
            break;
        case '4':
            $answerLabel = "あなたと相手で半々";
            break;
        case '5':
            $answerLabel = "あなた4割、相手6割";
            break;
        case '6':
            $answerLabel = "あなた2割、相手8割";
            break;
        case '7':
            $answerLabel = "あなた0割、相手10割";
            break;
        case '8':
            $answerLabel = "その他";
            break;
        default:
            $answerLabel = "";
            break;
    }

    return "{$questionLabel}：{$answerLabel}";
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理画面</title>
    <!-- <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a >管理画面</a>
                    <a href="export_csv.php">CSV出力</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="detail.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>
