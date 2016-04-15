<html>
<body>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style type="text/css">
 body h5 { 
    font-family: Helvetica, Verdana, sans-serif; 
    font-weight: normal
}
#a1 {
height:30px;
width:150px;
display:inline-block;
position:relative;
}
select option
{
	height:30px;
	width:110px;
}
h5{margin:0 0 0 0;}
#a2 {
height:30px;
width:400px;
border:1px solid #ccc;
margin-bottom: 100px;
background: red;
position:relative;
}
#a3 {
height:60px;
width:400px;
border:1px solid #ccc;
margin-bottom: 100px;

background: red;
position:relative;
}
.adjust{
    display:inline-block;
	
}
.degree{
height:30px;
width:180px;
display: inline-block;
}
.main{
	width:450px;
	margin: 0 auto;
    border: 1px solid;
    height:250px;
    margin-bottom: 40px;
}
.content{
    width:430px;
    margin:0px auto;
    height:230px;
    margin-top: 10px;

}
.comment1{
	margin:0 0 10 0;
}
.comment2{
	margin-left:130px;
}
.button{
	display:block;
	margin:10 150;
    width:200px;
}
.header{

    width: 450px;
    margin: 0px auto;
    text-align: center;
}
</style>

<body>
<div>
<div class="header"><h1>Forecast Search</h1></div>
<div class="main">
    
<form name="myForm" class="content" onsubmit="return search()" action="" method="post">

<div id="a1"><h5>Street Address:*</h5></div>
<div class="adjust"><input type="text" id="address" name="address" style="width:140px;height:30px" value="<?php echo isset($_POST["address"]) ?
$_POST["address"] : "" ?>"></input></div>

<br/>

<div id="a1"><h5>City:*</h5></div>
<div class="adjust"><input type="text" id="city" name="city" style="width:140px;height:30px" value="<?php echo isset($_POST["city"]) ?
$_POST["city"] : "" ?>"></input></div>

<br/>

