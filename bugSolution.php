```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    $error = error_get_last();
    if ($error) {
        switch ($error['type']) {
            case E_WARNING:
                if (strpos($error['message'], 'failed to open stream') !== false) {
                    // More specific error handling
                    if (strpos($error['message'], 'No such file or directory') !== false) {
                        echo "File not found!";
                    } elseif (strpos($error['message'], 'Permission denied') !== false) {
                        echo "Permission denied!";
                    } else {
                        echo "Error opening file: " . $error['message'];
                    }
                } else {
                    echo "Error: " . $error['message'];
                }
                break;
            default:
                echo "An unexpected error occurred.";
        }
    } else {
        echo "An unexpected error occurred.";
    }
}
```