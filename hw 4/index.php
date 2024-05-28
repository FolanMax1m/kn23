<?
function copyAndRenameFiles($sourceDir, $destinationDir, $suffix = '_copy') {
    // Перевірка, чи існує вихідна директорія
    if (!is_dir($sourceDir)) {
        echo "Source directory does not exist.\n";
        return;
    }

    // Створення директорії призначення, якщо вона не існує
    if (!is_dir($destinationDir)) {
        mkdir($destinationDir, 0777, true);
    }

    // Відкриття вихідної директорії
    $dir = opendir($sourceDir);

    // Перебір файлів у вихідній директорії
    while (($file = readdir($dir)) !== false) {
        // Пропуск поточної директорії та батьківської директорії
        if ($file == '.' || $file == '..') {
            continue;
        }

        // Формування повних шляхів до вихідного та призначеного файлів
        $sourceFile = $sourceDir . DIRECTORY_SEPARATOR . $file;
        $destinationFile = $destinationDir . DIRECTORY_SEPARATOR . pathinfo($file, PATHINFO_FILENAME) . $suffix . '.' . pathinfo($file, PATHINFO_EXTENSION);

        // Перевірка, чи є файл дійсно файлом, а не директорією
        if (is_file($sourceFile)) {
            // Копіювання файлу з новим ім'ям
            if (copy($sourceFile, $destinationFile)) {
                echo "Copied $sourceFile to $destinationFile\n";
            } else {
                echo "Failed to copy $sourceFile\n";
            }
        }
    }

    // Закриття директорії
    closedir($dir);
}

// Приклад використання функції
$FILES = 'files';
$FILES_N = 'files_new';
copyAndRenameFiles($FILES, $FILES_N);
?>