<div id="a1"><h5>State:*</h5></div>
<div class="adjust">
<select name="state" id="state" value="<?php echo isset($_POST["state"]) ?
$_POST["state"] : "" ?>"> 
    <option value="noselect">select your state</option>
    <option value="AL" <?php if (isset($_POST["state"]) && $_POST["state"]=="AL") echo "selected";?>>Alabama</option>
    <option value="AK" <?php if (isset($_POST["state"]) && $_POST["state"]=="AK") echo "selected";?>>Alaska</option>
    <option value="AZ" <?php if (isset($_POST["state"]) && $_POST["state"]=="AZ") echo "selected";?>>Arizona</option>
    <option value="AR" <?php if (isset($_POST["state"]) && $_POST["state"]=="AR") echo "selected";?>>Arkansas</option>
    <option value="CA" <?php if (isset($_POST["state"]) && $_POST["state"]=="CA") echo "selected";?>>California</option>
    <option value="CO" <?php if (isset($_POST["state"]) && $_POST["state"]=="CO") echo "selected";?>>Colorado</option>
    <option value="CT" <?php if (isset($_POST["state"]) && $_POST["state"]=="CT") echo "selected";?>>Connecticut</option>
    <option value="DE" <?php if (isset($_POST["state"]) && $_POST["state"]=="DE") echo "selected";?>>Delaware</option>
    <option value="DC" <?php if (isset($_POST["state"]) && $_POST["state"]=="DC") echo "selected";?>>District Of Columbia</option>
    <option value="FL" <?php if (isset($_POST["state"]) && $_POST["state"]=="FL") echo "selected";?>>Florida</option>
    <option value="GA" <?php if (isset($_POST["state"]) && $_POST["state"]=="GA") echo "selected";?>>Georgia</option>
    <option value="HI" <?php if (isset($_POST["state"]) && $_POST["state"]=="HI") echo "selected";?>>Hawaii</option>
    <option value="ID" <?php if (isset($_POST["state"]) && $_POST["state"]=="ID") echo "selected";?>>Idaho</option>
    <option value="IL" <?php if (isset($_POST["state"]) && $_POST["state"]=="IL") echo "selected";?>>Illinois</option>
    <option value="IN" <?php if (isset($_POST["state"]) && $_POST["state"]=="IN") echo "selected";?>>Indiana</option>
    <option value="IA" <?php if (isset($_POST["state"]) && $_POST["state"]=="IA") echo "selected";?>>Iowa</option>
    <option value="KS" <?php if (isset($_POST["state"]) && $_POST["state"]=="KS") echo "selected";?>>Kansas</option>
    <option value="KY" <?php if (isset($_POST["state"]) && $_POST["state"]=="KY") echo "selected";?>>Kentucky</option>
    <option value="LA" <?php if (isset($_POST["state"]) && $_POST["state"]=="LA") echo "selected";?>>Louisiana</option>
    <option value="ME" <?php if (isset($_POST["state"]) && $_POST["state"]=="ME") echo "selected";?>>Maine</option>
    <option value="MD" <?php if (isset($_POST["state"]) && $_POST["state"]=="MD") echo "selected";?>>Maryland</option>
    <option value="MA" <?php if (isset($_POST["state"]) && $_POST["state"]=="MA") echo "selected";?>>Massachusetts</option>
    <option value="MI" <?php if (isset($_POST["state"]) && $_POST["state"]=="MI") echo "selected";?>>Michigan</option>
    <option value="MN" <?php if (isset($_POST["state"]) && $_POST["state"]=="MN") echo "selected";?>>Minnesota</option>
    <option value="MS" <?php if (isset($_POST["state"]) && $_POST["state"]=="MS") echo "selected";?>>Mississippi</option>
    <option value="MO" <?php if (isset($_POST["state"]) && $_POST["state"]=="MO") echo "selected";?>>Missouri</option>
    <option value="MT" <?php if (isset($_POST["state"]) && $_POST["state"]=="MT") echo "selected";?>>Montana</option>
    <option value="NE" <?php if (isset($_POST["state"]) && $_POST["state"]=="NE") echo "selected";?>>Nebraska</option>
    <option value="NV" <?php if (isset($_POST["state"]) && $_POST["state"]=="NV") echo "selected";?>>Nevada</option>
    <option value="NH" <?php if (isset($_POST["state"]) && $_POST["state"]=="NH") echo "selected";?>>New Hampshire</option>
    <option value="NJ" <?php if (isset($_POST["state"]) && $_POST["state"]=="NJ") echo "selected";?>>New Jersey</option>
    <option value="NM" <?php if (isset($_POST["state"]) && $_POST["state"]=="NM") echo "selected";?>>New Mexico</option>
    <option value="NY" <?php if (isset($_POST["state"]) && $_POST["state"]=="NY") echo "selected";?>>New York</option>
    <option value="NC" <?php if (isset($_POST["state"]) && $_POST["state"]=="NC") echo "selected";?>>North Carolina</option>
    <option value="ND" <?php if (isset($_POST["state"]) && $_POST["state"]=="ND") echo "selected";?>>North Dakota</option>
    <option value="OH" <?php if (isset($_POST["state"]) && $_POST["state"]=="OH") echo "selected";?>>Ohio</option>
    <option value="OK" <?php if (isset($_POST["state"]) && $_POST["state"]=="OK") echo "selected";?>>Oklahoma</option>
    <option value="OR" <?php if (isset($_POST["state"]) && $_POST["state"]=="OR") echo "selected";?>>Oregon</option>
    <option value="PA" <?php if (isset($_POST["state"]) && $_POST["state"]=="PA") echo "selected";?>>Pennsylvania</option>
    <option value="RI" <?php if (isset($_POST["state"]) && $_POST["state"]=="RI") echo "selected";?>>Rhode Island</option>
    <option value="SC" <?php if (isset($_POST["state"]) && $_POST["state"]=="SC") echo "selected";?>>South Carolina</option>
    <option value="SD" <?php if (isset($_POST["state"]) && $_POST["state"]=="SD") echo "selected";?>>South Dakota</option>
    <option value="TN" <?php if (isset($_POST["state"]) && $_POST["state"]=="TN") echo "selected";?>>Tennessee</option>
    <option value="TX" <?php if (isset($_POST["state"]) && $_POST["state"]=="TX") echo "selected";?>>Texas</option>
    <option value="UT" <?php if (isset($_POST["state"]) && $_POST["state"]=="UT") echo "selected";?>>Utah</option>
    <option value="VT" <?php if (isset($_POST["state"]) && $_POST["state"]=="VT") echo "selected";?>>Vermont</option>
    <option value="VA" <?php if (isset($_POST["state"]) && $_POST["state"]=="VA") echo "selected";?>>Virginia</option>
    <option value="WA" <?php if (isset($_POST["state"]) && $_POST["state"]=="WA") echo "selected";?>>Washington</option>
    <option value="WV" <?php if (isset($_POST["state"]) && $_POST["state"]=="WV") echo "selected";?>>West Virginia</option>
    <option value="WI" <?php if (isset($_POST["state"]) && $_POST["state"]=="WI") echo "selected";?>>Wisconsin</option>
    <option value="WY" <?php if (isset($_POST["state"]) && $_POST["state"]=="WY") echo "selected";?>>Wyoming</option>
