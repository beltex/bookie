<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD START -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MUST GET REAL USERNAME -->
    <title>Bookie // <?php echo $user_profile['name']; ?></title>

    <!-- Bootstrap core CSS - DO NOT TOUCH THIS -->
    <link href="<?php echo base_url() ?>dist/css/bootstrap.css" rel="stylesheet">
    
	<!-- Custom styles for Bookie -->
    <link href="<?php echo base_url() ?>css/bookie.css" rel="stylesheet">

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>

var stringlist =  <?php echo $user_friends?> //[{"name":"Tee Cee","id":"28104687"},{"name":"Ashwin Balamohan","id":"28107561"},{"name":"Herman Singh Badwal","id":"28133381"},{"name":"Hesham Monem","id":"48915394"},{"name":"Nicholas Hawkes","id":"72609591"},{"name":"Kent Chung","id":"81009201"},{"name":"Yuri Vernikovsky","id":"120808984"},{"name":"Beata Razeva","id":"501386433"},{"name":"Dmitry Drinfeld","id":"501489672"},{"name":"Drew Archibald","id":"501604428"},{"name":"Victoria Ck","id":"501809196"},{"name":"Vance Ekce","id":"502269969"},{"name":"Ashwin Dey","id":"502334693"},{"name":"Dasha M.","id":"502450907"},{"name":"Irina Gourouchkine","id":"502529780"},{"name":"Anastasia Mass","id":"502584679"},{"name":"Kay Pluto","id":"502595513"},{"name":"Belarmino Fern\u00e1ndez","id":"502624081"},{"name":"Hamaad Memon","id":"502723069"},{"name":"Matthew Walczyk","id":"502955479"},{"name":"Marina Zarutska","id":"503038758"},{"name":"Rob Staalduinen","id":"503944578"},{"name":"Ishana Debba","id":"504238798"},{"name":"Victor Fedianine","id":"504337214"},{"name":"Satpal Sohal","id":"505390897"},{"name":"Shaun N. Maharaj","id":"506257177"},{"name":"Teepan Nanthakumar","id":"506362266"},{"name":"Elena Surikova","id":"506584584"},{"name":"Bennett Cole","id":"507135504"},{"name":"Anirudh Agnihotri","id":"507257690"},{"name":"Sabina Baghirova","id":"507330731"},{"name":"Randall Ho","id":"507790360"},{"name":"Brett Anderson","id":"507911082"},{"name":"Vivek Chaudhari","id":"508101979"},{"name":"Randy Ding","id":"508122054"},{"name":"Taha Rizvi","id":"508302184"},{"name":"Dennis Liu","id":"508387910"},{"name":"Austin Cisco","id":"508526034"},{"name":"lena grigoryeva","id":"508660025"},{"name":"Kalyan Oduri","id":"508974496"},{"name":"Tim Schonberger","id":"509848122"},{"name":"Alex Smith","id":"509945041"},{"name":"Jeremy Lee","id":"509964972"},{"name":"Zohair Masood","id":"510147954"},{"name":"Katya Bar","id":"510192630"},{"name":"Kahtaf Alam","id":"510198259"},{"name":"Arina Bogdanova","id":"510453294"},{"name":"Victoria Doronina","id":"510519343"},{"name":"Khan Obyoy Azad","id":"511708471"},{"name":"Victor Cho","id":"512096512"},{"name":"Tommy Tran","id":"512740400"},{"name":"David Chan","id":"512843076"},{"name":"Anthony Jordan Navarro","id":"513132323"},{"name":"Rishabh 'Rish' Saksena","id":"513417015"},{"name":"Radu Apostol","id":"515998785"},{"name":"Justin Desouza","id":"516163347"},{"name":"Andy Yi Cui","id":"516585872"},{"name":"Sukrit Handa","id":"516991508"},{"name":"Adil Farrukh","id":"517117974"},{"name":"Yevgeniy Ivanchenko","id":"517253282"},{"name":"David Gallant","id":"519200187"},{"name":"Danny Vas","id":"519913111"},{"name":"Md Zahed Hossain","id":"526141818"},{"name":"Rahul Krishnan","id":"531100706"},{"name":"Faizan Rashid","id":"531235136"},{"name":"Illya Sheyko","id":"548675323"},{"name":"Tony Mugen Shen","id":"550207524"},{"name":"Uliana Sy","id":"561630146"},{"name":"Dima Killa","id":"561860088"},{"name":"Yuli Juli","id":"564516540"},{"name":"Jorge Pinilla","id":"565124206"},{"name":"Haroon Awan","id":"566595290"},{"name":"Gaurav Nayak","id":"572813391"},{"name":"Yuan Xue","id":"575646827"},{"name":"Aditya Murray","id":"576185146"},{"name":"Mina Magdy","id":"587441979"},{"name":"Julian Glenesk","id":"600771371"},{"name":"Jane Yegorova","id":"614774301"},{"name":"Al-Hussien Khayoon","id":"615035494"},{"name":"Uladzislau Hardziyevich","id":"623935537"},{"name":"Harris Rasheed","id":"626135160"},{"name":"Nathalie Dahoah Halevi","id":"639781759"},{"name":"Dachuan Huang","id":"646486247"},{"name":"Zaeem Anwar","id":"650225495"},{"name":"Asim Delavenne","id":"655990310"},{"name":"Osama M Askoura","id":"656045134"},{"name":"Erik Grandy","id":"657995711"},{"name":"Matt Triff","id":"659132442"},{"name":"Matt Renaud","id":"660215413"},{"name":"Quinn J Neumiiller","id":"672850703"},{"name":"Omar Raza","id":"679285281"},{"name":"Anna Z","id":"695305253"},{"name":"Aaron Luborsky","id":"698617562"},{"name":"Milandeep Singh Shergill","id":"700737649"},{"name":"Khady Lo Seck","id":"704391753"},{"name":"Mehsum Mansoor Naqvi","id":"713140113"},{"name":"Kevin Yavno","id":"720447145"},{"name":"Jaideep Bajwa","id":"720567789"},{"name":"Adil Ali","id":"727025704"},{"name":"Daanish Maan","id":"730725654"},{"name":"Rahul Singh Majithia","id":"734611674"},{"name":"Anurag Chaudhury","id":"755669027"},{"name":"Alex Naumov","id":"759643242"},{"name":"Winfield Choi","id":"768808064"},{"name":"Maninder Gill","id":"772244872"},{"name":"Usman Rafique","id":"777530104"},{"name":"Fahad Siddiqui","id":"798990556"},{"name":"Anna Puzyrkova","id":"838535386"},{"name":"Natasha Russia","id":"842464889"},{"name":"James Brereton","id":"843595037"},{"name":"Matt Kelly","id":"871330721"},{"name":"Alex Velazquez","id":"903915332"},{"name":"Andy Sava","id":"1051749072"},{"name":"Valentina Grigorenko","id":"1069570839"},{"name":"Spencer Hu","id":"1086976501"},{"name":"Yana RX","id":"1112492046"},{"name":"Leo Christy","id":"1119376293"},{"name":"Sumith Saleh","id":"1177755094"},{"name":"Ralston Jovel Almeida","id":"1200788409"},{"name":"Nik Shakeri","id":"1202297338"},{"name":"Jack Li","id":"1225661731"},{"name":"Minh Ho\u00e0ng","id":"1229451920"},{"name":"Jatin Behl","id":"1261549809"},{"name":"Mingliang Ma","id":"1330239398"},{"name":"Itzik J-Kob","id":"1407858470"},{"name":"Zain Adil","id":"1419033711"},{"name":"Irina Kostyukova","id":"1421767091"},{"name":"Umair Iqbal","id":"1471992630"},{"name":"Parnit Pooni","id":"1483352056"},{"name":"Niraj Singh","id":"1495123814"},{"name":"Valera Chumak","id":"1498274262"},{"name":"Manjeet Kaur","id":"1502737643"},{"name":"Steven Sun","id":"1620990297"},{"name":"Jake Alsemgeest","id":"1643430058"},{"name":"Bert Liu","id":"1646040465"},{"name":"Kailash Subedi","id":"1650480050"},{"name":"Vadim Odessa","id":"1651620207"},{"name":"Artem V","id":"1652040148"},{"name":"Maynil Patel","id":"1654140033"},{"name":"Nidale Hajjar","id":"1666200038"},{"name":"ChengXuan Yang","id":"1669380547"},{"name":"Jakub \u0160eliga","id":"1716951554"},{"name":"Abhishek Sharma","id":"100000094714950"},{"name":"Katia Alexandrova","id":"100000145493088"},{"name":"Harpreet Basraon","id":"100000293053815"},{"name":"Anna Troshchynsky","id":"100000548248135"},{"name":"Michel G Kirychek","id":"100000550392243"},{"name":"Dasha Daboo","id":"100000757716501"},{"name":"Dmitriy Kadunov","id":"100000949805203"},{"name":"Ali Mehedi","id":"100001094517556"},{"name":"Sumbul Alvi","id":"100001101030700"},{"name":"Omar Moharrem","id":"100001181904035"},{"name":"\u0418\u0432\u0430\u043d \u0410\u043d\u0442\u043e\u043d\u0438\u0448\u0438\u043d","id":"100001188118425"},{"name":"Shuayb Khan","id":"100001259254384"},{"name":"Thao Nguyen","id":"100001476464267"},{"name":"Biniam Admikew","id":"100001477207013"},{"name":"Maisha Fariha","id":"100001625105903"},{"name":"Sasha Gudny","id":"100003068485551"},{"name":"Fahham Khan","id":"100003242895117"},{"name":"Romuald Vilchinsky","id":"100003655116021"},{"name":"Reham Badr","id":"100003760190425"},{"name":"Anastasia Sh","id":"100004869273633"},{"name":"Olena Shcherbak","id":"100004992184472"}];

