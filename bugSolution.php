```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, ',') !== false) {
      $newData[$key] = explode(',', $value);
    } else {
      $newData[$key] = $value; 
    }
  }
  return $newData;
}

$data = [
  'name' => 'John Doe',
  'age' => 30,
  'address' => '123 Main St, Anytown, CA',
  'contact' => ['email' => 'john.doe@example.com', 'phone' => '555-1234,555-5678']
];

$processedData = processData($data);
print_r($processedData);
```