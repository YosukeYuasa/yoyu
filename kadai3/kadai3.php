<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour =  (int)date("H");

    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }

        return $result;
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>オーストラリア旅行予約フォーム</title>
        <link rel="stylesheet" href="kadai3.css">
    </head>
    <body>
        <header>
            オーストラリア旅行
            <form action="kadai3.php" method="POST">
                <label>名前: <input type="text" name="target_name"></label>
                <input type="submit" value="送信">
            </form>
            <p>今は<?php print $now_hour; ?>時です！</p>
            <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん！ </p>
        </header>
        <div class="clearfix">
        <!--<div> -->
            <nav id="menu">
                <ul>
                    <li>代表的な観光地</li>
                    <li>料金案内</li>
                    <li>予約フォーム</li>
                </ul>
            </nav>
            <div id="main">
                <h1>Melbourne</h1>
                <figure>
                    <img src="flindersst-56a37ab35f9b58b7d0d228ed.jpg" alt="melbourneの画像" width="600" height="450">
                </figure>
                <p>Melbourne is the state capital of Victoria and the second-most populous city in Australia and Oceania.</p>
                <h1>Brisbane</h1>
                <figure>
                    <img src="brisbane-1222078_1920.jpg" alt="brisbaneの画像" width="600" height="450">
                </figure>
                <p>Brisbane is the capital of and most populous city in the Australian state of Queensland.</p>
                <h1>Tasmania</h1>
                <figure>
                    <img src="Tasmania-4-051.jpg" alt="tasmaniaの画像" width="600" height="450">
                </figure>
                <p>Tasmania is an island state of Australia. It is located 240 km (150 mi) to the south of the Australian mainland, separated by the Bass Strait. </p>
            </div>
            
            <div id="table">
                <table border="2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>City</th>
                            <th>Distance from Japan</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Melbourne</td>
                            <td>8,177 km</td>
                            <td>150,000yen</td>
                        </tr>
                        
                        <tr>
                            <th>2</th>
                            <td>Brisbane</td>
                            <td>7,158 km</td>
                            <td>100,000yen</td>
                        </tr>
                        
                        <tr>
                            <th>3</th>
                            <td>Tasmania</td>
                            <td>8,767 km</td>
                            <td>200,000yen</td>
                        </tr>
                    </tbody>
                </table>
                    
            
            </div>
            <div id="reservation">
                <form action="post.php" method="get">>
                    <label for="name">Name:</label>
                    <input type="text" id="name">
                    <br>
                    
                    <label for="email">Mail:</label>
                    <input type="email" id="email">
                    <br>
                    
                    <label for="number">Age:</lavel>
                    <input type="number" id="number">
                    <br>
                    
                    <label for="name">Plan:</label>
                    <select name="pull-down">
                        <option value="brisbane">Melbourne</option>
                        <option value="melbourne">Brisbane</option>
                        <option value="tasmania">Tasmania</option>
                    </select>
                    
                    <input type="submit" value="REGISTER">
                </form>
            </div>
        </div>  
        <footer>
            <div id="footer_navi">
                <ul>
                    <li><a href="kichen.html">Home</a></li>
                    <li><a href="minimum.html">Access</a></li>
                    <li><a href="test2.html">Inquiry</a></li>
                </ul>
            </div>
            <small>&copy; 2018 Yushigi Hong </small>
        </footer>
    </body>
    
</html>