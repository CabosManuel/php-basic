<?php

$possible_words = ["board", "paper", "cable", "table", "glasses", "bottle"];

define("MAX_ATTEMPTS", 6);

echo "🤠 HANGMAN GAME\n\n";

// Init game
$chosen_word = $possible_words[rand(0, count($possible_words) - 1)];
$chosen_word = strtolower($chosen_word);
$word_length = strlen($chosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

echo "$word_length letters word\n\n";
echo $discovered_letters . "\n\n";

// We ask the user to type
$player_letter = readline("Write a letter: ");
$player_letter = strtolower($player_letter);

echo "\n";
