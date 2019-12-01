<?php

function convert_to_centi($value, $from_unit) {
  switch($from_unit) {
    case 'grain':
      return $value * .7;
      break;
    case 'thumb_length':
      return $value * 2.1;
      break;
    case 'palm':
      return $value * 3.3;
      break;
    case 'fist':
      return $value * 10.4;
      break;
    case 'foot':
      return $value * 25;
      break;
    case 'step':
      return $value * 62.5;
      break;
    case 'double_step':
      return $value * 1500; 
      break;  
    case 'rod':
      return $value * 3000;
      break;     
    default:
      return "Unsupported unit.";
  }
}
  
function convert_from_centi($value, $to_unit) {
  switch($to_unit) {
    case 'grain':
      return $value / .7;
      break;
    case 'thumb_length':
      return $value / 2.1;
      break;
    case 'palm':
      return $value / 3.3;
      break;
    case 'fist':
      return $value / 10.4;
      break;
    case 'foot':
      return $value / 25;
      break;
    case 'step':
      return $value / 62.5;
      break;
    case 'double_step':
      return $value / 1500;
      break;  
    case 'rod':
      return $value / 3000;
      break;     
    default:
      return "Unsupported unit.";
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $centi_value = convert_to_centi($value, $from_unit);
  $new_value = convert_from_centi($centi_value, $to_unit);
  return $new_value;
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Outdated Irish Lengths</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Outdated Irish Lengths</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="grain"<?php if($from_unit == 'grain') { echo " selected"; } ?>>grain</option>
            <option value="thumb_length"<?php if($from_unit == 'thumb_length') { echo "selected"; } ?>>thumb-length</option>
            <option value="palm"<?php if($from_unit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($from_unit == 'fist') { echo " selected"; } ?>>fist</option>
            <option value="foot"<?php if($from_unit == 'foot') { echo " selected"; } ?>>foot</option>
            <option value="step"<?php if($from_unit == 'step') { echo " selected"; } ?>>step</option>
            <option value="double_step"<?php if($from_unit == 'double_step') { echo " selected"; } ?>>double-step</option>
            <option value="rod"<?php if($from_unit == 'rod') { echo " selected"; } ?>>rod</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="grain"<?php if($to_unit == 'grain') { echo " selected"; } ?>>grain</option>
            <option value="thumb_length"<?php if($to_unit == 'thumb_length') { echo "selected"; } ?>>thumb-length</option>
            <option value="palm"<?php if($to_unit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($to_unit == 'fist') { echo " selected"; } ?>>fist</option>
            <option value="foot"<?php if($to_unit == 'foot') { echo " selected"; } ?>>foot</option>
            <option value="step"<?php if($to_unit == 'step') { echo " selected"; } ?>>step</option>
            <option value="double_step"<?php if($to_unit == 'double_step') { echo " selected"; } ?>>double-step</option>
            <option value="rod"<?php if($to_unit == 'rod') { echo " selected"; } ?>>rod</option>
          </select>
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
