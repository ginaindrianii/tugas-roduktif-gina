<?php
class masakanSunda
{
	var $teri;
	var $urab;
	var $asinan;
	function masakanSunda_teri()
	{
		echo "pais teri 1 porsi seharga Rp.50000";
		echo "<br>";
	}
	function masakanSunda_urab()
	{
		echo "sayur urab singkong 1 porsi seharga Rp.30000";
		echo "<br>";
	}
	function masakanSunda_asinan()
	{
		echo "asinan 1 porsi seharga Rp.80000";
		echo "<br>";
	}
}
$masakanSunda = new masakanSunda();
$masakanSunda = new masakanSunda();
$masakanSunda = new masakanSunda();
echo $masakanSunda -> masakanSunda_teri();
echo $masakanSunda -> masakanSunda_urab();
echo $masakanSunda -> masakanSunda_asinan();
?>