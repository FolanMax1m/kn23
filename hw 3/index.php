<?
function reformatText($text) {
    // Видалення пробілів, знаків пунктуації та чисел
    $text = preg_replace('/[\s\p{P}\d]/u', '', $text);

    // Переформатування тексту з чергуванням великих та маленьких літер
    $result = '';
    $uppercase = true;
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if ($uppercase) {
            $result .= strtoupper($char);
        } else {
            $result .= strtolower($char);
        }
        $uppercase = !$uppercase;
    }

    return $result;
}

// Приклад використання функції
$inputText = "Пауерліфтинг виник з вправ, які важкоатлети використовували для збільшення результатів в основних рухах.";
echo reformatText($inputText);
?>