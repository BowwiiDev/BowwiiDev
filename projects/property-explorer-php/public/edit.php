<?php
require dirname(__DIR__) . '/src/bootstrap.php'; require_admin();
$id = filter_var(field($_GET,'id'), FILTER_VALIDATE_INT);
$data = ['name'=>'','type'=>'condo','district'=>'North Quarter','price'=>'','bedrooms'=>1,'area'=>'','description'=>'','map_x'=>50,'map_y'=>50,'published'=>1];
if (array_key_exists('id', $_GET)) {
    $stmt = db()->prepare('SELECT * FROM properties WHERE id = ?'); $stmt->execute([$id ?: 0]); $data = $stmt->fetch();
    if (!$data) { http_response_code(404); page_header('Not found'); echo '<h1>Property not found.</h1>'; page_footer(); exit; }
}
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf(); [$data, $errors] = validate_property($_POST);
    if (!$errors) {
        if ($id) {
            $stmt = db()->prepare('UPDATE properties SET name=?,district=?,type=?,description=?,price=?,bedrooms=?,area=?,map_x=?,map_y=?,published=? WHERE id=?');
            $stmt->execute([...array_values($data), $id]);
        } else {
            $stmt = db()->prepare('INSERT INTO properties (name,district,type,description,price,bedrooms,area,map_x,map_y,published) VALUES (?,?,?,?,?,?,?,?,?,?)');
            $stmt->execute(array_values($data));
        }
        $_SESSION['flash'] = $id ? 'Property updated.' : 'Property created.'; redirect('admin.php');
    }
    http_response_code(422);
}
page_header($id ? 'Edit property' : 'Add property', true);
?>
<a class="back" href="admin.php">← Manage properties</a><h1><?= $id ? 'Edit property.' : 'Add a property.' ?></h1>
<?php if ($errors): ?><div class="error" role="alert"><strong>Please check the following:</strong><ul><?php foreach ($errors as $error): ?><li><?= e($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
<form class="editor" method="post"><input type="hidden" name="csrf" value="<?= e(csrf()) ?>"><label class="wide">Property name<input name="name" value="<?= e($data['name']) ?>" required minlength="3" maxlength="100"></label><label>Type<select name="type" aria-label="Type"><?php foreach (PROJECT_TYPES as $value=>$label): ?><option value="<?= e($value) ?>" <?= $data['type']===$value?'selected':'' ?>><?= e($label) ?></option><?php endforeach; ?></select></label><label>Neighborhood<select name="district" aria-label="Neighborhood"><?php foreach (DISTRICTS as $district): ?><option <?= $data['district']===$district?'selected':'' ?>><?= e($district) ?></option><?php endforeach; ?></select></label>
<?php foreach (['price'=>['Price (THB)',1,999999999],'bedrooms'=>['Bedrooms',1,10],'area'=>['Area (m²)',10,10000],'map_x'=>['Map position: left to right (%)',5,95],'map_y'=>['Map position: top to bottom (%)',5,95]] as $key=>[$label,$min,$max]): ?><label><?= e($label) ?><input name="<?= $key ?>" type="number" min="<?= $min ?>" max="<?= $max ?>" step="1" required value="<?= e($data[$key]) ?>"></label><?php endforeach; ?>
<label>Status<select name="published" aria-label="Status"><option value="1" <?= $data['published'] ? 'selected' : '' ?>>Published</option><option value="0" <?= !$data['published'] ? 'selected' : '' ?>>Draft</option></select></label><label class="wide">Description<textarea name="description" rows="5" required minlength="10" maxlength="1000"><?= e($data['description']) ?></textarea></label><div class="wide editor-actions"><button class="button" type="submit">Save property ↗</button><a href="admin.php">Cancel</a></div></form>
<?php page_footer(); ?>