</select>               
</div>

<div id="a1"><h5>Degree.*</h5></div>
<div class="degree">
 <!--  <label for="male">Fahrenheit</label> -->
  <input type="radio" id="degree" name="degree" value="us"></input>
  <label for="male">Fahrenheit</label>
<!-- 
  <label for="female">Celsius</label> -->
  <input type="radio" id="degree" name="degree" value="si"></input>
    <label for="female">Celsius</label>
</div>
<br/>
<div class="button">
<input type="submit" name="post" value="Search"></input>
<input type="button" onclick="clear1()" value="Clear"></input>
</div>
<div class="comment1"><h5>*-Mandatory fields</h5></div>
<div class="comment2"><a href=“#”>Powered by Forecast.io</as></div>
</div>
</form>

<?php
if($_POST && $_POST['post']){
    // echo $_GET['address'],"<BR>";
    // echo $_GET['city'],"<BR>";
    // echo $_GET['state'],"<BR>";
    // echo $_GET['degree'],"<BR>";
    $a = $_POST['address'];
    $b = $_POST['city'];
    $c = $_POST['state'];
    $d = $_POST['degree'];
    $string = "{$a}{$b}{$c}";
    // echo $string,"<BR>";
    $details_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$a.",".$b.",".$c;
    // echo $details_url;
    // $xml = simplexml_load_string($details_url)  
    // var_dump($xml);
    $xml= simplexml_load_file($details_url);
   //  $result =$xml->xpath('/GeocodeResponse/result/geometry/location');
   // foreach($result as $item){
   //  echo "latitude: " .$item->lat;
   //  echo "alt: ".$item->lng;
    $lat = $xml->result[0]->geometry[0]->location[0]->lat;
    $lng = $xml->result[0]->geometry[0]->location[0]->lng;
    // echo "<BR>";
    // echo $lat;
    // echo "<BR>";
    // echo $lng;
    $APIKEY = "5d857c49c416bcf292ef352ee78ed651";
    $forecast_url="https://api.forecast.io/forecast/$APIKEY/$lat,$lng?units=$d&exclude=flags";
    echo $forecast_url;
    $content = file_get_contents($forecast_url);
    $json = json_decode($content,true);
    // echo "<BR>";
    // $formatter = new NumberFormatter('en_US', NumberFormatter::PERCENT);
    $icon=$json['currently']['icon'];
    $timezone = $json['timezone'];
    date_default_timezone_set($timezone);
    // echo $icon;
    $precipIntensity = $json['currently']['precipIntensity'];
    $precipProbability = $json['currently']['precipProbability'];
    $chanceOfRain =  $formatter->format($precipProbability);
    // echo "$chanceOfRain";
    $temperature = $json['currently']['temperature'];
    $temperature_integer = intval($temperature);
    $hum = $json['currently']['humidity'];
    $humidity = $formatter->format($hum);
    // echo $humidity;
    // echo "<BR>";
    $dewPoint = $json['currently']['dewPoint'];
    $windSpeed = $json['currently']['windSpeed'];
    $visibility = $json['currently']['visibility'];
    $vis = intval($visibility);
    $wind = intval($windSpeed);
    $dew = intval($dewPoint);
    // echo "<BR>";
    $sunset = $json['daily']['data'][0]['sunsetTime'];
    $sunrise = $json['daily']['data'][0]['sunriseTime'];
    // echo $sunset;
    // echo "<BR>";
    // echo $sunrise;
    // echo "<BR>";
    // echo date('H:i', $sunrise);
    // echo "<BR>";
    // echo date('Y-m-d H:i:s', $sunset);
    // echo  $icon;
    // echo "<BR>";
    // echo $dewPoint;
    // echo "<BR>";
    // echo intval($dewPoint); 
    // echo "<BR>";     
    //precipIntensity
    if($precipIntensity==0)
      { $Precipitation="none";}
    if($precipIntensity==0.002)
      {$Precipitation="very light";}
    if ($precipIntensity==0.017)
      {$Precipitation="Light";}
    if ($precipIntensity==0.1) 
      {$Precipitation="Moderate";}
    if($precipIntensity==0.4)
      {$Precipitation="Heavy";}
    // echo $Precipitation;
    // echo "<BR>";
    //icon value
  ?>  

<div id="table0" style="width:450px; margin:0px auto;height:400px;">
<div id="style" style = "border: 1px solid rgb(23, 22, 22)">
<table id="table1" style="width:300px;text-align: center;margin: 0px auto;">
<tr>
<td> <?php echo $icon;?></td>
</tr>
<tr>
<td> 
<?php 
  if($d=="us")
  {
    echo $temperature_integer;
    echo '°';
    echo "F";
  }
  elseif($d=="si")
  {
    echo $temperature_integer;
    echo '°';
    echo "C";
  }


?></td>
</tr>
<tr>
<td> 

<?php
if($icon=="clear-day")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/clear.png'>";}
if($icon=="clear-night")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png'>";}
if($icon=="rain")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/rain.png'>";}
if($icon=="snow")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/snow.png'>";}
if($icon=="sleet")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png'>";}
if($icon=="wind")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/wind.png'>";}
if($icon=="fog")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/fog.png'>";}
if($icon=="cloudy")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png'>";}
if($icon=="partly-cloudy-day")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png'>";}
if($icon=="partly-cloudy-night")
{echo "<img src='http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png'>";}

?>
</td>
</tr>
</table>

<table style="width:300px;margin: 0px auto;">
<tr>
<td id="td1">Precipitation:</td>
<td id="td2"><?php echo $Precipitation;?></td>
</tr>

<tr>
<td>Chance of Rain:</td>
<td><?php echo $chanceOfRain;?></td>
</tr>

<tr>
<td>Wind Speed:</td>
<td><?php echo $wind; echo "mph";?></td>
</tr>
<tr>
<td>Dew Point:</td>
<td><?php echo $dew;?></td>
</tr>
<tr>
<td>Humidity:</td>
<td><?php echo $humidity;?></td>
</tr>
<tr>
<td>Visibility:</td>
<td><?php echo $vis; echo "mi";?></td>
</tr>
<tr>
<td>Sunrise:</td>
<td>
  <?php 
  echo date('h:i A', $sunrise);
  ?>

</td>
</tr>
<tr>
<td>Sunset:</td>
<td>
<?php 
echo date('h:i A',$sunset);
?>
</td>
</tr>

</table>
</div>
</div>


<?php } ?>
</body>
</html>

<script>
function search(){

    var address=document.getElementById('address').value;
    var city=document.getElementById('city').value;
    var state=document.getElementById('state').value;//need to revise
    var degree=document.getElementById('degree').value;
    if(address==null||address=="")
    {
        alert("Please enter value for address");
        return false;
    }
   
    else if(city==null||city=="")
    {
       alert("Please enter value for city");
       return false;
    }
    else if(state==null||state=="")
    {
        alert("Please enter value for state");
        return false;
    }
    else if(degree=null||degree=="")
    {
        alert("Please enter value for degree");
        return false;
    }
    
}

function clear1(){
  document.getElementById('address').value = "";
  document.getElementById('city').value="";
  document.getElementById('state').value="noselect";
  // var table1 = document.getElementById('tabel1').value;
  document.getElementById("table0").innerHTML = "";
  document.getElementById("style").removeAttributes("style");
 
}

</script>

