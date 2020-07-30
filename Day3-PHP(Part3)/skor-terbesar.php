<?php

function skor_terbesar($arr) {
  $result = array();
  foreach ($arr as $data) {
    if(count($result) == 0) {
      $result[$data["kelas"]]["nama"] = $data["nama"];
      $result[$data["kelas"]]["kelas"] = $data["kelas"];
      $result[$data["kelas"]]["nilai"] = $data["nilai"];
    } else {
      foreach ($result as $r) {
        if($data['kelas'] == $r['kelas']) {
          if ($data['nilai'] > $r['nilai']) {
            $r['nama'] = $data['nama'];
            $r['kelas'] = $data['kelas'];
            $r['nilai'] = $data['nilai'];
          } else {
            break;
          }
        } else {
          $result[$data["kelas"]]["nama"] = $data["nama"];
          $result[$data["kelas"]]["kelas"] = $data["kelas"];
          $result[$data["kelas"]]["nilai"] = $data["nilai"];
        }
      };
    }
  }
  return $result;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>