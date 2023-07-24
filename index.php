<?php
include "php/config.php";
$new_url = "";
if (isset($_GET)) {
    foreach ($_GET as $key => $val) {
        $u = mysqli_real_escape_string($conn, $key);
        $new_url = str_replace('/', '', $u);
    }
    $sql = mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$new_url}'");
    if (mysqli_num_rows($sql) > 0) {
        $count_query = mysqli_query($conn, "UPDATE url SET clicks = clicks + 1 WHERE shorten_url = '{$new_url}'");
        if ($count_query) {
            $full_url = mysqli_fetch_assoc($sql);
            header("Location:" . $full_url['full_url']);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url Shortener</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"/>
</head>
<body>
<div class="wrapper">
    <form action="#">
        <input type="text" name="full-url" placeholder="Enter or paste a long url" required>
        <i class="url-icon uil uil-link"></i>
        <button>Shorten</button>
    </form>
    <?php
    $sql2 = mysqli_query($conn, "SELECT * FROM url ORDER BY id DESC");
    if (mysqli_num_rows($sql2) > 0) {
    ?>
    <div class="count">
        <?php
        $sql3 = mysqli_query($conn,"SELECT COUNT(*) FROM url");
        $res = mysqli_fetch_assoc($sql3);

        $sql4 = mysqli_query($conn,"SELECT clicks FROM url");
        $total = 0;
        while ($c = mysqli_fetch_assoc($sql4)){
            $total = $c['clicks'] + $total;
        }
        ?>
        <span>Total Links: <span><?= end($res) ?></span> & Total Clicks: <span><?= $total ?></span></span>
        <a href="php/delete.php?delete=all">Clear All</a>
    </div>
    <div class="urls-area">
        <div class="title">
            <li>Shorten URL</li>
            <li>Original URL</li>
            <li>Clicks</li>
            <li>Action</li>
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($sql2)) {
            ?>
            <div class="data">
                <li><a target="_blank" href="http://localhost/url/<?= $row['shorten_url'] ?>">
                        <?php
                        if (strlen('localhost/url/' . $row['shorten_url']) > 50) {
                            echo 'localhost/url/' . substr($row['shorten_url'], 0, 50) . '...';
                        } else {
                            echo 'localhost/url/' . $row['shorten_url'];
                        }
                        ?>
                    </a></li>
                <li> <?php
                    if (strlen($row['full_url']) > 65) {
                        echo substr($row['full_url'], 0, 65) . '...';
                    } else {
                        echo $row['full_url'];
                    }
                    ?></li>
                <li><?= $row['clicks'] ?></li>
                <li><a href="php/delete.php?id=<?= $row['shorten_url'] ?>">Delete</a></li>
            </div>
        <?php }
        } ?>
    </div>

</div>
<div class="blur-effect">

</div>
<div class="popup-box">
    <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved
        it
    </div>
    <form action="">
        <label>Edit your shorten url</label>
        <input type="text" spellcheck="false" value="">
        <i class="copy-icon uil uil-copy-alt"></i>
        <button>Save</button>
    </form>
</div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>