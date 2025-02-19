```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error
    // ... but what if the error is not a file not found?
}
```