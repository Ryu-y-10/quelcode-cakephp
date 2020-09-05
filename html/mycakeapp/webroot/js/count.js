var endTime = new Date(j).getTime();
var now = new Date(i).getTime();
var timer = setInterval(function () {



    var remainingTime = endTime - now;



    var days = Math.floor(remainingTime / (60 * 60 * 24 * 1000));
    var hours = Math.floor((remainingTime % (60 * 60 * 24 * 1000)) / (60 * 60 * 1000));
    var minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
    var seconds = Math.floor((remainingTime % (60 * 1000)) / (1000));

    if (remainingTime <= 0) {
        clearInterval(timer);
        document.getElementById('countDownTimer').innerHTML =
            "オークション終了！";
    } else {
        document.getElementById('countDownTimer').innerHTML =
            "オークション終了まであと" + days + "日" + hours + "時間" + minutes + "分" + seconds + "秒です！";
        now = now + 1000;


    }

}, 1000);

