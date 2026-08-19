<h4>
<?php
echo "Name: Hermogeno Krisshna R.
<br>CYS: BSIS - 2A
<br>Subject: CT-WA 213";
?>
</h4>

<?php
$hermogeno_sts = 93;
$hermogeno_rlw = 95;
$hermogeno_mad = 90;
$hermogeno_pe = 96;
$hermogeno_isdcn = 90;
$hermogeno_ctwa = 90;
$hermogeno_dsa = 90;
$hermogeno_ccim = 90;

$hermogeno_average = (
    $hermogeno_sts +
    $hermogeno_rlw +
    $hermogeno_mad +
    $hermogeno_pe +
    $hermogeno_isdcn +
    $hermogeno_ctwa +
    $hermogeno_dsa +
    $hermogeno_ccim
) / 8;

if ($hermogeno_average >= 74.5) {
    $hermogeno_remarks = "Passed";
} else {
    $hermogeno_remarks = "Failed";
}

if ($hermogeno_average >= 90 && $hermogeno_average <= 100) {
    $hermogeno_scale = "A";
} elseif ($hermogeno_average >= 80 && $hermogeno_average < 89) {
    $hermogeno_scale = "B";
} elseif ($hermogeno_average >= 70 && $hermogeno_average < 79) {
    $hermogeno_scale = "C";
} elseif ($hermogeno_average >= 60 && $hermogeno_average < 69) {
    $hermogeno_scale = "D";
} elseif ($hermogeno_average >= 0 && $hermogeno_average < 59) {
    $hermogeno_scale = "E";
} else {
    $hermogeno_scale = "Failed";
}

echo "<strong>Subject Grades</strong><br>";
echo "STS: $hermogeno_sts<br>";
echo "RLW: $hermogeno_rlw<br>";
echo "MAD: $hermogeno_mad<br>";
echo "PE: $hermogeno_pe<br>";
echo "IS-DCN: $hermogeno_isdcn<br>";
echo "CT-WA: $hermogeno_ctwa<br>";
echo "DSA: $hermogeno_dsa<br>";
echo "CC-IM: $hermogeno_ccim<br><br>";

echo "<strong>Average Grade:</strong> " . number_format($hermogeno_average, 2) . "<br>";
echo "<strong>Remarks:</strong> " . $hermogeno_remarks . "<br>";
echo "<strong>Grade Scale:</strong> $hermogeno_scale<br>";
?>
