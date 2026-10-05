<?php
require dirname(__DIR__) . '/src/bootstrap.php';
$valid = ['name'=>'Example Home','district'=>'Riverside','type'=>'condo','description'=>'A fictional property for testing.', 'price'=>'3000000','bedrooms'=>'2','area'=>'50','map_x'=>'25','map_y'=>'60','published'=>'1'];
$checks = 0;
function check(bool $condition, string $message): void {
    global $checks; $checks++;
    if (!$condition) { fwrite(STDERR, "FAIL: $message\n"); exit(1); }
}
[$data,$errors] = validate_property($valid);
check(!$errors && $data['price'] === 3000000, 'Valid data is normalized.');
foreach (['price'=>'-1','bedrooms'=>'11','map_x'=>'101','area'=>'20.5','type'=>'office','district'=>'Unknown','name'=>'A','description'=>'Short'] as $key=>$bad) {
    [, $errors] = validate_property(array_replace($valid,[$key=>$bad]));
    check(count($errors)>0, "Reject invalid $key.");
}
[, $errors] = validate_property(array_replace($valid,['price'=>['100']]));
check(count($errors)>0,'Reject array parameter.');
[$data] = validate_property(array_replace($valid,['published'=>'0']));
check($data['published']===0,'Normalize draft visibility.');
check(e('<script>"&')==='&lt;script&gt;&quot;&amp;', 'Escape HTML characters.');
echo "$checks validation checks passed.\n";
