```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, ',') !== false) {
      $data[$key] = explode(',', $value); // String to array conversion
    }
  }
  return $data;
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