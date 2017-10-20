<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Благотворительный фонд</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        .zhopa {
            overflow-y: scroll;
            height: 600px;
        }
    </style>
</head>

<body>
<script src="https://vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>

<div class="zhopa">

<?php
require_once ("vendor/VK-master/src/VK/VK.php");
print_r($_GET);
$vk = new VK\VK('6226772', 'ed1959d540', $_GET['access_token']);//auth
$re = $vk->api('wall.post', ['owner_id' => $_GET['user_id'], 'friends_only' => 1, 'from_group' => 1, 'message' => 'New post on group wall via API.console.', 'signed' => 1]);
print_r($re);


?><script type="text/javascript" language="javascript">
    VK.api("wall.post", {"message": "Hello!"}, function (data) {
    alert("Post ID:" + data.response.post_id);
    });
</script>


</div>

<!--<link rel="stylesheet" href="css/inner.min.css">-->
<!--<script src="js/scripts.min.js"></script>-->
<!--<script src="js/common-inner.js"></script>-->

</body>
</html>
