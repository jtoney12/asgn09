<?php
function convert_to_impGallon($value, $from_unit) {
    switch($from_unit) {
      case 'bucket':
        return $value * 4;
        break;
      case 'butt':
        return $value * 108;
        break;
      case 'firkin':
        return $value * 9;
        break;
      case 'hogshead':
        return $value * 54;
        break;
      case 'pint':
        return $value * 0.125;
        break;
      case 'impGallons':
        return $value;
        break;  
      default:
        return "Unsupported unit.";
    }
  }
    
  function convert_from_impGallon($value, $to_unit) {
    switch($to_unit) {
      case 'bucket':
        return $value / 4;
        break;
      case 'butt':
        return $value / 108;
        break;
      case 'firkin':
        return $value / 9;
        break;
      case 'hogshead':
        return $value / 54;
        break;
      case 'pint':
        return $value / 0.125;
        break;
      case 'impGallons':
        return $value;
      default:
        return "Unsupported unit.";
    }
  }
  
  function convert_liquid($value, $from_unit, $to_unit) {
    $impGallon_value = convert_to_impGallon($value, $from_unit);
    $new_value = convert_from_impGallon($impGallon_value, $to_unit);
    return $new_value;
  }




?>