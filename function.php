<?
function baholash($students = [], $fan = 'Web') {
    $bahoAlo       = 86;
    $bahoYaxshi    = 71;
    $bahoQoniqarli = 55; 
    $i = 0;
    $results = [];
    foreach ($students as $student) {
        if($student['fan'] == $fan) {
            $result = []; 
            if ($student['baho'] >= $bahoAlo) {
                $result[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'A`lo'
                ];
            }
            else if ($student['baho'] >= $bahoYaxshi) {
                $result[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'Yaxshi'
                ];
            }
            else if ($student['baho'] >= $bahoQoniqarli) {
                $result[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'Qoniqarli'
                ];
            }
            else {
                $result[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'Qoniqarsiz'
                ];
            }
            $results[$i++] = $result;
        }
    }
    return $results;
}
$students = [
    ['ism' => 'Akbar', 'baho' => 55, 'fan' => 'Web'],
    ['ism' => 'Aziz', 'baho' => 75, 'fan' => 'C++'],
    ['ism' => 'Muxtor', 'baho' => 45, 'fan' => 'Web']
];

// var_dump( baholash($students, 'C++') );
$kerakliFan = 'C++';
$baholar = baholash($students, $kerakliFan);
echo '<h2>'. $kerakliFan .'</h2>';
echo '<table border="1">';
echo '<tr><td>Ism</td><td>Baho</td><td>Baholash</td></tr>';
foreach($baholar as $student) {
   foreach($student as $baho) {
    echo "<tr>";
    echo '<td>' . $baho['name'] . '</td>';
    echo '<td>' . $baho['baho'] . '</td>';
    echo '<td>' . $baho['baholash'] . '</td>';
    echo '</tr>';
   }
}
?>