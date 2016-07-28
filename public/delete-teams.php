<?php
require __DIR__ . '/../src/Input.php';

function pageController()
{
    $teams = Input::get('teams', []);
    $ids = implode(', ', $teams);
    $delete = "DELETE FROM teams WHERE id IN ($ids)";

    var_dump($delete);

    // In a real scenario you would normally redirect to the list of teams.
    // header('Location: teams.php');
}
pageController();