const LOWEST = 0;
const MAX_HOUR = 24;
const MAX_MINUTE = 60;
const MAX_SECOND = 60;

var hour;
var minute;
var second;

var go = false;

timer = setInterval(function () {
    if (go == true) {
        second = second - 1;
        second = ('0' + second).slice(-2);
        if (second == -1) {
            second = MAX_SECOND;
            second = ('0' + second).slice(-2);
            minute = minute - 1;
            minute = ('0' + minute).slice(-2);
            if (minute == -1) {
                minute = MAX_MINUTE;
                minute = ('0' + minute).slice(-2);
                hour = hour - 1;
                hour = ('0' + hour).slice(-2);
            }
        }

        if (hour == 0 && minute == 0 && second == 0) {
            go = false;
            let ding = new Audio('storage/audio/siren.mp3');
	        ding.play();
        }

        document.getElementById('timer').innerHTML = hour + ':' + minute + ':' + second;
    }
}, 1000);

// Buttons
function set(timer) {
    hour = ('0' + document.getElementById('hour').value).slice(-2);
    minute = ('0' + document.getElementById('minute').value).slice(-2);
    second = ('0' + document.getElementById('second').value).slice(-2);

    timer.innerHTML = hour + ':' + minute + ':' + second;
}

function start() {
    go = true;
}

function pause() {
    go = false;
}

function reset() {
    go = false;
    hour = ('0' + 0).slice(-2);
    minute = ('0' + 0).slice(-2);
    second = ('0' + 0).slice(-2);
    document.getElementById('timer').innerHTML = hour + ':' + minute + ':' + second;
}

// Hour
function decreaseHour(x, h) {
    if (h.value < MAX_HOUR) {
        document.getElementById('increaseHour').disabled = false;
    }

    if (h.value == LOWEST) {
        x.disabled = true;
    } else {
        h.value = parseInt(h.value) - 1;

    }
}

function increaseHour(x, h) {
    if (h.value > LOWEST) {
        document.getElementById('decreaseHour').disabled = false;
    }

    if (h.value == MAX_HOUR) {
        x.disabled = true;
    } else {
        h.value = parseInt(h.value) + 1;
    }
}

// Minute
function decreaseMinute(x, m) {
    if (m.value < MAX_MINUTE) {
        document.getElementById('increaseMinute').disabled = false;
    }

    if (m.value == LOWEST) {
        x.disabled = true;
    } else {
        m.value = parseInt(m.value) - 1;
    }
}

function increaseMinute(x, m) {
    if (m.value > LOWEST) {
        document.getElementById('decreaseMinute').disabled = false;
    }

    if (m.value == MAX_MINUTE) {
        x.disabled = true;
    } else {
        m.value = parseInt(m.value) + 1;
    }
}

// Second
function decreaseSecond(x, s) {
    if (s.value < MAX_SECOND) {
        document.getElementById('increaseSecond').disabled = false;
    }

    if (s.value == LOWEST) {
        x.disabled = true;
    } else {
        s.value = parseInt(s.value) - 1;
    }
}

function increaseSecond(x, s) {
    if (s.value > LOWEST) {
        document.getElementById('decreaseSecond').disabled = false;
    }

    if (s.value == MAX_SECOND) {
        x.disabled = true;
    } else {
        s.value = parseInt(s.value) + 1;
    }
}