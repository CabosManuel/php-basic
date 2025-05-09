<?php

function clear() {
    if (PHP_OS === "WINNT") {
        // system("cls");
        popen('cls', 'w');
    } else {
        system("clear");
    }
}

$possible_words = ["board", "paper", "cable", "table", "glasses", "bottle"];

define("MAX_ATTEMPTS", 6);

echo "🤠 HANGMAN GAME\n\n";

// Init game
$chosen_word = $possible_words[rand(0, count($possible_words) - 1)];
$chosen_word = strtolower($chosen_word);
$word_length = strlen($chosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {
    echo "$word_length letters word\n\n";
    echo $discovered_letters . "\n\n";

    // We ask the user to type
    $player_letter = readline("Write a letter: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($chosen_word, $player_letter)) {
        // Verify all occurrences of the letter to replace it
        $offset = 0;
        while (
            ($letter_position = strpos($chosen_word, $player_letter, $offset)) !== false
        ) {
            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }
    } else {
        clear();
        $attempts++;
        echo "❌ Wrong letter. You have " . (MAX_ATTEMPTS - $attempts) . " tries.";

        sleep(2);
    }
    clear();
} while ( $attempts < MAX_ATTEMPTS && $discovered_letters !== $chosen_word );

clear();

if ( $attempts < MAX_ATTEMPTS )
    echo "Congrats! You win 🏆\n";
else
    echo "You lose 😔\n";

echo "Word: $chosen_word\n";
echo "You word: $discovered_letters\n";
