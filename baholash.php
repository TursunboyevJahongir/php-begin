<?
function baholash($students = [], $fan = 'Web') {
    $bahoAlo       = 86;
    $bahoYaxshi    = 71;
    $bahoQoniqarli = 55;
    $i = 0;
    $results = [];
    foreach ($students as $student) {
        if($student['fan'] == $fan) {
            $result = [
                'name' => $student['ism'],
                'baho' => $student['baho'],
                'baholash' => 'Qoniqarsiz'
            ]; 
            if ($student['baho'] >= $bahoAlo) {
                $result[baholash] = 'A`lo';
                
            }
            else if ($student['baho'] >= $bahoYaxshi) {
                $result[baholash] = 'Yaxshi';
            }
            else if ($student['baho'] >= $bahoQoniqarli) {
                $result[baholash] = 'baholash' => 'Qoniqarli';
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

$kerakliFan = "C++";
$baholar = baholash($students, $kerakliFan);
echo '<h2>'. $kerakliFan .'</h2>';
echo '<table border="1">';
echo '<tr border><td>Ism</td><td>Baho</td><td>Baholash</td></tr>';
foreach($baholar as $student) {
   foreach($student as $baho) {
    echo '<tr>';
    echo '<td>' . $baho['name'] . '</td>';
    echo '<td>' . $baho['baho'] . '</td>';
    echo '<td>' . $baho['baholash'] . '</td>';
    echo '</tr>';
   }
}
?>