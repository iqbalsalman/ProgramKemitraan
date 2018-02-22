 <?php
class Coba extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->model('m_evaluasi');   //load model mnotifikasi
        $this->load->helper('form','url');  //load helper ci form dan url
    }


 
function aksi(){
	$laba_bersih = 971542;
	   
	if (33000 >= $laba_bersih ){

       $perkiraan_dana=1000000;

	}elseif (49500 >= $laba_bersih ) {

		$perkiraan_dana=1500000;

	}elseif( 66000 >= $laba_bersih ){

		$perkiraan_dana = 2000000;

	}elseif (82500 >= $laba_bersih){

		$perkiraan_dana = 2500000;

	}elseif (99000  >= $laba_bersih ) {
		# code...
		$perkiraan_dana = 3000000;

	}elseif (115500 >=  $laba_bersih ) {
		
		$perkiraan_dana = 3500000;

	}elseif (132000 >= $laba_bersih  ) {
		
		$perkiraan_dana = 4000000;

	}elseif (147500  >=  $laba_bersih) {

		$perkiraan_dana = 4500000;

	}elseif (164000 >=  $laba_bersih  ) {
		
		$perkiraan_dana = 5000000;

	}elseif (180500   >= $laba_bersih ) {
		
		$perkiraan_dana = 5500000;

	} elseif (197000  >= $laba_bersih ) {
		
		$perkiraan_dana = 6000000;

	} elseif ( 213500  >= $laba_bersih ) {
		
		$perkiraan_dana = 6500000;

	} elseif ( 230000  >= $laba_bersih ) {
		
		$perkiraan_dana = 7000000;

	} elseif (246500   >= $laba_bersih) {
		
		$perkiraan_dana = 7500000;

	} elseif (263000   >= $laba_bersih ) {
		
		$perkiraan_dana = 8000000;

	} elseif (279500   >= $laba_bersih ) {
		
		$perkiraan_dana = 8500000;

	} elseif (295000  >= $laba_bersih ) {
		
		$perkiraan_dana = 9000000;

	} elseif (311500  >= $laba_bersih ) {
		
		$perkiraan_dana = 9500000;

	} elseif (328000  >= $laba_bersih) {
		
		$perkiraan_dana = 10000000;

	} elseif (344500 >=  $laba_bersih) {
		
		$perkiraan_dana = 10500000;

	} elseif (361000  >= $laba_bersih ) {
		
		$perkiraan_dana = 11000000;

	} elseif (377500 >= $laba_bersih ) {
		
		$perkiraan_dana = 11500000;

	} elseif (394000  >= $laba_bersih  ) {
		
		$perkiraan_dana = 12000000;

	} elseif (410500  >= $laba_bersih ) {
		
		$perkiraan_dana = 12500000;

	} elseif (427000  >= $laba_bersih  ) {
		
		$perkiraan_dana = 13000000;

	} elseif (442500  >= $laba_bersih  ) {
		
		$perkiraan_dana = 13500000;

	} elseif (459000 >=  $laba_bersih ) {
		
		$perkiraan_dana = 14000000;

	} elseif (475500   >= $laba_bersih ) {
		
		$perkiraan_dana = 14500000;

	} elseif(492000 >=  $laba_bersih){

       $perkiraan_dana = 15000000;

	}elseif(508500 >= $laba_bersih){

		$perkiraan_dana = 15500000;

	}elseif(525000 >= $laba_bersih){

		$perkiraan_dana = 16000000;

	}elseif(541500 >=$laba_bersih   ){

		$perkiraan_dana =16500000;

	}elseif(558000  >= $laba_bersih  ){

		$perkiraan_dana = 17000000;

	}elseif (574500  >= $laba_bersih) {
		
		$perkiraan_dana = 17500000;

	}elseif (590000 >= $laba_bersih ){

		$perkiraan_dana = 18000000;

	}elseif(606500  >= $laba_bersih ){

		$perkiraan_dana = 18500000;

	}elseif(623000  >= $laba_bersih ){

		$perkiraan_dana = 19000000;

	}elseif(639500  >= $laba_bersih  ){

		$perkiraan_dana = 19500000;
		
	}elseif(656000  >= $laba_bersih  ) {

		$perkiraan_dana = 20000000;

	}elseif(672500  >= $laba_bersih ){

		$perkiraan_dana = 20500000;

	}elseif(689000 >= $laba_bersih ){

		$perkiraan_dana = 21000000;

	}elseif(705500  >= $laba_bersih ){

		$perkiraan_dana = 21500000;

	}elseif (722000  >= $laba_bersih) {

		$perkiraan_dana = 22000000;

	}elseif(737500  >= $laba_bersih ){

		$perkiraan_dana = 22500000;

	}elseif(754000 >= $laba_bersih  ){

		$perkiraan_dana = 23000000;

	}elseif(770500  >= $laba_bersih){

		$perkiraan_dana = 23500000;

	}elseif(787000  >= $laba_bersih ){

		$perkiraan_dana = 24000000;

	}elseif(803500  >= $laba_bersih ){

		$perkiraan_dana = 24500000;

	}elseif(820000  >= $laba_bersih ){

		$perkiraan_dana = 25000000;

	}elseif(836500  >=  $laba_bersih ){

		$perkiraan_dana = 25500000;

	}elseif(853000  >= $laba_bersih ){

		$perkiraan_dana = 26000000;

	}elseif(869500  >=  $laba_bersih){

		$perkiraan_dana = 26500000;

	}elseif(885000  >= $laba_bersih ){

		$perkiraan_dana = 27000000;

	}elseif(901500  >= $laba_bersih ){

		$perkiraan_dana =27500000;

	}elseif(918000  >= $laba_bersih ){

		$perkiraan_dana = 28000000;

	}elseif(934500  >= $laba_bersih ){

		$perkiraan_dana =28500000;

	}elseif(951000  >= $laba_bersih ){

		$perkiraan_dana = 29000000;

	} elseif(967500  >= $laba_bersih  ){

		$perkiraan_dana = 29500000;

	}elseif(984000  >= $laba_bersih  ){

		$perkiraan_dana = 30000000;

	}elseif(1000500  >= $laba_bersih  ){

		$perkiraan_dana = 30500000;

	}elseif( 1017000 >= $laba_bersih ){

		$perkiraan_dana = 31000000;

	}elseif(1032500  >=  $laba_bersih){

		$perkiraan_dana = 31500000;

	}elseif(1049000 >= $laba_bersih  ){

		$perkiraan_dana = 32000000;

	}elseif(1065500  >=  $laba_bersih ){

		$perkiraan_dana = 32500000;

	}elseif(1082000 >=  $laba_bersih ){

		$perkiraan_dana = 33000000;

	}elseif(1098500  >= $laba_bersih ){

		$perkiraan_dana = 33500000;

	}elseif(1115000  >= $laba_bersih ){

		$perkiraan_dana = 34000000;

	}elseif(1131500  >= $laba_bersih ){

		$perkiraan_dana = 34500000;

	}elseif(1148000  >= $laba_bersih  ){

		$perkiraan_dana = 35000000;

	}elseif(1164500   >=  $laba_bersih){

		$perkiraan_dana = 35500000;

	}elseif(1180000  >= $laba_bersih ){

		$perkiraan_dana = 36000000;

	}elseif(1196500  >= $laba_bersih){

		$perkiraan_dana = 36500000;

	}elseif(1213000  >= $laba_bersih){

		$perkiraan_dana = 37000000;

	}elseif(1229500  >= $laba_bersih  ){

		$perkiraan_dana = 37500000;

	}elseif(1246000  >=  $laba_bersih ){

		$perkiraan_dana = 38000000;

	}elseif(1262500   >= $laba_bersih){

		$perkiraan_dana = 38500000;

	}elseif(1279000  >= $laba_bersih ){

		$perkiraan_dana = 39000000;

	}elseif(1295500  >= $laba_bersih ){

		$perkiraan_dana = 39500000;

	}elseif(1312000 >=  $laba_bersih  ){

		$perkiraan_dana = 40000000;

	}elseif(1327500  >= $laba_bersih  ){

		$perkiraan_dana = 40500000;

	}elseif(1344000   >=  $laba_bersih){

		$perkiraan_dana = 41000000;

	}elseif(1360500  >= $laba_bersih  ){

		$perkiraan_dana = 41500000;

	}elseif(1377000  >= $laba_bersih ){

		$perkiraan_dana = 42000000;

	}elseif(1393500  >= $laba_bersih ){

		$perkiraan_dana = 42500000;

	}elseif(1410000 >= $laba_bersih  ){

		$perkiraan_dana = 43000000;

	}elseif(1426500  >= $laba_bersih ){

		$perkiraan_dana = 43500000;

	}elseif(1443000  >= $laba_bersih  ){

		$perkiraan_dana = 44000000;

	}elseif(1459500   >= $laba_bersih ){

		$perkiraan_dana = 44500000;

	}elseif(1475000   >= $laba_bersih ){

		$perkiraan_dana = 45000000;

	}elseif(1491500  >= $laba_bersih ){

		$perkiraan_dana = 45500000;

	}elseif( 1508000 >= $laba_bersih ){

		$perkiraan_dana = 46000000;

	}elseif(1524500  >= $laba_bersih ){

		$perkiraan_dana =46500000;

	}elseif( 1541000 >= $laba_bersih ){

		$perkiraan_dana = 47000000;

	}elseif(1557500  >= $laba_bersih ){

		$perkiraan_dana = 47500000;

	}elseif(1574000  >= $laba_bersih ){

		$perkiraan_dana = 48000000;

	}elseif(1590500   >= $laba_bersih ){

		$perkiraan_dana = 48500000;

	}elseif(1607000  >= $laba_bersih  ){

		$perkiraan_dana = 49000000;

	}elseif(1622500  >= $laba_bersih ){

		$perkiraan_dana = 49500000;

	}elseif(1639000  >= $laba_bersih  ){

		$perkiraan_dana = 50000000;

	}elseif(1655500 >= $laba_bersih   ){

		$perkiraan_dana = 50500000;

	}elseif(1672000  >= $laba_bersih){

		$perkiraan_dana = 51000000;

	}elseif(1688500  >=  $laba_bersih){

		$perkiraan_dana = 51500000;

	}elseif(1705000  >= $laba_bersih  ){

		$perkiraan_dana = 52000000;

	}elseif(1721500  >= $laba_bersih  ){

		$perkiraan_dana = 52500000;

	}elseif(1738000  >= $laba_bersih ){

		$perkiraan_dana = 53000000;

	}elseif(1754500 >= $laba_bersih ){

		$perkiraan_dana = 53500000;

	}elseif(1770000  >= $laba_bersih ){

		$perkiraan_dana = 54000000;

	}elseif(1786500   >= $laba_bersih ){

		$perkiraan_dana = 54500000;

	}elseif(1803000  >= $laba_bersih  ){

		$perkiraan_dana = 55000000;

	}elseif(1819500  >=  $laba_bersih ){

		$perkiraan_dana = 55500000;

	}elseif(1836000  >= $laba_bersih  ){

		$laba_bersih = 56000000;

	}elseif(1852500  >= $laba_bersih ){

		$laba_bersih = 56500000;

	}elseif(1869000  >= $laba_bersih ){

		$laba_bersih = 57000000;

	}elseif(1885500  >= $laba_bersih ){

		$laba_bersih = 57500000;

	}elseif(1902000  >=  $laba_bersih ){

		$laba_bersih = 58000000;

	}elseif(1917500  >= $laba_bersih ){

		$laba_bersih = 58500000;

	}elseif(1934000 >= $laba_bersih  ){

		$perkiraan_dana = 59000000;

	}elseif(1950500  >= $laba_bersih){

		$perkiraan_dana  =59500000;

	}elseif(1967000  >= $laba_bersih  ){

		$perkiraan_dana = 60000000;

	}elseif(1983500  >= $laba_bersih  ){

		$perkiraan_dana = 60500000;

	}elseif(2000000  >= $laba_bersih  ){

		$perkiraan_dana = 61000000;

	}elseif(2016500  >= $laba_bersih ){

		$perkiraan_dana = 61500000;

	}elseif(2033000  >= $laba_bersih ){

		$perkiraan_dana = 62000000;

	}elseif(2049500  >= $laba_bersih  ){

		$perkiraan_dana = 62500000;

	}elseif(2065000  >=  $laba_bersih ){

		$perkiraan_dana = 63000000;

	}elseif(2081500  >= $laba_bersih ){

		$perkiraan_dana = 63500000;

	}elseif (2098000  >= $laba_bersih  ) {
		
		$perkiraan_dana = 64000000;

	}elseif(2114500  >= $laba_bersih ){

		$perkiraan_dana = 64500000;

	}elseif(2131000   >=  $laba_bersih){

		$perkiraan_dana = 65000000;

	}elseif(2147500   >= $laba_bersih ){

		$perkiraan_dana = 65500000;

	}elseif(2164000  >= $laba_bersih  ){

		$perkiraan_dana = 66000000;

	}elseif(2180500  >= $laba_bersih ){

		$perkiraan_dana = 66500000;

	}elseif(2197000  >= $laba_bersih ){

		$perkiraan_dana = 67000000;

	}elseif(2212500  >= $laba_bersih){

		$perkiraan_dana = 67500000;

	}elseif(2229000  >=  $laba_bersih){

		$perkiraan_dana = 68000000;

	}elseif(2245500  >= $laba_bersih  ){

		$perkiraan_dana = 68500000;

	}elseif(2262000 >= $laba_bersih  ){

		$perkiraan_dana = 69000000;

	}elseif(2278500 >= $laba_bersih  ){

		$perkiraan_dana = 69500000;

	}elseif(2295000  >=  $laba_bersih ){

		$perkiraan_dana = 70000000;

	}elseif(2311500  >= $laba_bersih ){

		$perkiraan_dana = 70500000;

	}elseif(2328000  >= $laba_bersih ){

		$perkiraan_dana = 71000000;

	}elseif(2344500 >= $laba_bersih ){

		$perkiraan_dana = 71500000;

	}elseif(2360000  >= $laba_bersih ){

		$perkiraan_dana = 72000000;

	}elseif(2376500  >= $laba_bersih ){

		$perkiraan_dana = 72500000;

	}elseif(2393000  >= $laba_bersih  ){

		$perkiraan_dana = 73000000;

	}elseif(2409500  >= $laba_bersih  ){

		$perkiraan_dana = 73500000;

	}elseif(2426000  >= $laba_bersih  ){

		$perkiraan_dana = 74000000;

	}elseif(2442500  >= $laba_bersih ){

		$perkiraan_dana = 74500000;

	}else{

		$perkiraan_dana = 75000000;

	}


	echo $perkiraan_dana;
}
		   function oke(){
            
            $laba =8000;
            
              if(7000 >=$laba){

              	$dana= 1200000;

              }elseif(10000 >=$laba ){
              	$dana = 1600000;
              }else{

              	$dana = 90000000;
              }

           echo $dana;
        }      
 
}
?>