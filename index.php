<?php ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Player Card</title>
<link rel="stylesheet" href="logos.css" type="text/css">
<style>
abbr{
	border:0;
	}
table{ border-collapse:collapse; table-layout:auto; }	

.card-wrapper{
	background-color:#2a2a2a;
	font-family: 'Helvetica Neue', Arial;
	overflow:hidden;
	width:640px;
	}
.card-table{
	color:#fff;
	text-transform:uppercase;
	}
.card-heading{
	color:#fff;
	overflow:hidden;
	margin:0;
	border-left: 1px solid #fff;
	}
.card-table, .card-table td, .card-table th{
	padding:0;
	}

/* general styling */
.season-stats th, .salary-stats th{ font-weight: normal; }

.season-stats{
	border-top:1px solid #fff;
	border-bottom:1px solid #fff;
	}
.season-stats td, .season-stats th{
	border-left:1px solid #fff;
	}
.season-stats thead{
	border-bottom:1px solid #fff;
	}
.season-stats{
	text-align: center;
	}
.season-stats thead{
	text-align: left;
	}
.season-stats th{
	width:200px;
	}

.card-img{ background-size: 90%; float: left; height: 162px; width: 147px; }
.player-photo{ border-left: 1px solid #fff; width:149px; }

.salary-stats{ width:100%; }
.salary-stats th{ text-align:left; }
.salary-stats, .salary-stats td, .salary-stats th{
	border-top:1px solid #fff;
	border-bottom:1px solid #fff;
	}
.salary-stats td{
	border-left:1px solid #fff;
	}
.salary-stats tr:nth-child(odd){
	background-color: #404040;
	}

.payraise{ color: green; }
.paycut{ color: red; }

.card-analysis{
    color: #fff;
    }
.card-ratings{ background-color: #aaa; }
	

/* skinning */
/*.team-name .season-stats th, .team-name .card-img{
	background-color: #91764B;
	}*/
		
.nhl-anh--170x170 {
    background-image: url("team_logos/170x170/hockey/nhl/anaheim-ducks.png"); }



</style>
</head>

<body>
<!--<img class="card-img team-logo" alt="team name" src="team-logo.gif">-->

<div class="card-wrapper team-anh">
	
    <span class="bgcolor card-img ico-bg nhl-anh--170x170"></span>
    <img class="card-img player-photo" alt="player name" src="player-photo.jpg">
	
    <h3 class="card-heading">Player Name</h3>
    <table class="card-table season-stats" summary="Player Season Stats">
        <thead><th colspan="8">Season stats</th></thead>
        <tbody class="stats-body">
            <tr class="bgcolor">
                <th scope="col">Age</th>
                <th scope="col"><abbr title="Position">Pos</abbr></th>
                <th scope="col"><abbr title="Games Played">GP</abbr></th>
                <th scope="col"><abbr title="Goals">G</abbr></th>
                <th scope="col"><abbr title="Assists">A</abbr></th>
                <th scope="col"><abbr title="Points">PTS</abbr></th>
                <th scope="col"><abbr title="Penalty Minutes">PM</abbr></th>
                <th scope="col"><abbr title="Plus Minus">+/-</abbr></th>
            </tr>
            <tr class="bgcolor">
                <td>27</td>
                <td>D</td>
                <td>82</td>
                <td>4</td>
                <td>24</td>
                <td>28</td>
                <td>50</td>
                <td>-22</td>
            </tr>
        </tbody>
    </table>
    
    <table class="card-table salary-stats" summary="Player Salary Summary" style="clear:both;">
        <tr>
            <th scope="row">Contract Length</th>
            <td>2 Years</td>
        </tr>
        <tr>
            <th scope="row">Type</th>
            <td>Contract Extension</td>
        </tr>
        <tr>
            <th scope="row">Total</th>
            <td>$5 Million</td>
        </tr>
        <tr>
            <th scope="row">Salary Cap Hit</th>
            <td>$2.5 Million</td>
        </tr>
        <tr>
            <th scope="row">Previous Salary</th>
            <td>$2 Million</td>
        </tr>
        <tr>
            <th scope="row">Raise / Paycut</th>
            <td><span class="payraise">+25%</span> &nbsp; <span class="paycut">-15%</span></td>
        </tr>
    </table>
    
    <div class="card-analysis">
    	<h4>Instant Analysis</h4>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur fringilla velit eget varius. Aliquam vel ornare massa. Nullam sem leo posuere sit amet arcu at, adipiscing fringilla nibh. Duis convallis dolor sed consequat ornare. Duis a diam ultrices, aliquet velit elementum, ornare elit. Aliquam ut convallis eros, quis vehicula orci.</p>
    </div>
    
    <div class="card-ratings">Ratings here</div>
                

</div>
















</body>
</html>