var people = [];

function tokenize_json(JSONObject)
{

var jsonlen = JSONObject.length;
for(var i = 0; i < jsonlen; i++)
{
     people.push({label: ""+JSONObject[i].name, id: ""+JSONObject[i].id});
}
}

tokenize_json(stringlist); 

$(document).ready(function() {
    $( "#topics5" ).autocomplete({
        minLength: 0,
        source: people,
        focus: function( event, ui ) {
            $( "#topics5" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#topics5" ).val( ui.item.label );
            $("#clientID").val(ui.item.id);
            return false;
    }
})
});

</script>


  </head>
  <!-- HEAD END -->

  <!-- BODY START -->
  <body>

    <!-- HEADER START (navbar) - this will be copied for all pages -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <!-- MUST GET REAL USERNAME -->
        <!-- Always links to home_view.php -->
        <a class="navbar-brand" href="../../bookie"><?php echo $user_profile['name']; ?></a>

        <!-- LOGOUT START -->
        <form action="login_view.php">
        <div class="pull-right">
            <button type="submit" class="btn btn-sm logout-btn">
                <span class="glyphicon glyphicon-log-out"></span>
            </button>
        </div>
        </form>
        <!-- LOGOUT END -->
     </div>
    </div>
    <!-- HEADER END -->

    <!-- CONTAINER START - main body -->
    <div class="container">
    <form action = "../index.php/addNewExpense/addNewRecord" method="get" class="form-signin">	
      		
		<p class="lead"></p>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">a</span>Event<span style="visibility:hidden">@</span></span>
  			<input type="text" class="form-control " placeholder="What's this expense?" name="event">
		</div>
				<br/>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">asd</span>$<span style="visibility:hidden">asd</span></span>
  			<input type="text" class="form-control " placeholder="Amount" name="amount">
		</div>
		<br/>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">as</span>Who<span style="visibility:hidden">.s</span></span>
  			<input id="topics5" type="text" class="form-control " placeholder="Who owe's you?" name="who">
  			<input type="hidden" id="clientId" value=""/>
		</div>
		<br/>
      	<input type="hidden" id = "clientID" name="clientID" value='45'/>
        <button class="btn btn-lg btn-warning btn-block done-btn" type="submit">Done</button>
      </form>
      
    </div>
    
    <!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
