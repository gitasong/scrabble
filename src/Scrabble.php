 <?php

    class Scrabble
    {
        private $word;

        function __construct($word)
        {
            $this->word = $word;
        }

        function getWord($word)
        {
            return $this->word;
        }

        function setWord($word)
        {
            $this->word = (string)$word;
        }

        function calculateWord($word)
        {
            $score_arr = ['a' => 1, 'e' => 1, 'i' => 1, 'o' => 1, 'u' => 1, 'l' => 1, 'n' => 1, 'r' => 1, 's' => 1, 't' => 1, 'd' => 2, 'g' => 2, 'b' => 3, 'c' => 3, 'm' => 3, 'p' => 3, 'f' => 4, 'h' => 4, 'v' => 4, 'w' => 4, 'y' => 4, 'k' => 5, 'j' => 8, 'x' => 8, 'q' => 10, 'z' => 10];

            $total_score = 0;
            for ($index = 0; $index < strlen($word); $index++) {
                // $key = $word[$index];
                $lowercase_char = strtolower($word[$index]);
                $char_score = $score_arr[$lowercase_char];
                $total_score += $char_score;
            }
            return $total_score;
        }

        function save()
        {
            array_push($_SESSION['list_of_words'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_words'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_words'] = array();
        }
    }
 ?>
