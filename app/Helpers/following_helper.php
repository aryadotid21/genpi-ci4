<?php
if (!function_exists('isFollow')) {
    function isFollow($following, $follower)
    {
        $check = \Config\Database::connect()->query("SELECT * FROM follows WHERE follower_id = " . $following . " AND following_id = " . $follower)->getResult();
        if ($check == NULL) {
            if ($follower == session()->get('id')) {
            } else {
                echo "<a class='btn btn-primary' href='home/follow/$follower'>Follow</a>";
            }
        } else {
            $id = $check[0]->id;
            echo "<a class='btn btn-secondary' href='home/unfollow/$id'>Following</a>";
        }
    }
    function notFollow($following, $follower)
    {
        $check = \Config\Database::connect()->query("SELECT * FROM follows WHERE follower_id = " . $following . " AND following_id = " . $follower->id)->getResult();
        if ($check) {
            echo "<a href='javascript:;' data-toggle='modal' data-target='#profile' id='details' data-id='$follower->id' class='details'>$follower->name</a>";
        } else {
            if ($follower->id == session()->get('id')) {
                echo "<a href='javascript:;' data-toggle='modal' data-target='#profile' id='details' data-id='$follower->id' class='details'>$follower->name</a>";
            } else {
                echo "<a href='#' data-toggle='modal' onclick='emptyData();'>$follower->name</a>";
            }
        }
    }
}
