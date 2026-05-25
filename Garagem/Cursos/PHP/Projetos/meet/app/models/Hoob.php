<?php
class Hoob {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM hoobs");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function saveRating($user_id, $hoob_id, $rating) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO ratings (user_id, hoob_id, rating) VALUES (?, ?, ?)");
        $stmt->execute([$user_id, $hoob_id, $rating]);
    }

    public static function findMostCompatibleUser($user_id) {
        global $pdo;
        $ratings = $pdo->query("SELECT hoob_id, rating FROM ratings WHERE user_id = $user_id")->fetchAll(PDO::FETCH_KEY_PAIR);

        $stmt = $pdo->query("SELECT DISTINCT user_id FROM ratings WHERE user_id != $user_id");
        $users = $stmt->fetchAll(PDO::FETCH_COLUMN);

        $bestUser = null;
        $bestScore = -1;

        foreach ($users as $otherUser) {
            $otherRatings = $pdo->query("SELECT hoob_id, rating FROM ratings WHERE user_id = $otherUser")->fetchAll(PDO::FETCH_KEY_PAIR);
            $score = 0;

            foreach ($ratings as $hoob_id => $r1) {
                if (isset($otherRatings[$hoob_id])) {
                    $r2 = $otherRatings[$hoob_id];
                    $score += 5 - abs($r1 - $r2);
                }
            }

            if ($score > $bestScore) {
                $bestScore = $score;
                $bestUser = $otherUser;
            }
        }

        return User::find($bestUser);
    }
}