<?php
require_once '../app/models/Hoob.php';

class HoobController {
    public function rate() {
        $user_id = $_GET['user_id'];
        $hoobs = Hoob::all();
        require '../app/views/hoobs.php';
    }

    public function saveRatings() {
        $user_id = $_POST['user_id'];
        foreach ($_POST['ratings'] as $hoob_id => $rating) {
            Hoob::saveRating($user_id, $hoob_id, $rating);
        }
        header("Location: index.php?action=result&user_id=$user_id");
    }

    public function showResult() {
        $user_id = $_GET['user_id'];
        $bestMatch = Hoob::findMostCompatibleUser($user_id);
        require '../app/views/result.php';
    }
}